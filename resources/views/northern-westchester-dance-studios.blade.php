@extends('layouts.app')
@section('title', 'Northern Westchester Dance Studios | The Pulse')
@section('description', 'Discover the joy of dance in Northern Westchester at The Pulse! Our premier children\'s dance studio offers dynamic classes and lessons, making us one of the top dance studios in Northern Westchester. Join us for an unforgettable experience!')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Welcome to The Pulse - Dance in Northern Westchester</h4>
        <div class="row">
            <div class="col-sm">
                <p class="text-center">
                    At The Pulse, we're dedicated to providing exceptional dance experiences for children in Northern Westchester. Our dance studio is a hub of creativity, positivity, and skill-building, offering a wide range of classes to nurture your child's passion for dance. With a team of experienced instructors and a nurturing environment, we take pride in being one of the leading dance studios in Northern Westchester. From ballet to hip-hop, our classes are designed to inspire, educate, and empower young dancers, setting them on a path to artistic and personal growth.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/northern-westchester-dance-studios.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/about">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Learn More About Us</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Elevate Your Skills with Expert Northern Westchester Dance Lessons</h4>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-studios-in-northern-westchester.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm">
                <p class="text-center">
                    Unleash your child's potential through our expert Northern Westchester dance lessons at The Pulse. Our instructors are not only talented dancers but also skilled educators, ensuring that your child receives top-notch training. Whether your child is taking their first steps in the world of dance or striving to refine their technique, our lessons cater to all skill levels. With a focus on fostering creativity, discipline, and self-expression, our Northern Westchester dance lessons create a solid foundation for dancers to thrive both on and off the stage.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Diverse Dance Classes in Northern Westchester for All Ages</h4>
        <div class="row">
            <div class="col-sm">
                <p class="text-center">
                    Experience the magic of movement through our diverse dance classes, designed for all ages in Northern Westchester. From toddlers to teens, The Pulse offers a variety of age-appropriate dance classes that cater to different interests and skill levels. Our inclusive approach ensures that every child can find their passion, whether it's ballet, jazz, contemporary, or any other style. We understand that dance is not just about physical movements; it's about building confidence, friendships, and a love for the art form. Join our vibrant community and explore the world of dance in Northern Westchester like never before.
                </p>
            </div>
            <div class="col-sm">
                <img src="/images/dance-classes-in-northern-westchester.jpg" alt="" class="img-fluid">
            </div>
        </div>
        @include('_btn-register')
    </div>


@endsection
