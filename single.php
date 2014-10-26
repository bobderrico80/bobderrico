<?php
get_header();
//<html>
  //<body>
    //<div class="container">
?>
      <div class="pageWrapper"> <?php
          if (have_posts()) {
            while(have_posts()) {
              the_post();
        ?>
        <div class="content">
        <?php get_template_part('content');?>
        <div class="pageNav">
          <div class="pageNavPrevious">
            <?php previous_post_link('&laquo %link', 'Previous'); ?>
          </div>
          <div class="pageNavNext">
            <?php next_post_link('%link &raquo', 'Next'); ?>
          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="comments">
          <a name="comments"></a>
          <?php 
              $closedFlag = false;
              if (!get_comments_number() && !comments_open()) {
                  echo '<p class="commentsClosed">Comments are closed on this article.</p>';
                  $closedFlag = true;
              } elseif (!get_comments_number()) {
                  echo '<h2 class="commentsTitle">0 comments</h2>';
              } else {
                  comments_template();
              }
              
              if (comments_open()) {
                  comment_form();
              } elseif (!$closedFlag) {
                  echo '<p class="commentsClosed">Comments are closed on this article</p>';
              }
          ?>
        </div>

        <?php      
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
