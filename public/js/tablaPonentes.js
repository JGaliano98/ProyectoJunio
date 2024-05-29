document.addEventListener('DOMContentLoaded', function() {
    const ponentesTableBody = document.getElementById('ponentesTable').getElementsByTagName('tbody')[0];

    window.agregarPonente = function() {
        const nombreInput = document.getElementById('nombre');
        const cargoInput = document.getElementById('cargo');
        const urlInput = document.getElementById('url');
    
        const nombre = nombreInput.value.trim();
        const cargo = cargoInput.value.trim();
        const url = urlInput.value.trim();
    
        if (nombre === "" || cargo === "" || url === "") {
            alert("Por favor, completa todos los campos.");
            return;
        }
    
        const row = ponentesTableBody.insertRow();
    
        const nombreCell = row.insertCell(0);
        const cargoCell = row.insertCell(1);
        const urlCell = row.insertCell(2);
        const botonesCell = row.insertCell(3);
    
        nombreCell.textContent = nombre;
        cargoCell.textContent = cargo;
        urlCell.textContent = url;
    
        const editarButton = document.createElement('button');
        editarButton.textContent = 'Editar';
        editarButton.onclick = function() { editarPonente(row); };
        const borrarButton = document.createElement('button');
        borrarButton.textContent = 'Borrar';
        borrarButton.onclick = function() { borrarPonente(row); }; // Pasar la fila como argumento
    
        botonesCell.appendChild(editarButton);
        botonesCell.appendChild(borrarButton);
    
        // Limpiar los campos de entrada
        nombreInput.value = '';
        cargoInput.value = '';
        urlInput.value = '';
    };
    

    window.editarPonente = function(row) {
        const nombreCell = row.cells[0];
        const cargoCell = row.cells[1];
        const urlCell = row.cells[2];
        const botonesCell = row.cells[3];

        const nombre = nombreCell.textContent;
        const cargo = cargoCell.textContent;
        const url = urlCell.textContent;

        nombreCell.innerHTML = `<input type="text" value="${nombre}">`;
        cargoCell.innerHTML = `<input type="text" value="${cargo}">`;
        urlCell.innerHTML = `<input type="text" value="${url}">`;

        const guardarButton = document.createElement('button');
        guardarButton.textContent = 'Guardar';
        guardarButton.onclick = function() { guardarEdicion(row); };

        botonesCell.innerHTML = '';
        botonesCell.appendChild(guardarButton);
    };

    window.guardarEdicion = function(row) {
        const nombreInput = row.cells[0].getElementsByTagName('input')[0];
        const cargoInput = row.cells[1].getElementsByTagName('input')[0];
        const urlInput = row.cells[2].getElementsByTagName('input')[0];

        const nombre = nombreInput.value.trim();
        const cargo = cargoInput.value.trim();
        const url = urlInput.value.trim();

        if (nombre === "" || cargo === "" || url === "") {
            alert("Por favor, completa todos los campos.");
            return;
        }

        row.cells[0].textContent = nombre;
        row.cells[1].textContent = cargo;
        row.cells[2].textContent = url;

        const editarButton = document.createElement('button');
        editarButton.textContent = 'Editar';
        editarButton.onclick = function() { editarPonente(row); };
        const borrarButton = document.createElement('button');
        borrarButton.textContent = 'Borrar';
        borrarButton.onclick = function() { borrarPonente(row); };

        const botonesCell = row.cells[3];
        botonesCell.innerHTML = '';
        botonesCell.appendChild(editarButton);
        botonesCell.appendChild(borrarButton);
    };

    window.borrarPonente = function(fila) {
        // Comprobar si la fila es válida
        if (fila && fila.nodeName === 'TR') {
            // Obtener el índice de la fila relativo al cuerpo de la tabla
            let rowIndex = fila.rowIndex;
    
            // Obtener la referencia al cuerpo de la tabla
            let ponentesTableBody = document.querySelector('#ponentesTable tbody');
    
            // Comprobar si el índice de fila es válido
            if (rowIndex > 0 && rowIndex <= ponentesTableBody.rows.length) {
                // Eliminar la fila del cuerpo de la tabla
                ponentesTableBody.deleteRow(rowIndex - 1);
            } else {
                console.error('Índice de fila inválido:', rowIndex);
            }
        } else {
            console.error('Fila no encontrada o inválida:', fila);
        }
    };
    
    
    
});
