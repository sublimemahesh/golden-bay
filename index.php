<!DOCTYPE html>
<?php
include './class/include.php';
$ABOUT_US = new Page(1);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Golden Bay Resort | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="js/lib/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="js/lib/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">

    </head>
    <body>

        <div class="layout hpg6 hop6">

            <?php include 'header.php'; ?><!--side_menu_hd end-->

            <!--responsive_mobile_menu end-->

            <main class="main_content">

                <?php include 'slider.php'; ?>

                <!--MAIN-SLIDER END-->

                <section class="c-block p-0" id="bt-sec">
                    <div class="container-fluid p-0">
                        <div class="row pad-none">
                            <div class="col-lg-4 col-md-4 col-sm-6 mob-box">
                                <div class="featz">
                                    <img src="images/resources/New folder/restaurent.jpg" alt="">
                                    <div class="featz-fig">
                                        <img src="images/ic1.png" alt="">
                                        <h3 class="box-title"><a href="#" title="">Restaurant</a></h3>
                                    </div>
                                </div><!--featz end-->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mob-box">
                                <div class="featz">
                                    <img src="images/resources/New folder/accomadation.jpg" alt="">
                                    <div class="featz-fig">
                                        <img src="images/ic2.png" alt="">
                                        <h3 class="box-title"><a href="#" title="">Accomadation</a></h3>
                                    </div>
                                </div><!--featz end-->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mob-box">
                                <div class="featz">
                                    <img src="images/resources/New folder/bar.jpg" alt="">
                                    <div class="featz-fig">
                                        <img src="images/ic3.png" alt="">
                                        <h3 ><a href="#" title="" class="box-title">Bar</a></h3>
                                    </div>
                                </div><!--featz end-->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="c-block">
                    <div class="container">
                        <div class="about-us-sec hop6">
                            <div class="row">

                                <div class="col-lg-5">
                                    <div class="about_we pt-0">
                                        <h2>GOLDEN BAY</h2>
                                        <h3>WHO WE ARE </h3>
                                        <p class="justify"><?php echo $ABOUT_US->description; ?></p>
                                        <a href="about-us.php" title="" class="lnk-default">About Us <i class="la la-arrow-right"></i></a>
                                    </div><!--about_we end-->
                                </div>
                                <div class="col-lg-7 p-0">
                                    <ul class="abt_img">
                                        <li class="light-overlay">
                                            <img src="images/resources/bt-img1.jpg" alt="">
                                        </li>
                                        <li class="light-overlay">
                                            <img src="images/resources/bt-img2.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--about-us-sec end-->
                    </div>
                </section><!--ABOUT-US END-->
                <section class="c-block">
                    <div class="container">
                        <div class="sec-title">
                            <h3>Rooms</h3>
                        </div><!--sec-title end-->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="tb-detaiils">
                                    <div class="row">
                                        <?php
                                        $ROOM = new Room(NULL);
                                        foreach ($ROOM->all() as $key => $rooms) {
                                            ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="room_details">
                                                    <div class="room-caroz">
                                                        <?php
                                                        $ROOMPHOTO = new RoomPhoto(NULL);
                                                        foreach ($ROOMPHOTO->getRoomPhotosById($rooms['id']) as $key => $roomphoto) {
                                                            ?>
                                                            <div class="room_img">
                                                                <a href="view-accommodation.php?id=<?php echo $rooms["id"]; ?>">
                                                                    <img src="upload/room/gallery/thumb/<?php echo $roomphoto['image_name'] ?>" alt=""> 
                                                                </a>
                                                                <span class="price-tag">Rs <?php echo $rooms['price'] ?> .00</span>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                        <!--room_img end-->
                                                        <!--room_img end-->
                                                    </div><!--room-caroz end-->
                                                    <div class="room_info">
                                                        <h3><a href="view-accommodation.php?id=<?php echo $rooms["id"]; ?>" title="" id="text-color"><?php echo $rooms['title']; ?></a></h3>
                                                        <ul class="ppt-list">
                                                            <li>
                                                                <img src="images/icy1.png" alt="">
                                                                1 GUESTS
                                                            </li>
                                                            <li>
                                                                <img src="images/icy2.png" alt="">
                                                                15 Ft²
                                                            </li>
                                                        </ul><!--ppt-list end-->
                                                        <p class="justify"><?php echo substr($rooms['short_description'], 0, 115) ?>...</p>

                                                        <ul class="fct-list">
                                                            <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Wifi"><img src="images/ci1.png" alt=""></span>
                                                            </li>

                                                            <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Car"><img src="images/ci3.png" alt=""></span>
                                                            </li>
                                                            <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Breakfast"><img src="images/ci4.png" alt=""></span>
                                                            </li>
                                                        </ul><!--fct-list end-->
                                                        <a href="view-accommodation.php?id=<?php echo $rooms["id"]; ?>" title="" class="lnk-default">Book Now <i class="la la-arrow-right"></i></a>
                                                    </div><!--room_info end-->
                                                </div><!--room-details end-->
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div><!--tb-detaiils end-->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="c-block srvs_sec">
                    <div class="container">
                        <div class="sec-title">
                            <h3>Services</h3>
                        </div><!--sec-title ned-->
                        <div class="services_sec srvc-carousel ">
                            <?php
                            $SERVICE = new Service(NULL);

                            foreach ($SERVICE->all() as $key => $service) {

                                $key++;
                                $SERVICE_ARRAY = array($service['id']);
                                ?>
                                <div class="service-slide">
                                    <div class="row">
                                        <div class="col-lg-6 pr-0">
                                            <div class="srv-img">
                                                <img src="upload/service/<?php echo $service ['image_name']; ?>" alt="">
                                            </div><!--srv-img end-->
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="srvc-info">
                                                <ul class="slide-no">
                                                    <li class="active">
                                                        <span><?php
                                                            echo $key
                                                            ?></span>
                                                    </li>
                                                    <li>
                                                        <span><?php echo json_encode(array_sum($SERVICE_ARRAY)) ?></span>
                                                    </li>
                                                </ul><!--slide-no end-->
                                                <h3><a href="#" title=""></a><?php echo $service ['title']; ?></h3>
                                                <p><?php echo $service ['short_description']; ?></p>
                                                <a href="#" title="" class="lnk-default">Read More <i class="la la-arrow-right " ></i></a>
                                            </div><!--srvc-info end-->
                                        </div>
                                    </div>
                                </div>

                                <!--service-slide end-->

                                <?php
                            }
                            ?>
                        </div><!--services_sec end-->
                    </div>
                </section>


                <section class="c-block testimonial-sec">
                    <div class="container">
                        <div class="sec-title">
                            <h3>Customer Revıews</h3>
                        </div><!--sec-title end-->
                        <div class="testimonial-carousel">
                            <?php
                            $COMMENT = new Comments(NULL);
                            foreach ($COMMENT->activeComments() as $comments) {
                                ?>
                                <div class="testi">
                                    <div class="ts-img">
                                        <img src="upload/comments/<?php echo $comments['image_name'] ?>" alt="">
                                    </div>
                                    <h3><?php echo $comments['name'] ?></h3>
                                    <span><?php echo $comments['title'] ?></span>
                                    <p><?php echo $comments['comment'] ?></p>
                                </div>
                                <?php
                            }
                            ?><!--testi end-->
                        </div><!--testimonial-carousel end-->
                    </div>
                </section>

                <!--TESTIMONIAL-SEC END-->

                <section class="c-block">
                    <div class="container">
                        <div class="sec-title">
                            <h3>Excursions</h3>
                        </div><!--sec-title end-->
                        <div class="blog-items">
                            <div class="row blog_carousel">
                                <?php
                                $ATTRACTION = new Attraction(NULL);
                                foreach ($ATTRACTION->all() as $key => $attraction) {
                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog">
                                            <div class="blog-img light-overlay">
                                                <a href="view-excurtion.php?id=<?php echo $attraction["id"]; ?>">
                                                    <img src="upload/attraction/<?php echo $attraction['image_name']; ?>" alt="" class="img-responsive">
                                                </a>

                                                <!--                                            <a href="#" title="" class="blog-category">LUXURY HOTEL</a>-->
                                            </div>
                                            <div class="blog-info">
                                                <h3 class="post-title"><a href="view-excurtion.php?id=<?php echo $attraction["id"]; ?>" title=""><?php echo $attraction["title"]; ?></a></h3>
                                                <p><?php echo $attraction["short_description"]; ?></p>
                                                <a href="view-excurtion.php?id=<?php echo $attraction["id"]; ?>" title="">Read More <i class="la la-arrow-right"></i></a>
                                            </div>
                                        </div><!--blog end-->
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div><!--blog-items end-->
                    </div>
                </section>

                <?php include 'footer.php'; ?><!--FOOTER END-->

                <a href="#" title="" class="scrollTop"><i class="la la-arrow-up"></i></a>

            </main>


            <div class="search_sec">
                <a href="#" title="" class="close-search"><i class="la la-close"></i></a>
                <div class="search_field">
                    <div class="container">
                        <form>
                            <input type="text" name="search" placeholder="Search for...">
                            <button type="submit"><img src="images/search2.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div><!--search_sec end-->


            <div class="max-cont"></div>

        </div><!--layout end-->

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-select.js"></script>
        <script src="js/html5lightbox.js"></script>
        <script src="js/lib/slick/slick.js"></script>
        <script src="js/map.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYc537bQom7ajFpWE5sQaVyz1SQa9_tuY&amp;callback=initMap"></script>
        <script src="js/handleCounter.js"></script>
        <script src="js/flatpickr.js"></script>

        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

        <script src="revolution/js/revolution.extension.actions.min.js"></script>
        <script src="revolution/js/revolution.extension.carousel.min.js"></script>
        <script src="revolution/js/revolution.extension.kenburn.min.js"></script>
        <script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
        <script src="revolution/js/revolution.extension.migration.min.js"></script>
        <script src="revolution/js/revolution.extension.navigation.min.js"></script>
        <script src="revolution/js/revolution.extension.parallax.min.js"></script>
        <script src="revolution/js/revolution.extension.slideanims.min.js"></script>
        <script src="revolution/js/revolution.extension.video.min.js"></script>
        <script src="revolution/js/revolution.initialize6.js"></script>

        <script src="js/script.js"></script>
    </body>
</html>