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
    	<title>Home | Youth Skills Center - A Preschool & Childcare Center in Riverside, CA</title>

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
        <script src="functions/jquery.min.js"></script>
    </head>
	<body>
    	<div id="wrapper">
        	
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/YouthSkillsCenter/includes/header.inc.php'); ?>

            <div id="content-wrap">
            	<div id="content-inner-wrap">
                    <div class="content-box">
                        <div id="large_banner_test_01" class="banner_image" style="height: 400px;background-image: url(images/banners/banner-1.jpg)">
                            <div class="banner_content">
                                <h1 style="background-color: rgba(98, 169, 255, 0.86);color: white;margin-top: 120px;">
                                    Best. Summer. Ever.
                                </h1>
                                <p>
                                    Enroll now in YSC's 10 week Summer Camp program for the
                                    most enjoyable learning experience.
                                </p>
                                <div class="action_button">
                                    <div class="icon"></div>
                                    Register Now!
                                    <a href="#"><span class="full-box-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box small-left">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: #ff6b03;"><strong>New</strong> at YSC</h2>
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
                    <div class="content-box" style="background-color: #1FCB4A;">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: white;"><strong>Enroll Now</strong> for Preschool and Child Care!</h2>
                            <p style="color: white">Now's the perfect time to enroll in our best-in-class programs, for every child between
                            the ages of 2 and 14.</p>
                            <p style="color: white; font-weight: 700"><a href="#contact" class="white" style="color: white">
                                    Call us today</a> to lock in the best prices of the year for 12 months!
                            </p>
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
                                    With the warm and welcoming environment at YSC, your child reach
                                    their true potential. And with the best prices of the year, now is the best time to join!
                                </p>
                                <div class="action_button">
                                    <div class="icon"></div>
                                    Register Now!
                                    <a href="#"><span class="full-box-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FOOTER -->
                    <div id="footer-wrap">
                        <div id="footer">
                            <!-- copyright & related links go here -->
                            <div class="footer-links" id="footer-links1">
                                <h4>Information</h4>
                                <a class="fl" href="#">About YSC</a>
                                <a class="fl" href="#">Our Staff</a>
                                <a class="fl" href="#">Our Facility</a>
                                <h4>MyYSC</h4>
                                <a class="fl" href="#">Login to MyYSC</a>
                                <a class="fl" href="#">Learn more about MyYSC</a>
                                <a class="fl" href="#">Sign up for MyYSC</a>
                            </div>
                            <div class="footer-links" id="footer-links2">
                                <h4>Site Info</h4>
                                <a class="fl" href="#">Privacy Policy</a>
                                <a class="fl" href="#">Terms of Service</a>
                                <a class="fl" href="#">Feedback</a>
                                <h4>Resources</h4>
                                <a class="fl" href="#">ABCya.com Games</a>
                                <a class="fl" href="#">Multiplication.com Games</a>
                                <a class="fl" href="#"><em>more</em></a>
                            </div>
                            <div class="footer-links" id="footer-links2">
                                <img src="images/logos/site-logo-thumb.png" alt="YSC" />
                                <h4>Contact Us</h4>
                                <a class="fl" href="tel:9516812972"><strong>tel.</strong> 951.681.2972</a>
                                <a class="fl" href="#"><strong>email.</strong> info@ysc5.com</a>
                                <a class="fl" href="#"><strong>location.</strong> 5111 Felspar Street,<br /><span id="cty">Jurupa Valley, CA 92509</span></a>
                            </div>
                        </div>
                    </div>
                    <div id="copyright">
                        <p>Copyright &copy; <?php echo date("Y"); ?> Youth Skills Center. All images, artwork, and logos used in compliance or with permission. Site by <a href="http://www.zcomputers.org" target="_blank">Z Computers</a>. Designed and Engineered by S. Zain Mehdi.</p>
                    </div>
                </div>
            </div>

            </div>
    </body>
</html>
