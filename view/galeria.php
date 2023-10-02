<h3> Galería </h3>
<form class="contenedor_buscador">
    <label for="busqueda">Buscar animalito por apodo! o   <a class="button_submit" href='index.php'>Ver todos los animalitos</a></label>
    <div class="contenedor_busqueda"><?php echo "<input type='text' name='busqueda' id='busqueda' value='".$busqueda."'>" ?> <button type="submit">Buscar</button></div>
    
</form>
<section class="contenedor_animales">
    <?php
    $cantidad = count($array_animales);
    if($cantidad >0){
        for ($i=0; $i<$cantidad; $i++){
            $animal = $array_animales[$i];
            echo "<div class='carta_animal'>";
            echo "<img src='$animal->img_url'>";
            echo "<h4>$animal->apodo</h4>";
            echo "<div class='icon_title'> Color <i data_icon_name='contrast-fill' style='color: $animal->color;'></i> </div>";
            echo "<h5>~ $animal->sonido</h5>";
            if ($usuario != null){
                echo "<form action = 'index.php?section=edit_animal' method='POST' class='admin_menu'>";
                echo "<input type='hidden' name='id_animal' value='$animal->id'>";
                echo "<button class='icon_title' type='submit' name='action' value='delete'><i data_icon_name='delete'></i></button>";
                echo "</form>";
            }
            echo"</div>";
            
        }
    } else{
        echo "<div class='carta_animal'>";
        echo "<img src='client/img/default.png'>";
        echo "<h5>Lo sentimos, no hay animalitos que concuerden con '".$busqueda."'</h5>";
        echo "<a class='button_submit' href='index.php'>Ver todos los animalitos</a></label>";
        echo"</div>";
    }

    ?>
</section>