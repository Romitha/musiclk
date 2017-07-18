<?php
include_once 'objects/image_process.php';

class Event
{

    // database connection and table name
    private $conn;
    private $table_name = "downloads";

    // post object properties
    public $event_id;
    public $event_name;
    public $event_description;
    public $event_location;
    public $event_date;
    public $event_ex_date;
    public $event_st_time;
    public $event_en_time;
    public $event_order;
    public $event_visibility;
    public $image;

    public function __construct($db)
    {
        $this->conn = $db;
    }


    // create product
    function create_event()
    {

        // insert query
        $query = "INSERT INTO event (event_name,event_description,event_location,event_date,event_ex_date,event_st_time,event_en_time,event_order,event_visibility) 
                  VALUES (:event_name,:event_description,:event_location,:event_date,:event_ex_date,:event_st_time,:event_en_time ,:event_order ,:event_visibility )";

        // echo  $query;
        $stmt = $this->conn->prepare($query);

        //assigned_values to post object
        $this->event_order = 0;
        $this->event_visibility = 1;

        // posted values
        $this->event_name = htmlspecialchars(strip_tags($this->event_name));
        $this->event_description = htmlspecialchars(strip_tags($this->event_description));
        $this->event_location = htmlspecialchars(strip_tags($this->event_location));

        $this->event_date = $date = date('Y-m-d', strtotime(str_replace('-', '/', $this->event_date)));
        $this->event_date = htmlspecialchars(strip_tags($this->event_date));
        $this->event_ex_date = $date = date('Y-m-d', strtotime(str_replace('-', '/', $this->event_ex_date)));
        $this->event_ex_date = htmlspecialchars(strip_tags($this->event_ex_date));

        $this->event_st_time = htmlspecialchars(strip_tags($this->event_st_time));
        $this->event_en_time = htmlspecialchars(strip_tags($this->event_en_time));
        $this->image = htmlspecialchars(strip_tags($this->image));


        // bind values
        $stmt->bindParam(":event_name", $this->event_name);
        $stmt->bindParam(":event_description", $this->event_description);
        $stmt->bindParam(":event_location", $this->event_location);
        $stmt->bindParam(":event_date", $this->event_date);
        $stmt->bindParam(":event_ex_date", $this->event_ex_date);
        $stmt->bindParam(":event_st_time", $this->event_st_time);
        $stmt->bindParam(":event_en_time", $this->event_en_time);
        $stmt->bindParam(":event_order", $this->event_order);
        $stmt->bindParam(":event_visibility", $this->event_visibility);

        if ($stmt->execute()) {

            $this->event_id = $this->conn->lastInsertId();
            return $this->event_id;


        } else {
            return 0;
        }

    }


    function uploadPhoto()
    {

        $image = new MusiclkProcessImage();
        $image->load($_FILES["image"]["tmp_name"]);
        var_dump($_FILES["image"]["tmp_name"]);
        $image->resizeToWidth(200);
        $image->save("content_images/events/200/$this->event_id.jpg");
        $image->resizeToWidth(600);
        $image->save("content_images/events/600/$this->event_id.jpg");


    }

    //..........Read and write json object........................................
    function get_post_data()
    {

        $query = "  SELECT * FROM `event` ORDER BY `event`.event_order ASC
                    LIMIT 4";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;

    }

    function write_get_event_data()
    {


        $myFile = "json/write_get_event_data.json";
        $arr_data = array(); // create empty array
        $stmt = $this->get_post_data();

        try {

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $arr_data[] = array(

                    'event_id' => $row['event_id'],
                    'event_name' => $row['event_name'],
                    'event_description' => $row['event_description'],
                    'event_location' => $row['event_location'],
                    'event_date' => $row['event_date'],
                    'event_ex_date' => $row['event_ex_date'],
                    'event_st_time' => $row['event_st_time'],
                    'event_en_time' => $row['event_en_time'],
                    'event_order' => $row['event_order'],
                    'event_visibility' => $row['event_visibility']
                );

            }

            $formdata = $arr_data;

            $fp = fopen($myFile, 'w');
            fwrite($fp, json_encode($formdata));
            fclose($fp);

        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }

    }


}

?>