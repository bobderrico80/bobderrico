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
    <meta name="description", content="My blog about my journey as a web developer. Read to find out how I got into web development, my skills, and various projects I am working on and have completed. Join the discussion by commenting!"/>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56706208-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body class="<?php body_class(); ?>">
    <div class="container">
        <div class="header">
          <div class="headerTitleArea">
            <h1 class="headerTitle"><a href="<?php bloginfo('url');?>" title="home"><?php bloginfo('name'); ?></a></h1>
            <h2 class="headerSubtitle"><?php bloginfo('description'); ?></h2>
          </div>
        </div>
        
     
