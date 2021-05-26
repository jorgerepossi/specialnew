<?php

include '../layouts/Layout.php';
include 'default-constant.php';
include '../functions/index.php';

$template = new Layout;
?>

<?php

//  Header
get_header();

$template->render('includes/carousel-hero/index');

// Footer
get_footer();

?>
</body>