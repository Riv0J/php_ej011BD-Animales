<?php

    class DBCAnimales extends DBC{

        public static function getAnimales_2($busqueda){
            $dbc = DBC::getNewConnection();
            if(!$dbc){
                return null;
            }
            $sql_query = "select * from animales";
            if($busqueda!=''){
                $sql_query = $sql_query." where apodo like '%".$busqueda."%'";
            }
            $result=$dbc->sql_query($sql_query.';');
            $animales = array();
            while (($fila = mysqli_fetch_array($result)) != null) {
                extract($fila); //extraer todas las claves del mapa, y que existan las variables
                $animal = new Animal($id, $apodo, $color, $patas, $sonido, 'client/img/' .$img_url);
                $animales[] = $animal;
            }
            $dbc->desconectar();
            return $animales;

        }

    }

?>