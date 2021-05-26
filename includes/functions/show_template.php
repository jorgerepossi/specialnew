<?php

$error =  '<div class="alert"> ¡Hubo un error inesperado dos! </div>';
function show_template($name)
{

    if ($name !== '') {
        $path = $name;
    }
    include $path;
}
