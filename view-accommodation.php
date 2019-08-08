<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET["id"];
$rooms = new Room($id);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Golden Bay Resort | Room</title>
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
        <?php include './header.php'; ?>

        <main class="main_content">
            <section class="main-content">
                <div class="container">
                    <div class="page-content">
                        <div class="room-single-page">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="room-single-details">
                                        <div class="room_slide_sec">
                                            <div class="room_slide_imgs">
                                                <?php
                                                $ROOMPHOTO = RoomPhoto::getRoomPhotosById($id);
                                                foreach ($ROOMPHOTO as $key => $roomphoto) {
                                                    if ($key < 4) {
                                                        ?>
                                                        <div class="rom_img_slide">
                                                            <img src="upload/room/gallery/<?php echo $roomphoto['image_name'] ?>" alt="">
                                                            <a href="upload/room/gallery/<?php echo $roomphoto['image_name'] ?>" title="" class="html5lightbox zoom-img"><img src="images/zoom.png" alt=""></a>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div><!--room_slide_imgs end-->
                                            <ul class="room_slide_thumbs">
                                                <?php
                                                $ROOMPHOTO = RoomPhoto::getRoomPhotosById($id);
                                                foreach ($ROOMPHOTO as $key => $roomphoto) {
                                                    ?>
                                                    <li>
                                                        <div class="thumb_img">
                                                            <img src="upload/room/gallery/thumb/<?php echo $roomphoto['image_name'] ?>" alt="">
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
<!--<room_slide_thumbs end>-->
                                        </div><!--room_slide_sec end-->
                                        <div class="room_descp_sec">
                                            <!--dep-head end-->
                                            <div class="clearfix"></div>
                                            <div class="descp_info">
                                                <h3><?php echo $rooms->title ?></h3>
                                                <p><?php echo $rooms->description; ?></p>

                                            </div><!--descp_info end-->
                                            <!--descp_info end-->

                                        </div><!--room_descp_sec end-->
                                    </div><!--room-single-details end-->
                                </div>
                                <div class="col-lg-4">
                                    <div class="sidebar">
                                        <div class="widget widget_posts">
                                            <h3 class="widget_title">Other Accomodation</h3>
                                            <ul>
                                                <?php
                                                $ROOM = new Room(NULL);
                                                foreach ($ROOM->all() as $rooms) {
                                                    ?>
                                                    <li>
                                                        <div class="wd-post">
                                                            <a href="">
                                                                <div class="wd-post-img">
                                                                    <img src="upload/room/<?php echo $rooms['image_name'] ?>" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="wd-post-info">
                                                                <h3><a href="view-accommodation.php?id=<?php echo $rooms['id'] ?>" title=""><?php echo $rooms['title'] ?></a></h3>
                                                                <span></span>
                                                                <a href="view-accommodation.php?id=<?php echo $rooms['id'] ?>" title="">View Now <i class="la la-arrow-right"></i></a>
                                                            </div><!--wd-post-info end-->
                                                        </div><!--wd-post end-->
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div><!--widget_posts end-->
                                        <!--wid-info end-->
                                    </div><!--sidebar end-->
                                </div>
                            </div>
                        </div><!--room-single-page end-->
                    </div><!--page-content end-->
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

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-select.js"></script>
        <script src="js/html5lightbox.js"></script>
        <script src="js/handleCounter.js"></script>
        <script src="js/flatpickr.js"></script>
        <script src="js/lib/slick/slick.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>