document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modalAgregarActividad');
    const modalTitle = modal.querySelector('.modal-title');
    const idInput = document.getElementById('valorID');
    const tipoActividadSelect = document.getElementById('tipoActividad');
    const eventoSelect = document.getElementById('evento');
    const fechaInicioInput = document.getElementById('fechaInicio');
    const fechaFinInput = document.getElementById('fechaFin');
    const descripcionInput = document.getElementById('descripcionID');

    window.agregarSubactividad = function(button) {
        const actividadId = button.getAttribute('data-actividad-id');
        const actividadEvento = button.getAttribute('data-actividad-evento');
        const actividadFechaInicio = button.getAttribute('data-actividad-fechainicio');
        const actividadFechaFin = button.getAttribute('data-actividad-fechafin');

        idInput.value = actividadId;
        idInput.disabled = true;
        tipoActividadSelect.value = '1';
        tipoActividadSelect.disabled = (actividadId !== '');

        eventoSelect.value = actividadEvento;
        fechaInicioInput.value = actividadFechaInicio;
        fechaFinInput.value = actividadFechaFin;

        modalTitle.textContent = 'Añadir Subactividad';
        $('#modalAgregarActividad').modal('show');
    };

    const addActividadButton = document.querySelector('[data-target="#modalAgregarActividad"]');
    addActividadButton.addEventListener('click', function() {
        idInput.value = '';
        eventoSelect.value = '';
        fechaInicioInput.value = '';
        fechaFinInput.value = '';
        descripcionInput.value = '';
        tipoActividadSelect.value = '2';
        modalTitle.textContent = 'Añadir Actividad';
    });

    ventanaActividad(); // Inicializamos la función ventanaActividad

    window.editarActividad = function(id) {
        fetch(`/API/actividades/${id}`)
            .then(response => response.json())
            .then(data => {
                idInput.value = data.id;
                eventoSelect.value = data.evento ? data.evento.id : '';
                fechaInicioInput.value = data.fechaHoraInicio.split('T')[0];
                fechaFinInput.value = data.fechaHoraFin.split('T')[0];
                descripcionInput.value = data.descripcion;
                tipoActividadSelect.value = data.tipo;
                modalTitle.textContent = 'Editar Actividad';
                $('#modalAgregarActividad').modal('show');

                const guardarButton = document.querySelector('#guardarButton');
                guardarButton.addEventListener('click', function() {
                    const updatedData = {
                        descripcion: descripcionInput.value,
                        evento: parseInt(eventoSelect.value),
                        fechaInicio: fechaInicioInput.value,
                        fechaFin: fechaFinInput.value,
                        tipo: tipoActividadSelect.value
                    };

                    fetch(`/API/actividades/${id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(updatedData)
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error en la respuesta del servidor');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Respuesta de la API:', data);
                        alert('Actividad actualizada con éxito');
                        location.reload();
                    })
                    .catch(error => console.error('Error al actualizar la actividad:', error));
                });
            })
            .catch(error => console.error('Error al cargar la actividad:', error));
    };

    window.editarSubactividad = function(id) {
        fetch(`/API/actividades/${id}`)
            .then(response => response.json())
            .then(data => {
                idInput.value = data.id;
                eventoSelect.value = data.evento ? data.evento.id : '';
                fechaInicioInput.value = data.fechaHoraInicio.split('T')[0];
                fechaFinInput.value = data.fechaHoraFin.split('T')[0];
                descripcionInput.value = data.titulo;
                tipoActividadSelect.value = '1';
                modalTitle.textContent = 'Editar Subactividad';
                $('#modalAgregarActividad').modal('show');

                const guardarButton = document.querySelector('#guardarButton');
                guardarButton.addEventListener('click', function() {
                    const updatedData = {
                        titulo: descripcionInput.value,
                        evento: parseInt(eventoSelect.value),
                        fechaInicio: fechaInicioInput.value,
                        fechaFin: fechaFinInput.value,
                        tipo: tipoActividadSelect.value
                    };

                    fetch(`/API/actividades/${id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(updatedData)
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error en la respuesta del servidor');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Respuesta de la API:', data);
                        alert('Subactividad actualizada con éxito');
                        location.reload();
                    })
                    .catch(error => console.error('Error al actualizar la subactividad:', error));
                });
            })
            .catch(error => console.error('Error al cargar la subactividad:', error));
    };
});

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
                descripcion: descripcionInput.value,
                evento: parseInt(eventoSelect.value),
                fechaFin: fechaFin,
                fechaInicio: fechaInicio,
                idPadre: idInput.value,
                tipo: tipoActividadSelect.value,
                espacio: selectEspacios.value
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
                    gruposSeleccionados: Array.from(seleccionadosGrupos.options).map(option => option.value)
                };
            }

            console.log('Datos enviados a la API:', objetoGuardado);

            fetch('/API/actividades', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(objetoGuardado)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then(data => {
                console.log('Respuesta de la API:', data);
                alert('Actividad creada con éxito');
                setTimeout(function() {
                    location.reload();
                }, 500);
            })
            .catch(error => console.error('Error al guardar la actividad:', error));
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

    function showTabContent(tabId) {
        tabContents.forEach(content => {
            if (content.parentElement.getAttribute('id') === tabId) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', function(event) {
            event.preventDefault();
            const tabId = this.getAttribute('id');
            showTabContent(tabId);
        });
    });

    showTabContent('tab1');
}

function eliminarActividad(id) {
    if (confirm('¿Estás seguro de que deseas eliminar esta actividad?')) {
        fetch(`/API/actividades/${id}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
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

function eliminarSubactividad(id) {
    if (confirm('¿Estás seguro de que deseas eliminar esta subactividad?')) {
        fetch(`/API/actividades/${id}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
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
