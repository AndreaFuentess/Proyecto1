<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Captura</title>
</head>
<body>
    <h1>Captura de Informacion</h1>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    <a href="consultar.php" class="button">Consultar</a>
</body>
</html>
