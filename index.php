<?php
$cfg['page'] = "home";
require_once $cfg['root_dir'] . "includes/global.inc.php";
?>
<!DOCTYPE html> <!-- HTML5 Document -->
<!-- 
	Youth Skills Center Preschool & Childcare.
    Website Designed by S. Zain Mehdi.
    Last Updated: July 15th, 2013
    Copyright (C) 2013 Youth Skills Center & Z Computers.
-->
<html>
	<head>
        <title>Youth Skills Center - A Preschool &amp; Childcare Center in Riverside, CA | Ages 2-14</title>
        <meta name="description" content="Youth Skills Center provides affordable and educational preschool and child care
            services in the Riverside, Jurupa Valley, and Mira Loma areas. We utilize the best in technology to provide a
            wonderful, safe, secure, and inspiring atmosphere for your children.">

        <!-- Begin Stylesheets -->
        <link href="styles/fonts.css" rel="stylesheet" type="text/css" />
        <link href="styles/main.css" rel="stylesheet" type="text/css" />
        <link href="styles/layout.css" rel="stylesheet" type="text/css" />
        <link href="styles/banners.css" rel="stylesheet" type="text/css" />
        <link href="styles/index.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon/favicon_new2.ico" />

        <style type="text/css">
            .social-review-link {
                display: inline-block;
                vertical-align: top;
                width: 64px;
                height: 64px;
                background-size: 64px 64px;
                position: relative;
                font-size: 0.8em;;
                text-align: center;
                white-space: nowrap;
                border-radius: 32px;
                box-shadow: inset 0 0 16px rgba(0,0,0,0.5);
                margin:  24px 40px;
            }
            .social-review-link span {
                position: absolute;
                top: 72px;
                left: 50%;
                text-align: center;
                display: block;
                width: 160px;
                overflow: hidden;
                margin-left: -80px;
            }
            .banner_slider_home {
                -webkit-transition: background 0.5s linear;
                -moz-transition: background 0.5s linear;
                transition: background 0.5s linear;
            }
        </style>

        <!-- End Stylesheets -->
        
        <!-- jQuery Plugins -->
        <script src="functions/js/jquery.min.js"></script>
        <script src="functions/js/jquery.preload.min.js"></script>
        <script type="text/javascript">
            $(function() {
                //slider for homepage top banner
                var links = [
                    "images/gallery/YSC_MAIN_BLURRED_SMALL.jpg",
                    "images/gallery/YSC_FRONT_2.jpg",
                    "images/gallery/YSC_LUNCH_AREA.jpg",
                    "images/gallery/YSC_PARKING.jpg",
                    "images/gallery/YSC_PLAYGROUND.jpg",
                    "images/gallery/YSC_SWIMMING_POOL.jpg",
                    "images/gallery/YSC_SCHOOL_AGE_CLASSROOM_1.jpg",
                    "images/gallery/YSC_PRESCHOOL_CLASSROOM_2.jpg",
                    "images/gallery/YSC_PRESCHOOL_CLASSROOM_1.jpg",
                    "images/gallery/YSC_PLAYGROUND_2.jpg",
                    "images/gallery/YSC_FRONT.jpg"
                ];
                $.preload(links);
                changeBanner(0);
                function changeBanner(i) {
                    console.log("Changing Banner.");
                    if(i>=links.length) i=0;
                    $(".banner_slider_home").css("background-image", "url(" + links[i] + ")");
                    console.log(i);
                    setTimeout(function() { changeBanner(++i) }, 7000);
                }
            });
        </script>
    </head>
	<body>
    <?php include_once("includes/plugins/analytics.php") ?>
    	<div id="wrapper">
        	
        <?php showHeader("web",$cfg['page']); ?>

            <div id="content-wrap">
            	<div id="content-inner-wrap">
                    <div class="content-box top">
                        <div id="large_banner_test_01" class="banner_image banner_slider_home" style="height: 650px;background-image: url(images/gallery/YSC_MAIN_BLURRED_SMALL.jpg);
                        background-size: cover;">
                            <div class="banner_content">
                                <h1 style=" font-weight: 200; background-color: transparent;color: white;margin: 390px auto 0 auto; width: 100%; text-align: center; text-shadow: 1px 1px 3px rgba(0,0,0,0.9);">
                                    Welcome to <span style="font-weight: 600"> Youth Skills Center. </span>
                                </h1>
                                <p style="font-size: 20px; font-weight: 300; width: 800px; margin: 20px auto; float: none;">
                                    As a new licensed preschool and childcare center in Riverside, CA, we're shaking things up!
                                    Youth Skills Center provides an all-around great learning experience for your child at the
                                    lowest prices in the business!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content-box small-left" style="background-color: white;">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: #ff6900;">Quick Links</h2>
                            <p>
                                Jump directly to a program.
                            </p>
                            <ul>
                                <li>
                                    <a href="programs.php#preschool" class="navigation_link">Preschool</a>
                                    <br />
                                    <span class="link_sub">Full day or half day preschool program for all children between
                                        the ages of 2 and 5</span>
                                </li>
                                <li>
                                    <a href="programs.php#schoolage" class="navigation_link">School Age Care</a>
                                    <br />
                                    <span class="link_sub">Before and after school care with homework help and transportation</span>
                                </li>
                                <!--<li>
                                    <a href="#yscacademy" class="navigation_link">YSC Academy</a>
                                    <br />
                                    <span class="link_sub">Kindergarten &mdash; 3rd grade technology-enhanced charter school</span>
                                </li>
                                <li>
                                    <a href="#swimming" class="navigation_link">Swimming</a>
                                    <br />
                                    <span class="link_sub">Year-round swimming lessons in our outdoor heated pool</span>
                                </li>-->
                            </ul>
                        </div>

                    </div>
                    <div class="content-box large-right" style="">
                        <div class="content-box-inner-wrap" style="padding: 0">
                            <div class="content-box-inner-wrap" style=" padding: 0;">
                                <div style="width: 300px; background: red;padding:  28px 18px;
                              box-sizing: border-box; -moz-box-sizing: border-box; color: white; text-align: center;
                              display: inline-block; vertical-align: middle;">
                                    <span style="">Programs starting at only</span><br/>
                                    <span style="font-size: 126px;">$50</span><br/>
                                    <span style="">per week! No strings attached.</span>
                                </div>
                                <div class="banner_content" style="display: inline-block; vertical-align: top;  width: 400px;">
                                    <h1 style="color: red;margin-top: -20px; font-size: 36px;">
                                        Incredible prices for the summer.
                                    </h1>
                                    <p style="font-size: 16px; margin-left: 20px; padding: 16px 0 0 0; width: auto; float: none;" >
                                        These prices won't last long. Call us today to schedule your tour and lock in these
                                        prices for the summer!
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-box">
                        <div id="large_banner_test_01" class="banner_image" style="height: 300px;background-image: url(images/banners/thumbs-up1.jpg); background-size: 350px;; background-position: right bottom;">
                            <div class="banner_content">
                                <h1 style="background-color: rgb(46, 165, 255);color: white;margin-top: -10px;">
                                    Share your opinion. Write a review for us!
                                </h1>
                                <p style="background-color: rgb(255, 255, 255);color: #333;;">
                                    <a class="social-review-link" target="_blank" href="https://plus.google.com/102809423592877433946/about?gl=US&hl=en-US" style="background-image: url(images/logos/etc/gplus.png)">
                                        <span>Google+ Local</span>
                                    </a>
                                    <a class="social-review-link" target="_blank" href="http://local.yahoo.com/info-99326434-youth-skills-center-riverside;_ylt=AiGCRPLEZLmOAZ80l2C166hwVdx_;_ylv=3?csz=Upland%2C+CA&tab=reviews#reviews" style="background-image: url(images/logos/etc/yahoo.jpg)">
                                        <span>Yahoo Local</span>
                                    </a>
                                    <a class="social-review-link" target="_blank" href="http://www.yelp.com/biz/youth-skills-center-riverside" style="background-image: url(images/logos/etc/yelp.png)">
                                        <span>Yelp</span>
                                    </a>
                                    <a class="social-review-link" target="_blank" href="http://www.yellowpages.com/riverside-ca/mip/youth-skills-center-6996945" style="background-image: url(images/logos/etc/yp.png)">
                                        <span>YP Reviews</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content-box large-left" style="background-color: #ffffff;">
                        <div id="large_banner_test_01" class="banner_image" style="height: 309px;background-image: url(images/banners/child-hands_large.jpg);
                        background-size: auto 280px; background-position: bottom left;">
                            <div class="banner_content">
                                <h1 style="background-color: rgba(255,8,123,0.84);color: white;margin-top: -20px; font-size: 28px;">
                                    Unleash your child's potential.
                                </h1>
                                <p style="font-size: 16px; margin-left: 20px;" >
                                    With the warm and welcoming environment at YSC, your child can reach
                                    their true potential. And with the best prices of the year, now is the best time to join!
                                </p>
                                <div class="action_button" style="float: right; margin: 20px 20px 0 0;">
                                    <div class="icon call"></div>
                                    Call Us Now!
                                    <a href="contact.php"><span class="full-box-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box small-right" style="background-color: white;">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: #27ca00;">Unbeatable Pricing</h2>
                            <p>
                                We mean it: we're committed to bringing you the <strong>best prices possible for preschool and childcare.</strong> We think
                                our prices are lower than any other licensed center in the area, but <strong>if you can find a better price, we'll match it!</strong>*
                            </p>
                            <p class='legal' style="color: #888;">
                                *Restrictions apply. Call 951.681.2972 for details. For new enrollments only.
                            </p>
                        </div>
                    </div>
                    <?php require_once($cfg['root_dir']. 'includes/footer.inc.php'); ?>
                </div>
            </div>

            </div>
    </body>
</html>
