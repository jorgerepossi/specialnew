<?php

function get_header($name = null)
{

    if ('' !== $name) {
        $name = 'Header.php';
    } else {
        $name = 'Header-'{
            $name} . 'php';
    }

    $error =  '<div class="alert"> ¡Hubo un error inesperado! </div>';
    $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../') . TEMPLATEPATH . $name;
    if (!file_exists($root)) {
        throw new Exception($error);
    } else {
        return $root;
    }
}
try {
    show_template(get_header());
} catch (Exception $e) {
    echo  $e->getMessage();
}
