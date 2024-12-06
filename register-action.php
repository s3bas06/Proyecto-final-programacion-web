<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location:register-form.php?status=3'); // Método inválido
    exit();
}

if (empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
    header('location:register-form.php?status=1'); // Campos incompletos
    exit();
}

if ($_POST['password'] !== $_POST['confirmPassword']) {
    header('location:register-form.php?status=2'); // Contraseñas no coinciden
    exit();
}

$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$db = new Database();
$pdo = $db->getConnection();
$query = "INSERT INTO usuarios (email, username, password) VALUES (:email, :username, :password)";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $password);

if ($stmt->execute()) {
    header('location:login.php?status=0'); // Registro exitoso
} else {
    header('location:register-form.php?status=4'); // Error al registrar
}
?>
