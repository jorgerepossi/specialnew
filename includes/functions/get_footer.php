<?php

function get_footer()
{
    $name = 'Footer.php';
    $error =  '<div class="alert"> ¡Hubo un error inesperado! </div>';
    $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../') . TEMPLATEPATH . $name;
    if (file_exists($root)) {
        return show_template($root);
    } else {
        echo $error;
    }
}
