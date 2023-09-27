@extends('layouts.app')
@section('title', 'Bedford Dance Classes Toddler | The Pulse Performing Arts Studio')
@section('description', 'Discover Exceptional Bedford Dance Classes for 4-Year-Olds at The Pulse Children\'s Dance Studio. Our Passionate Instructors Instill Values Through Engaging Dance Lessons for Toddlers')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Fun and Educational Dance Classes for 4-Year-Olds in Bedford</h4>
{{--        <x-clarification location="Mount Kisco"/>--}}
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse Children's Dance Studio, we offer an array of fun and educational dance classes tailored specifically for 4-year-olds in Bedford. Our classes are designed to nurture your child's love for dance while fostering essential skills such as coordination, rhythm, and teamwork. We understand the unique needs of toddlers, and our experienced instructors create a supportive and engaging environment where your child can thrive.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/bedford-dance-classes-toddler.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/about">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Learn More About Us</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Passionate and Experienced Instructors Who Care</h4>
{{--        <x-clarification location="Mount Kisco"/>--}}
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <img src="/images/bedford-dance-classes-for-4-year-olds.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    Our dedicated team of instructors at The Pulse are passionate about teaching dance to young children. They bring a wealth of experience and expertise in early childhood education and dance instruction. Our instructors are not only skilled in their craft but also caring and patient, ensuring that your child feels comfortable and excited to learn in every class. Your child's safety and happiness are our top priorities.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Fostering Core Values Through Dance Education</h4>
{{--        <x-clarification location="Mount Kisco"/>--}}
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse, we believe that dance is more than just movement; it's a way to instill core values in your child. In addition to teaching dance skills, our classes emphasize values such as discipline, self-expression, confidence, and teamwork. We are dedicated to nurturing well-rounded individuals who not only excel in dance but also carry these essential values with them in life. Your child's journey with us goes beyond dance steps; it's a path towards personal growth and development.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-classes-for-4-year-olds-bedford.jpg" alt="" class="img-fluid">
            </div>
        </div>
        @include('_btn-register')
    </div>


@endsection
