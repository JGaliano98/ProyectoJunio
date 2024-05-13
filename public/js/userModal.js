// Se agrega un event listener que se activa una vez que el contenido del DOM está completamente cargado.
document.addEventListener('DOMContentLoaded', function() {
    // Array que contiene las diferentes entidades a las que se aplicará la lógica.
    const entities = ['User', 'Alumno', 'Edificio'];

    // Se itera sobre cada entidad para aplicar configuraciones específicas.
    entities.forEach(entidad => {
        // Obtiene el input de tipo file para cada entidad usando su ID específico.
        const fileInput = document.getElementById('csvFileInput' + entidad);
        // Obtiene el botón que activará el input de archivo para cada entidad.
        const csvButton = document.getElementById('loadCsvButton' + entidad);
        // Obtiene la tabla asociada a cada entidad para visualizar los datos cargados.
        const table = document.getElementById('modalTable' + entidad);

        // Verifica si la tabla existe para evitar errores al intentar usar un elemento nulo.
        if (!table) {
            console.error('Tabla no encontrada para la entidad:', entidad);
            return;  // Termina la ejecución para esta entidad si la tabla no está presente.
        }

        // Obtiene el cuerpo de la tabla donde se insertarán los datos.
        const tableBody = table.querySelector('tbody');

        // Configura los eventos si los botones y los inputs existen.
        if (csvButton && fileInput) {
            // Agrega un evento al botón para simular un clic en el input de archivo oculto.
            csvButton.addEventListener('click', () => fileInput.click());

            // Agrega un evento al input de archivo que se activa cuando el usuario selecciona un archivo.
            fileInput.addEventListener('change', function() {
                const file = fileInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    // Lee el archivo y carga sus datos.
                    reader.onload = function(e) {
                        const lines = e.target.result.split('\n');
                        cargarDatosEnTabla(lines, tableBody);
                    };
                    reader.readAsText(file);
                }
            });
        }

        // Configuración específica para la entidad 'User' para cargar datos desde una API.
        if (entidad === 'User') {
            const apiButton = document.getElementById('loadApiButtonUser');
            if (apiButton) {
                // Agrega un evento al botón que carga datos desde la API.
                apiButton.addEventListener('click', function() {
                    fetch('/users', { method: 'GET' })
                        .then(response => response.json())
                        .then(data => cargarDatosDesdeAPI(data, tableBody))
                        .catch(error => console.error('Error loading the user data:', error));
                });
            }
        }
    });
});


// Función que toma las líneas del archivo CSV y las inserta en el cuerpo de la tabla correspondiente.
function cargarDatosEnTabla(lines, body) {
    // Limpia el contenido previo del cuerpo de la tabla.
    body.innerHTML = '';

    // Itera sobre cada línea del CSV.
    lines.forEach(line => {
        const cleanLine = line.trim(); // Limpia espacios al inicio y al final.
        if (cleanLine) {
            // Divide la línea por el delimitador ';' para obtener cada columna.
            const columns = cleanLine.split(';');
            // Crea una nueva fila en la tabla.
            const row = document.createElement('tr');
            // Itera sobre cada columna y la añade a la fila.
            columns.forEach(column => {
                const cell = document.createElement('td');
                cell.textContent = column.trim();
                row.appendChild(cell);
            });
            // Añade la fila completa al cuerpo de la tabla.
            body.appendChild(row);
        }
    });
}


// Función que toma los datos obtenidos de la API y los inserta en el cuerpo de la tabla.
function cargarDatosDesdeAPI(data, body) {
    // Limpia el contenido previo del cuerpo de la tabla.
    body.innerHTML = '';

    // Itera sobre cada objeto de usuario obtenido de la API.
    data.forEach(user => {
        // Crea una nueva fila en la tabla.
        const row = document.createElement('tr');
        // Configura el HTML interno de la fila con los datos del usuario.
        row.innerHTML = `<td>${user.apellido1 || ''} ${user.apellido2 || ''}</td><td>${user.nombre}</td><td>${user.nick}</td><td>${user.email}</td>`;
        // Añade la fila completa al cuerpo de la tabla.
        body.appendChild(row);
    });
}

