<?php
$host = 'db'; 
$dbname = 'crud_db';
$user = 'usuario_db';
$pass = 'password_db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL
    )");
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>