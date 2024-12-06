<?php
session_start();
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location:login.php?status=3'); // Método inválido
    exit();
}

if (empty($_POST['email']) || empty($_POST['password'])) {
    header('location:login.php?status=1'); // Campos incompletos
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$db = new Database();
$pdo = $db->getConnection();
$query = "SELECT * FROM usuarios WHERE email = :email";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':email', $email);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($stmt->rowCount() === 1 && password_verify($password, $row['password'])) {
    $_SESSION['usuario_id'] = $row['id'];
    header('location:inicio.php');
    exit();
} else {
    header('location:login.php?status=3'); // Credenciales inválidas
    exit();
}
?>
