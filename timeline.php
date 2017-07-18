<?php
$page_id = 1;
// core.php holds pagination variables
include_once 'config/core.php';

// include database and object files
include_once 'config/database.php';
include_once 'objects/post.php';


// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
$post = new Post($db);




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
include_once "templates/post_template.php";

// footer.php holds our javascript and closing html tags
include_once "inc/footer.php";
?>