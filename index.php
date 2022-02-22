<?php
    require_once('../wp-load.php');

    require_once('function/get_all_post.php');

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
        // $result[1] = [
        //     "id" => 14000,
        //     "title"=>35,
        //     "content"=>'hello content'
        // ];

        // $result[2] = [
        //     "id" => 14000,
        //     "title"=>35,
        //     "content"=>'hello content'
        // ];

        $count_all_post = wp_count_posts()->publish;

        // get_all_post($count_all_post);



        
        echo "<pre>";
        print_r(get_all_post($count_all_post));
        echo "</pre>";
    ?>



</body>
</html>