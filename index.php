<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Credenciales almacenadas en el código
    $correct_username = 'Edgar';
    $correct_password = 'Edgar##$';

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
        header('Location: formulario.php');
        exit;
    } else {
        $error_message = 'Usuario o contraseña incorrectos';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="index.php" method="POST">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Iniciar sesión"><br><br>
    </form>
    <?php
    if (isset($error_message)) {
        echo '<p style="color:red;">' . $error_message . '</p>';
    }
    ?>
</body>
</html>
