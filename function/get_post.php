<?php

    function x($post_id) {

        

        $post = get_post($post_id);
        $output =  apply_filters( 'the_content', $post->post_content );
    
        print_r($output);
    }

