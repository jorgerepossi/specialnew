<?php


/** 
 * Load Header template 
 * Template by Jo Repossi
 * @since 2021
 * @version 1.0.0
 * AutoSpecil S.A.
 * 
 * Base $name Header.php
 * @param string
 *
*/



function get_header($name = null)
{

    $name = (string) $name;
    if ('' !== $name) {
        $header  = "Header-{$name}.php";
    } else {
        $header = 'Header.php';
    }
    $error =  '<div class="alert"> ¡Hubo un error inesperado! </div>';
    $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../') . TEMPLATEPATH . $header;
     if (!file_exists($root)) {
        echo $error;
    } else {
        show_template($root);
    }
}


/** 
 * Load Footer template 
 * Template by Jo Repossi
 * @since 2021
 * @version 1.0.0
 * AutoSpecil S.A.
 * 
 * Base $name Footer.php
 * @param string | undefinded
 * */


function get_footer($name = null)
{

    $error =  '<div class="alert"> ¡Hubo un error inesperado! </div>';
    $name = (string) $name;
    if ('' !== $name) {
        $footer  = "Footer-{$name}.php";
    } else {
        $footer = 'Footer.php';
    }
    $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../') . TEMPLATEPATH . $footer;


    if (!file_exists($root)) {
        echo $error;
    } else {
        show_template($root);
    }
}
