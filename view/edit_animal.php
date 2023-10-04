<?php

$id = $animal->id;
$apodo = $animal->apodo;
$patas = $animal->patas;
$color = $animal->color;
$activo = $animal->activo;
$img_url = $animal->img_url;

?>
<h3> Edit Animal </h3>
<style>
    .edit_menu {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
        gap: 0.5rem
    }

    .edit_menu h3 {
        text-align: left;
    }
    .form_submit_options{
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 3rem;
    }
</style>

<form action='index.php?section=edit_animal' method='POST' class='edit_menu'>
    <input type='hidden' name='id_animal' value='<?php echo $animal->id; ?>'>
    <h3>Edit <?php echo $apodo; ?> con ID <?php echo $id; ?></h3>
    <label for='apodo'>Apodo:</label>
    <input type='text' name='apodo' value='<?php echo $apodo; ?>'>
    <label for='patas'>Número de Patas:</label>
    <input type='number' name='patas' value='<?php echo $patas; ?>'>
    <label for='color'>Color:</label>
    <input type='color' name='color' value='<?php echo $color; ?>'>
    <label for='activo'>Activo:</label>
    <input type='number' name='activo' value='<?php echo $activo; ?>'>
    <div class="form_submit_options">
        <button class='icon_title' type='submit' name='action' value='edit_animal_form'>Enviar</button>
        <button class='icon_title' type='submit' name='cancel' value='cancel'>Cancelar</button>
    </div>
</form>