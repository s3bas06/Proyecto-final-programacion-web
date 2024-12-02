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
      <form action="php_codes/register-action.php" method="POST">
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
        <a href="index.html"><button class="btn-primary"><b>Registrarse</b></button></a>
        <div class="link-container">
            <a href="login.php" class="link">¿Ya tienes cuenta?</a>
        </div>
      </form>
    </div>
</body>
</html>