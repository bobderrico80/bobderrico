<?php
get_header();
//<html>
  //<body>
    //<div class="pageWrapper">
?>
      <?php
        if (have_posts()) {
          while(have_posts()) {
            the_post();
      ?>
      <div class="content">
      <?php get_template_part('content');      
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
    </div><!-- .pageWrapper -->
      <?php
      get_footer();
