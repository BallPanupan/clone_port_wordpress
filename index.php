<?php
    require_once('../wp-load.php');
    require_once('function/get_all_post.php');

    $count_all_post = wp_count_posts()->publish;

    get_all_post($count_all_post);

    // create folder for post by post

    echo "Done...";

    create_folder(19112);

?>
