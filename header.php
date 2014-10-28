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
          <?php
            $projects='';
            $skills='';
            $about='';
            $mystory='';
            switch (get_slug()) {
            case 'projects':
              $projects='current';
              break;
            case 'skills':
              $skills='current';
              break;
            case 'about':
              $about='current';
              break;
            case 'my-story':
              $mystory='current';
            }
          ?>
            <div class="navbar">
              <ul>
                <li class="<?php echo $projects; ?>">
                  <a href="/category/projects/" title="Projects">Projects</a>
                </li>
                <li class="<?php echo $skills; ?>">
                  <a href="/skills/" title="Skills">Skills</a>
                </li>
                <li class="<?php echo $about; ?>">
                  <a href="/about/" title="About">About</a>
                </li>
                <li class="<?php echo $mystory; ?>">
                <a href="/category/my-story" title="My Story">My Story</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
     
