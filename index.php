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
        query_posts(  'posts_per_page=10' );
        
        while ( have_posts() ) : the_post();
            echo '<li>';
            the_title();
            echo '</li>';
        endwhile;

        wp_reset_query();

    ?>



</body>
</html>