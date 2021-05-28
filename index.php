<?php


 /**
 * Front to the Themes application. 
 * This file doesn't do anything, but loads index.php which does and tells Themes to load the theme.
 *
 * @package Themes
 */

/**
 * Tells Themes to load the Themes theme and output it.
 *
 * @var bool
 */


require(dirname(__FILE__) . '/includes/templates/index.php');
