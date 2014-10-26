<?php
get_header();
//<html>
  //<body>
    //<div class="container">
?>
      <div class="pageWrapper">
        <div class="content">
        <?php
          if (have_posts()) {
            while(have_posts()) {
              the_post();
        ?>
        <?php get_template_part('content');?>      
          <p class="articleComments">
          <?php 
            $href = get_comments_link();
              $num = get_comments_number();
              if ($num == 1) {
                $unit = ' comment';
              } else {
                $unit = ' comments';
              }
              $num .= $unit;
            ?>
            <a href="<?php echo $href ?>" title="<?php $num ?>">
              <?php echo $num; ?>
            </a>
          </p>
        <?php 
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
