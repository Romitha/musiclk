<?php

// core.php holds pagination variables
include_once 'config/core.php';

// include database and object files
include_once 'config/database.php';
include_once 'objects/song.php';
include_once 'objects/video.php';
include_once 'objects/artist.php';
include_once 'objects/post.php';
include_once 'objects/event.php';


// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

$song = new Song($db);
//$song->write_home_page_audio();
//$top_20 = $song->read_top_20();


$post = new Post($db);
//$post->write_get_post_data();

$event = new Event($db);
$event->write_get_event_data();



$video = new Video($db);
//$video->write_home_page_video();
/*foreach($top_20 as $top_song) {
    print $top_song['dn_id'];
    print '<br>';
}*/

$artist = new Artist($db);
/*$artist->write_artist_of_the_week();*/