@extends('layout.master')

@section('title')
    Preschool at Youth Skills Center - A Preschool and Childcare Center in Riverside, CA | Ages 2-14
@stop

@section('content')
    <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text text-left">
                    <div class="intro-heading highlighted-heading accent-one">Preschool</div>
                    <div class="row">
                        <div class="col-md-8 ">
                            <p class="lead highlighted-inline accent-translucent-dark">Youth Skills Center Preschool serves children ages 2 — 5, adopting the HighScope Curriculum to supply an exceptional hands-on learning experience to your child.</p>
                        </div>
                    </div>
                    <a href="#scrolled" class="page-scroll btn btn-xl accent-one">Learn More</a>
                </div>
            </div>
        </header>

        <section id="scrolled" class="thin bg-accent-one">
            <div class="container text-center quick-facts">
                <div class="row">
                    <h2>Quick Facts</h2>

                    <div class="fact-item col-md-3">
                        <small>Ages</small><br />
                        2-5
                    </div>
                    <div class="fact-item col-md-3">
                        <small>Hours</small><br />
                        6am &mdash; 6pm
                    </div>
                    <div class="fact-item col-md-3">
                        <small>Curriculum</small><br />
                        <a href="http://www.highscope.org/Content.asp?ContentId=746">HighScope<sup>&reg;</sup></a>
                    </div>
                    <div class="fact-item col-md-3">
                        <small>Max. Ratio</small><br />
                        12:1<br />
                        <small>student-teacher</small>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="text-accent-one">YSC Preschool. Interactive. Hands-On.</h1>
                        <p class="lead">
                            Our preschool program at Youth Skills Center employs the <strong>HighScope Curriculum</strong>
                            for an interactive and hands-on learning approach. Every hour is filled with fresh, new learning
                            experiences, building a strong and thorough foundation for the future of your child's
                            education. <strong>But our work goes above and beyond "kindergarten readiness."</strong>
                            YSC Preschool uses methods that help build and promote curiosity, creativity, cooperation, independence,
                            and more.
                        </p>
                        <h2>The HighScope Curriculum</h2>
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
                        <a href="http://www.highscope.org/Content.asp?ContentId=746" target="_blank"
                            class="page-scroll btn accent-one">Learn More about HighScope</a>

                        <h2>The Role of Teachers</h2>
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
                        <h2>An Active, Engaging Schedule</h2>
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
                        <div class="bg-success padding-20">
                            We believe we have a lot to offer in our preschool programs. <strong>No matter the schedule, no
                            matter the budget, we can work with you! </strong>Give us a call today to see how you can take
                            advantage of tuition lower than ever before.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="thin bg-accent-two">
            <div class="container text-center">
                <div class="row">
                    <h2>Unbeatable Pricing</h2>
                    <p class="lead">
                        We mean it: we're committed to bringing you the <strong>best prices possible for preschool and childcare.</strong> We think
                        our prices are lower than any other center in the area, but <strong>if you can find a better price, we'll match it!</strong>*
                    </p>
                    <p class="legal" style="text-muted">
                        *Restriction apply. Call 951.681.2972 for details. For new enrollments only.
                    </p>
                </div>
            </div>
        </section>


@stop

@section('head')
<style>
    header {
        background-image: url('/img/banners/Preschool_l.jpg');
    }
</style>
@stop


@section('scripts')
    <script src="/assets/js/vendor/cbpAnimatedHeader.js"></script>
@stop