<?php
    session_start();
    require_once('database.php');
    
    if(!$_SERVER['REQUEST_METHOD'] === "POST"){
        echo "no jalo";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $confirmPassword = $_POST['confirmPassword'];
        
        if($password === $confirmPassword){
            $db = new Database();
            $pdo = $db->getConnection();
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO usuarios (username, password, email) VALUES (:username, :password, :email)";

            $stmt = $pdo->prepare($query);
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':password', $hashedPassword);
            $stmt->bindValue(':email', $email);

            $stmt->execute();
            header('location:inicio.php');
        } else{
            header('location:register_form.php?status=3');
        }
    }
?>