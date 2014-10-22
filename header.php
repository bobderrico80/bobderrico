<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width"/>
  <title>
      <?php 
        bloginfo('name'); 
        echo ' &ndash; ';
        bloginfo('description');
        wp_title(' - ',TRUE,'left');
      ?>
    </title>
  </head>
  <body class="<?php body_class(); ?>">
    <div class="container">
        <div class="header">
          <div class="headerTitleArea">
            <h1 class="headerTitle"><a href="<?php bloginfo('url');?>" title="home"><?php bloginfo('name'); ?></a></h1>
            <h2 class="headerSubtitle"><?php bloginfo('description'); ?></h2>
          </div>
          <div class="headerNavbarArea">
            <div class="navbar">
                <?php 
                  wp_list_categories(array('title_li'=>null, 'exclude'=>'1'));                  
                ?>
            </div>
          </div>
        </div>
        
     
