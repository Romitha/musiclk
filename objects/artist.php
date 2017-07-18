<?php

class Artist
{

    // database connection and table name
    private $conn;

    //artist attributes.....................
    public $artist_id;
    public $artist_name;
    public $artist_sinhala_name;
    public $artist_yaer;
    public $artist_month;
    public $artist_week;

    public $song_1;
    public $song_2;
    public $song_3;
    public $download_id1;
    public $download_id2;
    public $download_id3;

    public function __construct($db)
    {
        $this->conn = $db;
    }


    //...............................................................
    //......get home page artist............

    function get_all_artist()
    {

        $year = date('Y');
        $month = date('n');

        $week = date('j');
        $week = ($week / 7) + 1;
        $week = floor($week);
        
        if ($week == 5) {
            $week = 4;
        }


        $sql = "SELECT * FROM song_artists, artist_of_the_week
                WHERE song_artists.artist_id = artist_of_the_week.artist_id
                AND artist_of_the_week.arw_year = '$year'
                AND artist_of_the_week.arw_month = '$month'
                AND artist_of_the_week.arw_week = '$week'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    function get_related_songs()
    {

        $query = "  SELECT * FROM song_artists, downloads,map_artists
                    WHERE song_artists.artist_id = map_artists.artist_id 
                    AND map_artists.dn_id = downloads.dn_id 
                    AND song_artists.artist_id = ?
                    LIMIT 3
                ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->artist_id);
        $stmt->execute();
        return $stmt;

    }

    function write_artist_of_the_week()
    {


        $myFile = "json/write_artist_of_the_week.json";
        $arr_data = array(); // create empty array
        $stmt = $this->get_all_artist();

        try {

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $this->artist_id = $row['artist_id'];
                $this->artist_name = $row['artist_name'];
                $this->artist_sinhala_name = $row['artist_si_name'];
                $this->artist_yaer = $row['arw_year'];
                $this->artist_month = $row['arw_month'];
                $this->artist_week = $row['arw_week'];


                $related_songs = $this->get_related_songs();
                $count = 0;
                while ($song = $related_songs->fetch(PDO::FETCH_ASSOC)) {
                    $count++;
                    if ($count == 1) {
                        $this->song_1 = $song['dn_title'];
                        $this->download_id1 = $song['dn_id'];
                    }
                    if ($count == 2) {
                        $this->song_2 = $song['dn_title'];
                        $this->download_id2 = $song['dn_id'];
                    }
                    if ($count == 3) {
                        $this->song_3 = $song['dn_title'];
                        $this->download_id3 = $song['dn_id'];
                        $count = 0;
                    }


                }


                $arr_data[] = array(

                    'artist_id' => $this->artist_id,
                    'artist_name' => $this->artist_name,
                    'artist_si_name' => $this->artist_sinhala_name,
                    'arw_year' => $this->artist_yaer,
                    'arw_month' => $this->artist_month,
                    'arw_week' => $this->artist_week,
                    'dn_id1' => $this->download_id1,
                    'dn_title1' => $this->song_1,
                    'dn_id2' => $this->download_id2,
                    'dn_title2' => $this->song_2,
                    'dn_id3' => $this->download_id3,
                    'dn_title3' => $this->song_3


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

    //........end home page artist....................................
    //...............................................................


}

?>