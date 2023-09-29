<?php
    $login_header_content = "<a href='index.php?section=login'>Login</a>";
    session_start();
    if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
        $login_header_content = "<a class='icon_title' href='index.php?section=login&action=logout'><i data_icon_name='logout'></i>Hola ".$usuario->nombre.", ¿quieres cerrar sesión?</a>";
    }
?>
<header>
        <aside>
            
            Animalit<div class="app_logo"></div>s.com
        </aside>
        <nav>
            <a href='index.php'>
                Galería
            </a>
            <?php echo $login_header_content ?>

        </nav>
        <?php
            if(isset($_SESSION['mensaje'])){
                $mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
                echo "<section class='mensaje_section'><div class='icon_title'><i data_icon_name='" . $mensaje->icon_name . "'></i>" . $mensaje->texto . "</div></section>";
            } else{
                //echo "<section class='mensaje_section'> No Messages :) </section>";
            }
        ?>
</header>