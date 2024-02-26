<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
    <title>Document</title>
    <style>
        .header {
            width: 100%;
            text-align: center;
            background-color: beige;
        }

        .header-title {
            font-size: 5rem;
            font-weight: 900;
            font-family: Comic Sans MS;
            color: #0018a0;
            text-shadow: 10px 12px 6px #159199;
            vertical-align: middle;
        }

        .header-icon {
            height: 8rem;
            margin-right: 1rem;
            display: inline;
        }

        h2 {
            margin: 0;
            color: #666;
            padding-top: 90px;
            font-size: 52px;
            font-family: "trebuchet ms", sans-serif;
        }

        .item {
            background: white;
            text-align: center;
            height: 52rem !important;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .carousel {
            margin-top: 20px;
        }

        .bs-example {
            margin: 20px;
        }

        .carousel.carousel-fade .item {
            opacity: 0;
            filter: alpha(opacity=0);
            /* ie fix */
        }

        .carousel.carousel-fade .active.item {
            opacity: 1;
            filter: alpha(opacity=100);
            /* ie fix */
        }

        #car1 {
            background-image: url("../assets/car1.jpg");
        }

        #car2 {
            background-image: url("../assets/car2.jpg");
        }

        #car3 {
            background-image: url("../assets/car3.jpg");
        }

        .action-button {
            padding: 1rem 5rem;
            border: 3px solid;
            border-radius: 0.7rem;
            text-decoration: none !important;
            font-size: 1.5rem;
            font-family: 'Comic Sans MS';
            cursor: pointer;
        }

        .jump {
            border-color: rgb(123, 206, 247);
            background: linear-gradient(to right, #7af0ff, #5989eb);
            color: #000000;
            margin: 2rem 35rem;
            text-align: center;
            display: block;
        }

        .glyphicon {
            margin-right: 1.2rem !important;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }


        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }


        .modal-header {
            padding: 2px 16px;
            background-color: #7df1f3;
            color: rgb(18, 2, 110);
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: beige;
            color: white;
            text-align: center !important;
            color: black;
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 40%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            animation-name: animatetop;
            animation-duration: 0.4s;
            text-align: center !important;
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        .reallogin {
            display: block;
            margin: auto;
            background-color: skyblue;
        }

        .input-container {
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }
    </style>
</head>

<body background="images/1.jpg">
    <div class="header">
        <span class="header-title">Waterfootprints</span>
    </div>
    <div class="footer">
        <a class="action-button jump" id="myBtn" onclick="onclickbtn()">
            <span class="glyphicon glyphicon-info-sign"></span>LOG IN
        </a>
    </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="onclickclose()">&times;</span>
                <h2>Login</h2>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Username or email" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="psw">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="action-button reallogin" id="myBtn"
                    onclick="alert('Logged in successfully! Redirecting to main page...')">LOG IN
                </a>
                Not Having an account? <a href="{{route('register_main')}}">Register Now!</a>
            </div>
        </div>

    </div>
    <script>
        function onclickbtn() {
            document.getElementById("myModal").style.display = "block";
            document.getElementById("loginForm").reset();
        }


        function onclickclose(){
            document.getElementById("myModal").style.display = "none";
        }

        window.onclick = function(event) {
            let modal = document.getElementById("myModal");
            if (event.target == modal) {
                console.log(event);
                modal.style.display = "none";
              }
        }

    </script>
</body>

</html>