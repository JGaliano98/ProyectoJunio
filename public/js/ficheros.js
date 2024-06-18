// Espera a que la ventana se haya cargado completamente antes de ejecutar el código
window.addEventListener("load", function() {
    // Obtención de los elementos del DOM necesarios
    const fuenteRecursos = document.getElementById("fuenteRecursos");
    const seleccionadosRecursos = document.getElementById("seleccionadosRecursos");
    const fuenteGrupos = document.getElementById("fuenteGrupos");
    const seleccionadosGrupos = document.getElementById("seleccionadosGrupos");

    const pasarIzqRecursos = document.getElementById("pasarIzqRecursos");
    const pasarIzqTodosRecursos = document.getElementById("pasarIzqTodosRecursos");
    const pasarDerRecursos = document.getElementById("pasarDerRecursos");
    const pasarDerTodosRecursos = document.getElementById("pasarDerTodosRecursos");

    const pasarIzqGrupos = document.getElementById("pasarIzqGrupos");
    const pasarIzqTodosGrupos = document.getElementById("pasarIzqTodosGrupos");
    const pasarDerGrupos = document.getElementById("pasarDerGrupos");
    const pasarDerTodosGrupos = document.getElementById("pasarDerTodosGrupos");

    const checkActEdTabla = document.getElementById("actEdTabla");
    const tabla = document.getElementById("modalTable");
    const guardarBtn = document.getElementById("modalGuardarBtn");
    const fichero = document.getElementById("csvFileInput");

    // Verifica que los elementos select se encuentren en el DOM
    if (fuenteRecursos && seleccionadosRecursos && fuenteGrupos && seleccionadosGrupos) {
        console.log("Elementos <select> encontrados.");
        console.log("Elementos del DOM listos.");

        const urlAPIRecursos = "/API/recursos";
        const urlAPIGrupos = "/API/grupos";

        // Carga los recursos desde la API y los agrega al select correspondiente
        fetch(urlAPIRecursos)
            .then(response => response.json())
            .then(data => {
                console.log("Datos de recursos recibidos de la API:", data);
                const datosMostrar = data.map(recurso => [recurso.id, recurso.nombre]);
                cargarDatosSelect(datosMostrar, fuenteRecursos);
            })
            .catch(error => {
                console.error("Error al cargar los datos de la API de recursos:", error);
            });

        // Carga los grupos desde la API y los agrega al select correspondiente
        fetch(urlAPIGrupos)
            .then(response => response.json())
            .then(data => {
                console.log("Datos de grupos recibidos de la API:", data);
                const datosMostrar = data.map(grupo => [grupo.id, grupo.nivelEducativo + " - " + grupo.nombre]);
                cargarDatosSelect(datosMostrar, fuenteGrupos);
            })
            .catch(error => {
                console.error("Error al cargar los datos de la API de grupos:", error);
            });

        // Asigna funciones de clic a los botones para mover recursos entre los selects
        if (pasarIzqRecursos) {
            pasarIzqRecursos.onclick = function() {
                pasarSeleccionadosSelect(seleccionadosRecursos, fuenteRecursos);
            };
        }
        if (pasarIzqTodosRecursos) {
            pasarIzqTodosRecursos.onclick = function() {
                pasarTodosSelect(seleccionadosRecursos, fuenteRecursos);
            };
        }
        if (pasarDerRecursos) {
            pasarDerRecursos.onclick = function() {
                pasarSeleccionadosSelect(fuenteRecursos, seleccionadosRecursos);
            };
        }
        if (pasarDerTodosRecursos) {
            pasarDerTodosRecursos.onclick = function() {
                pasarTodosSelect(fuenteRecursos, seleccionadosRecursos);
            };
        }

        // Asigna funciones de clic a los botones para mover grupos entre los selects
        if (pasarIzqGrupos) {
            pasarIzqGrupos.onclick = function() {
                pasarSeleccionadosSelect(seleccionadosGrupos, fuenteGrupos);
            };
        }
        if (pasarIzqTodosGrupos) {
            pasarIzqTodosGrupos.onclick = function() {
                pasarTodosSelect(seleccionadosGrupos, fuenteGrupos);
            };
        }
        if (pasarDerGrupos) {
            pasarDerGrupos.onclick = function() {
                pasarSeleccionadosSelect(fuenteGrupos, seleccionadosGrupos);
            };
        }
        if (pasarDerTodosGrupos) {
            pasarDerTodosGrupos.onclick = function() {
                pasarTodosSelect(fuenteGrupos, seleccionadosGrupos);
            };
        }
    } else {
        console.log("Elementos <select> no encontrados.");
    }

    // Funciones de clic para los botones de cancelar, borrar, editar y guardar en la tabla
    function pulsadoCancelar(fila) {
        return function() {
            fila.cancelar();
        };
    }

    function pulsadoBorrar(fila) {
        return function() {
            const respuesta = confirm("¿Estás seguro que quieres borrar?");
            if (respuesta) {
                fila.parentElement.removeChild(fila);
            }
        };
    }

    function pulsadoEditar(fila) {
        return function() {
            fila.editar();
        };
    }

    function pulsadoGuardar(fila) {
        return function() {
            fila.guardar();
        };
    }

    // Activa o desactiva la edición de la tabla según el estado del checkbox
    if (checkActEdTabla) {
        checkActEdTabla.onchange = function() {
            if (this.checked) {
                tabla.activarEdicion(pulsadoBorrar, pulsadoEditar, pulsadoGuardar, pulsadoCancelar);
            } else {
                tabla.desactivarEdicion();
            }
        };
    }

    // Maneja la carga de archivos CSV
    if (fichero) {
        fichero.onchange = function() {
            const ficheroSubido = this.files[0];
            const patron = new RegExp(this.dataset.patron);
            const campos = parseInt(this.dataset.campo);

            if ((/\.csv$/i).test(ficheroSubido.name)) {
                const lector = new FileReader();
                lector.readAsText(ficheroSubido);
                lector.onload = function() {
                    const informacion = obtenerInformacion(this.result, patron, campos);
                    tabla.setData(informacion);
                };
            } else {
                alert("El fichero subido no tiene el formato csv");
            }
        };
    }

    // Guarda los datos de la tabla en el servidor
    if (guardarBtn) {
        guardarBtn.addEventListener("click", function() {
            const entidad = fichero.dataset.entidad;

            if (checkActEdTabla && checkActEdTabla.checked) {
                alert("Tienes que quitar el modo edición para poder guardar.");
            } else {
                const datos = tabla.getData();
                const patron = new RegExp(fichero.dataset.patron);

                const validacion = validarDatos(datos, patron);
                if (!validacion.valido) {
                    alert(`Algunos datos no cumplen con el patrón requerido. Error en la línea: ${validacion.linea + 1}`);
                    return;
                }

                datos.forEach(fila => {
                    if (fila[1]) {
                        fila[1] = fila[1].toLowerCase();
                    }
                });

                console.log(tabla.getData());

                if (entidad === 'User') {
                    subirDatos(datos, 'users');
                }
                if (entidad === 'Alumno') {
                    subirDatos(datos, 'alumnos');
                }
                if (entidad === 'Edificio') {
                    subirDatos(datos, 'edificios');
                }
            }
        });
    }

    // Sube los datos a la API correspondiente
    function subirDatos(datos, ruta) {
        const rutaAPI = 'API/' + ruta;
        fetch('/' + rutaAPI, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos)
        })
        .then(response => response.json())
        .then(data => {
            console.log('Éxito:', data);

            const tBody = document.getElementById("modalTable").tBodies[0];
            const filas = tBody.rows;
            const nFilas = filas.length;

            for (let i = nFilas - 1; i >= 0; i--) {
                if (data.errors.indexOf(i) == -1) {
                    tBody.removeChild(filas[i]);
                }
            }

            if (data.errors.length === 0) {
                alert('Datos subidos con éxito');
                setTimeout(function() {
                    location.reload();
                }, 500);
            } else {
                const errorIndices = data.errors.join(', ');
                alert(`Los siguientes usuarios no se han podido añadir: ${errorIndices}`);
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('Hubo un error al subir los datos.');
        });
    }

    // Carga los datos en el elemento select proporcionado
    function cargarDatosSelect(datos, selectElement) {
        datos.forEach(dato => {
            const option = document.createElement("option");
            option.value = dato[0];
            option.text = dato[1];
            selectElement.add(option);
        });
    }

    // Mueve las opciones seleccionadas de un select a otro
    function pasarSeleccionadosSelect(origen, destino) {
        const seleccionados = Array.from(origen.selectedOptions);
        seleccionados.forEach(option => {
            destino.add(option);
        });
    }

    // Mueve todas las opciones de un select a otro
    function pasarTodosSelect(origen, destino) {
        const todos = Array.from(origen.options);
        todos.forEach(option => {
            destino.add(option);
        });
    }

    // Valida los datos según el patrón proporcionado
    function validarDatos(datos, patron) {
        for (let i = 0; i < datos.length; i++) {
            const fila = datos[i].join(';');
            if (!patron.test(fila)) {
                return { valido: false, linea: i };
            }
        }
        return { valido: true, linea: -1 };
    }
});
