<?php
include_once 'objects/image_process.php';
class Post
{

    // database connection and table name
    private $conn;
    private $table_name = "downloads";

    // post object properties
    public $post_id;
    public $post_title;
    public $post_body;
    public $post_referece;
    public $post_link_text;
    public $post_visibility;
    public $image;


    // timeline object properties.....................................
    public $timeline_id;
    public $post_time;
    public $timeline_hits;
    public $timeline_ex_date;
    public $timeline_type;

    //.....................................................

    public function __construct($db)
    {
        $this->conn = $db;
    }



    // create product
    function create_post()
    {

        // insert query
        $query = "INSERT INTO post (post_title,post_body,post_reference,post_link_text,post_visibility) VALUES (
                  :post_title,:post_body,:post_reference,:post_link_text,:post_visibility )";

        // echo  $query;
        $stmt = $this->conn->prepare($query);
        
        //assigned_values to post object
        $this->post_link_text = "janith-romitha-algewatta";
        $this->post_visibility = 1;

        // posted values
        $this->post_title = htmlspecialchars(strip_tags($this->post_title));
        $this->post_body = htmlspecialchars(strip_tags($this->post_body));
        $this->post_referece = htmlspecialchars(strip_tags($this->post_referece));
        $this->post_link_text = htmlspecialchars(strip_tags($this->post_link_text));
        $this->post_visibility = htmlspecialchars(strip_tags($this->post_visibility));
        $this->image = htmlspecialchars(strip_tags($this->image));
        

        // bind values
        $stmt->bindParam(":post_title", $this->post_title);
        $stmt->bindParam(":post_body", $this->post_body);
        $stmt->bindParam(":post_reference", $this->post_referece);
        $stmt->bindParam(":post_link_text", $this->post_link_text);
        $stmt->bindParam(":post_visibility", $this->post_visibility);

        if ($stmt->execute()) {

            $this->post_id = $this->conn->lastInsertId();
            $this->create_timeline();
            return $this->post_id;

        } else {
            return 0;
        }

    }

    function create_timeline()
    {

        // insert query
        $query = "INSERT INTO timeline (post_time,timeline_hits,timeline_ex_date,post_id,timeline_type) VALUES (
                  :post_time,:timeline_hits,:timeline_ex_date,:post_id,:timeline_type)";

        $stmt = $this->conn->prepare($query);

        //assigned_values to post object
        $this->post_time = time();
        $this->timeline_hits = 0;


        // posted values
        $this->timeline_ex_date = $date = date('Y-m-d', strtotime(str_replace('-', '/', $this->timeline_ex_date)));
        $this->timeline_type = htmlspecialchars(strip_tags($this->timeline_type));

        echo $this->timeline_ex_date;



        // bind values
        $stmt->bindParam(":post_time", $this->post_time);
        $stmt->bindParam(":timeline_hits", $this->timeline_hits);
        $stmt->bindParam(":timeline_ex_date", $this->timeline_ex_date);
        $stmt->bindParam(":post_id", $this->post_id);
        $stmt->bindParam(":timeline_type", $this->timeline_type);

        if ($stmt->execute()) {
            $this->uploadPhoto();
        }

    }

    // will upload image file to server
    function uploadPhoto4()
    {

        $result_message = "";

        // now, if image is not empty, try to upload the image
        if ($this->image) {

            // sha1_file() function is used to make a unique file name
            $filename  = basename($this->image);
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $new_file_name       = $this->post_id.'.'.$extension;
            //....................................................
            $target_directory = "content_images/posts/";
            $target_file = $target_directory .$new_file_name;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

            // error message is empty
            $file_upload_error_messages = "";
            // make sure that file is a real image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                // submitted file is an image
            } else {
                $file_upload_error_messages .= "<div>Submitted file is not an image.</div>";
            }

// make sure certain file types are allowed
            $allowed_file_types = array("jpg", "jpeg", "png", "gif");
            if (!in_array($file_type, $allowed_file_types)) {
                $file_upload_error_messages .= "<div>Only JPG, JPEG, PNG, GIF files are allowed.</div>";
            }

// make sure file does not exist
            if (file_exists($target_file)) {
                $file_upload_error_messages .= "<div>Image already exists. Try to change file name.</div>";
            }

// make sure submitted file is not too large, can't be larger than 1 MB
            if ($_FILES['image']['size'] > (1024000)) {
                $file_upload_error_messages .= "<div>Image must be less than 1 MB in size.</div>";
            }

// make sure the 'uploads' folder exists
// if not, create it
            if (!is_dir($target_directory)) {
                mkdir($target_directory, 0777, true);
            }


            // if $file_upload_error_messages is still empty
            if (empty($file_upload_error_messages)) {
                // it means there are no errors, so try to upload the file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // it means photo was uploaded
                } else {
                    $result_message .= "<div class='alert alert-danger'>";
                    $result_message .= "<div>Unable to upload photo.</div>";
                    $result_message .= "<div>Update the record to upload photo.</div>";
                    $result_message .= "</div>";
                }
            } // if $file_upload_error_messages is NOT empty
            else {
                // it means there are some errors, so show them to user
                $result_message .= "<div class='alert alert-danger'>";
                $result_message .= "{$file_upload_error_messages}";
                $result_message .= "<div>Update the record to upload photo.</div>";
                $result_message .= "</div>";
            }

        }

        return $result_message;
    }

    function uploadPhoto(){

        $image = new MusiclkProcessImage();
        $image->load($_FILES["image"]["tmp_name"]);

        $image->resizeToWidth(200);
        $image->save("content_images/posts/200/$this->post_id.jpg");
        $image->resizeToWidth(600);
        $image->save("content_images/songs/600/$this->post_id.jpg");


    }

    //..........Read and write json object........................................
    function get_post_data(){

        $query = "  SELECT * FROM post,timeline
                    WHERE post.post_id = timeline.post_id
                    ORDER BY post.post_id DESC
                    LIMIT 20";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;

    }

    function write_get_post_data(){


        $myFile = "json/write_get_post_data.json";
        $arr_data = array(); // create empty array
        $stmt = $this->get_post_data();

        try
        {

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                $arr_data[] = array(

                    'post_id'=> $row['post_id'],
                    'post_title'=> $row['post_title'],
                    'post_body'=> $row['post_body'],
                    'post_reference'=> $row['post_reference'],
                    'post_link_text'=> $row['post_link_text'],
                    'post_visibility'=> $row['post_visibility'],
                    'post_time'=> $row['post_time'],
                    'timeline_hits'=> $row['timeline_hits'],
                    'timeline_ex_date'=> $row['timeline_ex_date'],
                    'timeline_type'=> $row['timeline_type']
                );

            }

            $formdata = $arr_data;

            $fp = fopen($myFile, 'w');
            fwrite($fp, json_encode($formdata));
            fclose($fp);

        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

    }


}

?>