document.addEventListener('DOMContentLoaded', function() {
    const titles = document.querySelectorAll('.card-title');

    titles.forEach(title => {
        let fontSize = parseInt(window.getComputedStyle(title).fontSize);
        const originalFontSize = fontSize;

        while (title.scrollWidth > title.clientWidth && fontSize > 10) {
            fontSize--;
            title.style.fontSize = fontSize + 'px';
        }

        // Si el texto se sale del cuadro incluso después de ajustar el tamaño de la fuente, añadimos elipsis
        if (title.scrollWidth > title.clientWidth) {
            title.style.whiteSpace = 'nowrap';
            title.style.overflow = 'hidden';
            title.style.textOverflow = 'ellipsis';
        }
    });

    // Añadir funcionalidad de apertura de modal y carga de datos
    document.querySelectorAll('.ver-detalles').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const actividadId = this.getAttribute('data-id');
            fetch(`/API/actividades/${actividadId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('modalDescripcion').textContent = data.descripcion;
                    document.getElementById('modalFechaInicio').textContent = data.fechaHoraInicio;
                    document.getElementById('modalFechaFin').textContent = data.fechaHoraFin;
                    document.getElementById('modalEspacio').textContent = data.espacio ? data.espacio.nombre : 'No asignado';

                    const ponentesList = document.getElementById('modalPonentes');
                    ponentesList.innerHTML = '';
                    data.ponentes.forEach(ponente => {
                        const li = document.createElement('li');
                        li.textContent = `${ponente.nombre} (${ponente.cargo})`;
                        ponentesList.appendChild(li);
                    });

                    const gruposList = document.getElementById('modalGrupos');
                    gruposList.innerHTML = '';
                    data.grupos.forEach(grupo => {
                        const li = document.createElement('li');
                        li.textContent = `${grupo.nivelEducativo} - ${grupo.nombre}`;
                        gruposList.appendChild(li);
                    });

                    $('#detalleModal').modal('show');
                })
                .catch(error => {
                    console.error('Error al cargar los detalles de la actividad:', error);
                });
        });
    });
});
