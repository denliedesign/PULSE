@extends('layouts.app')
@section('title', 'Dance Studios Mount Kisco | The Pulse Performing Arts Studio')
@section('description', 'Unlock the Rhythm of Joy with The Pulse: Your Premier Choice for Dance Studios, Lessons, and Classes in Mount Kisco')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Elevate Your Child's Talent with Diverse Dance Classes in Mount Kisco</h4>
        <x-clarification location="Mount Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse in Mount Kisco, we offer an exciting array of dance classes tailored for children. Our classes cover various dance styles, ensuring that your child finds the perfect rhythm to express themselves. From ballet to hip-hop and everything in between, our dance classes provide a dynamic platform for children to explore their passion for dance.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-studios-mount-kisco.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/about">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Learn More About Us</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Meet Our Inspiring Instructors: The Heartbeat of Dance Education in Mount Kisco</h4>
        <x-clarification location="Mount Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-lessons-mount-kisco.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    Our instructors at The Pulse are more than just dance educators; they are mentors, motivators, and sources of inspiration. With years of experience in teaching and a deep love for dance, they are dedicated to nurturing the potential within each child. Our instructors create a supportive and empowering atmosphere where your child's dance journey in Mount Kisco becomes a remarkable and fulfilling experience.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Cultivating Lifelong Values Through Dance Education in Mount Kisco</h4>
        <x-clarification location="Mount Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse, we believe that dance education is not only about mastering movements but also about instilling values that will last a lifetime. In our classes, your child will learn discipline, teamwork, self-confidence, and creativity. We're committed to helping children grow into well-rounded individuals who not only excel in dance but also carry these essential values with them in all aspects of life. Our dance studio in Mount Kisco is where your child's passion for dance meets personal growth.
                </p>
            </div>
            <div class="col-sm">
                <img src="/images/dance-classes-mount-kisco.jpg" alt="" class="img-fluid">
            </div>
        </div>
        @include('_btn-register')
    </div>


@endsection
