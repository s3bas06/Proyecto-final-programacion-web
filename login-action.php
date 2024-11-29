<?php
session_start();
require_once('database.php');

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location:login.php?status=3');
} else {
    if(!isset($_POST['email']) || !isset($_POST['password'])) {
        header('location:login.php?status=1');
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $db = new Database();
        $pdo = $db->getConnection();
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() === 1 && password_verify($password, $row['password'])) {
            $_SESSION['usuario_id'] = $row['id'];
            header('location:inicio.php');
        } else {
            header('location:login.php?status=3');
        }
    }
}
?>