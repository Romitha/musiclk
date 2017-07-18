<?php
$page_id = 1;
// core.php holds pagination variables
include_once 'config/core.php';

// include database and object files
//include_once 'config/database.php';
include_once 'objects/home.php';


// instantiate database and product object
/*$database = new Database();
$db = $database->getConnection();*/

$home = new Home();
$top_20 = $home->read_top_20();
$song = $home->read_home_page_audio();
$videos = $home->read_home_page_video();
$artist = $home->read_artist_of_the_week();
$posts = $home->read_posts();
$events = $home->read_events();

$page_title = "Music.lk-Home Page";
include_once "inc/header.php";

//.........................................................................
//.........................................................................
// query products
//$stmt = $product->readAll($from_record_num, $records_per_page);

// specify the page where paging is used
//$page_url = "index.php?";

// count total rows - used for pagination
//$total_rows=$product->countAll();
//..........................................................................
//..........................................................................

// index.php controls how the home page will be rendered
include_once "templates/index_template.php";

// footer.php holds our javascript and closing html tags
include_once "inc/footer.php";
?>