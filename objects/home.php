<?php

class Home
{

    // database connection and table name


    public function __construct()
    {

    }



    function read_top_20(){
        $url = 'json/write_top_20_to_json.json';
        $content = file_get_contents($url);
        $json = json_decode($content, true);
        return $json;
    }

    function read_home_page_audio(){
        $url = 'json/write_home_page_audio.json';
        $content = file_get_contents($url);
        $json = json_decode($content, true);
        return $json;
    }
    function read_home_page_video(){
        $url = 'json/write_home_page_video.json';
        $content = file_get_contents($url);
        $json = json_decode($content, true);
        return $json;
    }

    function read_artist_of_the_week(){
        $url = 'json/write_artist_of_the_week.json';
        $content = file_get_contents($url);
        $json = json_decode($content, true);
        return $json;
    } 

    function read_posts(){
        $url = 'json/write_get_post_data.json';
        $content = file_get_contents($url);
        $json = json_decode($content, true);
        return $json;
    }

    function read_events(){
        $url = 'json/write_get_event_data.json';
        $content = file_get_contents($url);
        $json = json_decode($content, true);
        return $json;
    }


}

?>