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
              <?php
        } /* end if(have_posts()) */ else {
          get_template_part('content','none');
        } //end else
      ?>
      </div> <!-- .content -->
    </div><!-- .pageWrapper -->
      <?php
      get_sidebar();
      get_footer();