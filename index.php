<?php
// Asigna un valor por defecto a "section"
$section = "galeria";

// Verifica si el parámetro "section" está presente en la URL
if (isset($_GET['section'])) {
    // Si se proporciona en la URL, sobrescribe el valor de "section"
    $section = $_GET['section'];
}
require_once "connection/DBC.class.php";
require_once "model/Animal.class.php";
require_once "model/Mensaje.class.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ver Animales | Rivo</title>
    <link rel='stylesheet' href="./client/css/normalize.css">
    <link rel='stylesheet' href="./client/css/styles.css">
    <script src="./client/js/Icons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'view/header.php';
    ?>
    <main>
        <?php
            include 'view/' .$section. '.php';
        ?>
    </main>
</body>
<script>
    populateIconClasses();
</script>
</html>