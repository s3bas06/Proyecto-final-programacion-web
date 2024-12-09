<?php
session_start();
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método inválido']);
    exit();
}

if (empty($_POST['email']) || empty($_POST['password'])) {
    echo json_encode(['success' => false, 'message' => 'Por favor, completa todos los campos.']);
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
    echo json_encode(['success' => true, 'message' => 'Inicio de sesión exitoso']);
} else {
    echo json_encode(['success' => false, 'message' => 'Las credenciales ingresadas no son correctas. Por favor, verifica tu email y contraseña e inténtalo de nuevo.']);
}
?>