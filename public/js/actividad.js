document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modalAgregarActividad');
    const modalTitle = modal.querySelector('.modal-title');
    const idInput = document.getElementById('valorID');

    window.agregarSubactividad = function(button) {
        const actividadId = button.getAttribute('data-actividad-id');
        idInput.value = actividadId;
        modalTitle.textContent = 'Añadir Subactividad';
        $('#modalAgregarActividad').modal('show');
    };

    const addActividadButton = document.querySelector('[data-target="#modalAgregarActividad"]');
    addActividadButton.addEventListener('click', function() {
        idInput.value = '';
        modalTitle.textContent = 'Añadir Actividad';
    });

    ventanaActividad(); // Inicializamos la función ventanaActividad
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
    // const selectEspacios = document.getElementById('selectEspacios');
    const selectEspacios = document.getElementById('selectEspacios');

    function cargarEspacios() {
        // Simular la carga de espacios (puedes reemplazar esto con una llamada AJAX si es necesario)
        const espacios = [
            { id: 9, nombre: 'Aula 27' },
            { id: 10, nombre: 'Aula 25' }
        ];

        espacios.forEach(espacio => {
            const option = document.createElement('option');
            option.value = espacio.id;
            option.textContent = espacio.nombre;
            selectEspacios.appendChild(option);
        });
    }

    cargarEspacios();




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

            const idInput = document.getElementById('valorID'); // Asegurarnos de obtener idInput aquí

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
