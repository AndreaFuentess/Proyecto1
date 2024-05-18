<?php
include 'conexion.php';

// Consultar datos de la tabla
$sql = "SELECT nombre, email FROM usuarios";
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #cccccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Usuarios Registrados</h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
            echo "<table><tr><th>Nombre</th><th>Email</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . htmlspecialchars($row["nombre"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No hay registros.";
        }
        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>
