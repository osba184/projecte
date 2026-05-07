<?php
// config/db.php
$host = 'db'; // Nombre del servicio en Docke 
$db = 'asix'; // Nombre de la base de datos
$user = 'root'
$pass = 'root';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
 // Lanza excepciones en caso de error SQL
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 // Devuelve filas como arrays asociativos
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 // Desactiva emulación de prepared statements (más seguro)
 PDO::ATTR_EMULATE_PREPARES => false,
];
try {
 $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
 die('Error de connexió: ' . $e->getMessage());
}

