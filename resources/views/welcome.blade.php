@extends('layouts.app')
@section('content')
    <!--
true purple #6a0dad
plump purple #5946b2
veronica #a020f0
french violet #8806ce
purple heart #7442c8
-->


    <div style="position: relative;" class="d-none d-lg-block ">
        <img src="/images/passe-evolution.jpg" alt="" class="img-fluid" style="width: 100%;">
        <div style="position: absolute; top: 80%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
            <div class="text-center text-white" style="font-size: 2em;">
                <h4 class="pb-0 mb-0" style="text-shadow: 2px 2px 4px black; line-height: .9;">
                    Dance With Us
                </h4>
                <div class="font-segoe fw-bold text-lowercase mt-0 pt-0" style="text-shadow: 2px 2px 4px black; line-height: 0.9;">
                    Northern Westchester dance classes<br>in all styles, for all levels and ages
                </div>
                <div class="mt-1">
                    <div class="d-flex justify-content-center">
                        @include('_btn-register')
                        <a class="mx-3" href="mailto:kelly@thepulseny.com?subject=The Pulse Web Contact" style="text-decoration: none;" class="text-white">
                            <div class="btn btn-lg brand-btn-outline shadow mt-2 fw-bold font-segoe" style="border: 3px solid #5946b2; color: #5946b2;">Contact Us</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-heading" class="d-block d-lg-none">
        <img src="/images/passe-evolution.jpg" alt="" class="img-fluid" style="width: 100%;">
        <div class="text-center mx-3">
            <h4 class="pb-0 mb-0">Dance With Us</h4>
            <p class="pt-0 mt-0 font-segoe fw-bold text-lowercase" style="line-height: 0.9;">
                Northern Westchester dance classes in all styles, for all levels and ages
            </p>
        </div>
    </div>

    <div class="purple py-5">
        <div class="container">
            <video class="head-video" src="images/pulse.mp4" autoplay="" muted="" controls="" loop="">
            </video>
            <div class="d-flex justify-content-center mt-3">
                <div class="row">
                    <div class="col-sm d-flex align-items-center">
                        <div>
                            <h4 class="text-center">Our dance floor is waiting for you</h4>
                            <p class="text-center">
                                Whether taking class for just fun or with bigger goals in mind, our dance classes offer a fun and supportive environment with a curriculum personalized for your dancer.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a href="/classes">
                                    <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-5">
        {{--        @include('_divider-top')--}}
        <div class="container">
            <h4 class="text-center">Dance Classes in Northern Westchester</h4>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/age2-4.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/age2-4" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Age 2-4
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/age5-6.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/age5-6" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Age 5-6
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/age7-8.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/age7-8" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Age 7-8
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/age9-10.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/age9-10" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Age 9-10
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/age11-12.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/age11-12" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Age 11-12
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/age13-18.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/age13-18" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Age 13-18
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/acro.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/acro" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Acro
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm my-2" style="position: relative;">
                    <img src="/images/boys.jpg" alt="dancer posing" class="img-fluid rounded" style="height: 500px; width: 100%; object-fit: cover; object-position: center;">
                    <a href="/boys" style="text-decoration: none; color: white;">
                        <div class="px-5 rounded shadow pt-2" style="background: #5946b2; position: absolute; bottom: 3%; left: 50%; transform: translateX(-50%);">
                            <h6 class="text-center">
                                Boys
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 purple">
        @include('_divider-top')
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-5" style="font-size: 1.25em;">
                <div class="col-sm text-center mt-5">
                    <img class="review-img shadow mb-4" src="/images/test-amanda.jpeg" alt="">
                    <div class="fw-bold" style="font-size: 1.25em;">Amanda Simone</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">
                        The experiences, memories and dance education my girls are getting here will be a part of their lives forever.  The passion and dedication The Pulse staff have for teaching dance and the commitment they make into making my girls better dancers and people is super special.
                    </div>
                </div>
                <div class="col-sm text-center mt-5">
                    <img class="review-img shadow mb-4" src="/images/test-mystery.jpg" alt="">
                    <div class="fw-bold" style="font-size: 1.25em;">Lori Thornton</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">
                        The Pulse has become my daughter’s second home, and the people there her family. She learns how to be the best dancer and best version of herself there; so grateful to be a part of it!
                    </div>
                </div>
                                <div class="col-sm text-center mt-5">
                                    <img class="review-img shadow mb-4" src="/images/test-2.jpg" alt="">
                                    <div class="fw-bold" style="font-size: 1.25em;">Jacki Campbell Siskind</div>
                                    <div class="txt-crimson" style="font-size: 1.125em;">
                                        What I find most special is how the older dancers help to mentor the younger dancers. It allows them to develop tremendous leadership qualities and the younger dancers have some incredible role models.
                                    </div>
                                </div>
                {{--                <div class="col-sm text-center mt-5">--}}
                {{--                    <img class="review-img shadow mb-4" src="/images/test-3.jpg" alt="">--}}
                {{--                    <div class="fw-bold" style="font-size: 1.25em;">Amanda Simone</div>--}}
                {{--                    <div class="txt-crimson" style="font-size: 1.125em;">--}}
                {{--                        Our home away from home <ion-icon name="heart"></ion-icon>. Top notch owners and staff!--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm text-center mt-5">--}}
                {{--                    <img class="review-img shadow mb-4" src="/images/test-4.jpg" alt="">--}}
                {{--                    <div class="fw-bold" style="font-size: 1.25em;">Lauren Wysmuller</div>--}}
                {{--                    <div class="txt-crimson" style="font-size: 1.125em;">--}}
                {{--                        We began classes before my daughter turned 3 and are so glad we started here four years ago! The studio owner is one of the most responsive, dynamic business women I have had the pleasure of meeting.--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                                <div class="col-sm text-center mt-5">
                                    <img class="review-img shadow mb-4" src="/images/test-1.jpg" alt="">
                                    <div class="fw-bold" style="font-size: 1.25em;">Marissa Lynn</div>
                                    <div class="txt-crimson" style="font-size: 1.125em;">
                                        The Pulse is a true community and family environment. The Directors work really hard to ensure everyone has a place and is supported. We are so grateful we found The Pulse!
                                    </div>
                                </div>
            </div>
        </div>
    </div>


    <!---------------------------------------------------- MISTYS PASTE ---------------------------------->
    <!---------------------------------------------------- MISTYS PASTE ---------------------------------->
    <!---------------------------------------------------- MISTYS PASTE ---------------------------------->

    <div class="d-flex align-items-center justify-content-start pt-5" style="position: relative; height: 100%;">
        <div class="container pt-3" style="z-index: 4;">
            <h4>Pulse Families Love Our...</h4>
            <div>
                <p class="" style="font-size: 1.75em;">
                    <span class="txt-purple"><ion-icon name="star"></ion-icon></span>  Programs for every level of commitment
                    <br><small>(Pre-K, Boys-Only, Recreational, Community, & Competitive)</small>
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> 4 large studios with a built in performance space
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Marley covered sprung floors
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Professional equipment
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Fun colorful lighting
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Spacious lobby with ample seating and wifi
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Easy drop off/pick up with convenient parking
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Homework room
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Seasoned professional & carefully curated staff
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Friendly front desk team
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Scheduled dinner break
                    <br><span class="txt-purple"><ion-icon name="star"></ion-icon></span> Internship opportunities
                </p>
            </div>
        </div>
        <div>
            <img src="/images/parents-love-pulse.png" alt="ballerina in arabesque" style="position: absolute; right: 0; bottom: -85px; z-index: 2;" class="d-none d-lg-block">
        </div>
    </div>

    <div class="py-5 purple">
        @include('_divider-top')
        <div style="height: 85px;"></div>
        <div class="container py-5 d-flex align-items-center" style="height: 100%;">
            <div>
                <h4 class="text-center">Students who regularly participate in dance...</h4>
                <div class="d-flex justify-content-center">
                    <ul class="font-basker">
                        <li>Earn higher GPAs</li>
                        <li>Perform better in science, math, and writing</li>
                        <li>Earn higher test scores on SATs</li>
                        <li>Enroll in 4-year colleges and earn mostly As</li>
                    </ul>
                </div>
                <p class="text-center" style="opacity: 75%;">
                    <small>Source: National Endowment for the Arts</small>
                </p>
                <hr>
                <p>
                    "Dance is more than learning how to pointe your toe, shuffle, and turn; it’s about learning who you are and learning to love something that inspires you, challenges you, and most importantly - makes you smile." - <em>Jennifer Dell</em>
                </p>
            </div>
        </div>
    </div>

    <div class="container" style="position: relative;">
{{--        <div class="d-none d-lg-block apple-partner">--}}
{{--            <div class="apple-partner-left">Dance Friends</div>--}}
{{--            <div class="apple-partner-right">Make the Best Friends</div>--}}
{{--        </div>--}}

        <div class="d-flex justify-content-center align-items-center">
            <img src="/images/partnering.png" alt="dancer in costume" class="img-fluid">
        </div>

        <div class="d-block">
            <h4 class="text-center text-uppercase" style="line-height: 0.9;">dance friends<br>make the best friends</h4>
        </div>
    </div>

    <div class="py-5 purple" style="position: relative;">
        @include('_divider-top')
        <div class="container py-5">
            <h2 class="fw-bold text-center py-5" style="font-size: 2.75em;">Providing Dance Education to the Community for 19 Years</h2>
            <div class="row" style="font-size: 1.5em;">
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-right: 1px solid white;">
                    <div>
                        <ion-icon name="home" style="font-size: 2em;"></ion-icon>
                        <h5 style="font-size: 2em;">1</h5>
                        <p>dance family</p>
                    </div>
                </div>
                <div class="d-lg-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-right: 1px solid white;">
                    <div>
                        <ion-icon name="people" style="font-size: 2em;"></ion-icon>
                        <h5 style="font-size: 2em;">4</h5>
                        <p>large studios</p>
                    </div>
                </div>
                <div class="d-lg-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-right: 1px solid white;">
                    <div>
                        <ion-icon name="people" style="font-size: 2em;"></ion-icon>
                        <h5 style="font-size: 2em;">12</h5>
                        <p>professional staff</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container" style="position: relative;">
{{--        <div class="d-none d-lg-block apple-boom">BOOM!</div>--}}
        <div class="d-flex justify-content-center align-items-center">
            <img src="/images/boom.png" alt="dancer in costume" class="img-fluid">
        </div>
        <div class="d-block">
            <h4 class="text-center text-uppercase">BOOM!</h4>
        </div>
    </div>

    <div class="py-5 purple">
        @include('_divider-top')
        <div class="container py-5 d-flex align-items-center" style="height: 100%;">
            <div class="row py-5">
                <div class="col-sm-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <img class="review-img shadow mt-4" src="/images/test-tara.jpg" alt="">
                            <div class="fw-bold text-center" style="font-size: 1.25em;">Tara Grill</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <p>
                            My son will be starting his third year at the Pulse. The studio has become my son’s home away from home. It is a place where he gets stronger as a dancer/performer in all genres as well as a place that emphasizes the “team” which includes all dancers of every age and ability.  My favorite part of the Pulse besides seeing my son thrive in a positive dance culture is that their communication keeps me fully on top of all dance/competition related things. This is something NOT to be taken for granted.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="position: relative;">
{{--        <div class="d-none d-lg-block apple-cta">Step Into Your Spotlight</div>--}}
        <div class="d-flex justify-content-center align-items-center">
            <img src="/images/welcome-bottom.png" alt="dancer in costume" class="img-fluid">
        </div>
        <div class="d-none d-lg-none">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3" style="position: absolute; bottom: 4%; left: 50%; transform: translateX(-50%); width: 100%;">
                <div class="col-sm">
                    <div class="p-5 shadow rounded" style="background: white;">
                        <p class="txt-purple text-center fw-bold pb-0 mb-0">Ready To Dance?</p>
                        @include("_btn-register")
                    </div>
                </div>
                <div class="col-sm"></div>
                <div class="col-sm">
                    <div class="p-5 shadow rounded" style="background: white;">
                        <p class="txt-purple text-center fw-bold pb-0 mb-0">Questions?</p>
                        <div class="d-flex justify-content-center">
                            <a href="mailto:kelly@thepulseny.com?subject=The Pulse Web Contact" style="text-decoration: none;" class="text-white">
                                <div class="btn btn-lg brand-btn-outline shadow mt-2 fw-bold font-segoe" style="border: 3px solid #5946b2; color: #5946b2;">Contact Us</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-block text-center text-uppercase">
            <h4 style="line-height: 0.9;">Step Into Your Spotlight</h4>
            <div>
                <div class="d-flex justify-content-center">
                @include("_btn-register")
                    <a href="mailto:kelly@thepulseny.com?subject=The Pulse Web Contact" style="text-decoration: none;" class="text-white">
                        <div class="btn btn-lg brand-btn-outline shadow mt-2 fw-bold font-segoe mx-3" style="border: 3px solid #5946b2; color: #5946b2;">Contact Us</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 purple">
        @include('_divider-top')
        <div class="container py-5 d-flex align-items-center" style="height: 100%;">
            <div class="row py-5">
                <div class="col-sm-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <img class="review-img shadow mt-4" src="/images/test-fass.jpg" alt="">
                            <div class="fw-bold text-center" style="font-size: 1.25em;">Michelle Fass</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <p>
                            This studio is great in forging my children’s love for dance. It has been their home away from home. No matter the skill level of a dancer, there is always a place for them. The versatility in dance teachers and the opportunities given to all the students is amazing. They have a great staff, bring in outside choreographers, and offer opportunities for dancers to further their dance education outside of the studio. We’ve been so happy to be a part of the the Pulse!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--    <div style="position: relative; height: 500px;" class="d-none d-lg-block">--}}
{{--        <div class="container pt-5" style="height: 100%;">--}}
{{--            <div class="font-staat text-lowercase" style="font-size: 85px; position: absolute; top: 10%; left: 5%; width: 100%; color: black; line-height: 0.9; z-index: -3 !important;">--}}
{{--                <div class="apple-effect-right">See what dance can</div>--}}
{{--                <div class="apple-effect-left"><span style="color: transparent;">se</span>do for your child!</div>--}}
{{--            </div>--}}

{{--            <div style="z-index: 2; position: relative;" class="mt-5 pt-5" id="section-cta">--}}
{{--                <div style="height: 75px;"></div>--}}
{{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 pt-4">--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="next-step mx-1 shadow py-5">--}}
{{--                            <p class="txt-green">Ready To Leap In?</p>--}}
{{--                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"--}}
{{--                               class="">--}}
{{--                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm"></div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="next-step mx-1 shadow py-5">--}}
{{--                            <p class="txt-pink">Still Have Questions?</p>--}}
{{--                            <a href="#footer" class="">--}}
{{--                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="/images-lava/cta-crop.png" alt="" class="img-fluid d-none d-lg-block" id="cta-image">--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div id="mobile-cta-section" style="position: relative; height: 100%;" class="d-block d-lg-none my-5">--}}
{{--        <div class="container" style="height: 100%;">--}}
{{--            <div class="font-staat text-lowercase text-center" style="font-size: 85px; width: 100%; color: black; line-height: 0.9;">--}}
{{--                <div>See what dance can do for your child!</div>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">--}}
{{--                    <div class="col-sm my-3">--}}
{{--                        <div class="next-step mx-1 shadow py-5">--}}
{{--                            <p class="txt-green">Ready To Leap In?</p>--}}
{{--                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"--}}
{{--                               class="">--}}
{{--                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm"></div>--}}
{{--                    <div class="col-sm my-3">--}}
{{--                        <div class="next-step mx-1 shadow py-5">--}}
{{--                            <p class="txt-pink">Still Have Questions?</p>--}}
{{--                            <a href="#footer" class="">--}}
{{--                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-------------------------------------------- END MISTYS PASTE --------------------------------------------------->
    <!-------------------------------------------- END MISTYS PASTE --------------------------------------------------->
    <!-------------------------------------------- END MISTYS PASTE --------------------------------------------------->
    <!-------------------------------------------- END MISTYS PASTE --------------------------------------------------->

@endsection
