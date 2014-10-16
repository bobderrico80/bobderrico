<?php
//<html>
  //<body>
    //<div class="pageWrapper"> ?>
      <div class="sidebar">
        <div class="socialArea">
        <h2>Find Me On</h2>
            <ul>
              <li>
                <a href="https://twitter.com/BobDerrico80" target="_blank">
                <img src="<?php bloginfo('template_url');?>/twitter.png" alt="Twitter" title="Twitter">
                  Twitter
                </a>
              </li>
              <li>
                <a href="https://github.com/bobderrico80" target="_blank">
                  <img src="<?php bloginfo('template_url');?>/github.png" alt="Github" title="Github"/>
                  Github
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/pub/bob-d-errico/9b/13b/a8b" target="_blank">
                  <img src="<?php bloginfo('template_url');?>/linkedin.png" alt="LinkedIn" title="LinkedIn/">
                  LinkedIn
                </a>
              </li>
            </ul>
            
        </div>
        
        <h2>Recent Posts</h2>
        <div class="recentPosts">
          <ul>
            <?php 
              $recentPosts = wp_get_recent_posts();
              foreach ($recentPosts as $post) {
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
        </div>
        <h2>Archives</h2>
        <div class="archives">
          <ul>
            <?php wp_get_archives(); ?>
          </ul>
        </div>
        <h2>Tags</h2>
        <div class="tagList">
          <ul>
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
        </div>
      </div>

