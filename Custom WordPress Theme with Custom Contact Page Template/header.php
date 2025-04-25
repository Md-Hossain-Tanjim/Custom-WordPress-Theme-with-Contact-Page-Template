<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h2><?php bloginfo('name'); ?></h2>
        <nav>
            <?php wp_nav_menu(['theme_location' => 'main']); ?>
        </nav>
    </header>
