<?php
    class DBCAnimales extends DBC{

        public static function getAnimalitos($busqueda){
            $dbc = DBC::getNewConnection();
            if(!$dbc){
                return null;
            }
            $sql_query = "select * from animales where activo = 1";
            if($busqueda!=''){
                $sql_query = $sql_query." and apodo like '%".$busqueda."%'";
            }
            $result=$dbc->sql_query($sql_query.';');
            $animales = array();
            while (($fila = mysqli_fetch_array($result)) != null) {
                extract($fila); //extraer todas las claves del mapa, y que existan las variables
                $animal = new Animal($id, $apodo, $color, $patas, $sonido, 'client/img/' .$img_url, $activo);
                $animales[] = $animal;
            }
            $dbc->desconectar();
            return $animales;

        }
        public static function resetAnimalitos(){
            $dbc = DBC::getNewConnection();
            if(!$dbc){
                return null;
            }
            $result=$dbc->sql_query("update animales set activo = 1");
            $dbc->desconectar();
            return $result;

        }
        public static function deleteAnimal($id_animal){
            $dbc = DBC::getNewConnection();
            if(!$dbc){
                return null;
            }
            $sql_query = "update animales set activo = 0 where id = ".$id_animal.";";
            $result=$dbc->sql_query($sql_query);
            $dbc->desconectar();
            return $result;
        }
        public static function getAnimalById($id_animal){
            $dbc = DBC::getNewConnection();
            if(!$dbc){
                return null;
            }
            $result=$dbc->sql_query("SELECT * from animales WHERE id = ".$id_animal.";");
            $fila = mysqli_fetch_array($result);
            if($fila != null){
                extract($fila);
                return new Animal($id, $apodo, $color, $patas, $sonido, 'client/img/' .$img_url, $activo);
            }
            return null;
        }
        public static function updateAnimal($animal){
            $dbc = DBC::getNewConnection();
            if(!$dbc){
                return null;
            }
            $apodo = $animal->apodo;
            $patas = $animal->patas;
            
            $color = $animal->color;
            $id_animal = $animal->id;
            $activo = $animal->activo;
            $img_url = $animal->img_url;

            $result = $dbc->sql_query("UPDATE animales SET apodo = '$apodo', color = '$color', patas = $patas  WHERE id = $id_animal;");

            return $result;
        }

    }

?>