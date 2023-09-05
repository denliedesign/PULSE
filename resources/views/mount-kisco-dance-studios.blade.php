@extends('layouts.app')
@section('title', 'Mount Kisco Dance Studios | The Pulse Performing Arts Studio')
@section('description', 'Discover the Rhythm of Mount Kisco Dance at The Pulse Performing Arts Studio. Offering Exceptional Dance Classes, Talented Instructors, and Strong Values in Mount Kisco.')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Premier Mount Kisco Dance Classes</h4>
        <x-clarification location="Mount Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse Performing Arts Studio, we pride ourselves on providing the finest Mount Kisco dance classes for children. Our diverse range of classes caters to all ages and skill levels, ensuring every child can find their rhythm. From ballet to hip-hop, jazz to tap, our Mount Kisco dance studio offers a vibrant and supportive environment where young dancers can grow and shine. Join us and experience the joy of dance in Mount Kisco like never before.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-classes-in-mount-kisco.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/about">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Learn More About Us</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Meet Our Dedicated Instructors</h4>
        <x-clarification location="Mount Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-lessons-in-mount-kisco.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    Our team of passionate instructors at The Pulse Performing Arts Studio are the heartbeat of our Mount Kisco dance studio. With years of experience and a genuine love for teaching, our instructors foster a nurturing and inspiring atmosphere for your child to flourish. Each instructor is carefully chosen to provide the highest quality dance lessons in Mount Kisco, ensuring your child receives the best dance education possible.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Our Values: Passion, Discipline, Creativity</h4>
        <x-clarification location="Mount Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse Performing Arts Studio, we hold core values close to our hearts. Passion drives us to excel in every dance class, discipline instills a strong work ethic, and creativity allows each child to express themselves freely through dance. We believe in nurturing not just great dancers but also exceptional individuals. These values are the foundation of our Mount Kisco dance studio, guiding us in creating a positive and transformative dance experience in Mount Kisco for all who join us.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-studios-in-mount-kisco.jpg" alt="" class="img-fluid">
            </div>
        </div>
        @include('_btn-register')
    </div>


@endsection
