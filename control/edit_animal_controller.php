<?php
//guardias
if(isset($_SESSION['usuario']) == false || $_SESSION['usuario'] == null){
    $_SESSION['mensaje'] = new Mensaje('¡Logéate para acceder a esta sección mirey!');
    header('Location: index.php?section=login');
    exit();
}

if(isset($_POST['id_animal']) == false){
    $_SESSION['mensaje'] = new Mensaje('Ocurrió un error[ID_ERROR], selecciona de nuevo otro animal!');
    header('Location: index.php?section=galeria');
    exit();
}

$usuario = $_SESSION['usuario'];
$id_animal = $_POST['id_animal'];

$action = 'delete';
if(isset($_SESSION['action'])){
    $action = $_SESSION['action'];
}

$success == false;
switch($action){
    case 'delete':
        $success = DBCAnimales::deleteAnimal($id_animal);
        if($success === true){
            $_SESSION['mensaje'] = new Mensaje('Animalito eliminado sin piedad =(', 'success');
        } else {
            $_SESSION['mensaje'] = new Mensaje('No se ha podido eliminar el animalito');
        }
        break;
    case 'edit':
        break;
    default:
        break;
}
header('Location: index.php?section=galeria');
//include "view/edit.php";
?>