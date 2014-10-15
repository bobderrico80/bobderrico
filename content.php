<?php
get_header();
//<html>
  //<body>
    //<div class="pageWrapper">
      //<div class="content">
?>
        <div class="article" id="<?php the_id();?>">
          <h2 class="articleTitle">
            <?php 
              if (is_single()) {
                the_title();
              } else {
                the_title('<a href=">' . get_permalink() . '" title="' . the_title . '">','</a>');
              }
            ?>
            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <p class="articleTime"><?php the_time('F j, Y'); ?></p>
          <?php 
            if (has_post_thumbnail()) {
              $thumbnail = get_post(get_post_thumbnail_id());
              $src = wp_get_attachment_url(get_post_thumbnail_id());
              $alt = get_post_meta($thumbnail->ID, '_wp_attachment_image_alt', true);
              $title = $thumbnail->post_title;
          ?>
          <img src="<?php echo $src ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>" class="articleImage"/>
          <?php
            } //end if (has_post_thumbnail())
          ?>
          <div class="articleContent">
            <?php the_content(); ?>
          </div>
          <p class="articleTags"><?php the_tags('<span class="taggedAs">Tagged As: </span>'); ?></p>
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
        </div>
