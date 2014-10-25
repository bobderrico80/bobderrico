<?php
get_header();
//<html>
  //<body>
    //<div class="container">
?>
      <div class="pageWrapper">
        <div class="content">
          <h1 class="pageTitle">Project Gallery</h1>
          <p class="pageDescription">
            Below you will find a list of my completed projects.  Click on a project title to learn more.
          </p>
        <?php
          if (have_posts()) {
            while(have_posts()) {
              the_post();
        ?>
        <?php get_template_part('content','projects');
            } //end while (have_posts())
        ?>
          <div class="pageNav">
            <div class="pageNavPrevious">
              <?php previous_posts_link(); ?>
            </div>
            <div class="pageNavNext">
              <?php next_posts_link(); ?>
            </div>
          </div>
        <?php
          } /* end if(have_posts()) */ else {
            get_template_part('content','none');
          } //end else
        ?>
        </div> <!-- .content -->
        <?php get_sidebar();?>
      </div><!-- .pageWrapper -->
        <?php
        get_footer();
