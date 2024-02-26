@extends('layouts.main')
@section('content')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Raleway', sans-serif;
        background-color: #000;
    }

    .text-container {
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("images/2.jpg");
        background-repeat: no-repeat;
        background-position: center;


    }

    .text-container h1 {
        margin: 0;
        font-size: 70px;
        color: rgba(225, 225, 225, .01);
        background-image: url("images/1.jpg");
        background-repeat: repeat;
        -webkit-background-clip: text;
        animation: animate 15s ease-in-out infinite;
        text-align: left;
        text-transform: uppercase;
        font-weight: 900;
        position: relative;
    }

    @keyframes animate {

        0%,
        100% {
            background-position: left top;
        }

        25% {
            background-position: right bottom;
        }

        50% {
            background-position: left bottom;
        }

        75% {
            background-position: right top;
        }
    }

    * {
        margin: 0;
        padding: 0;
    }

    section {
        position: relative;
        width: 100%;
        height: 100vh;
        background: #f1f1f1;
        overflow: hidden;
    }

    section .air {

        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url("images/3.jpg");
        background-size: 1000px 100px
    }

    section .air.air1 {
        animation: wave 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    section .air.air2 {
        animation: wave2 15s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10px;
    }

    section .air.air3 {
        animation: wave 30s linear infinite;
        z-index: 998;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15px;
    }

    section .air.air4 {
        animation: wave2 5s linear infinite;
        z-index: 997;
        opacity: 0.7;
        animation-delay: -5s;
        bottom: 20px;
    }

    @keyframes wave {
        0% {
            background-position-x: 0px;
        }

        100% {
            background-position-x: 1000px;
        }
    }

    @keyframes wave2 {
        0% {
            background-position-x: 0px;
        }

        100% {
            background-position-x: -1000px;
        }
    }

    :root {
        --clr-neon: #2e9dbf;
        /* --clr-bg: rgb(255, 255, 255); */
        --clr-white: rgba(255, 255, 255, 1);
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        display: grid;
        place-items: center;
        background: var(--clr-bg);
        font-family: system-ui;
        color: var(--clr-neon);
    }

    .button {
        font-size: 1.4rem;
        margin-left: 3.2rem;
        display: inline-block;
        cursor: pointer;
        text-decoration: none;
        color: var(--clr-neon);
        border: var(--clr-neon) 4px solid;
        padding: 0.25em 1em;
        border-radius: 0.25em;
        text-shadow: 0 0 0.125em rgba(255, 255, 255, 0.55), 0 0 0.5em currentColor;
        box-shadow: inset 0 0 0.5em 0 var(--clr-neon), 0 0 0.5em 0 var(--clr-neon);
        position: relative;
        height: 100%;
    }

    .justify-content-between {
        justify-content: space-between !important;
        margin-right: 8rem;
    }

    .button::before {
        pointer-events: none;
        content: "";
        position: absolute;
        background: var(--clr-neon);
        top: 120%;
        left: 0;
        width: 100%;
        height: 100%;

        transform: perspective(1.2em) rotateX(40deg) scale(1.5, 0.5);
        filter: blur(1.15em);
        opacity: 0.7;

        transition: transform 0.5s linear;
    }

    .button::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        box-shadow: 0 0 4em 0.6em var(--clr-neon), 0 0 1em 0.2em var(--clr-white);
        opacity: 0;
        background: var(--clr-neon);
        z-index: -1;
        transition: opacity 0.5s linear;
    }

    .button:hover,
    .button:focus {
        color: var(--clr-bg);
        text-shadow: none;
    }

    .button:hover::before,
    .button:focus::before {
        opacity: 1;
        transform: perspective(1em) rotateX(40deg) scale(1.5, 0.6);
        transition: transform 0.5s linear;
    }

    .button:hover::after,
    .button:focus::after {
        opacity: 1;
    }
</style>

<section>
    <div class="text-container">

        <div class="details" style="margin-left: 40px; ">



            <h3 style="color:#2e9dbf;font-size:2vw;"><b>"Water is life's mater and matrix, mother & medium. There is no
                    life without water."</b></h3>
            <br>
            <br>
            <h2 style="margin-left: 10px;">BlueDrop Footprint presents</h2>
            <br>
            <h1 style="font-size: 8vw;">water footprint</h1>
            <h2 style="margin-left: 20px;">calculator </h2>
            <br>
            <br>
            <br>
            <div class="d-flex justify-content-between">
                <a href="{{route('survey.index')}}" class="button" id="screen" class="btn btn-primary">Find your
                    Footprint</a>

                <a href="{{route('water_footprint')}}" class="float-right button" id="screen"
                    class="btn btn-primary">What is Footprint</a>
            </div>

        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



</section>
@endsection