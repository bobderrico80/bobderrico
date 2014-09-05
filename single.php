<?php
get_header();
//<html>
    //<body>
        //<div class="pageWrapper">
            get_sidebar();
?>
            <div class="content">
                <?php
                    if (have_posts()) {
                        while(have_posts()) {
                            the_post();
                ?>
                <div class="single" id="<?php the_id();?>">
                    <h2 class="singleTitle">
                            <?php the_title(); ?>
                    </h2>
                    <?php 
                        if (has_post_thumbnail()) {
                            $thumbnail = get_post(get_post_thumbnail_id());
                            $src = wp_get_attachment_url(get_post_thumbnail_id());
                            $alt = get_post_meta($thumbnail->ID, '_wp_attachment_image_alt', true);
                            $title = $thumbnail->post_title;
                    ?>
                    <img src="<?php echo $src ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>" class="singleImage"/>
                    <?php
                        } //end if (has_post_thumbnail())
                    ?>
                    <p class="singleTime"><?php the_time('F j, Y'); ?></p>
                    <div class="singleContent">
                        <?php the_content(); ?>
                    </div>
                    <p class="singleTags"><?php the_tags('<span class="taggedAs">Tagged As: </span>'); ?></p>
                </div>
            </div>
            <div class="pageNav">
                <div class="pageNavPrevious">
                    <?php previous_post_link('&laquo %link','Previous'); ?>
                </div>
                <div class="pageNavNext">
                    <?php next_post_link('%link &raquo', 'Next'); ?>
                </div>
            </div>
            <div class="comments">
                <a name="comments"></a>
                <?php 
                    $closedFlag = false;
                    if (!get_comments_number() && !comments_open()) {
                ?>
                <p class="commentsClosed">Comments are closed on this item.</p>
                <?php
                    $closedFlag = true;
                    } elseif (!get_comments_number()) {
                ?>
                <h2 class="commentsTitle">0 comments</h2>
                <p class="commentsSubtitle">Be the first to comment!</p>
                <?php
                    } else {
                        comments_template();
                    }
                    
                    if (comments_open()) {
                        comment_form();
                    } elseif (!$closedFlag) {
                ?>
                <p class="commentsClosed">Comments are closed on this item.</p>
                <?php
                    }
                ?>
            </div>
            <?php
                        } //end while (have_posts())
                    } /* end if(have_posts()) */ else {
            ?>
            <div class="noResults">
                <p>
                    Sorry, there is nothing to show you here. :-( <br>
                    <a href="<?php bloginfo('url'); ?>" name="Return to Home">
                        Return to Home
                    </a>
                </p>
            </div>
                <?php
                    } //end else
                ?>
        </div>
            <?php
            get_footer();
                    