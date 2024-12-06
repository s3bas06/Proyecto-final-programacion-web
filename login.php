<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Inicio de Sesión</h2>
        <form id="login-form" action="php_codes/login-action.php" method="POST">
            <div class="input-group">
                <input type="email" id="email" placeholder="Email" name="email">
            </div>
            <div class="input-group">
                <input type="password" id="password" placeholder="Contraseña" name="password">
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="show-password">
                <label for="show-password"><b>Mostrar contraseña</b></label>
            </div>
            <button type="submit" class="btn-primary"><b>Acceder</b></button>
            <div class="link-container">
                <a href="#" class="link">Olvidaste tu contraseña?</a>
                <a href="register-form.php" class="link">Aún no tienes cuenta?</a>
            </div>
        </form>
    </div>
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('show-password');

        showPasswordCheckbox.addEventListener('change', function() {
            passwordInput.type = this.checked ? 'text' : 'password';
        });

        document.getElementById('login-form').addEventListener('submit', function(event) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            if (!email || !password) {
                event.preventDefault();
                alert('Por favor, completa todos los campos.');
            }
        });

        // Mostrar alertas basadas en el parámetro "status"
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        if (status === '1') {
            alert('Por favor, completa todos los campos.');
        } else if (status === '3') {
            alert('Las credenciales ingresadas no son correctas. Por favor, inténtalo de nuevo.');
        }
    </script>
</body>
</html>
