<?php
//conectar con la BD
$bd=new DBC();
/*$bd->lanzarConsulta("SELECT `id`, `apodo`, `patas`, `color`, `sonido` FROM `animales`.`animales` WHERE  `id`=1;");
echo "consulta lanzada"*/
$array_animales = $bd->getAnimales();

?>
<h3> Galería </h3>
<section class="contenedor_animales">
    <?php
            for ($i=0; $i<count($array_animales); $i++){
                $animal = $array_animales[$i];
                echo "<div class='carta_animal'>";
                echo "<img src='$animal->img_url'>";
                echo "<h4>$animal->apodo</h4>";
                echo "<div class='icon_title'> Color <i data_icon_name='contrast-fill' style='color: $animal->color;'></i> </div>";
                echo "<h5>~ $animal->sonido</h5>";
                echo"</div>";
            }
    ?>
</section>