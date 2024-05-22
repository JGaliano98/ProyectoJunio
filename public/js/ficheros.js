window.addEventListener("load", function() {

    let fichero = document.getElementById("csvFileInput");
    let fuenteRecursos = document.getElementById("fuenteRecursos");
    let seleccionadosRecursos = document.getElementById("seleccionadosRecursos");
    let fuenteGrupos = document.getElementById("fuenteGrupos");
    let seleccionadosGrupos = document.getElementById("seleccionadosGrupos");

    let pasarIzqRecursos = document.getElementById("pasarIzqRecursos");
    let pasarIzqTodosRecursos = document.getElementById("pasarIzqTodosRecursos");
    let pasarDerRecursos = document.getElementById("pasarDerRecursos");
    let pasarDerTodosRecursos = document.getElementById("pasarDerTodosRecursos");

    let pasarIzqGrupos = document.getElementById("pasarIzqGrupos");
    let pasarIzqTodosGrupos = document.getElementById("pasarIzqTodosGrupos");
    let pasarDerGrupos = document.getElementById("pasarDerGrupos");
    let pasarDerTodosGrupos = document.getElementById("pasarDerTodosGrupos");

    let checkActEdTabla = document.getElementById("actEdTabla");
    let tabla = document.getElementById("modalTable");
    let guardarBtn = document.getElementById("modalGuardarBtn");

    if (fuenteRecursos && seleccionadosRecursos && fuenteGrupos && seleccionadosGrupos) {
        console.log("Elementos <select> encontrados.");
        console.log("Elementos del DOM listos.");

        // URL de la API de recursos
        let urlAPIRecursos = "/API/recursos";
        // URL de la API de grupos
        let urlAPIGrupos = "/API/grupos";

        // Cargar datos de la API de recursos
        fetch(urlAPIRecursos)
            .then(response => response.json())
            .then(data => {
                let datosMostrar = data.map(recurso => [recurso.id, recurso.descripcion]);
                cargarDatosSelect(datosMostrar, fuenteRecursos);
            })
            .catch(error => {
                console.error("Error al cargar los datos de la API de recursos:", error);
            });

        // Cargar datos de la API de grupos
        fetch(urlAPIGrupos)
            .then(response => response.json())
            .then(data => {
                let datosMostrar = data.map(grupo => [grupo.nivelEducativo + " - " + grupo.nombre, grupo.id]);
                cargarDatosSelect(datosMostrar, fuenteGrupos);
            })
            .catch(error => {
                console.error("Error al cargar los datos de la API de grupos:", error);
            });

        // Agregar eventos a los botones de intercambio de elementos
        pasarIzqRecursos.onclick = function() {
            pasarSeleccionadosSelect(seleccionadosRecursos, fuenteRecursos);
        }
        pasarIzqTodosRecursos.onclick = function() {
            pasarTodosSelect(seleccionadosRecursos, fuenteRecursos);
        }
        pasarDerRecursos.onclick = function() {
            pasarSeleccionadosSelect(fuenteRecursos, seleccionadosRecursos);
        }
        pasarDerTodosRecursos.onclick = function() {
            pasarTodosSelect(fuenteRecursos, seleccionadosRecursos);
        }

        pasarIzqGrupos.onclick = function() {
            pasarSeleccionadosSelect(seleccionadosGrupos, fuenteGrupos);
        }
        pasarIzqTodosGrupos.onclick = function() {
            pasarTodosSelect(seleccionadosGrupos, fuenteGrupos);
        }
        pasarDerGrupos.onclick = function() {
            pasarSeleccionadosSelect(fuenteGrupos, seleccionadosGrupos);
        }
        pasarDerTodosGrupos.onclick = function() {
            pasarTodosSelect(fuenteGrupos, seleccionadosGrupos);
        }
    } else {
        console.log("Elementos <select> no encontrados.");
    }








    function pulsadoBorrar(fila) {
        return function() {
            let respuesta = confirm("¿Estás seguro que quieres borrar?");
            if (respuesta) {
                fila.parentElement.removeChild(fila);
            }
        }
    }

    function pulsadoEditar(fila) {
        return function() {
            fila.editar();
        }
    }

    function pulsadoGuardar(fila) {
        return function() {
            fila.guardar();
        }
    }

    function pulsadoCancelar(fila) {
        return function() {
            fila.cancelar();
        }
    }

    guardarBtn.addEventListener("click", function() {
        let entidad = fichero.dataset.entidad;
        
    
        // Verificar si el modo de edición está activado
        if (checkActEdTabla.checked) {
            // Mostrar mensaje de alerta
            alert("Tienes que quitar el modo edición para poder guardar.");
        } else {
            // Obtener los datos de la tabla
            let datos = tabla.getData();
    
            // Obtener el patrón del dataset del input file
            let patron = new RegExp(fichero.dataset.patron);
    
            // Validar los datos según el patrón
            let validacion = validarDatos(datos, patron);
            if (!validacion.valido) {
                alert(`Algunos datos no cumplen con el patrón requerido. Error en la línea: ${validacion.linea + 1}`);
                return;
            }
    
            // Convertir el nick a minúsculas
            datos.forEach(fila => {
                if (fila[1]) { // Asumiendo que el nick está en la segunda columna
                    fila[1] = fila[1].toLowerCase();
                }
            });
    
            console.log(tabla.getData());
    
            // Llamar a la función para subir los datos
            
            if(entidad === 'User'){
            
                subirDatos(datos,'users');
            }
            if(entidad === 'Alumno'){
            
                subirDatos(datos,'alumnos');
            }
            if(entidad === 'Edificio'){

                
                subirDatos(datos,'edificios');
            }
        }
    });
    

    checkActEdTabla.onchange = function() {
        if (this.checked) {
            tabla.activarEdicion(pulsadoBorrar, pulsadoEditar, pulsadoGuardar, pulsadoCancelar);
        } else {
            tabla.desactivarEdicion();
        }
    }

    // Manejar el evento onchange del input file
    fichero.onchange = function() {
        let ficheroSubido = this.files[0];
        let patron = new RegExp(this.dataset.patron);
        let campos = parseInt(this.dataset.campo);

        if ((/\.csv$/i).test(ficheroSubido.name)) {
            let lector = new FileReader();
            lector.readAsText(ficheroSubido);
            lector.onload = function() {
                let informacion = obtenerInformacion(this.result, patron, campos);
                tabla.setData(informacion);
            };
        } else {
            alert("El fichero subido no tiene el formato csv");
        }
    };

    function subirDatos(datos, ruta) {
        var rutaAPI = 'API/' + ruta;
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

            var tBody = document.getElementById("modalTable").tBodies[0];
            var filas = tBody.rows;
            var nFilas = filas.length;

            for (let i = nFilas - 1; i >= 0; i--) {
                if (data.errors.indexOf(i) == -1) {
                    tBody.removeChild(filas[i]);
                }
            }

            if (data.errors.length === 0) {
                alert('Datos subidos con éxito');
                setTimeout(function() {
                    location.reload();
                }, 500); // Recarga la página después de 0.5 segundos
            } else {
                let errorIndices = data.errors.join(', ');
                alert(`Los siguientes usuarios no se han podido añadir: ${errorIndices}`);
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('Hubo un error al subir los datos.');
        });
    }

    function validarDatos(datos, patron) {
        for (let i = 0; i < datos.length; i++) {
            let fila = datos[i].join(';');
            if (!patron.test(fila)) {
                return { valido: false, linea: i };
            }
        }
        return { valido: true, linea: -1 };
    }



});