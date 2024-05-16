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
          let respuesta = confirm("¿Estas seguro que quieres borrar?")
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

  function pulsadoGuardar(fila){
    return function(){
     fila.guardar();
    }
  }

  function pulsadoCancelar(fila) {
      return function() {
          fila.cancelar();
      }
  }

  guardarBtn.addEventListener("click", function() {
      // Verificar si el modo de edición está activado
      if (checkActEdTabla.checked) {
          // Mostrar mensaje de alerta
          alert("Tienes que quitar el modo edición para poder guardar.");
      } else {
          // Llamar a la función para guardar
          
          console.log(tabla.getData());
      }
  });

  checkActEdTabla.onchange=function(){
    if (this.checked){
      tabla.activarEdicion(pulsadoBorrar,pulsadoEditar,pulsadoGuardar,pulsadoCancelar);
    }else{
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
              console.log(informacion);
              tabla.setData(informacion);

          };
      } else {
          alert("El fichero subido no tiene el formato csv");
      }

  };




















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
