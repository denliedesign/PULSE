@extends('layouts.app')
@section('title', 'Mt Kisco Dance Studios | The Pulse Performing Arts Studio')
@section('description', 'Elevate your child\'s love for dance with The Pulse - the ultimate destination for dance classes in Mt. Kisco. Our renowned dance studio offers top-tier instruction, nurturing creativity and skill development. Explore Mt. Kisco\'s finest dance lessons and studios with The Pulse.')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Unleash Your Potential with Exceptional Dance Classes in Mt. Kisco</h4>
        <x-clarification location="Mt. Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse, we take pride in offering dynamic and diverse dance classes in Mt. Kisco that cater to children of all ages and skill levels. From ballet to hip-hop, contemporary to jazz, our comprehensive range of classes ensures every young dancer finds their perfect fit. Our experienced instructors foster a positive and encouraging environment, helping students not only develop technical prowess but also confidence and self-expression.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-studios-in-mt-kisco.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/about">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Learn More About Us</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Expert Guidance from Mt. Kisco's Finest Dance Instructors</h4>
        <x-clarification location="Mt. Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <img src="/images/dance-lessons-in-mt-kisco.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse, our Mt. Kisco dance studio boasts a team of dedicated instructors who are passionate about cultivating young talent. Each instructor brings a wealth of experience and expertise to our dance lessons in Mt. Kisco. With their guidance, your child will not only refine their technical skills but also develop discipline, teamwork, and a genuine love for the art of dance.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow mt-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
        </div>
        <hr class="my-5">
        <h4 class="text-center">Elevating Educational Dance in Mt. Kisco Through Values</h4>
        <x-clarification location="Mt. Kisco"/>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse, our Mt. Kisco dance studio stands out not only for exceptional classes but also for the core values that underpin everything we do. We prioritize creativity, integrity, inclusivity, and a strong sense of community. Through dance, we instill these values in every student, fostering not just skilled dancers, but confident and compassionate individuals.
                </p>
            </div>
            <div class="col-sm">
                <img src="/images/dance-classes-in-mt-kisco.jpg" alt="" class="img-fluid">
            </div>
        </div>
        @include('_btn-register')
    </div>


@endsection
