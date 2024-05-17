<?php
$servername = "servidorproyecto.mysql.database.azure.com";
$username = "proy2";
$password = "Edgar270901##$";
$dbname = "dbproyecto2";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
