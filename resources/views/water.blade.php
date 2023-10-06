<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box {

            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            scroll-behavior: smooth;
            font-family: 'Helvetica Neue', sans-serif;
        }

        h1 a {
            font-size: 50px;
            color: #fcfcfc;
            text-decoration: none;
            text-transform: uppercase;
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            /* position:relative; */
            text-align: center;
            position: sticky;
        }

        html,
        body {
            height: 100%;
            margin: 0;
        }

        #fullScreenDiv {
            min-height: 100%;
            height: 100vh;
            width: 100vw;
            padding: 0;
            margin: 0;
            background-color: gray;
            position: relative;
        }

        #video {
            width: 100vw;
            height: auto;
            margin: auto;
            display: block;
        }

        @media (min-aspect-ratio: 16/9) {
            #video {
                width: 100vw;
                height: auto;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            #video {
                height: 100vh;
                width: auto;
                margin-left: 50vw;
                transform: translate(-50%);
            }
        }

        #videoMessage {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .styling * {
            margin: 0.2em;
            text-align: center;
            color: #ffffff;
        }

        .styling h1 {
            font-size: 3em;
            text-shadow: 2px 2px 2px #000000;
        }

        .styling h2 {
            font-size: 1.5em;
        }

        .styling h3 {
            font-size: 1.2em;
        }

        .videoClick a {
            padding: 0.2em 0.5em;
            border-radius: 0.5em;
            color: white;
            background-color: rgba(241, 241, 241, 0.45);
            font-size: 1.7em;
            cursor: pointer;
            cursor: hand;
        }
    </style>
</head>

<body>
    <div class="container box">

        <div styel="position:relative; overflow:hidden;">
            <div id="fullScreenDiv">
                <video id="video" role="presentation" preload="auto" playsinline="" crossorigin="anonymous" loop=""
                    muted="" autoplay="">

                    <source src="{{asset('images/Backgrd.mp4')}}" type="video/mp4">
                </video>
                <div id="videoMessage" class="styling">
                    <h1 style="font-family: cursive; position: relative;">
                        <a href="{{route('land')}}">WATER FOOTPRINT CALCULATOR</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>