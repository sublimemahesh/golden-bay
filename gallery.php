<!DOCTYPE html>
<?php
include './class/include.php';
$photo_album = new PhotoAlbum(1);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Golden Bay Resort | Gallery</title>
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
        <link href="light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="layout hpg6 hop6">

<?php include 'header.php'; ?><!--side_menu_hd end-->

            <!--responsive_mobile_menu end-->

            <main class="main_content">
                <section class="c-block pb-0">
                    <div class="container">
                        <div class="sec-title">
                            <h3>Gallery </h3>
                        </div><!--sec-title end-->
                        <div class="gallery-grid">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab_1">
                                    <div class="gallery-grid">
                                        <div class="row">
                                            <?php
                                            $ALBUM_PHOTO = new AlbumPhoto(NULL);
                                            foreach ($ALBUM_PHOTO->getAlbumPhotosById(1) as $album_photo) {
                                                ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 gallery">
                                                    <div class="gd-item">
                                                        <a href="upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>">
                                                            <img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="">
                                                        </a>
                                                    </div><!--gd-item end-->
                                                </div>
                                                <?php
                                            }
                                            ?> 
                                        </div>
                                    </div><!--gallery-grid end-->
                                </div>


                            </div>
                        </div><!--gallery-grid end-->
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
        <script src="light-box/simple-lightbox.js" type="text/javascript"></script>
        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>
    </body>
</html>