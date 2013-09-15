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
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon/favicon_new2.ico" />
    <!-- End Stylesheets -->

    <!-- jQuery Plugins -->
    <script src="functions/jquery.min.js"></script>

    <!-- Page-Specific Javascript -->
    <script>
        $(document).ready(function (){
            $(".scrollTo").click(function (e){
                e.preventDefault();
                //$(this).animate(function(){
                var elem = "#" + $(this).attr("elem");
                $('html, body').animate({
                    scrollTop: ($(elem).offset().top - 158)
                }, 500);
                //});
            });
        });
    </script>
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
                <a href="#" class="scrollTo" elem="aboutOurPrograms"><span class="full-box-link"></span></a>
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
                <a href="#preschool" class="scrollTo" elem="preschool" class="navigation_link">Preschool</a>
                <br />
                                    <span class="link_sub">Full day or half day preschool program for all children between
                                        the ages of 2 and 5</span>
            </li>
            <li>
                <a href="#schoolage" class="scrollTo" elem="schoolage" class="navigation_link">School Age Care</a>
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
<div class="content-box large-right">
    <div class="content-box-inner-wrap">
        <h2 style="color: #74ae00;" id="aboutOurPrograms">About Our Programs</h2>
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

<!--

PRESCHOOL

-->

<div class="content-box" id="preschool">
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
<div class="content-box large-left" style="float: left">
    <div class="content-box-inner-wrap">
        <h2 style="color: #0060d1;text-transform: none;"><strong>YSC Preschool.</strong> Interactive. Hands-On. </h2>
        <p>
            Our preschool program at Youth Skills Center employs the <strong>HighScope Curriculum</strong>
            for an interactive and hands on learning approach. Every hour is filled with fresh, new learning
            experiences, building a strong and thorough foundation for the future of your child's
            education. <strong>But our work goes above and beyond "kindergarten readiness."</strong>
            YSC Preschool uses methods that help build and promote curiosity, creativity, cooperation, independence,
            and more.
        </p>
        <h3>The HighScope Curriculum</h3>
        <p>
            The HighScope Preschool Curriculum is an integral part of our approach to learning. It is
            a comprehensive curriculum, with learning focused on eight key content areas. The
            philosophy behind this curriculum is intriguing and we truly feel that this is the
            best approach to develop healthy, creative, independent, and bright students. After all,
            <em>"today's children are tomorrow's leaders!"</em> HighScope does a great job detailing
            the effects and benefits of their preschool curriculum:
        </p>
        <blockquote>
            Beginning with the
            <a href="http://www.highscope.org/Content.asp?ContentId=219" target="_blank">
                Perry Preschool Study,
            </a>
            HighScope revolutionized early childhood education with a new approach to teaching and
            learning. Research based and child focused, the HighScope Curriculum uses a carefully
            designed process &mdash; called "active participatory learning" &mdash; to achieve
            powerful, positive outcomes.
        </blockquote>
        <p>
            <a href="http://www.highscope.org/Content.asp?ContentId=746" target="_blank" style="color: #74ae00">
                Learn more about the <strong>HighScope Preschool Curriculum</strong> here...
            </a>
        </p>
        <h3>The Role of Teachers</h3>
        <p>
            Undoubtedly, teachers are second most prominent figures in a preschool child's life. A
            large portion the child's time is spent with their teacher in school, so the <strong>importance
                of good, caring, "intentional" teachers cannot be stressed enough.</strong>
        </p>
        <p>
            Our teachers and staff at YSC are caring and devoted to making a difference in your
            child's life. <strong>Everyone here &mdash; from the bus driver to the teacher, the receptionist to
                the director &mdash; is truly dedicated to their task and takes their responsibilities as
                a role model seriously.</strong> And that really makes all the difference in the world.
        </p>
        <h3>An Active, Engaging Schedule</h3>
        <p>
            With the HighScope curriculum as the backbone of our program, we take a fresh approach
            to the way we spend our time with your child. <strong>Our schedule focuses on creative learning
                activities, stresses the importance of play, and maintains a healthy level of physical
                activity.</strong> In fact, during the summer, all of our preschool children also have the option
            to swim daily, under the supervision and instruction of a certified swim instructor or
            lifeguard.
        </p>
        <p>
            Our schedule also takes into account your hectic, varying work hours and other arrangements.
            Our mornings, like most others', are filled with new content and reinforcement of old
            concepts; likewise, our teachers review and strengthen the same content in the afternoon
            as well! This allows for an effective part time program, with both morning and afternoon
            programs rich in educational content, and an unrivaled full day program, allowing our
            teachers additional time to review and reinforce the daily concepts and material. <strong>We
                truly believe we can make a difference in your child's education.</strong>
        </p>
        <hr />
        <p style="font-weight: 400; background-color: #f8ff49;padding: 4px; ">
            We believe we have a lot to offer in our preschool programs. <strong>No matter the schedule, no
                matter the budget, we can work with you! </strong>Give us a call today to see how your can take
            advantage of tuition lower than ever before.
        </p>
    </div>
</div>
<div class="content-box small-right" style="background-color: #fff400;">
    <div class="content-box-inner-wrap">
        <h2>Quick Facts</h2>
        <p class="quick_facts" style="line-height: 1.6em;color: #333;">
            <strong>Ages</strong> 2&mdash;5<br />
            <strong>Hours</strong> 6:00am &mdash; 6:00pm<br />
            <strong>Curriculum</strong>
            <a href="http://www.highscope.org/Content.asp?ContentId=746" target="_blank"
               style="color: #555;;font-weight: 400">
                HighScope
            </a>
            <br />
            <strong>Max. Ratio</strong> 1 teacher to 12 children<br />
            <strong>Tuition</strong> (Call for details)
        </p>
    </div>
</div>
<div class="content-box small-right" style="background-color: white;">
    <div class="content-box-inner-wrap">
        <h2 style="color: #00ca96;">Inspiration</h2>
        <p>
            At YSC, we take inspiration from anyone, anywhere. Here is one of our favorite
            inspirational quotes from famous personalities.
        </p>
        <p class="quote">
            "Children are great imitators. So give them something great to imitate."
            <span class="quote-attr">&mdash; Anonymous</span>
        </p>
    </div>
</div>
<div class="content-box small-right" style="background-color: white;">
    <div class="content-box-inner-wrap">
        <h2 style="color: #27ca00;">Unbeatable Pricing</h2>
        <p>
            We mean it: we're committed to bringing you the <strong>best prices possible for preschool and childcare.</strong> We think
            our prices are lower than any other center in the area, but <strong>if you can find a better price, we'll match it!</strong>*
        </p>
        <p class="legal" style="color: #888;">
            *Restriction apply. Call 951.681.2972 for details. For new enrollments only.
        </p>
    </div>
</div>
<div class="content-box small-right" style="background-color: #27ca00;">
    <div class="content-box-inner-wrap">
        <h2 style="color: white;">$20 VISA Gift Card For Referrals</h2>
        <p style="color: white;">
            Now through October 31st, 2013, you can receive a <strong>$20 VISA Gift Card</strong> for every student who registers at
            YSC with your referral!
        </p>
        <p class="legal"  style="color: white;">Offer valid while supplies last.</p>
    </div>
</div>

<!--

SCHOOL AGE CARE

-->

<div class="content-box" id="schoolage">
    <div id="large_banner_test_01" class="banner_image" style="height: 800px;background-image: url(images/banners/homework.jpg);">
        <div class="banner_content">
            <h1 style="background-color: rgba(227,60,94,0.80);color: white;margin-top: 380px;margin-left: 90px;">
                School Age Care
            </h1>
            <p style="width: 490px; color: white;background-color: rgba(0,120,195,0.80);margin-left: 150px;">
                With ultra-low student to teacher ratios, your children can get the attention they
                deserve in our focused, technology-enhanced before and after school programs.
            </p>

        </div>
    </div>
</div>
<div class="content-box large-right" style="float: right">
    <div class="content-box-inner-wrap">
        <h2 style="color: rgb(227,60,94);text-transform: none;"><strong>YSC School Age Care.</strong> Focused. Fruitful. </h2>
        <p>
            Youth Skills Center is proud to offer <strong>outstanding value, convenience, and peace of mind</strong> with the School Age Program.
            This program allows working parents to get things done without constantly making and managing hectic schedules,
            finding trustworthy babysitters, or even leaving their children alone at home. Under constant supervision at
            YSC, our teachers will make sure your child has the time, comfort, and resources to get their homework and
            studies done well.
        </p>
        <h3>Outstanding Value</h3>
        <p>
            Our School Age Care provides some of the greatest value in the business. We have ultra-low teacher to student
            ratios, with a maximum of 10 students with 1 teacher, as well as many added benefits at no additional cost.
        </p>
        <p>
            YSC School Age Care includes:
        </p>
        <ul>
            <li>complimentary transportation to and from your child's school and YSC</li>
            <li>dedicated staff that can provide excellent homework help</li>
            <li>morning and/or afternoon snacks</li>
            <li>computers, an interactive whiteboard, and other technology at your child's disposal</li>
            <li>plenty of opportunities to play and have fun with friends!</li>
        </ul>
        <h3>Unmatched Convenience</h3>
        <p>
            <em style="color:#0060d1">"Have you done your homework?"</em><br />
            <em style="color:green">"I'm going to be late for work!"</em><br />
            <em style="color:red">"Honey, can you pick up the kids? I'm stuck in traffic."</em><br /><br />

            Enroll at Youth Skills Center in the School Age program, and these will be worries of the past. No more stress,
            no more hassle. Simple, convenient, easy.
        </p>
        <p>
            At YSC, we try to ease your daily hassles with unmatched convenience. The School Age Care program has extremely
            flexible schedules and numerous benefits, and it allows you to lead a worry-free workweek! And with our prime
            location &mdash; right near the corner of Van Buren Blvd. and Jurupa Road, and only minutes from Limonite Ave
            &mdash; <strong>Youth Skills Center is on your way to I-15, CA-60, or even CA-91.</strong>
        </p>
        <p>
            There's more to convenience than simply a good location. We've implemented safe, secure, and convenient methods

        </p>
        <h3>Peace of Mind with Transportation</h3>
        <p>
            With enrollment in our Before and After School program, you can rest easy and get more done knowing that your
            child is taken care of. We provide <strong>complimentary transportation to and from your child's school and YSC</strong>
            so you don't have to worry! At the moment, we serve a number of schools in the
            <a href="http://www.jusd.k12.ca.us/schools/Lists/Schools1/schools.aspx" target="_blank">Jurupa Unified School District</a>,
            so if you live in our vicinity, we've likely got you covered. And at no additional charge, our school age program
            packages convenience with the ultimate value!
        </p>
        <p>
            Our program enables you to simply drop your child off at YSC on your way to work and pick up on your way back.
            We take care of the rest!
        </p>
        <p>
            In the morning at YSC, your child will start the day off with a healthy, balanced, morning snack (for instance,
            a nice bowl of whole-grain cereal with sliced oranges) and freshen up with fun (and educational) indoor and
            outdoor games and activities. If any extra work needs to be done, we'll make sure it's taken care of!
        </p>
        <p>
            When its time to go to school, we'll escort your child to class, making sure to get there on time, safe and
            sound. We keep in close contact with the staff and teachers at your child's school to give you an added peace of
            mind. We'll return at dismissal and drive your child to YSC, where we provide the apt time and atmosphere for
            your child to complete his homework. Following that, your child will spend extra time with outdoor play and
            indoor educational activities to fill both an academic and a physical fitness quota for the day &mdash; with
            a break for snack, of course!
        </p>
        <hr />
        <p style="background-color: #fae844; font-weight: 400;">
            We believe we have a lot to offer in our school-age programs. <strong>No matter the schedule, no
            matter the budget, we can work with you! </strong>Give us a call today to see how your can take
            advantage of tuition lower than ever before.
        </p>
    </div>
</div>
<div class="content-box small-left" style="background-color: #0060d1;">
    <div class="content-box-inner-wrap">
        <h2 style="color: white;">Quick Facts</h2>
        <p class="quick_facts" style="line-height: 1.6em;color: white">
            <strong>Ages</strong> 5&mdash;14<br />
            <strong>Grades</strong> Kindergarten thru 8th
            <strong>Hours</strong> 6:00am &mdash; 6:00pm<br />
            <strong>Max. Ratio</strong> 1 teacher to 10 children<br />
            <strong>Tuition</strong> (Call for details)
        </p>
    </div>
</div>
<div class="content-box small-left" style="background-color: white;">
    <div class="content-box-inner-wrap">
        <h2 style="color: #00ca96;">Inspiration</h2>
        <p>
            At YSC, we take inspiration from anyone, anywhere. Here is one of our favorite
            inspirational quotes from famous personalities.
        </p>
        <p class="quote">
            "Only where children gather is there any real chance of fun."
            <span class="quote-attr">&mdash; Mignon McLaughlin, journalist and author</span>
        </p>
    </div>
</div>
<div class="content-box small-left" style="background-color: white;">
    <div class="content-box-inner-wrap">
        <h2 style="color: #ca3c50;">Added Benefits</h2>
        <p>
            In the summertime, you will have to option of allowing your child to swim &mdash; and learn to swim &mdash;
            in our new swimming pool ... completely free of charge! Our summer programs are also filled with numerous
            exciting field trips and other unique activities, without the hassle and stress of arranging and planning.
        </p>
    </div>
</div>
<div class="content-box small-left" style="background-color: white;">
    <div class="content-box-inner-wrap">
        <h2 style="color: #27ca00;">Unbeatable Pricing</h2>
        <p>
            We mean it: we're committed to bringing you the <strong>best prices possible for preschool and childcare.</strong> We think
            our prices are lower than any other center in the area, but <strong>if you can find a better price, we'll match it!</strong>*
        </p>
        <p class='legal' style="color: #888;">
            *Restriction apply. Call 951.681.2972 for details. For new enrollments only.
        </p>
    </div>
</div>
<div class="content-box small-left" style="background-color: #27ca00;">
    <div class="content-box-inner-wrap">
        <h2 style="color: white;">$20 VISA Gift Card For Referrals</h2>
        <p style="color: white;">
            Now through October 31st, 2013, you can receive a <strong>$20 VISA Gift Card</strong> for every student who registers at
            YSC with your referral!
        </p>
        <p class="legal"  style="color: white;">Offer valid while supplies last.</p>
    </div>
</div>

<?php require_once($relative_path . 'includes/footer.inc.php'); ?>
</div>
</div>

</div>
</body>
</html>
