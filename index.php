<?php
    require_once('../wp-load.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone Post</title>
</head>
<body>
    <h1>Clone Post Wordpress</h1>

    <?php

        $post = get_post(14075);
        $output =  apply_filters( 'the_content', $post->post_content );

        print_r($output);

        // wp_reset_query();
    
    ?>



</body>
</html>