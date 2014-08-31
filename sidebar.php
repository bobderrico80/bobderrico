<?php
//<html>
    //<body>
        //<div class="pageWrapper"> ?>
            <div class="sidebar">
                <h2>Recent Posts</h2>
                <ul class="recentPosts">
                    <?php 
                        $posts = wp_get_recent_posts();
                        foreach ($posts as $post) {
                            $href = get_permalink($post['ID']);
                            $title = $post['post_title'];
                    ?>
                    <li>
                        <a href="<?php echo $href; ?>" title="<?php echo $title; ?>">
                            <?php echo $title; ?>
                        </a>
                    </li>
                    <?php
                        } //end foreach
                    ?>
                </ul>
                <h2>Archives</h2>
                <ul class="archives">
                    <?php wp_get_archives(); ?>
                </ul>
                <h2>Tags</h2>
                <ul class="tagList">
                    <?php 
                        $tags = get_tags();
                        foreach ($tags as $tag) {
                            $href = get_tag_link($tag->term_id);
                            $name = $tag->name;
                            if ($tag->count == 1) {
                                $count = $tag->count . ' post';
                            } else {
                                $count = $tag->count . ' posts';
                            }
                    ?>
                    <li>
                        <a href="<?php echo $href; ?>" title="<?php echo $count; ?>">
                            <?php echo $tag->name ?>
                        </a>
                    </li>
                    <?php
                        } //end foreach
                    ?>
                </ul>
                <h2>Categories</h2>
                <ul class="catList">
                    <?php 
                        $cats = get_categories();
                        foreach ($cats as $cat) {
                            $href = get_category_link($cat->term_id);
                            $name = $cat->name;
                    ?>
                    <li>
                        <a href="<?php echo $href; ?>" title="<?php echo $name; ?>">
                           <?php echo $name; ?>
                        </a>
                    </li>
                    <?php 
                        } //end foreach
                    ?>
                </ul>
            </div>

