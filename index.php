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
        <link rel="shortcut icon" href="images/favicon/favicon_new2.ico" />
        <!-- End Stylesheets -->
        
        <!-- jQuery Plugins -->
        <script src="functions/jquery.min.js"></script>
		<script src="functions/responsive_slides/responsiveslides.min.js"></script>
        <script>
		  $(function() {
			$(".rslides").responsiveSlides({
			  auto: true,             // Boolean: Animate automatically, true or false
			  speed: 500,            // Integer: Speed of the transition, in milliseconds
			  timeout: 7000,          // Integer: Time between slide transitions, in milliseconds
			  pager: false,           // Boolean: Show pager, true or false
			  nav: true,             // Boolean: Show navigation, true or false
			  random: false,          // Boolean: Randomize the order of the slides, true or false
			  pause: true,           // Boolean: Pause on hover, true or false
			  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			  prevText: "&lt;",   		// String: Text for the "previous" button
			  nextText: "&gt;",      	 // String: Text for the "next" button
			  maxwidth: "1280",           // Integer: Max-width of the slideshow, in pixels
			  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			  manualControls: "",     // Selector: Declare custom pager navigation
			  namespace: "rslides",   // String: Change the default namespace used
			  before: function(){},   // Function: Before callback
			  after: function(){}     // Function: After callback
			});
			$(".nav-button").click(function() {
				$("#sidebar-wrap").slideToggle(250);
			});
			$(window).resize(function() {
				if($(document).width() > 960) {
					$("#sidebar-wrap").slideDown(250);
				}
				else {
					$("#sidebar-wrap").hide();
				}
			});
			console.log($(document).width());
		  });
		</script>
    </head>
	<body>
    	<div id="wrapper">
        	
            <div id="header-wrap">
            	<div id="header">
                	<!-- Header includes Company Logo and Navigation Bar -->
                    
                    <div class='header-logo'>
                        <div class="site-logo">
                            <!-- Background Image -->
                        </div>
                    </div>
                    <div class='header-content'>
                        <div class="header-contact">
                            <div id='phone' class='header-section'>
                                <span class="header-sectionTitle">Call Us</span><a href="tel:9516812972"><span class="full-box-link"></span></a>
                                <span class='header-sectionText'>951<span class='red'>.</span>681<span class='red'>.</span>2972</span>
                            </div>
                            <div id='location' class='header-section'>
                                <span class="header-sectionTitle">Visit Us</span><a href="https://www.google.com/maps?q=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&hl=en&ll=33.995466,-117.484531&spn=0.130793,0.264187&sll=37.269174,-119.306607&sspn=16.046017,33.815918&oq=you&t=m&hq=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&radius=15000&z=13&iwloc=A" target="_blank"><span class="full-box-link"></span></a>
                                <span class='header-sectionText'>5111 Felspar Street<br />Jurupa Valley<span class='red'>,</span> CA 92509</span>
                            </div>
                            <div id='social' class='header-section'>
                                <span class="header-sectionTitle">Connect with Us</span>
                                <div class='header-sectionText'>
                                	<div class='social-icon myysc'>
                                    	<a href="#"><img src="images/Pace_Social_Icon_Set/PNG/myYSC.png" /></a>
                                    </div>
                                	<div class='social-icon google'>
                                    	<a href="https://plus.google.com/104544147610723533287/posts"><img src="images/Pace_Social_Icon_Set/PNG/google+.png" /></a>
                                    </div>
                                
                                	<div class='social-icon facebook'>
                                    	<a href="https://www.facebook.com/youthskillscenter"><img src="images/Pace_Social_Icon_Set/PNG/facebook.png" /></a>
                                    </div>
                                    
                                    <div class='social-icon youtube'>
                                    	<a href="https://www.youtube.com/youthskillscenter"><img src="images/Pace_Social_Icon_Set/PNG/youtube.png" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-search">
                        
                        </div>
                        
                    </div>
                    <a href="#" class="nav-button"><img src="images/Pace_Social_Icon_Set/PNG/navigation.png" /></a>

                </div>
                <div id="navigation_wrap">
                    <div id="navigation">
                        <a class="nav active" href="#">Home</a>
                        <a class="nav" href="#">About Us</a>
                        <a class="nav" href="#">Our Programs</a>
                        <a class="nav" href="#">Contact Us</a>
                    </div>
                </div>
            </div>

            
            <div id="fluff1"></div>

            <div id="content-wrap">
            	<div id="content-inner-wrap">
                	<!--
                	<div id="content">
                        <!-- Main Page Content goes here -->
                        <!--<h3>Welcome</h3>
                        <p>Welcome to <strong><em>Youth Skills Center</em></strong>, an <strong>Early Childhood Development Center</strong> located in Jurupa Valley, CA. We are a small, family-owned center with programs for children ages 2 - 14. We have a passion for teaching and believe children learn best in a comfortable, friendly environment. With a focus on technology, we make it a point to prepare your child for the world of tomorrow. At YSC, every program is of the&nbsp;highest quality&nbsp;without compromise in affordability.</p>-->

                        <!--
                            <div class="program_card preschool">
                                <span class="title">Preschool</span>
                            </div>
                        -->
                    <!--
                    </div>
                    -->
                    <div class="content-box">

                    </div>
                    <div class="content-box small-left">

                    </div>
                    <div class="content-box large-right">

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
                            <p>Copyright &copy; <?php echo date("Y"); ?> Youth Skills Center. All images, artwork, and logos used in compliance or with permission. Site by <a href="http://www.zcomputers.org" target="_blank">Z Computers</a>. Designed and Engineered by S. Zain Mehdi.</p>
                        </div>
                    </div>
                </div>
            </div>

            </div>
    </body>
</html>
