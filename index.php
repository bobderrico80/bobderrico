<?php
get_header();
//<html>
    //<body>
        //<div class="pageWrapper">
            get_sidebar();
?>
            <div class="content">
                <?php
                //query_posts('post_type=post');
                    if (have_posts()) {
                        while(have_posts()) {
                            the_post();
                ?>
                <div class="summary" id="<?php the_id();?>">
                    <h2 class="summaryTitle">
                        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <?php 
                        if (has_post_thumbnail()) {
                            $thumbnail = get_post(get_post_thumbnail_id());
                            $src = wp_get_attachment_url(get_post_thumbnail_id());
                            $alt = get_post_meta($thumbnail->ID, '_wp_attachment_image_alt', true);
                            $title = $thumbnail->post_title;
                    ?>
                    <img src="<?php echo $src ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>" class="summaryImage"/>
                    <?php
                        } //end if (has_post_thumbnail())
                    ?>
                    <p class="summaryTime"><?php the_time('F j, Y'); ?></p>
                    <div class="summaryContent">
                        <?php the_content(); ?>
                    </div>
                    <p class="summaryTags"><?php the_tags('<span class="taggedAs">Tagged As: </span>'); ?></p>
                    <p class="summaryComments">
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
        </div>
            <?php
            get_footer();
                    