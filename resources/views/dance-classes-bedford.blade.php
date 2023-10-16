@extends('layouts.app')
@section('title', 'Dance Classes Bedford | The Pulse Performing Arts Studio')
@section('description', 'Discover the Rhythmic World of Dance at The Pulse – Your Premier Choice for Ballet, Jazz, Tap, Acro, and Hip Hop Classes in Bedford. Unlock Your Child\'s Potential with our Expert Ballet Lessons, Jazz Dance Classes, Tap Dance Classes, Acro Classes, and Hip Hop Dance Classes in Bedford. Join Today!')
@section('content')

    <div class="banner-wrap-lg d-none d-md-block">
        <div class="banner within-preschool"></div>
    </div>

    <img src="/images/preschool-banner.jpg" alt="three preschoolers on their tummies smiling" class="img-fluid d-block d-md-none">

    <div class="container py-5">
        <h4 class="text-center">Ballet Classes in Bedford</h4>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    At The Pulse, our ballet program in Bedford is designed to ignite your child's passion for dance. Our dedicated instructors offer exceptional ballet lessons in Bedford, instilling a strong foundation of grace, technique, and self-expression. With our commitment to excellence, your child will develop the skills and artistry that set them on a path to becoming a true ballet star.                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/ballet-classes-bedford.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow m-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
            @include('_btn-register')
        </div>
        <hr class="my-5">
        <h4 class="text-center">Dynamic Jazz Dance Classes in Bedford</h4>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <img src="/images/jazz-dance-classes-bedford.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    Dive into the captivating world of jazz at The Pulse. Our jazz dance classes in Bedford are the perfect blend of energy and rhythm. With a focus on technique and creativity, our Bedford jazz dance classes will inspire your child to groove to the beat. Join us and watch your child's confidence soar as they master the art of jazz dance.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow m-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
            @include('_btn-register')
        </div>
        <hr class="my-5">
        <h4 class="text-center">Toe-Tapping Tap Dance Classes in Bedford</h4>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    Tap into the excitement of rhythm and precision with our tap dance classes in Bedford. At The Pulse, we offer top-notch tap dance lessons to kids of all ages. Our Bedford tap classes provide the perfect platform to learn the art of tap dance, helping your child become a skilled performer with unforgettable talent.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/tap-dance-classes-bedford.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow m-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
            @include('_btn-register')
        </div>
        <hr class="my-5">
        <h4 class="text-center">Elevate with Acro Classes in Bedford</h4>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <img src="/images/acro-classes-bedford.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    Looking to add some acrobatic flair to your child's dance journey? The Pulse's acro classes in Bedford combine the grace of dance with the thrill of acrobatics. Our experienced instructors guide your child through the intricacies of acro, helping them achieve new heights while ensuring safety and progress every step of the way.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow m-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
            @include('_btn-register')
        </div>
        <hr class="my-5">
        <h4 class="text-center">Groove to the Beat with Hip Hop Dance Classes in Bedford</h4>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <p class="text-center">
                    Get ready to move and groove with our hip hop dance classes in Bedford. The Pulse offers energetic and fun hip hop dance lessons that allow your child to express themselves through dynamic moves and creativity. Our Bedford hip hop classes are the ultimate choice for kids who want to be part of the hip hop culture.
                </p>
            </div>
            <div class="col-sm d-flex align-items-center">
                <img src="/images/hip-hop-dance-classes-bedford.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/classes">
                <div class="btn btn-lg brand-btn shadow m-2 fw-bold font-segoe" style="background: #5946b2; color: white;">Find Your Class</div>
            </a>
            @include('_btn-register')
        </div>
    </div>


@endsection
