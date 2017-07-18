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
            $('#post_ex_date').datepicker();
        })
    }
</script>

<?php
// if the form was submitted - PHP OOP CRUD Tutorial
if ($_POST) {

    // set product property values
    $post->post_title = $_POST['post_title'];
    $post->post_body = $_POST['post_body'];
    $post->post_referece = $_POST['post_reference'];
    $post->timeline_ex_date = $_POST['post_ex_date'];
    $post->timeline_type = $_POST['post_type'];

    $post->image = $_FILES["image"]["name"];


    // create the product
    $return_val = $post->create_post();
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
                    <td>Post title</td>
                    <td><input type="text" id="post_title" name="post_title"><br></td>
                </tr>
                <tr>
                    <td>Post body</td>
                    <td><textarea id="post_body" name="post_body" rows="10"></textarea><br></td>
                </tr>

                <tr>
                    <td>Post Thumbnail</td>
                    <td><input type="file" name="image" id="image"><br><br></td>
                </tr>
                <tr>
                    <td>Post Reference</td>
                    <td><select id="post_reference" name="post_reference">
                            <option value="Timeline">Timeline</option>
                            <option value="Home_page">Home Page</option>
                            <option value="Audio_Page">Audio Page</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Post Expire Date</td>
                    <td><input type="date" id="post_ex_date" name="post_ex_date"><br></td>
                </tr>
                <tr>
                    <td>Post Type</td>
                    <td>
                        <select id="post_type" name="post_type">
                            <option value="Audio">Audio</option>
                            <option value="Video">Video</option>
                            <option value="Banner">Banner</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Upload and Crop"></td>
                </tr>
            </table>

        </form>
    </div>
</center>


