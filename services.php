<!DOCTYPE html>
<?php include './class/include.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Golden Bay Resort | Services</title>
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

            <?php include 'header.php'; ?>
            <!--side_menu_hd end-->
            <!--responsive_mobile_menu end-->

            <main class="main_content">
                <section class="c-block resot-sec">
                    <div class="container">
                        <div class="sec-title">
                            <h3>Services</h3>
                        </div><!--sec-title end-->
                        <section class="">
                            <div class="container">
                                <div class="page-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="tb-detaiils">
                                                    <div class="row">
                                                        <?php
                                                        $SERVICE = new Service(NULL);
                                                        foreach ($SERVICE->all() as $service) {
                                                            ?>
                                                            <div class="col-xl-6">
                                                                <div class="tb-row">
                                                                    <div class="room_details">
                                                                        <div class="room-caroz">
                                                                            <div class="room_img">
                                                                                <img src="upload/service/<?php echo $service ['image_name']; ?>" alt="">
                                                                            </div><!--room_img end-->
                                                                        </div><!--room-caroz end-->
                                                                        <div class="room_info">
                                                                            <h3><a href="#" title=""><?php echo $service ['title']; ?></a></h3>
                                                                            <p><?php echo $service ['description']; ?></p> 
                                                                        </div><!--room_info end-->
                                                                        <div class="clearfix"></div>
                                                                    </div><!--room-details end-->
                                                                </div><!--tb-row end-->
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div><!--tb-detaiils end-->
                                            </div>
                                        </div>
                                    </div><!--main-dv end-->
                                </div>
                            </div>
                        </section>
                        <!--resot_sec end-->
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


        <script src="js/script.js"></script>
    </body>
</html>