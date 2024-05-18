<?php
$conexion = mysqli_init();
mysqli_ssl_set($conexion, NULL, NULL, "ssl/BastimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conexion, "servidorproyec.mysql.database.azure.com", "admi3", "Anddreamariana34", "dbproyecto2", 3306, MYSQLI_CLIENT_SSL) or die("Error al conectar: " . mysqli_error($conexion));
?>

