<!DOCTYPE html>
<?php include './class/include.php'; ?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Golden Bay Resort | Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="js/lib/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="js/lib/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="layout">
            <?php include 'header.php'; ?>
            <main class="main_content">
                <!--pager-sec end-->

                <section class="c-block white-bg">
                    <div class="container">
                        <div class="contact_sec">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="contact_info">
                                        <h3>CONTACT INFO</h3>
                                        <ul>
                                            <li>
                                                <img src="images/cs1.png" alt="">
                                                <div class="cs_info">
                                                    <span>Synotec Holdings Pvt Ltd. <br /> Galle, Sri Lanka. </span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/cs2.png" alt="">
                                                <div class="cs_info">
                                                    <span>Call Us : +94 41 226 0563</span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/cs3.png" alt="">
                                                <div class="cs_info">
                                                    <span>Fax : 94 77 280 4289</span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/cs4.png" alt="">
                                                <div class="cs_info">
                                                    <a href="#" title="">Email : <span class="__cf_email__" data-cfemail="9cf5f2faf3dcfeeef3eaf9eef3e5fdf0b2fff3f1">info@goldenbayresort.com</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!--contact_info end-->
                                </div>
                                <div class="col-lg-7">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.32717083107!2d79.91496081477251!3d6.851329195048676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bd97320a087%3A0xfa4766a56acdd267!2sSynotec+Holdings+Pvt.+Ltd!5e0!3m2!1sen!2slk!4v1564564041155!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div><!--contact_sec end-->
                    </div>
                </section><!--CONTACT-SEC END-->

                <section class="c-block msg-sec">
                    <div class="container">
                        <div class="sec-title">
                            <h3>Send a message</h3>
                            <p>Do you have anything in your mind to tell us? Please don't hesitate to get in touch to us via our contact form. </p>
                        </div><!--sec-title end-->
                        <div class="post-comment">
                            <div class="form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-field">
                                            <label>Full Name*</label>
                                            <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater" value="">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-field">
                                            <label>Your Email*</label>
                                            <input type="email" name="txtEmail" id="txtEmail" class="form-control input-validater" value="">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-field">
                                            <label>Your Contact No</label>
                                            <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater" value="">
                                            <span id="spanPhone"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-field">
                                            <label>Your Country*</label>
                                            <input type="text" name="txtCountry" id="txtCountry" class="form-control input-validater" value="">
                                            <span id="spanCountry"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-field">
                                            <label>Subject*</label>
                                            <input type="text" name="txtSubject" id="txtSubject" class="form-control input-validater" value="">
                                            <span id="spanSubject"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-field">
                                            <label>Your Message*</label>
                                            <textarea name="txtMessage" id="txtMessage" class="form-control input-validater"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xs-12">
                                        <div class="form-field">
                                        <label>Security Code*</label>
                                        <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Security code >> ">
                                        <span id="capspan" ></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12"> 
                                        <label></label>
                                        <span><?php include("./contact-form/captchacode-widget.php"); ?></span>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-12">
                                        <div class="div-check" >
                                            <img src="contact-form/img/checking.gif" id="checking"/>
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-submit">
                                            <button type="submit" id="btnSubmit" class="lnk-default">Send Message <i class="la la-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="dismessage"></div>
                            </div>
                        </div><!--post-comment end-->
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

        </div>

        <a href="#" title="" class="scrollTop"><i class="la la-arrow-up"></i></a>

        <div class="max-cont"></div>


        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script> 
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-select.js"></script>
        <script src="js/html5lightbox.js"></script>
        <script src="js/handleCounter.js"></script>
        <script src="js/flatpickr.js"></script>
        <script src="js/lib/slick/slick.js"></script>
        <script src="js/map.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYc537bQom7ajFpWE5sQaVyz1SQa9_tuY&amp;callback=initMap"></script>
        <script src="contact-form/scripts.js" type="text/javascript"></script>
        <script src="js/script.js"></script>



    </body>

</html>		