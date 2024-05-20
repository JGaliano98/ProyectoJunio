window.addEventListener("load", function() {
    let fichero = document.getElementById("csvFileInput");
    let fuente = document.getElementById("fuente");
    let seleccionados = document.getElementById("seleccionados");
    let pasarIzq = document.getElementById("pasarIzq");
    let pasarIzqTodos = document.getElementById("pasarIzqTodos");
    let pasarDer = document.getElementById("pasarDer");
    let pasarDerTodos = document.getElementById("pasarDerTodos");
    let checkActEdTabla = document.getElementById("actEdTabla");
    let tabla = document.getElementById("modalTable");
    let guardarBtn = document.getElementById("modalGuardarBtn");

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
                }, 2000); // Recarga la página después de 2 segundos
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

    let datos = [
        ["cañ", "Cañon de Proyección"],
        ["portW", "Portatil Windows"],
        ["portL", "Portatil Linux"],
        ["internet", "Conexión a Internet"],
        ["pantT", "Pantalla Táctil"]
    ];

    let datos2 = [
        ["portL", "Portatil Linux"],
        ["internet", "Conexión a Internet"]
    ];

    let datosMostrar = [];

    for (let i = 0; i < datos.length; i++) {
        let encontrado = false;
        for (let j = 0; j < datos2.length; j++) {
            if (datos2[j][0] == datos[i][0]) {
                encontrado = true;
                break;
            }
        }
        if (!encontrado) {
            datosMostrar.push(datos[i]);
        }
    }

    cargarDatosSelect(datosMostrar, fuente);
    cargarDatosSelect(datos2, seleccionados);

    pasarIzq.onclick = function() {
        pasarSeleccionadosSelect(seleccionados, fuente);
    }
    pasarIzqTodos.onclick = function() {
        pasarTodosSelect(seleccionados, fuente);
    }
    pasarDer.onclick = function() {
        pasarSeleccionadosSelect(fuente, seleccionados);
    }
    pasarDerTodos.onclick = function() {
        pasarTodosSelect(fuente, seleccionados);
    }
});
