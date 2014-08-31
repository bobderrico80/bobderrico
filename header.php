<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php get_stylesheet_uri();?>">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width"/>
        <title><?php bloginfo('name'); wp_title(" - ",TRUE,'left')?></title>
    </head>
    <body class="<?php body_class(); ?>">
        <div class="pageWrapper">
            <div class="header">
                <h1><?php bloginfo('name') ?></h1>
            </div>
            <div class="pageNav">
                <?php wp_page_menu(array(
                    'depth' => 1,
                    'show_home' => TRUE
                ));?>
            </div>