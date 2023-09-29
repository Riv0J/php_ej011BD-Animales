<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Se ha enviado un formulario POST, procesa los parámetros
    if (isset($_POST['nombre']) && isset($_POST['pass'])) {
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];

        $bd = new DBC();
        $redirect_url = '../view/login.php';
        $usuario = $bd->validarCredenciales($nombre, $pass);
        
        if ($usuario != null) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $redirect_url = '../index.php';
        }

        header('Location: ' . $redirect_url);
        exit; // Termina el script después de redireccionar
    } else {
        // Faltan parámetros POST, puedes mostrar un mensaje de error si lo deseas
        echo '<p>Datos incorrectos</p>';
    }
}
?>

<h3> Login </h3>
<form action="/verificar_login.php" method='POST'>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <label for="pass">Contraseña</label> <!-- Cambiado de "nombre" a "pass" -->
    <input type="password" name="pass">
    <button type="submit">Iniciar sesión</button>
</form>