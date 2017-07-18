<script type="text/javascript">
    var datefield = document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type != "date") { //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>

<script>
    if (datefield.type != "date") { //if browser doesn't support input type="date", initialize date picker widget:
        jQuery(function ($) { //on document.ready
            $('#event_date').datepicker();
            $('#event_ex_date').datepicker();
        })
    }
</script>

<?php
// if the form was submitted - PHP OOP CRUD Tutorial
if ($_POST) {

    // set product property values
    $event->event_name = $_POST['event_name'];
    $event->event_location = $_POST['event_location'];
    $event->event_description = $_POST['event_description'];
    $event->event_date = $_POST['event_date'];
    $event->event_ex_date = $_POST['event_ex_date'];
    $event->event_st_time = $_POST['event_start_time'];
    $event->event_en_time = $_POST['event_end_time'];
    $event->image = $_FILES["image"]["name"];


    // create the product
    $return_val = $event->create_event();
    $event->uploadPhoto();
    if ($return_val > 0) {
        echo "<div class='alert alert-success'>Post was created. = $return_val </div>";
    } // if unable to create the product, tell the user
    else {
        echo "<div class='alert alert-danger'>Unable to create Post.</div>";
    }
}

?>

<center>
    <div class="row col-md-12">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
              enctype="multipart/form-data">
            <table>

                <tr>
                    <td>Banner Slot</td>
                    <td>

                        <select id="banner_slot" name="banner_slot">
                            <option value="0">Choose Banner Slot</option>
                            <option value="Home_Slider">Home Slider</option>
                            <option value="Video_Slider">Video Slider</option>
                            <option value="Audio_Slider">Audio Slider</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Banner Type</td>
                    <td>
                        <select id="banner_type" name="banner_type">
                            <option value="0">Choose Banner Type</option>
                            <option value="Download">Download</option>
                            <option value="Artist">Artist</option>
                            <option value="Banner">Banner</option>
                        </select>
                    </td>
                </tr>

                <tr>

                    <td>Banner Reference</td>
                    <td>
                        <select id="banner_type" name="banner_type">
                            <option value="0">Choose Banner Type</option>
                            <option value="Download">Download</option>
                            <option value="Artist">Artist</option>
                            <option value="Banner">Banner</option>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td>Event Thumbnail</td>
                    <td><input type="file" name="image" id="image"><br><br></td>
                </tr>

                <tr>
                    <td>Event Date</td>
                    <td><input type="date" id="event_date" name="event_date"><br></td>
                </tr>
                <tr>
                    <td>Event Expire Date</td>
                    <td><input type="date" id="event_ex_date" name="event_ex_date"><br></td>
                </tr>
                <tr>
                    <td>Event Start Time</td>
                    <td><input type="date" id="event_start_time" name="event_start_time"><br></td>
                </tr>
                <tr>
                    <td>Event End Time</td>
                    <td><input type="date" id="event_end_time" name="event_end_time"><br></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Upload and Crop"></td>
                </tr>
            </table>

        </form>
    </div>
</center>


