// public/js/evento.js

// Espera a que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener('DOMContentLoaded', function() {
    // Define la función verDetalleEvento que se puede llamar desde cualquier parte del código
    window.verDetalleEvento = function(eventoId) {
        // Realiza una solicitud fetch a la API para obtener los detalles de un evento específico
        fetch('/API/eventos/' + eventoId)
            .then(response => {
                // Verifica si la respuesta es exitosa
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Convierte la respuesta a formato JSON
                return response.json();
            })
            .then(data => {
                // Verifica si hay un error en los datos recibidos
                if (data.error) {
                    alert(data.error);
                } else {
                    // Actualiza los elementos del DOM con los datos del evento
                    document.getElementById('eventoTitulo').textContent = data.titulo;
                    document.getElementById('eventoFechaInicio').textContent = data.fechaHoraInicio;
                    document.getElementById('eventoFechaFin').textContent = data.fechaHoraFin;
                    const actividadesList = document.getElementById('eventoActividades');
                    actividadesList.innerHTML = '';
                    // Agrega las actividades del evento a la lista en el modal
                    data.actividades.forEach(actividad => {
                        const li = document.createElement('li');
                        li.textContent = actividad.descripcion;
                        actividadesList.appendChild(li);
                    });
                    // Muestra el modal con los detalles del evento
                    $('#modalDetalleEvento').modal('show');
                }
            })
            .catch(error => {
                // Manejo de errores durante la carga del detalle del evento
                console.error('Error al cargar el detalle del evento:', error);
                alert('Error al cargar el detalle del evento');
            });
    };
});

// Espera a que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener("DOMContentLoaded", function() {
    // Selecciona todos los elementos con la clase 'card-title'
    const titles = document.querySelectorAll('.card-title');

    // Ajusta el tamaño de la fuente de cada título para que se ajuste dentro de su contenedor
    titles.forEach(title => {
        let fontSize = parseInt(window.getComputedStyle(title).fontSize);

        // Reduce el tamaño de la fuente mientras el ancho del texto sea mayor que el ancho del contenedor y el tamaño de la fuente sea mayor a 10px
        while (title.scrollWidth > title.clientWidth && fontSize > 10) {
            fontSize--;
            title.style.fontSize = fontSize + 'px';
        }
    });
});
