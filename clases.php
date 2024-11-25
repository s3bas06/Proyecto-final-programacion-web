<?php
    class Database{
        private $host = 'localhost';
        private $db_name = 'REGISTRO';
        private $db_user = 'root';
        private $db_password = 'root'; #Esto solo si realmente tengo contrasenia
        private $chatset = 'utf8mb4';

        public function getConnection(){
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
            try{
                #$pdo = new PDD($dsn, $this->db_user,$this->db_password); Este es para tener contrasenia
                $pdo = new PDD($dsn, $this->db_user);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch(PDDException $e){
                die("Ocurrio un error ". $e->getMessage());  
            }
        }
    }
?>