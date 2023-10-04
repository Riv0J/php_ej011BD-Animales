<?php
//guardia de usuario en la session
if(isset($_SESSION['usuario']) == false || $_SESSION['usuario'] == null){
    $_SESSION['mensaje'] = new Mensaje('¡Logéate para acceder a esta sección mirey!');
    header('Location: index.php?section=login');
    exit();
}

//guardia de id animal en el form de galeria
if(isset($_POST['id_animal']) == false){
    $_SESSION['mensaje'] = new Mensaje('Ocurrió un error[ID_ERROR], selecciona de nuevo otro animal!');
    header('Location: index.php?section=galeria');
    exit();
}

$usuario = $_SESSION['usuario'];
$id_animal = $_POST['id_animal'];

$action = 'delete';
if(isset($_POST['action'])){
    $action = $_POST['action'];

}
$animalito = null;
$redirect_section = 'galeria';
switch($action){
    case 'delete':
        $success = DBCAnimales::deleteAnimal($id_animal);
        if($success === true){
            $_SESSION['mensaje'] = new Mensaje('Animalito eliminado sin piedad =(', 'success');
        } else {
            $_SESSION['mensaje'] = new Mensaje('No se ha podido eliminar el animalito');
        }
        break;
    case 'edit_animal_section':
        $animal =  DBCAnimales::getAnimalById($id_animal);
        if($animal != null){
            include "view/edit_animal.php";
        } else{
            $_SESSION['mensaje'] = new Mensaje('Hubo un error tratando de consultar ese animal');
        }
        exit();
        break;
    case 'edit_animal_form';
        $animal =  DBCAnimales::getAnimalById($id_animal);
        if($animal == null){
            $_SESSION['mensaje'] = new Mensaje('Hubo un error tratando de consultar ese animal');
            header('Location: index.php?section='.$redirect_section);
            exit();
        }
        $editado = false;
        if(isset($_POST['apodo']) && $_POST['apodo'] != ""){
            $animal->apodo = $_POST['apodo'];
            $editado = true;
        }
        if(isset($_POST['patas']) && $_POST['patas'] != ""){
            $animal->patas = $_POST['patas'];
            $editado = true;
        }
        if(isset($_POST['color']) && $_POST['color'] != ""){
            $animal->color = $_POST['color'];
            $editado = true;
        }
        $animalito = $animal;
        //$consulta = "UPDATE animales SET apodo = '$animal->apodo', patas = $animal->patas WHERE id = $animal->id";
        
        if($editado == true){
            $success = DBCAnimales::updateAnimal($animal);
            if($success === true){
                $_SESSION['mensaje'] = new Mensaje('Animalito actualizado', 'success');
            } else {
                $_SESSION['mensaje'] = new Mensaje('No se ha podido actualizar el animalito');
            }
        } else {
            $_SESSION['mensaje'] = new Mensaje('Los campos son iguales que antes', 'success');
        }
        
        break;
    case 'cancel';
        break;
    default:
        break;
}
header('Location: index.php?section='.$redirect_section);
//include "view/galeria.php";

?>