document.addEventListener('DOMContentLoaded', function() {
    // Encuentra el contenedor donde quieres añadir los botones
    const contentContainer = document.querySelector('.content');
    if (contentContainer) {
        // Crea el botón de login
        const loginButton = document.createElement('button');
        loginButton.type = 'button';
        loginButton.className = 'btn btn-primary';
        loginButton.textContent = 'Login';
        loginButton.setAttribute('data-toggle', 'modal');
        loginButton.setAttribute('data-target', '#loginModal');

        // Crea el botón de registro
        const registerButton = document.createElement('button');
        registerButton.type = 'button';
        registerButton.className = 'btn btn-primary ml-2'; // Añadido margen izquierdo
        registerButton.textContent = 'Registro';
        registerButton.setAttribute('data-toggle', 'modal');
        registerButton.setAttribute('data-target', '#registerModal');

        // Inserta los botones en el contenedor
        contentContainer.appendChild(loginButton);
        contentContainer.appendChild(registerButton);
    }

    // Crea la ventana modal de Bootstrap para el formulario de login
    const modalLoginHTML = `
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/login">
              <div class="form-group">
                <label for="usernameModal">Usuario o Email:</label>
                <input type="text" name="_username" id="usernameModal" class="form-control" required autofocus>
              </div>
              <div class="form-group">
                <label for="passwordModal">Contraseña:</label>
                <input type="password" name="_password" id="passwordModal" class="form-control" required>
              </div>
              <input type="hidden" name="_csrf_token" value="TU_TOKEN_CSRF">
              <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    `;
    document.body.insertAdjacentHTML('beforeend', modalLoginHTML);

    // Crea la ventana modal de Bootstrap para el formulario de registro
    const modalRegisterHTML = `
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/register">
              <div class="form-group">
                <label for="emailRegister">Email:</label>
                <input type="email" name="email" id="emailRegister" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="passwordRegister">Contraseña:</label>
                <input type="password" name="password" id="passwordRegister" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    `;
    document.body.insertAdjacentHTML('beforeend', modalRegisterHTML);
});






// document.addEventListener('DOMContentLoaded', function() {
//     // Encuentra el contenedor donde quieres añadir los botones
//     const contentContainer = document.querySelector('.content');
//     if (contentContainer) {
//         // Crea el botón de login
//         const loginButton = document.createElement('button');
//         loginButton.type = 'button';
//         loginButton.className = 'btn btn-primary';
//         loginButton.textContent = 'Login';
//         loginButton.setAttribute('data-toggle', 'modal');
//         loginButton.setAttribute('data-target', '#loginModal');

//         // Crea el botón de registro
//         const registerButton = document.createElement('button');
//         registerButton.type = 'button';
//         registerButton.className = 'btn btn-primary ml-2'; // Añadido margen izquierdo
//         registerButton.textContent = 'Registro';
//         registerButton.setAttribute('data-toggle', 'modal');
//         registerButton.setAttribute('data-target', '#registerModal');

//         // Inserta los botones en el contenedor
//         contentContainer.appendChild(loginButton);
//         contentContainer.appendChild(registerButton);
//     }

//     // Crea la ventana modal de Bootstrap para el formulario de login
//     const modalLoginHTML = `
//     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
//       <div class="modal-dialog modal-lg" role="document">  <!-- Aumentado tamaño para mejor visualización -->
//         <div class="modal-content">
//           <div class="modal-header">
//             <h5 class="modal-title" id="loginModalLabel">Login</h5>
//             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
//               <span aria-hidden="true">&times;</span>
//             </button>
//           </div>
//           <div class="modal-body">
//             <!-- iframe para cargar la página de login -->
//             <iframe src="/login" frameborder="0" style="width:100%; height:500px;"></iframe>
//           </div>
//           <div class="modal-footer">
//             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
//           </div>
//         </div>
//       </div>
//     </div>
//     `;
//     document.body.insertAdjacentHTML('beforeend', modalLoginHTML);

//     // Crea la ventana modal de Bootstrap para el formulario de registro
//     const modalRegisterHTML = `
//     <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
//       <div class="modal-dialog modal-lg" role="document">  <!-- Aumentado tamaño para mejor visualización -->
//         <div class="modal-content">
//           <div class="modal-header">
//             <h5 class="modal-title" id="registerModalLabel">Registro</h5>
//             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
//               <span aria-hidden="true">&times;</span>
//             </button>
//           </div>
//           <div class="modal-body">
//             <!-- iframe para cargar la página de registro -->
//             <iframe src="/register" frameborder="0" style="width:100%; height:500px;"></iframe>
//           </div>
//           <div class="modal-footer">
//             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
//           </div>
//         </div>
//       </div>
//     </div>
//     `;
//     document.body.insertAdjacentHTML('beforeend', modalRegisterHTML);
// });
