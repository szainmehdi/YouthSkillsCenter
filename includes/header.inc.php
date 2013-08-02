<?php

//this file is used to include the header in all areas of the website.

?>
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
            <a class="nav <?php if($cfg['page'] == "home") { echo "active";} ?>" href="index.php">Home</a>
            <a class="nav <?php if($cfg['page'] == "about") { echo "active";} ?>" href="about.php">About Us</a>
            <a class="nav <?php if($cfg['page'] == "programs") { echo "active";} ?>" href="#">Our Programs</a>
            <a class="nav <?php if($cfg['page'] == "contact") { echo "active";} ?>" href="#">Contact Us</a>
        </div>
    </div>
</div>


<div id="fluff1"></div>