<?php
    require_once "model/Animal.class.php";
    require_once "model/Usuario.class.php";
    class DBC{
        const HOST="localhost";
        const BD="animales";
        const USER="admin_animales";
        const PASS="admin_animales";

        public $conexion;
        
        function __construct(){
            $this->conectar();
        }

        function conectar(){
            $this->conexion=mysqli_connect(self::HOST, self::USER, self::PASS,self::BD) or die("Error al ejecutar");
            //echo "Conectado!!!";
            //echo "<br>";
        }

        function desconectar(){
            mysql_close($this->conexion);
        }
        function sql_query($sql_select_query){
            $tipoSQL = substr($sql_select_query,0,6);
            $result=mysqli_query($this->conexion,$sql_select_query);
            if (strtoupper($tipoSQL)=="SELECT") {
                //Bidireccional
                return $result;
            } else {
                //delete, update, insert...
            }
        }
        function executeInsert($sql_insert){

        }

        function getAnimal($id_animal){
        }
        function validarCredenciales($nombre, $pass){
            $result=$this->sql_query("SELECT * from usuarios WHERE nombre = '".$nombre."' and pass = '".$pass."';");
            $fila = mysqli_fetch_array($result);
            if($fila != null){
                extract($fila);
                return new Usuario($id,$nombre);
            }
            return null;
        }
        function getAnimales($busqueda){
            $sql_query = "select * from animales";
            if($busqueda!=''){
                $sql_query = $sql_query." where apodo like '%".$busqueda."%'";
            }
            $result=$this->sql_query($sql_query.';');
            $animales = array();
            while (($fila = mysqli_fetch_array($result)) != null) {
                extract($fila); //extraer todas las claves del mapa, y que existan las variables
                $animal = new Animal($id, $apodo, $color, $patas, $sonido, 'client/img/' .$img_url);
                $animales[] = $animal;
            }
            return $animales;

        }
    }
?>