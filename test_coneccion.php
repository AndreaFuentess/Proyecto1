<?php
$servername = "servidorproyec.mysql.database.azure.com";
$username = "admin3";
$password = "Andreamariana34";
$dbname = "dbproyecto2";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa<br>";
}

// Verificar permisos de la base de datos
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result) {
    echo "Permisos verificados exitosamente<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Tabla: " . $row["Tables_in_$dbname"] . "<br>";
    }
} else {
    echo "Error verificando permisos: " . $conn->error;
}

$conn->close();
?>
