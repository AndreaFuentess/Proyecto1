<?php
session_start();

if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] != '') {
    include 'conexion.php';

    $var2 = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $var3 = mysqli_real_escape_string($conexion, $_POST['email']);

    $sentencia = "INSERT INTO usuarios (nombre, email) VALUES ('$var2', '$var3')";

    if (mysqli_query($conexion, $sentencia)) {
        header("Location: visualizar_ui.php");
        exit();
    } else {
        echo "Error: " . $sentencia . "<br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
} else {
    header("Location: index.php");
    exit();
}
?>
