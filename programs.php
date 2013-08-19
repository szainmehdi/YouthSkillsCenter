<?php
$cfg['page'] = "programs";
$relative_path = $_SERVER['DOCUMENT_ROOT'];
if(strstr($relative_path,"moo")) {
    $relative_path .= "/sites/ysc/";
}
else {
    $relative_path .= "/YouthSkillsCenter/";
}
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
    	<title>Our Programs | Youth Skills Center - A Preschool &amp; Childcare Center in Riverside, CA | Serving Children Ages 2-14</title>

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
        	
        <?php require_once($relative_path . 'includes/header.inc.php'); ?>

            <div id="content-wrap">
            	<div id="content-inner-wrap">
                    <div class="content-box">
                        <div id="large_banner_test_01" class="banner_image" style="height: 800px;background-image: url(images/banners/children_large.jpg);">
                            <div class="banner_content">
                                <h1 style="background-color: rgba(17,172,197,0.81);color: white;margin-top: 460px;">
                                    Our Programs
                                </h1>
                                <p>
                                    Youth Skills Center has a lot to offer for your preschool and day care needs. Our
                                    programs are flexible to accommodate your needs, and our curriculum is creative and hand's on.
                                    <br /><br />
                                </p>
                                <div class="action_button" style="margin-top: 140px;">
                                    <div class="icon scrollDown"></div>
                                    Scroll Down
                                    <a href="#"><span class="full-box-link"></span></a>
                                </div>
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
                                    <a href="#preschool" class="navigation_link">Preschool</a>
                                    <br />
                                    <span class="link_sub">Full day or half day preschool program for all children between
                                        the ages of 2 and 5</span>
                                </li>
                                <li>
                                    <a href="#schoolage" class="navigation_link">School Age Care</a>
                                    <br />
                                    <span class="link_sub">Before and after school care with homework help and transportation</span>
                                </li>
                                <li>
                                    <a href="#yscacademy" class="navigation_link">YSC Academy</a>
                                    <br />
                                    <span class="link_sub">Kindergarten &mdash; 3rd grade technology-enhanced charter school</span>
                                </li>
                                <li>
                                    <a href="#swimming" class="navigation_link">Swimming</a>
                                    <br />
                                    <span class="link_sub">Year-round swimming lessons in our outdoor heated pool</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-box large-right">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: #74ae00;">About Our Programs</h2>
                            <p>
                                At Youth Skills Center, we put your child above everything else. We do only what's
                                best for the students, and <strong>every hour at YSC is filled with enjoyable learning
                                experiences</strong> (except nap time, of course).
                            </p>
                            <p>
                                We have programs for <strong>children between the ages of 2 and 14</strong>, from Preschool to 8th Grade.
                                Each of our programs is tailored to best suit the age group. For example, <strong>YSC's Preschool
                                follows the HighScope curriculum and learning method</strong> to build a solid foundation for the
                                future of your child's education. Similarly, our School Age Care program provides the
                                <strong>necessary environment for your child to peacefully complete any schoolwork</strong>, as well as
                                one-on-one attention to provide any help or guidance that may be required.
                            </p>
                            <p>
                                Explore this page for in-depth information about each of our programs, or click on the
                                links on the left to jump directly to the program of your interest.
                            </p>
                        </div>
                    </div>
                    <div class="content-box">
                        <div id="large_banner_test_01" class="banner_image" style="height: 800px;background-image: url(images/banners/Preschool_l.jpg);">
                            <div class="banner_content">
                                <h1 style="background-color: rgba(103,96,104,0.80);color: white;margin-top: 380px;margin-left: 590px;">
                                    Preschool
                                </h1>
                                <p style="width: 490px; background-color: rgba(248,222,9,0.80);margin-left: 650px;">
                                    Youth Skills Center Preschool serves children ages 2 &mdash; 5, adopting the HighScope
                                    Curriculum to supply an exceptional hands-on learning experience to your child.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="content-box large-left">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: #0060d1;text-transform: none;"><strong>YSC Preschool.</strong> Interactive. Hands-On. </h2>
                            <p>
                                At Youth Skills Center, we put your child above everything else. We do only what's
                                best for the students, and <strong>every hour at YSC is filled with enjoyable learning
                                    experiences</strong> (except nap time, of course).
                            </p>
                            <p>
                                We have programs for <strong>children between the ages of 2 and 14</strong>, from Preschool to 8th Grade.
                                Each of our programs is tailored to best suit the age group. For example, <strong>YSC's Preschool
                                    follows the HighScope curriculum and learning method</strong> to build a solid foundation for the
                                future of your child's education. Similarly, our School Age Care program provides the
                                <strong>necessary environment for your child to peacefully complete any schoolwork</strong>, as well as
                                one-on-one attention to provide any help or guidance that may be required.
                            </p>
                            <p>
                                Explore this page for in-depth information about each of our programs, or click on the
                                links on the left to jump directly to the program of your interest.
                            </p>
                        </div>
                    </div>
                    <div class="content-box small-right" style="background-color: white;">
                        <div class="content-box-inner-wrap">
                            <h2 style="color: #ff6900;">Quick Facts</h2>
                            <p class="quick_facts" style="line-height: 1.6em;">
                                <strong>Ages</strong> 2&mdash;5<br />
                                <strong>Hours</strong> 6:00am &mdash; 6:00pm<br />
                                <strong>Curriculum</strong>
                                    <a href="http://www.highscope.org/Content.asp?ContentId=746" target="_blank"
                                       style="color: orangered;font-weight: 400">
                                        HighScope
                                    </a>
                                <br />
                                <strong>Ratio</strong> 1 teacher to 12 children<br />
                                <strong>Tuition</strong> (Call for details)
                            </p>
                        </div>
                    </div>
                    <?php require_once($relative_path . 'includes/footer.inc.php'); ?>
                </div>
            </div>

            </div>
    </body>
</html>
