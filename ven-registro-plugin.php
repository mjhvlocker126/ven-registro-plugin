<?php
/**
* Plugin name: Ven Registro Plugin Form
* Author: Mario Hernandez
* Description: Plugin para registro de usuario, creando numero de Buzon usando shortcode: [ven-registro-plugin]
*/
add_shortcode ('ven-registro-plugin', 'VEN_registro_Plugin');

function VEN_registro_Plugin() {
    ob_start();
    ?>
        <form action="<?php get_the_permalink(); ?>" method="post" class="Registro">
            <div class="form-input">
                <label for="Nombre">Nombre</label>
                <input type="text" name="nombre" required="required">
            </div>

            <div class = "form-input">
                <input type="submit" value ="Enviar">
            </div>
        </form> 
    <?php
    return ob_get_clean();    
}