<!-- /**
* Proper way to enqueue scripts and styles
*/ -->
<?php
function wpdocs_mounirThem_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "./assets/css/bootstrap.min.css");

    wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpdocs_mounirThem_scripts');

//   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
//     <link rel="stylesheet" href="assets/css/templatemo.css">
//     <link rel="stylesheet" href="assets/css/custom.css">

//     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
//     <link rel="stylesheet" href="assets/css/fontawesome.min.css">
