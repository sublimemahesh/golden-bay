<section class="main-slider hp_6">
    <div id="rev_slider_476_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="christmas-snow-scene" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
        <div id="rev_slider_476_2" class="rev_slider" style="display:none;" data-version="5.3.0.2">
            <ul>    
                <!-- SLIDE  -->
                <?php
                $SLIDER = new Slider(NULL);
                foreach ($SLIDER->all() as $key => $slider)
                {
                     $key++ ;
                        ?>
                        <li data-index="rs-<?php echo $key ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/slider_banner.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="<?php echo $key; ?>" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="105" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <div class="tp-caption lyr6 tp-resizeme"
                                 id="slide-1-layer-1"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="0"
                                 data-width="['auto','auto','auto','auto']"
                                 data-height="['auto','auto','auto','auto']"
                                 data-paddingtop="[15,15,15,15]"
                                 data-paddingright="[40,40,40,40]"
                                 data-paddingbottom="[15,15,15,15]"
                                 data-paddingleft="[40,40,40,40]"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style=""><?php // echo $slider['url'] ?>
                            </div>

                            <div class="tp-caption lyr2 tp-resizeme"
                                 id="slide-1-layer-2"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="56"
                                 data-width="['auto','auto','auto','auto']"
                                 data-height="['auto','auto','auto','auto']"
                                 data-paddingtop="[15,15,15,15]"
                                 data-paddingright="[40,40,40,40]"
                                 data-paddingbottom="[15,15,15,15]"
                                 data-paddingleft="[40,40,40,40]"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="200"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style=""><?php echo $slider['title'] ?>
                            </div>

                            <div class="tp-caption lyr7 tp-resizeme"
                                 id="slide-1-layer-3"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="146"
                                 data-width="['auto','auto','auto','auto']"
                                 data-height="['auto','auto','auto','auto']"
                                 data-paddingtop="[15,15,15,15]"
                                 data-paddingright="[40,40,40,40]"
                                 data-paddingbottom="[15,15,15,15]"
                                 data-paddingleft="[40,40,40,40]"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style=""><?php echo $slider['description'] ?>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <a href="#" title="" class="tp-caption lyr3 tp-resizeme"
                               id="slide-1-layer-4"
                               data-x="center" data-hoffset="0"
                               data-y="center" data-voffset="234"
                               data-width="['auto','auto','auto','auto']"
                               data-height="['auto','auto','auto','auto']"
                               data-paddingtop="[29,29,29,29]"
                               data-paddingright="[37,37,37,37]"
                               data-paddingbottom="[27,27,27,27]"
                               data-paddingleft="[37,37,37,37]"
                               data-transform_idle="o:1;"
                               data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                               data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                               data-start="2100"
                               data-splitin="none"
                               data-splitout="none"
                               data-responsive_offset="on"
                               data-elementdelay="0.05"
                               style="">Find Out More	
                            </a>		
                        </li>
                        <!-- SLIDE  -->
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div><!--Revolution Slider end-->
    <div class="scroller-div">
        <a class="an-down" href="#bt-sec" title=""><i class="la la-long-arrow-down"></i></a>
    </div><!--scroller-div end-->

</section>