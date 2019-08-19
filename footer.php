<footer>
    <div class="top-footer">
        <div class="container">
            <div class="ft-logo">
                <img src="images/m-logo.png" alt="">
                <div class="ft-text">
                    <h2 style="padding-top: 20px;">Golden Bay Resort</h2>
                    <!--                    <h3>Hotel & Resort</h3>-->
                </div>
            </div><!--ft-logo end-->
            <div class="room-feats-list">
                <ul>
                    <li>
                        <h3>25</h3>
                        <h4>SUITES</h4>
                    </li>
                    <li>
                        <h3>195</h3>
                        <h4>ROOMS</h4>
                    </li>
                    <li>
                        <h3>84</h3>
                        <h4>APARTMENTS</h4>
                    </li>
                    <li>
                        <h3>143</h3>
                        <h4>STAFF</h4>
                    </li>
                </ul>
            </div><!--room-feats-list end-->
            <div class="social-links">
                <ul>
                    <li><a href="#" title=""><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-pinterest-square"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div><!--social-links end-->
            <div class="clearfix"></div>
        </div>
    </div><!--top-footer end-->
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget-info">
                        <h4>+94 41 226 0563</h4>
                        <ul class="info-lst">
                            <li>Synotec Holdings Pvt Ltd</li> 
                            <li>Galle,</li> 
                            <li>Sri Lanka.</li>
                        </ul>
                        <!--                        <ul class="pt-lst">
                                                    <li>
                                                        <img src="images/resources/pt1.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="images/resources/pt2.png" alt="">
                                                    </li>
                                                </ul>-->
                    </div><!--widget-info end-->
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget widget-links">
                        <h3 class="widget-title">Site Map</h3>
                        <ul>
                            <li><a href="about-us.php" title="">About Us</a></li>
                            <li><a href="accommodation.php" title="">Accommodation</a></li>
                            <li><a href="excurtion.php" title="">Excurtion</a></li>
                            <li><a href="services.php" title="">Services</a></li>
                            <li><a href="gallery.php" title="">Gallery</a></li>
                            <li><a href="contact.php" title="">Contact</a></li>
                        </ul>
                    </div><!--widget-links end-->
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget widget-links">
                        <h3 class="widget-title">Excursions</h3>
                        <ul>
                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $key => $attraction) {
                                if ($key < 6) {
                                    ?>
                                    <li><a href="view-excurtion.php?id=<?php echo $attraction["id"]; ?>" title=""><?php echo $attraction["title"]; ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div><!--widget-links end-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget-newsletter">
                        <h3 class="widget-title">Golden Bay Resort</h3>
                        <p>Subscribe to Pacific newsletter to get <br /> the latest jobs posted, candidates ,and other latest news stay updated.</p>
                        <form>
                            <input type="email" name="email" placeholder="Enter your email address">

                        </form>
                    </div><!--widget-newsletter END-->
                </div>
            </div>
        </div>
    </div><!--bottom-footer end-->
    <div class="bottom-strip">
        <div class="container">
            <p>© 2019 Golden Bay Resort. All Rights Reserved. Design by Synotec Holdings (Pvt) Ltd.</p>
        </div>
    </div><!--bottom-strip end-->
</footer>