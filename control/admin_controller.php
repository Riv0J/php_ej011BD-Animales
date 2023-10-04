<?php
//guardia de usuario
if(isset($_SESSION['usuario']) == false || $_SESSION['usuario'] == null){
    $_SESSION['mensaje'] = new Mensaje('¡Logéate para acceder a esta sección mirey!');
    header('Location: index.php?section=login');
    exit();
}

$action = '';
if(isset($_POST['action'])){
    $action = $_POST['action'];
}

$success == false;
switch($action){
    case 'reset_animales':
        $success = DBCAnimales::resetAnimalitos($id_animal);
        if($success === true){
            $_SESSION['mensaje'] = new Mensaje('¡Animalitos restablecidos!', 'success');
        } else {
            $_SESSION['mensaje'] = new Mensaje('No se ha podido hacer reset de los animales, consultar la BD');
        }
        break;
    case 'x':
        break;
    default:
        $_SESSION['mensaje'] = new Mensaje('Selecciona una accion admin válida, inténtalo de nuevo');
        break;
}
header('Location: index.php?section=galeria');
?>