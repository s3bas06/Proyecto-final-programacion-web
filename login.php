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
      <form action="php_codes/login-action.php" method="POST">
        <div class="input-group">
          <input type="email" placeholder="Email" name="email">
        </div>
        <div class="input-group">
          <input type="password" id="password" placeholder="Contraseña" name="password">
        </div>
        <div class="checkbox-group">
          <input type="checkbox" id="show-password">
          <label for="show-password"><b>Mostrar contraseña</b></label>
        </div>
        <a href="index.html"><button class="btn-primary"><b>Acceder</b></button></a>
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
            if (this.checked) {
                passwordInput.type = 'text'; 
            } else {
                passwordInput.type = 'password'; 
            }
        });
    </script>
</body>
</html>