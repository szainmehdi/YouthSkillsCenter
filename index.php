<?php
$cfg['page'] = "home";
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
    	<title>Home | Youth Skills Center - A Preschool & Childcare Center in Riverside, CA | Serving Children Ages 2-14</title>

        <!-- Begin Stylesheets -->
        <link href="styles/fonts.css" rel="stylesheet" type="text/css" />
        <link href="styles/main.css" rel="stylesheet" type="text/css" />
        <link href="styles/layout.css" rel="stylesheet" type="text/css" />
        <link href="styles/banners.css" rel="stylesheet" type="text/css" />
        <link href="styles/index.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon/favicon_new2.ico" />
        <!-- End Stylesheets -->
        
        <!-- jQuery Plugins -->
        <script src="functions/js/jquery.min.js"></script>
    </head>
	<body>
    <?php include_once("includes/plugins/analytics.php") ?>
    	<div id="wrapper">
        	
        <?php require_once($cfg['root_dir']. 'includes/header.inc.php'); ?>

            <div id="content-wrap">
            	<div id="content-inner-wrap">
                    <div class="content-box">
                        <div id="large_banner_test_01" class="banner_image" style="height: 400px;background-image: url(images/banners/events/halloween.jpg);">
                            <div class="banner_content">
                                <h1 style="background-color: rgba(255,61,0,0.83);color: white;margin-top: 40px;">
                                    Halloween Carnival 2013
                                </h1>
                                <p style="margin-left: 40px;">
                                    Join us at our 4<sup>th</sup> Annual Halloween Carnival for performances, games, contests and more.
                                    Buy your tickets and find out more at Youth Skills Center.
                                </p>
                                <div class="action_button" style="background-color: rgba(144,0,255,0.81);color: white;margin-top: 140px;margin-left: -580px">
                                    <div class="icon call"></div>
                                    Buy your tickets today!
                                    <a href="contact.php"><span class="full-box-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-box small-left" style="background-color: white;">
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
                    <div class="content-box large-right" style="background-color: #9669FE;">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: white;"><strong>Welcome</strong> to our new website.</h2>
                            <p style="color: white;">
                                We've changed a few things around here. Our new website makes it easy for you to
                                navigate around the site and learn more about our many great services.
                            </p>
                            <p style="color: white">
                                Of the many changes and revamps, here are some of the noteworthy ones:
                                <ul style="color: white">
                                    <li>Streamlined navigation bar, with only four tabs.</li>
                                    <li>Touch-friendly layout and design.</li>
                                    <li>A new, modern, child-friendly design.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="content-box">
                        <div id="large_banner_test_01" class="banner_image" style="height: 300px;background-image: url(images/banners/gift_cards_promo.jpg)">
                            <div class="banner_content">
                                <h1 style="background-color: rgb(255,155,26);color: white;margin-top: -10px;">
                                    Refer a student. Get $20.
                                </h1>
                                <p style="background-color: rgb(85,191,243);color: white;">
                                    Now through October 31, 2013, get a $20 VISA Gift card for each student that registers
                                    at Youth Skills Center with your referral! <br />
                                    <span class="legal">Offer valid while supplies last. See YSC staff for details.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content-box large-left" style="background-color: #1FCB4A;">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: white;"><strong>Best Prices of the Year </strong> for Preschool!</h2>
                            <p style="color: white">Now's the perfect time to enroll in our best-in-class programs, for every child between
                            the ages of 2 and 14. Lock in the best promotional rate for our preschool program before October 31!</p>
                            <p style="color: white; font-weight: 700"><a href="#contact" class="white" style="color: white">
                                    Call us today</a> to for more information!
                            </p>
                        </div>
                    </div>
                    <div class="content-box small-right" style="background-color: white;">
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
                    <div class="content-box">
                        <div id="large_banner_test_01" class="banner_image" style="height: 400px;background-image: url(images/banners/child-hands_large.jpg);
                        background-position: 150px -200px;">
                            <div class="banner_content">
                                <h1 style="background-color: rgba(255,8,123,0.84);color: white;margin-top: 120px;">
                                    Unleash your child's potential.
                                </h1>
                                <p>
                                    With the warm and welcoming environment at YSC, your child can reach
                                    their true potential. And with the best prices of the year, now is the best time to join!
                                </p>
                                <div class="action_button">
                                    <div class="icon call"></div>
                                    Call Us Now!
                                    <a href="contact.php"><span class="full-box-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require_once($cfg['root_dir']. 'includes/footer.inc.php'); ?>
                </div>
            </div>

            </div>
    </body>
</html>
