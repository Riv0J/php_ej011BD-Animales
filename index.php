<?php
// Asigna un valor por defecto a "section"
$section = "galeria";

// Verifica si el parámetro "section" está presente en la URL
if (isset($_GET['section'])) {
    // Si se proporciona en la URL, sobrescribe el valor de "section"
    $section = $_GET['section'];
}
include_once "connection/DBC.class.php";
include_once "model/Animal.class.php";

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