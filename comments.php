<?php if (have_comments()) { ?>
<h2 class="commentsTitle">
    <?php 
        $title = get_comments_number();
        if ($title == 1) {
            $title .= ' comment';
        } else {
            $title .= ' comments';
        }
        echo $title;
    ?>
</h2>
<div class="commentsList">
    <ul>
        <?php wp_list_comments(); ?>
    </ul>
</div>
<?php } //end if (have_comments)   