<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../register-form.php?status=3'); // Método inválido
    exit();
}

if (empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
    header('Location: ../register-form.php?status=1'); // Campos incompletos
    exit();
}

if ($_POST['password'] !== $_POST['confirmPassword']) {
    header('Location: ../register-form.php?status=2'); // Contraseñas no coinciden
    exit();
}

$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$db = new Database();
$pdo = $db->getConnection();

// Primero, verificamos si el email ya existe
$checkEmailQuery = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
$checkEmailStmt = $pdo->prepare($checkEmailQuery);
$checkEmailStmt->bindValue(':email', $email);
$checkEmailStmt->execute();

if ($checkEmailStmt->fetchColumn() > 0) {
    // El email ya existe
    header('Location: ../register-form.php?status=5'); // Email ya registrado
    exit();
}

// Si el email no existe, procedemos con la inserción
$query = "INSERT INTO usuarios (email, username, password) VALUES (:email, :username, :password)";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $password);

try {
    $stmt->execute();
    header('Location: ../login.php?status=0'); // Registro exitoso
} catch (PDOException $e) {
    // Log the error for debugging
    error_log("Error en registro: " . $e->getMessage());
    header('Location: ../register-form.php?status=4'); // Error al registrar
}
exit();
?>

