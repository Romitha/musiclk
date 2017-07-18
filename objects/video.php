<?php

class Video
{

    // database connection and table name
    private $conn;
    private $table_name = "downloads";

    
    // song properties.....................................
    public $download_id;
    public $dn_title;
    public $dn_category;
    public $dn_type;
    public $dn_time;
    public $dn_description;
    public $dn_visits;
    public $dn_downloads;
    public $dn_view_count;
    public $artist_name;
    //.....................................................

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //...............................................................
    //......get home page audio............

    function get_home_page_video(){

        $query = "  SELECT * FROM downloads, map_artists, song_artists
                    WHERE map_artists.dn_id = downloads.dn_id 
                    AND song_artists.artist_id = map_artists.artist_id 
                    AND downloads.dn_type = 'videos' GROUP BY downloads.dn_id 
				    ORDER BY downloads.dn_time DESC 
                    LIMIT 10";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->download_id);
        $stmt->execute();
        return $stmt;

    }

    function write_home_page_video(){


        $myFile = "json/write_home_page_video.json";
        $arr_data = array(); // create empty array
        $stmt = $this->get_home_page_video();

        try
        {

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                $arr_data[] = array(

                    'dn_id'=> $row['dn_id'],
                    'dn_title'=> $row['dn_title'],
                    'dn_category'=> $row['dn_category'],
                    'dn_type'=> $row['dn_type'],
                    'dn_time'=> $row['dn_time'],
                    'dn_visits'=> $row['dn_visits'],
                    'dn_downloads'=> $row['dn_downloads'],
                    'dn_view_count'=> $row['dn_view_count'],
                    'artist_name'=> $row['artist_name']
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

    //........end home page audio....................................
    //...............................................................


}

?>