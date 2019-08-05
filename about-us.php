<!DOCTYPE html>
<?php include './class/include.php';
$ABOUT_US = new Page(2);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Golden Bay Resort | About Us</title>
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

                <!--pager-sec end-->


                <section class="c-block white-bg">
                    <div class="container">
                        <div class="about-us-sec about-pg">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="about_we">
                                        <h2><?php echo $ABOUT_US->title; ?></h2>
                                        <p><?php echo $ABOUT_US->description; ?> </p> 
                               
                                    </div><!--about_we end-->
                                </div>
                                <div class="col-lg-7 p-0">
                                    <ul class="abt_img">
                                        <li>
                                            <img src="images/resources/bt-img1.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/resources/bt-img2.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--about-us-sec end-->
                    </div>
                </section><!--about-us end-->

                <section class="c-block resot-sec">
                    <div class="container">
                        <div class="sec-title">
                            <h3>WHY CHOOSE OUR RESORT</h3>
                        </div><!--sec-title end-->
                        <div class="resot_sec">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-6">
                                    <div class="resot-dv">
                                        <div class="resot-icon">
                                            <i class="la la-wifi"></i>
                                        </div>
                                        <h3>Wifi Areas</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and</p>
                                    </div><!--resot-dv end-->
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-6">
                                    <div class="resot-dv">
                                        <div class="resot-icon">
                                            <i class="la la-angellist"></i>
                                        </div>
                                        <h3>Success</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and</p>
                                    </div><!--resot-dv end-->
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-6">
                                    <div class="resot-dv">
                                        <div class="resot-icon">
                                            <i class="la la-diamond"></i>
                                        </div>
                                        <h3>Diamond</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and</p>
                                    </div><!--resot-dv end-->
                                </div>
                            </div>
                        </div><!--resot_sec end-->
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