document.addEventListener('DOMContentLoaded', function() {
    var button = document.createElement('button');
    button.textContent = 'Ir a Registro';
    button.className = 'btn btn-primary';
    button.onclick = function() {
        fetch('/register')
            .then(response => response.text())
            .then(html => {
                var contentArea = document.getElementById('content-area');
                if (contentArea) {
                    contentArea.innerHTML = html;
                } else {
                    console.error('El área de contenido no fue encontrada. Asegúrate de que el ID es correcto.');
                }
            })
            .catch(error => console.error('Error loading the register page:', error));
    };

    var container = document.querySelector('.content'); // Cambia '.some-container' por un selector válido donde debería ir el botón.
    if (container) {
        container.appendChild(button);
    } else {
        console.error('El contenedor para el botón no fue encontrado. Revisa tu selector o la estructura del DOM.');
    }
});