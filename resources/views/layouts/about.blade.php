@extends('layouts.main')
@section('content')
<style>
    .margin {
        margin-top: -550px;
        margin-left: 30px;
        color: white;
        font-size: 5.5rem;
    }

    .fw-bold1 {
        font-size: 4rem;
        margin-top: 4rem;
    }

    .text-success {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }

    .fs-3 {
        font-size: 1.5rem !important;
    }

    .margin1 {
        margin-top: -452px;
        margin-left: 42px;
        color: white;
        font-size: 2rem;
    }

    .bord {
        border-radius: 78px;
    }

    .ml {
        margin-left: 5.2rem;
    }

    .color {
        background-color: #c8e5fe73;
    }

    .about {
        height: 500px;
    }

    .fs-1 {
        font-size: 3.5rem !important;
    }

    .off {
        margin-left: 22rem;
    }

    @media (min-width: 0px) and (max-width: 480px) {
        .margin {
            margin-top: -160px;
            margin-left: 25px;
            font-size: 1.5rem;
        }

        .ml {
            margin-left: 0;
        }

        .margin1 {
            margin-top: -132px;
            margin-left: 25px;
            font-size: 1rem;
        }

        .off {
            margin-left: 0;
        }

        .about {
            height: 300px;
        }

        .fw-bold1 {
            margin-top: 0.5rem;
        }

        .fs-1 {
            font-size: 2.5rem;
        }
    }
</style>
<div class="row">
    <img src="{{asset('images/water.avif')}}" alt="">
    <h3 class="margin">About</h3>
    <h6 class="margin1">Home > About</h6>
</div>
<div class="color">
    <div class="px-3 row">
        <img src="{{asset('images/about-thumb.png')}}" class="col-md-6 col-sm-12 about fw-bold1" alt="">
        <div class="px-4 mt-3 ml-5 col-md-5 col-sm-12 ml">
            <h1 class="text-center fs-1 text-success">Purpose and Goals</h1>
            <p class="text-align-justify fs-5">Our Primary purpose is to raise awareness about the importance of water
                conservation and empower individuals and buisnesses to make informed decision regarding water usage.
            </p>
            <p class="mt-3 fw-bold fs-4">Our goals include :</p>
            <ul class="list-group">
                <li class="list-group-item fs-5 text-secondary">Educating individuals and buisnesses about significance
                    of
                    water conservation.</li>
                <li class="list-group-item fs-5 text-secondary">Developing user-friendly tools and resources to manage
                    water
                    usage</li>
                <li class="list-group-item fs-5 text-secondary">Collaborating with organisations and governments and
                    communities
                    to foster a collective effort towards water sustainability.</li>
                <li class="list-group-item fs-5 text-secondary">Encouraging behavioral changes that reduce water waste
                    and
                    promote responsible water consumption.</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row ">
        <div class="px-5 mt-4 col-md-4 col-sm-14 text-success fs-1">Meet The Team</div>
        <div class="px-5 col-md-5 col-sm-12 off text-secondary text-align-justify fs-5 ">The company's team is a diverse
            and dedicated group of of professionals who bring a wealth of expertise to the table. We work
            collaboratively to achieve our goals, each member contributing their unique skills and talents.</div>
    </div>
    <div class="px-5 mt-5 row justify-content-between">
        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="{{asset('images/Dipika.jpg')}}" class="bord img img-thumbnail"
                    style="height: 240px; width: 100%;">
                <div class="mt-1 text-center caption fs-3">Dipika Mandal</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="{{asset('images/Sampreeti.jpg')}}" alt="" class="bord img img-thumbnail"
                    style="height: 240px; width: 100%;">
                <div class="mt-1 text-center caption fs-3">Sampreeti Basu Mallick</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="{{asset('images/Avhisek.jpg')}}" alt="" class="bord img img-thumbnail"
                    style="height: 240px; width: 100%;">
                <div class="mt-1 text-center caption fs-3">Avhisek Shaw</div>
            </div>
        </div>
    </div>
    <div class="px-5 mt-5 row justify-content-between">
        <div class="col-lg-3">
            <img src="{{asset('images/Ritam.jpg')}}" class="bord img img-thumbnail" style="height: 240px; width: 100%;">
            <div class="mt-1 text-center caption fs-3">Ritam Ghosh</div>
        </div>
        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="{{asset('images/Dwip1.jpg')}}" alt="" class="bord img img-thumbnail"
                    style="height: 240px; width: 100%;">
                <div class="mt-1 text-center caption fs-3">Dwip Dutta</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="{{asset('images/Ronit.jpg')}}" class="bord img img-thumbnail" alt=""
                    style="height: 240px; width: 100%;">
                <div class="mt-1 text-center caption fs-3">Ronit Bose</div>
            </div>
        </div>
    </div>
    <hr>
</div>
@endsection