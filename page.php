<?php
get_header();
//<html>
  //<body>
    //<div class="container">
?>
      <div class="pageWrapper">
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
        <?php get_sidebar();?>
      </div><!-- .pageWrapper -->
        <?php
        get_footer();
