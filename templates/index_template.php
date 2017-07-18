<!--start slider from here-->
<div class="container">
    <div class="row margin0">
        <div id="sg-carousel" class="carousel slide carousel-fade margin-top-1em margin-btm-1em "
             data-ride="carousel">
            <ol class="carousel-indicators hidden">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" class=""></li>
                <li data-target="#carousel" data-slide-to="2" class=""></li>
                <li data-target="#carousel" data-slide-to="3" class=""></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active">
                    <div class="top-img">
                        <!--                            <img src="images/slider/top-slider-img.png" class="img-responsive top-slider-img" alt="">-->
                    </div>

                    <img class="img-responsive slider-1" src="content/images/slider/slider-1.jpg" alt="">

                    <div class="artist-img">
                        <div class="image-gz-left">
                            <div class="row margin0">
                                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                    <img src="content/images/slider/artist-1.jpg"
                                         data-animation="animated zoomIn"
                                         class="img-responsive artist-img-item" alt="">
                                </div>
                                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                    <div class="artist-des animated zoomInLeft">
                                        <div class="row margin0">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <h3 class="text-1">Maduwithakin
                                                </h3>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <h3 class="text-2">- Ranidu Lankage</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-img">
                        <!--                            <img src="images/slider/top-slider-img.png" class="img-responsive top-slider-img" alt="">-->
                    </div>

                    <img class="img-responsive slider-1" src="content/images/slider/slider-2.jpg" alt="">

                    <div class="artist-img">
                        <div class="image-gz-left">
                            <div class="row margin0">
                                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                    <img src="content/images/slider/artist-2.jpg"
                                         data-animation="animated zoomIn"
                                         class="img-responsive artist-img-item" alt="">
                                </div>
                                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                    <div class="artist-des animated zoomInLeft">
                                        <div class="row margin0">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <h3 class="text-1">Maduwithakin
                                                </h3>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <h3 class="text-2">- Ranidu Lankage</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-img">
                        <!--                            <img src="images/slider/top-slider-img.png" class="img-responsive top-slider-img" alt="">-->
                    </div>

                    <img class="img-responsive slider-1" src="content/images/slider/slider-3.jpg" alt="">

                    <div class="artist-img">
                        <div class="image-gz-left">
                            <div class="row margin0">
                                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                    <img src="content/images/slider/artist-2.jpg"
                                         data-animation="animated zoomIn"
                                         class="img-responsive artist-img-item" alt="">
                                </div>
                                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                    <div class="artist-des animated zoomInLeft">
                                        <div class="row margin0">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <h3 class="text-1">Maduwithakin
                                                </h3>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <h3 class="text-2">- Ranidu Lankage</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel nav -->
                <a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
                <a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
            </div>
        </div>
    </div>
</div>
<!--end slider from here-->

<!--start home page content-->
<div class="page-content">
    <div class="container">


        <div class="row margin0 top-btm" style="height: 50em; max-height: 50em;overflow-x: hidden;">

            <!--start left side timeline-->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding0 change-float-1">
                <!--start section topic-->
                <div class="row margin0 margin-btm-1em">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 padding0">
                        <h3 class="text-3 color-4">Timeline</h3>
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-7 hidden-xs">
                        <form class="form-search">
                            <input type="search" placeholder="Search what you feel..." class="gz-search-2">
                        </form>
                    </div>
                </div>
                <!--end section topic-->

                <!--start section list-->
                <div class="row margin0">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">

                        <div class="timeline-content color-5 scrollbar-container">
                            <?php
                            foreach ($posts as $post) {
                                ?>


                                <div class="timeline-item border-btm-1 padding-btm-2em padding-top-2em hvr-bob">
                                    <div class="row margin0">
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding0">
                                            <div class="gz-artist-img">
                                                <img src="content_images/posts/200/<?php echo $post['post_id']; ?>.jpg"
                                                     alt="" title=""
                                                     class="img-rounded img-responsive">

                                            </div>
                                        </div>
                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 padding0right">
                                            <div class="row margin0">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                                    <div class="gz-artist-des">
                                                        <h3 class="text-12 color-6"><?php echo $post['post_title']; ?>
                                                            2</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row margin0">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                                    <h5 class="text-13 color-10"><?php echo $post['post_body']; ?></h5>
                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <!--end section list-->

            </div>
            <!--end left side  timeline-->

            <!--start right side-->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding0 change-float-2">

                <div class="row margin0">
                    <!--start top20 left-->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding0right m-padding">
                        <!--start section topic-->
                        <div class="row margin0 margin-btm-1em hidden-xs">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                <h3 class="text-3 color-4">top 20</h3>
                                <!--                                <div style="margin-bottom: 2px;">-->
                                <!--                                    <span class="text-14">Top rating Audio and Video</span>-->
                                <!--                                </div>-->
                            </div>
                        </div>
                        <!--end section topic-->


                        <!--start top 20-->
                        <div class="row margin0 color-5 hidden-xs">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">

                                <?php
                                $count = 0;
                                foreach ($top_20 as $top_song) {
                                    if ($count < 5) {
                                        ?>
                                        <div class="top-20-gz">
                                            <input type="hidden" id="top_20" value="<?php echo $top_song['dn_id']; ?>">
                                            <!--                                        <div class="hvr-pulse-grow">-->
                                            <div class="row margin0">
                                                <div class="col-md-6 padding0">
                                                    <div class="gz-artist-img-top20">
                                                        <img
                                                            src="content_images/songs/200/<?php echo $top_song['dn_id']; ?>.jpg"
                                                            alt="" title=""
                                                            class="img-rounded img-responsive">
                                                        <span
                                                            class="text-5 color-7 color-8"><?php echo $count + 1; ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 padding0right">
                                                    <div class="top-20-des">
                                                        <h5 class="text-15 color-11"><?php echo $top_song['artist_name']; ?></h5>
                                                        <h5 class="text-16 color-12"><?php echo $top_song['dn_title']; ?></h5>
                                                    </div>
                                                </div>
                                                <!--                                            </div>-->
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    $count++;
                                }
                                ?>


                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                <div class="top-20-more padding-btm-1em">
                                    <h5 class="text-18 color-13">you want more click below</h5>

                                    <a href="" class="link-1 color-7 color-8 hvr-push"> more</a>
                                </div>
                            </div>
                        </div>
                        <!--end top 20 -->

                        <!--start artist of the week-->
                        <div class="row margin0 color-5 margin-top-1em hidden-xs">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">

                                <!--start section topic-->
                                <div class="row margin0 padding-btm-1em">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                        <h3 class="text-19 color-4">Artist of the week</h3>
                                        <div style="margin-bottom: 2px;">
                                            <span class="text-20 color-4">Top rated artist</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end section topic-->
                                <?php
                                $count = 0;
                                foreach ($artist as $art) {
                                    if ($count < 5) {
                                        ?>

                                        <!--start artist of the week-->
                                        <div class="row margin0 padding-btm-1em border-btm-1">
                                            <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 padding0">
                                                <div class="artist-of-week">
                                                    <img
                                                        src="content_images/artists/<?php echo $art['artist_id']; ?>.jpg"
                                                        alt="" title=""
                                                        class="img-responsive img-rounded hvr-buzz-out">
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 padding0">
                                                <div class="artist-of-week-des">
                                                    <h5 class="text-21"><?php echo $art['artist_name']; ?></h5>
                                                    <h5 class="text-22"><?php echo $art['artist_si_name']; ?></h5>
                                                    <div class="text-24">Ranidu Lankage is a
                                                        Sinhalese R&B and hip
                                                        hop artist who raised
                                                        the international profile
                                                        of Sinhalese RnB/pop
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--end artist of the week-->

                                        <!--start best of artist-->
                                        <div class="row margin0 padding-btm-1em">
                                            <div class="row margin0">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                                    <h3 class="text-25 color-13">Best of <span
                                                            class="text-26"><?php echo $art['artist_name']; ?></span>
                                                    </h3>
                                                </div>

                                            </div>
                                            <div class="row margin0" style="padding-left: 0.5em">
                                                <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4 padding0">
                                                    <div class="best-of-artist effect-shine">
                                                        <img
                                                            src="content_images/songs/200/<?php echo $art['dn_id1']; ?>.jpg"
                                                            alt=" "
                                                            class="img-responsive img-rounded">
                                                        <span class="text-27"><?php echo $art['dn_title1']; ?></span>

                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4 padding0">
                                                    <div class="best-of-artist  effect-shine">
                                                        <img
                                                            src="content_images/songs/200/<?php echo $art['dn_id2']; ?>.jpg"
                                                            alt=" "
                                                            class="img-responsive img-rounded">
                                                        <span class="text-27"><?php echo $art['dn_title2']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4 padding0">
                                                    <div class="best-of-artist  effect-shine">
                                                        <img
                                                            src="content_images/songs/200/<?php echo $art['dn_id3']; ?>.jpg"
                                                            alt=" "
                                                            class="img-responsive img-rounded">
                                                        <span class="text-27"><?php echo $art['dn_title3']; ?></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--end best of artist-->

                                        <?php
                                    }
                                    $count++;
                                }
                                ?>

                            </div>
                        </div>
                        <!--end artist of the week-->

                        <!--start top videos-->
                        <div class="row margin0 color-5 margin-top-1em padding-btm-1em">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">

                                <!--start section topic-->
                                <div class="row margin0 padding-btm-1em">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                        <h3 class="text-19 color-4">Videos</h3>
                                        <div style="margin-bottom: 2px;">
                                            <span class="text-20 color-4">Top rating Videos</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end section topic-->

                                <!--start videos-->

                                <?php
                                $count = 0;
                                foreach ($videos as $video) {
                                    if ($count < 5) {
                                        ?>
                                        <div class="row margin0 border-1 margin-btm-0-5em audio-effect">
                                            <input type="hidden" id="top_20" value="<?php echo $video['dn_id']; ?>">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <div class="audio-img">
                                                    <img
                                                        src="content_images/songs/200/<?php echo $video['dn_id']; ?>.jpg"
                                                        alt="" title=""
                                                        class="img-responsive img-rounded">
                                                    <div class="overlay"></div>
                                                    <div class="button"><a href="#"> </a></div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <div class="audio-des">
                                                    <div class="audio-des-1">
                                                        <h5 class="text-16 color-12"><?php echo $video['dn_title']; ?></h5>
                                                        <h5 class="text-15 color-11"><?php echo $video['artist_name']; ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    $count++;
                                }
                                ?>
                                <!--end  videos-->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                    <div class="top-20-more padding-btm-1em">
                                        <h5 class="text-18 color-13">you want more click below</h5>

                                        <a href="" class="link-1 color-7 color-8 hvr-push"> more</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end top videos-->

                        <!--start top audios-->
                        <div class="row margin0 color-5 margin-top-1em padding-btm-1em">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">

                                <!--start section topic-->
                                <div class="row margin0 padding-btm-1em">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                        <h3 class="text-19 color-4">Audios</h3>
                                        <div style="margin-bottom: 2px;">
                                            <span class="text-20 color-4">Top rating Audios</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end section topic-->

                                <!--start videos-->
                                <?php
                                $count = 0;
                                foreach ($song as $home_song) {
                                    if ($count < 5) {
                                        ?>
                                        <div class="row margin0 border-1 margin-btm-0-5em audio-effect">
                                            <input type="hidden" id="top_20" value="<?php echo $home_song['dn_id']; ?>">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <div class="audio-img">
                                                    <img
                                                        src="content_images/songs/200/<?php echo $home_song['dn_id']; ?>.jpg"
                                                        alt="" title=""
                                                        class="img-responsive img-rounded">
                                                    <div class="overlay"></div>
                                                    <div class="button"><a href="#"> </a></div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <div class="audio-des">
                                                    <div class="audio-des-1">
                                                        <h5 class="text-16 color-12"><?php echo $home_song['dn_title']; ?></h5>
                                                        <h5 class="text-15 color-11"><?php echo $home_song['artist_name']; ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    $count++;
                                }
                                ?>

                                <!--end  videos-->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                    <div class="top-20-more padding-btm-1em">

                                        <h5 class="text-18 color-13">you want more click below</h5>

                                        <a href="" class="link-1 color-7 color-8 hvr-push"> more</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end top audios-->


                    </div>
                    <!--end top20 left-->


                    <!--start event and advertiesment-->
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0right hidden-xs sidebar">
                        <!--start section topic-->
                        <div class="row margin0 margin-btm-1em">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                <h3 class="text-17 color-4">events calender</h3>
                                <!--                                <div style="margin-bottom: 0.1em;">-->
                                <!--                                    <span class="text-14">music calender plan</span>-->
                                <!--                                </div>-->
                            </div>
                        </div>
                        <!--end section topic-->


                        <!--start event section-->
                        <div class="row margin0 color-5">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                <div class="event-1">

                                    <?php
                                    $count = 0;
                                    foreach ($events as $event) {
                                        $count++;
                                        if ($count == 1) {
                                            ?>
                                            <div class="row margin0">
                                                <div class="col-md-6 padding0">
                                                    <div class="event-img ">
                                                        <img src="content_images/events/200/<?php echo $event['event_id']; ?>.jpg" alt="" title=""
                                                             class="img-responsive animated fadeIn hvr-shrink">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 padding0">
                                                    <div class="event-des">
                                                        <a href="" class="link-2 animated infinite flash hvr-backward"><?php echo $event['event_name']; ?></a>
                                                        <h4 class="text-30 color-10"><?php echo $event['event_date']; ?></h4>
                                                        <h4 class="text-31 color-10">Starts @ <?php echo $event['event_st_time']; ?></h4>
                                                        <h4 class="text-32 color-14"><?php echo $event['event_location']; ?></h4>
                                                        <h4 class="text-33 color-10"><?php echo $event['event_name']; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php

                                        } else {
                                            ?>
                                            <div class="row margin0">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                                    <div class="row margin0 event-2 color-15 hvr-shrink">
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding0">
                                                            <p class="text-34">Jan</p>
                                                            <span class="text-35">23</span>
                                                        </div>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 padding0">
                                                            <h3 class="text-36"><?php echo $event['event_name']; ?></h3>
                                                            <h3 class="text-37 color-14"><?php echo $event['event_description']; ?></h3>
                                                            <a href="" class="link-3 color-14">more</a>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>


                                </div>

                                <!-- advertiesment area  -->
                                <div class="advert-area">
                                    <div class="row margin0" style="padding-bottom: 0.4em">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                            <img src="content/images/adver/ad-1.jpg" alt="" title=""
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row margin0" style="padding-bottom: 0.4em">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                            <img src="content/images/adver/ad-2.jpg" alt="" title=""
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row margin0" style="padding-bottom: 0.4em">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                            <img src="content/images/adver/ad-3.jpg" alt="" title=""
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row margin0" style="padding-bottom: 0.4em">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                                            <img src="content/images/adver/ad-4.jpg" alt="" title=""
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <!-- advertiesment area  -->
                            </div>
                        </div>
                        <!--end event section-->
                    </div>
                    <!--end event and advertiesment-->
                </div>

            </div>
            <!--end right side-->

        </div>


    </div>
</div>
<!--end home page content-->

<script>

    window.onload = function () {

        $('#custom_carousel').on('slide.bs.carousel', function (evt) {
            $('#custom_carousel .controls li.active').removeClass('active');
            $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
        })

    };

</script>