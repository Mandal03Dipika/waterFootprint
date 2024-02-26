@extends('layouts.main')
@section('content')
<style>
    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
        background: black;
    }

    .center {
        position: absolute;
        top: 15%;
        /* left: 50%; */
        text-align: center;
        text-shadow: 2px 2px 2px rgba(188, 251, 251, 0.61);
        /* transform: translate(-50%, -50%); */
    }

    .bg-info-subtle {
        background-color: rgba(255, 255, 255, 0.353) !important;
    }

    .btn-outline-info:hover {
        background-color: rgba(64, 64, 158, 0.542) !important;
    }
</style>
<div class="px-4 container-fluid">
    <video autoplay="" muted="" loop="" id="myVideo">
        <source src="{{asset('images/Backgrd.mp4')}}" type="video/mp4">
    </video>
    <div class="center" style="color:#000053; font-size:45px; font-weight:800;
    ">Fair & Smart Use of Water Resources
    </div>
</div>
@endsection