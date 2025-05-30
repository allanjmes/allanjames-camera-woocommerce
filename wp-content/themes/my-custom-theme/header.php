<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require get_template_directory() . '/src/global/head.php';
        wp_head();
    ?>
</head>
<body <?php body_class('bg-secondary font-archivo'); ?>>
<!-- <body <?php body_class('loading bg-secondary font-archivo'); ?>> -->

<!-- <div id="loading-container" class="bg-secondary h-screen w-screen z-9999 fixed">
    <div class="flex justify-center items-center h-full">
        <h1 class="text-primary text-9xl font-extrabold"><span id="loading-count">0</span></h1>
    </div>
</div> -->

<?php
    require get_template_directory() . '/src/global/header.php';
?>