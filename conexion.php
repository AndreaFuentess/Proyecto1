<?php
$servername = "servidorproyec.mysql.database.azure.com";
$username = "admi3";
$password = "Andreamariana34";
$dbname = "dbproyecto2";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
