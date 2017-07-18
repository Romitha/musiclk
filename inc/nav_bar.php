<?php
$r = $_SERVER['REQUEST_URI'];
$r = explode('/', $r);
$endofurl = '';
if (sizeof($r) > 1) {
    $endofurl = $r[2];
}
//echo '<br>Split of URL -> '.$endofurl;
?>


<!--start navbar(this is bootsrap default navbar customized by gallezone)-->
<div class="container">
    <nav class="navbar navbar-default navbar-gz-custom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row margin0">

            <div class="col-sm-3 col-md-4 col-lg-4 padding0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo-gz-main" href="index.php"><img src="content/images/logo/logo_musiclk.png" alt=""
                                                                       class="img-responsive"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-sm-7 col-md-6 col-lg-6 padding0">
                <div class="collapse navbar-collapse padding0" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right menu-gz">
                        <?php
                        if($page_id == 1){
                            ?>
                            <li class="active"><a href="index">Home</a></li>
                        <?php
                        }else{?>
                            <li class="menu-item"><a href="index">Home</a></li>
                            <?php
                        }
                        if($page_id == 2){
                            ?>
                            <li class="active"><a href="audio">Audio</a></li>
                            <?php
                        }else{
                            ?>
                            <li class="menu-item"><a href="audio">Audio</a></li>
                            <?php
                        }
                        if($page_id == 3){
                            ?>
                            <li class="active"><a href="video">Video</a></li>
                        <?php
                        }else{
                            ?>
                            <li class="menu-item"><a href="video">Video</a></li>
                        <?php
                        }
                        if($page_id == 4){
                            ?>
                            <li class="active"><a href="about">About</a></li>
                        <?php
                        }else{
                            ?>
                            <li class="menu-item"><a href="about">About</a></li>
                        <?php
                        }
                        if($page_id == 5){
                            ?>
                            <li class="active"><a href="contact">Contact</a></li>
                        <?php
                        }else{
                            ?>
                            <li class="menu-item"><a href="contact">Contact</a></li>
                        <?php
                        }
                        ?>






                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 padding0right hidden-xs">
                <div class="icon-gz-right text-center">
                    <div class="row margin0">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding0 border-left-1">
                            <i class="fa fa-facebook fa-2x icon-hover-1 hvr-sink" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding0">
                            <i class="fa fa-youtube fa-2x icon-hover-2 hvr-sink" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding0">
                            <i class="fa fa-twitter fa-2x icon-hover-3 hvr-sink" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding0">
                            <i class="fa fa-instagram fa-2x icon-hover-4 hvr-sink" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </nav>
</div>  <!-- /.container -->
<!--end navbar-->


<!-- start search feild from here-->
<div class="container">
    <div class="row margin0">
        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 padding0">
            <form class="srch-inpt">
                <input type="search" placeholder="Enter Any thing what you feel" class="input-search">
                <input type="submit" value="Search">
            </form>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 padding0 hidden-xs">
            <div class="player-icon">
                <img src="content/images/icon/player-con.png" alt="" class="img-responsive effect-shine">
            </div>
        </div>
    </div>
</div>
<!-- end search feild from here-->
