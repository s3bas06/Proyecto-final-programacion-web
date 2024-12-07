<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
    <div class="register-container">
      <h2 class="register-title">Registro</h2>
      <form id="register-form" action="php_codes/register-action.php" method="POST">
        <div class="input-group">
          <input type="email" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="input-group">
          <input type="text" id="username" placeholder="Nombre de usuario" name="username" required>
        </div>
        <div class="input-group">
          <input type="password" id="password" placeholder="Contraseña" name="password" required>
        </div>
        <div class="input-group">
          <input type="password" id="confirmPassword" placeholder="Confirmar contraseña" name="confirmPassword" required>
        </div>
        <button type="submit" class="btn-primary"><b>Registrarse</b></button>
        <div class="link-container">
            <a href="login.php" class="link">¿Ya tienes cuenta?</a>
        </div>
      </form>
    </div>
    <script>
    document.getElementById('register-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario por defecto

        const email = document.getElementById('email').value.trim();
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();
        const confirmPassword = document.getElementById('confirmPassword').value.trim();

        if (!email || !username || !password || !confirmPassword) {
            alert('Por favor, completa todos los campos.');
            return;
        }

        if (password !== confirmPassword) {
            alert('Las contraseñas no coinciden.');
            return;
        }

        // Si todo está bien, enviar el formulario
        this.submit();
    });

    // Mostrar alertas basadas en el parámetro "status"
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    if (status === '1') {
        alert('Por favor, completa todos los campos.');
    } else if (status === '2') {
        alert('Las contraseñas no coinciden.');
    } else if (status === '3') {
        alert('Método de solicitud inválido.');
    } else if (status === '4') {
        alert('Error al registrar. Por favor, inténtalo de nuevo.');
    } else if (status === '5') {
        alert('El email ya está registrado. Por favor, utiliza otro email.');
    }
    </script>
</body>
</html>