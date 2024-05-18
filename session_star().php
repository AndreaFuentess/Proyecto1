<?php
session_start();
$_SESSION["usuario"] = "usuario_ejemplo"; // Establece el nombre del usuario después de una autenticación exitosa
header("Location: index.php");
?>
