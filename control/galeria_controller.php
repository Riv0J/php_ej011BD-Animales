<?php
//aunque el controller no haga nada, es conveniente para futuras amplicaciones
//Contactar con el modelo (BD...)
//Obtener los recursos necesarios
//$db->getUltimoAnimal();
$busqueda = '';
if(isset($_GET['busqueda'])){
    $busqueda = $_GET['busqueda'];
}
$bd=new DBC();
$array_animales = $bd->getAnimales($busqueda);

require_once "connection/DBCAnimales.class.php";
$array_animales_alt = DBCAnimales::getAnimales_2($busqueda);



//Reenviar esos recursos a la vista view_inicio
include "view/galeria.php";
?>