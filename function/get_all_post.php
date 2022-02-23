<?php
    function create_folder($id){
        $file_location =  "all_post/".$id;

        if(!is_dir($file_location)) {
            mkdir($file_location);
            mkdir($file_location."/img");
        }
    }

    function get_all_post($count) {
        $publish_post = 'posts_per_page='. $count;

        $date = date_create();
        echo date_timestamp_get($date);
        
        $result = [];

        query_posts($publish_post);
    
        $i = 0; 
        while ( have_posts() ) : the_post();

            $result[$i] = [
                "id" => get_the_ID(),
                "title" => get_the_title()
            ];

            // create_folder(get_the_ID());
            $i++;

        endwhile;

        // $file_location = "./all_post/".date_timestamp_get($date).".json";
        $file_location = "./all_post/title_name.json";

        $myfile = fopen($file_location, "w");
        

        fwrite($myfile, json_encode($result));
        fclose($myfile);


        return $result;
    }


?>