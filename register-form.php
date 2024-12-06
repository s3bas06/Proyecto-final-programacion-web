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
          <input type="email" placeholder="Email" name="email">
        </div>
        <div class="input-group">
          <input type="text" placeholder="Nombre de usuario"  name="username">
        </div>
        <div class="input-group">
          <input type="password" placeholder="Contraseña"  name="password">
        </div>
        <div class="input-group">
          <input type="password" placeholder="Confirmar contraseña"  name="confirmPassword">
        </div>
        <button type="submit" class="btn-primary"><b>Registrarse</b></button>
        <div class="link-container">
            <a href="login.php" class="link">¿Ya tienes cuenta?</a>
        </div>
      </form>
    </div>
    <script>
    document.getElementById('register-form').addEventListener('submit', function(event) {
    const email = document.getElementById('email').value.trim();
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();

    if (!email || !username || !password || !confirmPassword) {
      event.preventDefault();
      alert('Por favor, completa todos los campos.');
      return;
    }
    if (password !== confirmPassword) {
      event.preventDefault();
      alert('Las contraseñas no coinciden.');
    }
  });
  </script>
</body>
</html>