<?php
get_header();
//<html>
  //<body>
    //<div class="container">
?>
      <div class="pageWrapper">
        <div class="content">
          <h1 class="pageTitle">Project Gallery</h1>
          <?php
            if (have_posts()) {
              while(have_posts()) {
                the_post();
            get_template_part('content','projects');
            } 
          ?>
          <div class="pageNav">
            <div class="pageNavPrevious">
              <?php previous_posts_link(); ?>
            </div>
            <div class="pageNavNext">
              <?php next_posts_link(); ?>
            </div>
          </div>
          <div style="clear:both;"></div>
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
