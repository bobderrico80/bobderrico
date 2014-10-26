<?php
get_header();
//<html>
  //<body>
    //<div class="pageWrapper">
      //<div class="content">
?>
        <div class="project" id="<?php the_id();?>">
          <?php 
            if (has_post_thumbnail()) {
              $thumbnail = get_post(get_post_thumbnail_id());
              $src = wp_get_attachment_url(get_post_thumbnail_id());
              $alt = get_post_meta($thumbnail->ID, '_wp_attachment_image_alt', true);
              $title = $thumbnail->post_title;
          ?>
          <img src="<?php echo $src ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>" class="projectThumb"/>
          <h2 class="projectTitle">
            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <h3 class="projectUrl">
            <?php 
              $postID = get_the_ID();
              $dispURL = get_post_meta($postID, 'dispURL', true);
              $linkURL = get_post_meta($postID, 'linkURL', true); 
              $githubURL = get_post_meta($postID, 'githubURL', true); 
            ?>
            <a href="<?php echo $linkURL; ?>" title="<?php the_title(); ?>" target="_blank">
              <?php echo $dispURL; ?>
            </a>
            <a href="<?php echo $githubURL; ?>" title="View on Github" target="_blank">
              (View on GitHub)
            </a>
          </h3>
          <img src="<?php echo $src ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>" class="projectImage"/>
          <?php
            } //end if (has_post_thumbnail())
          ?>
          <div class="projectContent">
            <?php the_content(); ?>
          </div>
          <p class="projectTime">Launched on: <?php the_time('F j, Y'); ?></p>
          <p class="projectTags"><?php the_tags('<span class="taggedAs">Skills: </span>'); ?></p>
          <p class="projectGithubLink">
          </p>
       </div>
