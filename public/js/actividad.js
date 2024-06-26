// Escucha el evento 'DOMContentLoaded' para asegurarse de que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Selección de elementos del DOM necesarios para el funcionamiento del modal y validaciones
    const modal = document.getElementById('modalAgregarActividad');
    const modalTitle = modal.querySelector('.modal-title');
    const idInput = document.getElementById('valorID');
    const tipoActividadSelect = document.getElementById('tipoActividad');
    const eventoSelect = document.getElementById('evento');
    const fechaInicioInput = document.getElementById('fechaInicio');
    const fechaFinInput = document.getElementById('fechaFin');
    const descripcionInput = document.getElementById('descripcionID');
    const aforoInput = document.getElementById('aforo');
    const selectEspacios = document.getElementById('selectEspacios');
    const guardarButtonTab1 = document.querySelector('#tab1 input[type="submit"]');
    const guardarButtonTab4 = document.querySelector('#tab4 input[type="submit"]');
    const fuenteGrupos = document.getElementById('fuenteGrupos');
    const seleccionadosGrupos = document.getElementById('seleccionadosGrupos');
    const ponentesTableBody = document.getElementById('ponentesTable').getElementsByTagName('tbody')[0];

    // Formatea una cadena de fecha en el formato YYYY-MM-DD
    function formatDateString(dateString) {
        const date = new Date(dateString);
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    // Valida que las fechas de la actividad estén dentro del rango de fechas del evento
    function validarFechasActividad() {
        const eventoId = eventoSelect.value;
        if (!eventoId) return true;

        fetch(`/API/eventos/${eventoId}`)
            .then(response => response.json())
            .then(evento => {
                const eventoFechaInicio = new Date(evento.fechaInicio);
                const eventoFechaFin = new Date(evento.fechaFin);
                const actividadFechaInicio = new Date(fechaInicioInput.value);
                const actividadFechaFin = new Date(fechaFinInput.value);

                if (actividadFechaInicio < eventoFechaInicio || actividadFechaInicio > eventoFechaFin) {
                    alert('La fecha de inicio de la actividad debe estar dentro del rango de fechas del evento.');
                    fechaInicioInput.value = '';
                    return false;
                }

                if (actividadFechaFin < eventoFechaInicio || actividadFechaFin > eventoFechaFin) {
                    alert('La fecha de fin de la actividad debe estar dentro del rango de fechas del evento.');
                    fechaFinInput.value = '';
                    return false;
                }

                return true;
            })
            .catch(error => console.error('Error al validar las fechas del evento:', error));
    }

    // Valida que las fechas de la subactividad estén dentro del rango de fechas de la actividad padre
    function validarFechasSubactividad() {
        const actividadFechaInicio = new Date(fechaInicioInput.dataset.actividadFechaInicio);
        const actividadFechaFin = new Date(fechaInicioInput.dataset.actividadFechaFin);
        const subactividadFechaInicio = new Date(fechaInicioInput.value);
        const subactividadFechaFin = new Date(fechaFinInput.value);

        if (subactividadFechaInicio < actividadFechaInicio || subactividadFechaInicio > actividadFechaFin) {
            alert('La fecha de inicio de la subactividad debe estar dentro del rango de fechas de la actividad.');
            fechaInicioInput.value = '';
            return false;
        }

        if (subactividadFechaFin < actividadFechaInicio || subactividadFechaFin > actividadFechaFin) {
            alert('La fecha de fin de la subactividad debe estar dentro del rango de fechas de la actividad.');
            fechaFinInput.value = '';
            return false;
        }

        return true;
    }

    // Añade eventos de cambio a los inputs de fecha para validar fechas al cambiar
    fechaInicioInput.addEventListener('change', function() {
        if (idInput.dataset.tipo === 'actividad') {
            validarFechasActividad();
        } else if (idInput.dataset.tipo === 'subactividad') {
            validarFechasSubactividad();
        }
    });

    fechaFinInput.addEventListener('change', function() {
        if (idInput.dataset.tipo === 'actividad') {
            validarFechasActividad();
        } else if (idInput.dataset.tipo === 'subactividad') {
            validarFechasSubactividad();
        }
    });

    // Función para agregar una subactividad, inicializa el modal con datos específicos
    window.agregarSubactividad = function(button) {
        const actividadId = button.getAttribute('data-actividad-id');
        const actividadEvento = button.getAttribute('data-actividad-evento');
        const actividadFechaInicio = formatDateString(button.getAttribute('data-actividad-fechainicio'));
        const actividadFechaFin = formatDateString(button.getAttribute('data-actividad-fechafin'));

        idInput.value = '';
        idInput.dataset.padreId = actividadId;
        idInput.dataset.tipo = 'subactividad';
        idInput.disabled = true;
        tipoActividadSelect.value = '1';
        tipoActividadSelect.disabled = true;

        eventoSelect.value = actividadEvento;
        fechaInicioInput.value = '';
        fechaFinInput.value = '';
        fechaInicioInput.dataset.actividadFechaInicio = actividadFechaInicio;
        fechaInicioInput.dataset.actividadFechaFin = actividadFechaFin;
        fechaFinInput.dataset.actividadFechaInicio = actividadFechaInicio;
        fechaFinInput.dataset.actividadFechaFin = actividadFechaFin;

        modalTitle.textContent = 'Añadir Subactividad';
        $('#modalAgregarActividad').modal('show');
    };

    // Función para editar una actividad, inicializa el modal con datos específicos
    window.editarActividad = function(button) {
        const actividadId = button.getAttribute('data-actividad-id');
        const actividadDescripcion = button.getAttribute('data-actividad-descripcion');
        const actividadTipo = button.getAttribute('data-actividad-tipo');
        const actividadEvento = button.getAttribute('data-actividad-evento');
        const actividadFechaInicio = formatDateString(button.getAttribute('data-actividad-fechainicio'));
        const actividadFechaFin = formatDateString(button.getAttribute('data-actividad-fechafin'));
        const actividadAforo = button.getAttribute('data-actividad-aforo');

        idInput.value = actividadId;
        idInput.dataset.padreId = '';
        idInput.dataset.tipo = 'actividad';
        descripcionInput.value = actividadDescripcion;
        tipoActividadSelect.value = actividadTipo;
        eventoSelect.value = actividadEvento;
        fechaInicioInput.value = actividadFechaInicio;
        fechaFinInput.value = actividadFechaFin;
        aforoInput.value = actividadAforo;

        tipoActividadSelect.disabled = (actividadId !== '');
        idInput.disabled = true;
        eventoSelect.disabled = true;

        if (actividadTipo == '1') {
            guardarButtonTab1.disabled = true;
            guardarButtonTab4.disabled = false;
        } else {
            guardarButtonTab1.disabled = false;
            guardarButtonTab4.disabled = true;
            deshabilitarPestanas();
        }

        modalTitle.textContent = 'Editar Actividad';
        $('#modalAgregarActividad').modal('show');

        cargarPonentes(actividadId); // Cargar los ponentes asociados a esta actividad
    };

    // Función para editar una subactividad, inicializa el modal con datos específicos
    window.editarSubactividad = function(button) {
        const subactividadId = button.getAttribute('data-subactividad-id');
        const subactividadTitulo = button.getAttribute('data-subactividad-titulo');
        const subactividadFechaInicio = formatDateString(button.getAttribute('data-subactividad-fechainicio'));
        const subactividadFechaFin = formatDateString(button.getAttribute('data-subactividad-fechafin'));
        const subactividadEspacio = button.getAttribute('data-subactividad-espacio');
        const subactividadIdPadre = button.getAttribute('data-subactividad-idpadre');
        const actividadEvento = button.closest('.card').querySelector('[data-actividad-evento]').getAttribute('data-actividad-evento');

        idInput.value = subactividadId;
        idInput.dataset.padreId = subactividadIdPadre;
        idInput.dataset.tipo = 'subactividad';
        descripcionInput.value = subactividadTitulo;
        tipoActividadSelect.value = '1';
        eventoSelect.value = actividadEvento;
        fechaInicioInput.value = subactividadFechaInicio;
        fechaFinInput.value = subactividadFechaFin;
        aforoInput.value = '';
        selectEspacios.value = subactividadEspacio;

        tipoActividadSelect.disabled = true;
        guardarButtonTab1.disabled = true;
        guardarButtonTab4.disabled = false;
        eventoSelect.disabled = true;
        idInput.disabled = true;

        cargarGruposSeleccionados(subactividadId); // Cargar los grupos seleccionados

        modalTitle.textContent = 'Editar Subactividad';
        $('#modalAgregarActividad').modal('show');

        cargarPonentes(subactividadId); // Cargar los ponentes asociados a esta subactividad
    };

    // Carga los ponentes asociados a una actividad o subactividad y los muestra en la tabla del modal
    function cargarPonentes(detalleActividadId) {
        fetch(`/API/ponentes/detalle/${detalleActividadId}`)
            .then(response => response.json())
            .then(ponentes => {
                const ponentesTableBody = document.getElementById('ponentesTable').getElementsByTagName('tbody')[0];

                // Guardar la fila de entrada
                const entradaRow = ponentesTableBody.rows[0];

                // Limpiar la tabla, excepto la primera fila
                ponentesTableBody.innerHTML = '';

                // Volver a agregar la fila de entrada
                ponentesTableBody.appendChild(entradaRow);

                // Agregar cada ponente a la tabla
                ponentes.forEach(ponente => {
                    const row = ponentesTableBody.insertRow();

                    const nombreCell = row.insertCell(0);
                    const cargoCell = row.insertCell(1);
                    const urlCell = row.insertCell(2);
                    const botonesCell = row.insertCell(3);

                    nombreCell.textContent = ponente.nombre;
                    cargoCell.textContent = ponente.cargo;
                    urlCell.textContent = ponente.URL;

                    const editarButton = document.createElement('button');
                    editarButton.textContent = 'Editar';
                    editarButton.onclick = function() { editarPonente(row); };

                    const borrarButton = document.createElement('button');
                    borrarButton.textContent = 'Borrar';
                    borrarButton.onclick = function() { borrarPonente(row); };

                    botonesCell.appendChild(editarButton);
                    botonesCell.appendChild(borrarButton);
                });
            })
            .catch(error => console.error('Error al cargar los ponentes:', error));
    }

    // Carga los grupos seleccionados para una subactividad y excluye estos grupos de los disponibles
    function cargarGruposSeleccionados(subactividadId) {
        fetch(`/API/grupos/detalle/${subactividadId}`)
            .then(response => response.json())
            .then(data => {
                seleccionadosGrupos.innerHTML = '';
                const seleccionadosIds = data.map(grupo => grupo.id); // Obtener los IDs de los grupos seleccionados
                data.forEach(grupo => {
                    const option = document.createElement('option');
                    option.value = grupo.id;
                    option.textContent = `${grupo.nivelEducativo} - ${grupo.nombre}`;
                    seleccionadosGrupos.appendChild(option);
                });

                // Cargar los grupos disponibles y excluir los seleccionados
                fetch('/API/grupos')
                    .then(response => response.json())
                    .then(allGrupos => {
                        fuenteGrupos.innerHTML = '';
                        allGrupos.forEach(grupo => {
                            if (!seleccionadosIds.includes(grupo.id)) {
                                const option = document.createElement('option');
                                option.value = grupo.id;
                                option.textContent = `${grupo.nivelEducativo} - ${grupo.nombre}`;
                                fuenteGrupos.appendChild(option);
                            }
                        });
                    })
                    .catch(error => console.error('Error al cargar todos los grupos:', error));
            })
            .catch(error => console.error('Error al cargar grupos:', error));
    }

    // Función para preparar el modal para añadir una nueva actividad
    const addActividadButton = document.querySelector('[data-target="#modalAgregarActividad"]');
    addActividadButton.addEventListener('click', function() {
        idInput.value = '';
        idInput.dataset.padreId = '';
        idInput.dataset.tipo = 'actividad';
        descripcionInput.value = '';
        tipoActividadSelect.value = '';
        eventoSelect.value = '';
        fechaInicioInput.value = '';
        fechaFinInput.value = '';
        aforoInput.value = '';
        selectEspacios.value = '';
        tipoActividadSelect.disabled = false;
        guardarButtonTab1.disabled = false;
        guardarButtonTab4.disabled = true;
        modalTitle.textContent = 'Añadir Actividad';

        // Resetear los selects de grupos
        fetch('/API/grupos')
            .then(response => response.json())
            .then(allGrupos => {
                fuenteGrupos.innerHTML = '';
                seleccionadosGrupos.innerHTML = '';
                allGrupos.forEach(grupo => {
                    const option = document.createElement('option');
                    option.value = grupo.id;
                    option.textContent = `${grupo.nivelEducativo} - ${grupo.nombre}`;
                    fuenteGrupos.appendChild(option);
                });
            })
            .catch(error => console.error('Error al cargar todos los grupos:', error));

        cargarPonentes(''); // Limpiar los ponentes en el modal de nueva actividad
    });

    ventanaActividad(); // Inicializamos la función ventanaActividad
});

// Deshabilita las pestañas 2, 3 y 4
function deshabilitarPestanas() {
    document.getElementById('tab2').style.pointerEvents = 'none';
    document.getElementById('tab2').style.opacity = '0.5';
    document.getElementById('tab3').style.pointerEvents = 'none';
    document.getElementById('tab3').style.opacity = '0.5';
    document.getElementById('tab4').style.pointerEvents = 'none';
    document.getElementById('tab4').style.opacity = '0.5';
}

// Inicializa la ventana de actividad, cargando eventos, espacios y añadiendo funcionalidad a los inputs
function ventanaActividad() {
    const tipoActividadSelect = document.getElementById('tipoActividad');
    const eventoSelect = document.getElementById('evento');
    const guardarButtonTab1 = document.querySelector('#tab1 input[type="submit"]');
    const guardarButtonTab4 = document.querySelector('#tab4 input[type="submit"]');
    const aforoInput = document.getElementById('aforo');
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
    const descripcionInput = document.getElementById('descripcionID');
    const fechaInicioInput = document.getElementById('fechaInicio');
    const fechaFinInput = document.getElementById('fechaFin');
    const fuenteRecursos = document.getElementById('fuenteRecursos');
    const seleccionadosRecursos = document.getElementById('seleccionadosRecursos');
    const fuenteGrupos = document.getElementById('fuenteGrupos');
    const seleccionadosGrupos = document.getElementById('seleccionadosGrupos');
    const ponentesTableBody = document.getElementById('ponentesTable').getElementsByTagName('tbody')[0];
    const selectEspacios = document.getElementById('selectEspacios');
    const idInput = document.getElementById('valorID');

    let espaciosData = [];

    // Carga los espacios disponibles según el aforo y recursos seleccionados
    function cargarEspacios() {
        const aforo = aforoInput.value ? parseInt(aforoInput.value) : null;
        const recursosSeleccionados = Array.from(seleccionadosRecursos.options).map(option => parseInt(option.value));

        const filteredEspacios = espaciosData.filter(espacio => {
            const cumpleAforo = !aforo || espacio.aforo > aforo;
            const cumpleRecursos = recursosSeleccionados.length === 0 || recursosSeleccionados.every(recursoId =>
                espacio.recursos.includes(recursoId)
            );
            return cumpleAforo && cumpleRecursos;
        });

        selectEspacios.innerHTML = '';
        filteredEspacios.forEach(espacio => {
            const option = document.createElement('option');
            option.value = espacio.id;
            option.textContent = `${espacio.nombre} (Aforo: ${espacio.aforo})`;
            selectEspacios.appendChild(option);
        });
    }

    // Realiza una petición para obtener los datos de los espacios
    function fetchEspacios() {
        fetch('/API/espacios')
            .then(response => response.json())
            .then(data => {
                espaciosData = data;
                cargarEspacios();
            })
            .catch(error => console.error('Error al cargar espacios:', error));
    }

    fetchEspacios();

    aforoInput.addEventListener('input', cargarEspacios);

    // Añade funcionalidad a los botones para mover recursos entre listas de seleccionados y disponibles
    document.getElementById('pasarIzqRecursos').addEventListener('click', () => {
        pasarSeleccionadosSelect(seleccionadosRecursos, fuenteRecursos);
        cargarEspacios();
    });
    document.getElementById('pasarIzqTodosRecursos').addEventListener('click', () => {
        pasarTodosSelect(seleccionadosRecursos, fuenteRecursos);
        cargarEspacios();
    });
    document.getElementById('pasarDerRecursos').addEventListener('click', () => {
        pasarSeleccionadosSelect(fuenteRecursos, seleccionadosRecursos);
        cargarEspacios();
    });
    document.getElementById('pasarDerTodosRecursos').addEventListener('click', () => {
        pasarTodosSelect(fuenteRecursos, seleccionadosRecursos);
        cargarEspacios();
    });

    seleccionadosRecursos.addEventListener('change', cargarEspacios);

    // Carga los eventos disponibles en el select de eventos
    function cargarEventos() {
        fetch('/API/eventos')
            .then(response => response.json())
            .then(data => {
                eventoSelect.innerHTML = '<option value="">-</option>';
                data.forEach(evento => {
                    const option = document.createElement('option');
                    option.value = evento.id;
                    option.textContent = evento.titulo;
                    eventoSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error al cargar eventos:', error));
    }

    cargarEventos();

    // Habilita o deshabilita elementos según el tipo de actividad seleccionada
    function toggleElements() {
        const valor = tipoActividadSelect.value;
        if (valor == '1') {
            guardarButtonTab1.disabled = true;
            guardarButtonTab4.disabled = false;
            idInput.disabled = true;
            aforoInput.disabled = false;
            tabs.forEach(tab => {
                const tabId = tab.getAttribute('id');
                if (tabId !== 'tab1') {
                    tab.style.pointerEvents = 'auto';
                    tab.style.opacity = '1';
                }
            });
        } else if (valor == '2') {
            guardarButtonTab1.disabled = false;
            guardarButtonTab4.disabled = true;
            idInput.disabled = true;
            aforoInput.disabled = true;
            tabs.forEach(tab => {
                const tabId = tab.getAttribute('id');
                if (tabId !== 'tab1') {
                    tab.style.pointerEvents = 'none';
                    tab.style.opacity = '0.5';
                }
            });
        }
    }

    tipoActividadSelect.addEventListener('change', toggleElements);
    tipoActividadSelect.dispatchEvent(new Event('change'));

    // Valida y envía el formulario de la actividad/subactividad
    function validateAndSendForm(button, type) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            console.log(`Enviando solicitud de guardar actividad desde ${type}`);
            const fechaInicio = fechaInicioInput.value;
            const fechaFin = fechaFinInput.value;

            if (!fechaInicio || !fechaFin) {
                console.error('Fechas inválidas');
                return;
            }

            let objetoGuardado = {
                evento: parseInt(eventoSelect.value),
                fechaFin: fechaFin,
                fechaInicio: fechaInicio,
                tipo: tipoActividadSelect.value
            };

            if (type === 'tab4') {
                objetoGuardado = {
                    ...objetoGuardado,
                    aforo: aforoInput.value,
                    recursosSeleccionados: Array.from(seleccionadosRecursos.options).map(option => option.value),
                    ponentes: Array.from(ponentesTableBody.rows).slice(1).map(row => ({
                        nombre: row.cells[0].textContent,
                        cargo: row.cells[1].textContent,
                        url: row.cells[2].textContent
                    })),
                    gruposSeleccionados: Array.from(seleccionadosGrupos.options).map(option => option.value),
                    espacio: selectEspacios.value
                };
            }

            const isEditing = !!idInput.value;
            const isSubactividad = idInput.dataset.tipo === 'subactividad';

            if (isSubactividad) {
                objetoGuardado.titulo = descripcionInput.value;
                objetoGuardado.idPadre = idInput.dataset.padreId;
            } else {
                objetoGuardado.descripcion = descripcionInput.value;
                objetoGuardado.idPadre = null;
            }

            console.log('Datos enviados a la API:', objetoGuardado);

            const method = isEditing ? 'PUT' : 'POST';
            const url = isEditing ? `/API/actividades/${idInput.value}` : '/API/actividades';

            fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(objetoGuardado)
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => { // Cambiado a response.text() para depuración
                        if (response.status === 403) {
                            alert('No tienes permiso para realizar esta acción.');
                            throw new Error('Acceso denegado');
                        }
                        console.error('Respuesta del servidor:', text); // Log completo de la respuesta
                        throw new Error(text);
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log('Respuesta de la API:', data);
                alert('Actividad guardada con éxito');
                setTimeout(function() {
                    location.reload();
                }, 500);
            })
            .catch(error => {
                console.error('Error al guardar la actividad:', error.message);
                alert(`Error: ${error.message}`);
            });
        });
    }

    if (!guardarButtonTab1.dataset.listenerAdded) {
        validateAndSendForm(guardarButtonTab1, 'tab1');
        guardarButtonTab1.dataset.listenerAdded = true;
    }

    if (!guardarButtonTab4.dataset.listenerAdded) {
        validateAndSendForm(guardarButtonTab4, 'tab4');
        guardarButtonTab4.dataset.listenerAdded = true;
    }
}

// Mueve las opciones seleccionadas de un select a otro
function pasarSeleccionadosSelect(origen, destino) {
    const seleccionados = Array.from(origen.selectedOptions);
    seleccionados.forEach(option => {
        destino.appendChild(option);
    });
}

// Mueve todas las opciones de un select a otro
function pasarTodosSelect(origen, destino) {
    const todos = Array.from(origen.options);
    todos.forEach(option => {
        destino.appendChild(option);
    });
}

// Elimina una actividad
function eliminarActividad(id) {
    if (confirm('¿Estás seguro de que deseas eliminar esta actividad?')) {
        fetch(`/API/actividades/${id}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
                if (response.status === 403) {
                    alert('No tienes permiso para realizar esta acción.');
                    throw new Error('Acceso denegado');
                }
                throw new Error('Error en la respuesta del servidor');
            }
            return response.json();
        })
        .then(data => {
            console.log('Respuesta de la API:', data);
            alert('Actividad eliminada con éxito');
            location.reload();
        })
        .catch(error => console.error('Error al eliminar la actividad:', error));
    }
}

// Elimina una subactividad
function eliminarSubactividad(id) {
    if (confirm('¿Estás seguro de que deseas eliminar esta subactividad?')) {
        fetch(`/API/actividades/${id}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
                if (response.status === 403) {
                    alert('No tienes permiso para realizar esta acción.');
                    throw new Error('Acceso denegado');
                }
                throw new Error('Error en la respuesta del servidor');
            }
            return response.json();
        })
        .then(data => {
            console.log('Respuesta de la API:', data);
            alert('Subactividad eliminada con éxito');
            location.reload();
        })
        .catch(error => console.error('Error al eliminar la subactividad:', error));
    }
}
