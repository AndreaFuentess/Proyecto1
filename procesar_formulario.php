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
} else {
    $conexion_exitosa = "Conexión exitosa";
}

// Verificar que el método de solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && isset($_POST['email'])) {
        // Escapar y sanitizar datos del formulario
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $email = $conn->real_escape_string($_POST['email']);

        $datos_recibidos = "Datos recibidos: Nombre = $nombre, Email = $email";

        // Insertar datos en la base de datos
        $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

        if ($conn->query($sql) === TRUE) {
            $resultado = "Nuevo registro creado exitosamente";
        } else {
            $resultado = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $resultado = "Datos del formulario no recibidos.";
    }
} else {
    $resultado = "Método de solicitud no es POST.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Procesar Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 16px;
            color: #333;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px #999;
        }
        .button:hover {
            background-color: #45a049;
        }
        .button:active {
            background-color: #45a049;
            box-shadow: 0 2px #666;
            transform: translateY(2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Procesar Formulario</h1>
        <?php
        if (isset($conexion_exitosa)) {
            echo "<p>$conexion_exitosa</p>";
        }
        if (isset($datos_recibidos)) {
            echo "<p>$datos_recibidos</p>";
        }
        if (isset($resultado)) {
            echo "<p>$resultado</p>";
        }
        ?>
        <br><br>
        <a href="formulario.php" class="button">Regresar</a>
    </div>
</body>
</html>
