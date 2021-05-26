<?php

include 'default-constant.php';

include   realpath(__DIR__ . DIRECTORY_SEPARATOR . '../') . '/layouts/Layout.php';

include   realpath(__DIR__ . DIRECTORY_SEPARATOR . '../') . '/functions/index.php';

$template = new Layout;
?>

<?php

//  Header
get_header();

$template->render('includes/carousel-hero/index');

// Footer
get_footer();
?>
 
