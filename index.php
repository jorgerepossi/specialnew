<?php

include 'includes/layouts/Layout.php';
include 'includes/layouts/config.php';


$template = new Layout;


?>
<!DOCTYPE html>
<html lang="es" class="no-js" xmlns:og="http://opengraphprotocol.org/schema/">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/estilos.css">
<?php
$template::TopHeader();
?>

<body>
    <?php

    //  Header
    $template::Header();


    // Footer
    $template::Footer();

    ?>
</body>