<?php
/* This temporary function will handle contact form submissions and email the details to an email address. */

$to      = "zm@ysc5.com";
$subject = '[YSC Website] New Form Submission';
$message = 'Hello, you\'ve received a new submission from the contact form at http://ysc5.com. Here are the details.';
$message.= '\r\n\r\n';
$message.= 'Name: ' . $_REQUEST['name'];
$message.= '\r\n';
$message.= 'Email: ' . $_REQUEST['email'];
$message.= '\r\n';
$message.= 'Phone: ' . $_REQUEST['phone'];
$message.= '\r\n';
$headers = 'From: no-reply@ysc5.com' . "\r\n" .
    'Reply-To: no-reply@ysc5.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


//$message = wordwrap($message, 70, "\r\n");


mail($to, $subject, $message, $headers);

$cfg['page'] = "contact";
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
    <title>Form Submitted | Youth Skills Center - A Preschool & Childcare Center in Riverside, CA | Serving Children Ages 2-14</title>
    <base href='/YouthSkillsCenter/'>

    <!-- Begin Stylesheets -->
    <link href="styles/fonts.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
    <link href="styles/layout.css" rel="stylesheet" type="text/css" />
    <link href="styles/banners.css" rel="stylesheet" type="text/css" />
    <link href="styles/index.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon/favicon_new2.ico" />
    <style>
        #contact_form.submitted {
            height: 140px;
            width: 140px;
            background-color: white;
            /*padding: 50px;*/
            background-image: url(images/ux/confirmation.png);
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
            font-size: 90%;
            margin: 0 auto;
            border-radius: 70px;;
        }
    </style>
    <!-- End Stylesheets -->

    <!-- jQuery Plugins -->
    <script src="functions/js/jquery.min.js"></script>

    <!-- Page-Specific Javascript -->
    <script>
        /* attach a submit handler to the form */

    </script>
</head>
<body>
<div id="wrapper">

    <?php require_once($relative_path . 'includes/header.inc.php'); ?>

    <div id="content-wrap">
        <div id="content-inner-wrap">
            <div class="content-box">
                <div id="large_banner_test_01" class="banner_image" style="height: 400px;
                        background-image: url(images/banners/children.jpg);background-size: contain;
                        background-position: left;">
                    <div class="banner_content">
                        <h1 style="color:white;margin-top: 120px;margin-left: 800px;background-color: rgba(255,0,0,0.9);">
                            Contact Us
                        </h1>
                    </div>
                </div>
            </div>
            <div class="content-box small-left">
                <div class="content-box-inner-wrap">
                    <h2 style="color: #007fff;">Location &amp; Hours</h2>
                    <p style="font-weight: 700">Youth Skills Center is located at
                        <span style="display:block;margin-left: 20px;font-weight: 300;">5111 Felspar Street<br />Riverside, CA 92509</span>
                    </p>
                    <p style="font-weight: 700">We are open
                                <span style="display:block;margin-left: 20px;font-weight: 300;font-size: 85%;">
                                    <span style="display: block;"><span style="display: inline-block; width: 130px">Monday:</span>6:00 am &mdash; 6:00 pm</span>
                                    <span style="display: block;"><span style="display: inline-block; width: 130px">Tuesday:</span>6:00 am &mdash; 6:00 pm</span>
                                    <span style="display: block;"><span style="display: inline-block; width: 130px">Wednesday:</span>6:00 am &mdash; 6:00 pm</span>
                                    <span style="display: block;"><span style="display: inline-block; width: 130px">Thursday:</span>6:00 am &mdash; 6:00 pm</span>
                                    <span style="display: block;"><span style="display: inline-block; width: 130px">Friday:</span>6:00 am &mdash; 6:00 pm</span>
                                    <span style="display: block;color: #aaa;"><span style="display: inline-block; width: 130px;">Saturday:</span>Closed</span>
                                    <span style="display: block;color: #aaa;"><span style="display: inline-block; width: 130px;">Sunday:</span>Closed</span>
                                </span>
                    </p>
                </div>
            </div>
            <div class="content-box large-right" style="background-color: #00c697;">
                <div class="content-box-inner-wrap">
                    <h2 style="color: white;"><strong>Call Us</strong></h2>
                    <p style="color: #00c697;font-weight: 900;background-color: white;  font-size: 200%;text-align: center;width: 324px;
                            margin: 20px auto;">
                        <a href="tel:9516812972" style="color: #00c697;">951.681.2972</a>
                    </p>
                    <h2 style="color: white;"><strong>Request A Callback</strong></h2>
                    <p style="color: white;font-weight: 400;">
                        The staff at Youth Skills Center is more than happy to answer any question you may have.
                        Just fill out the short form below and we'll do our best to call you back at the requested time.
                    </p>
                    <div id="contact_form" class="submitted">

                    </div>
                </div>
            </div>

            <div class="content-box" style="height: 600px;">
                <iframe width="1240" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=33.946015499541815,-117.39986466054329&amp;sspn=0.27886718848697933,0.6595361317188881&amp;t=m&amp;q=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&amp;dg=opt&amp;ie=UTF8&amp;hq=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&amp;hnear=&amp;radius=15000&amp;ll=34.000874,-117.484016&amp;spn=0.021347,0.053172&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?sll=33.946015499541815,-117.39986466054329&amp;sspn=0.27886718848697933,0.6595361317188881&amp;t=m&amp;q=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&amp;dg=opt&amp;ie=UTF8&amp;hq=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&amp;hnear=&amp;radius=15000&amp;ll=34.000874,-117.484016&amp;spn=0.021347,0.053172&amp;z=15&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </div>


            <?php require_once($relative_path . 'includes/footer.inc.php'); ?>
        </div>
    </div>

</div>
</body>
</html>
