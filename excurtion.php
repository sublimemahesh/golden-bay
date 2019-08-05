<!DOCTYPE html>
<?php include './class/include.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Golden Bay Resort | Excursion</title>
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
            <section class="c-block">
                <div class="container">
                    <div class="sec-title">
                        <h3>Excursions</h3>
                    </div><!--sec-title end-->
                    <div class="blog-items">
                        <div class="row" style="margin-bottom: 20px;">
                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $key => $attraction) {
                                ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="blog" style="padding-top: 35px;">
                                        <div class="blog-img">
                                            <a href="view-excurtion.php?id=<?php echo $attraction["id"]; ?>">
                                                <img src="upload/attraction/<?php echo $attraction['image_name']; ?>" alt="">  
                                            </a>
                                            <!--                                        <a href="view-excurtion.php" title="" class="blog-category">LUXURY HOTEL</a>-->
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
            </section><!--BLOG-ITEMS END-->

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