<?php

$post = get_post(14075);
$output =  apply_filters( 'the_content', $post->post_content );

print_r($output);

// wp_reset_query();

?>
