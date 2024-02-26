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
        top: 50%;
        left: 50%;
        width: 80%;
        max-width: 800px;
        text-align: center;
        border: 2px solid #000053;
        border-radius: 15px;
        background-color: rgba(188, 251, 251, 0.61);
        box-shadow: 2px 2px 2px rgba(188, 251, 251, 0.61);
        transform: translate(-50%, -50%);
        color: #000053;
        font-size: 40px;
    }

    .heading {
        text-align: center;
        color: #000053;
        margin-top: 80px;
        font-size: 40px;
        text-shadow: 2px 2px 2px rgba(188, 251, 251, 0.61);

    }

    .text {
        font-size: 30px;
    }
</style>
<div class="px-4 container-fluid">
    <video autoplay="" muted="" loop="" id="myVideo">
        <source src="{{asset('images/Backgrd.mp4')}}" type="video/mp4">
    </video>
    <h1 class="heading">Its time to show results</h1>
</div>
@endsection