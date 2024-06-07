// public/js/evento.js

document.addEventListener('DOMContentLoaded', function() {
    window.verDetalleEvento = function(eventoId) {
        fetch('/API/eventos/' + eventoId)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    document.getElementById('eventoTitulo').textContent = data.titulo;
                    document.getElementById('eventoFechaInicio').textContent = data.fechaHoraInicio;
                    document.getElementById('eventoFechaFin').textContent = data.fechaHoraFin;
                    const actividadesList = document.getElementById('eventoActividades');
                    actividadesList.innerHTML = '';
                    data.actividades.forEach(actividad => {
                        const li = document.createElement('li');
                        li.textContent = actividad.descripcion;
                        actividadesList.appendChild(li);
                    });
                    $('#modalDetalleEvento').modal('show');
                }
            })
            .catch(error => {
                console.error('Error al cargar el detalle del evento:', error);
                alert('Error al cargar el detalle del evento');
            });
    };
});

document.addEventListener("DOMContentLoaded", function() {
    const titles = document.querySelectorAll('.card-title');

    titles.forEach(title => {
        let fontSize = parseInt(window.getComputedStyle(title).fontSize);

        while (title.scrollWidth > title.clientWidth && fontSize > 10) { // Establece un tamaño mínimo de fuente para evitar textos demasiado pequeños
            fontSize--;
            title.style.fontSize = fontSize + 'px';
        }
    });
});