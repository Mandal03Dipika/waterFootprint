<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="">
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            padding: 0;
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
            color: #000000;
            background-size: cover;
        }

        .wrapper {
            background-color: rgb(176, 228, 246);
            padding-right: 1em;
            padding-left: 1em;
            height: 54rem;
        }

        header {
            height: 64px;
            color: #fff;
            text-align: center;
            background: linear-gradient(to right, #66e0ff, #5e6eff);
        }

        header h2 {
            font-size: 1.8em;
            margin-top: 0;
            padding-top: .8em;
        }

        .wrapper {
            width: 90%;
            margin: 0 auto;
            padding-bottom: 0;
        }

        .info {
            text-align: center;
        }


        .info h3 {
            margin-top: 0;
            padding-top: 1.5em;
            font-size: 2.5em;
        }

        .info p {
            font-size: .85em;
            border-bottom: 4px solid rgba(45, 57, 69);
            padding-bottom: 3em;
            margin-bottom: 0;
        }

        form {
            border-top: 2px solid rgba(45, 57, 69);
            margin-top: 2px;
            padding-top: 1em;
        }

        fieldset {
            border: none;
            padding: 0;
            margin-right: 0;
            margin-left: 0;
            margin-top: 1em;
            margin-bottom: 1em;
            padding-top: 1em;
            padding-bottom: 1em;
        }

        fieldset legend {
            font-size: 1.65em;
            font-weight: bold;
            padding-bottom: .75em;
        }

        .contact-info label {
            display: block;
            padding-bottom: .65em;
            font-size: 1.25em;
        }

        .newsletter label {
            font-size: 1.25em;
        }

        .contact-info input,
        select,
        textarea {
            box-shadow: 0 0 1px;
            width: 100%;
            height: 4em;
            background-color: #fff;
            outline: none;
            border: none;
            border-radius: 5px;
            border-color: #fff;
            text-indent: 10px;
            transition: border-color .4s ease-in-out;
        }

        textarea {
            height: 85px;
            padding-top: 10px;
        }

        .header {
            width: 100%;
            text-align: center;
        }

        .header-title {
            font-size: 3rem;
            font-weight: 900;
            font-family: Comic Sans MS;
            color: #010624;
            text-shadow: -3px 3px 7px #969865;
            vertical-align: 25px;
        }

        .header-icon {
            height: 6rem;
            margin-right: 0rem;
            display: inline;
        }

        .contact-info input:focus,
        select:focus,
        textarea:focus {
            border: 2px solid #46698B;
            border-radius: 0;
        }

        #name:focus,
        #email:focus {
            border: 2px solid #FF7463;
        }


        .newsletter [type="checkbox"] {
            transform: scale(1.4);
        }

        ::placeholder {
            text-align: right;
            padding-right: 1em;
        }

        .wrapper {
            width: 90%;
            max-width: 950px;
        }

        .contact-info label {
            display: inline-block;
            width: 26%;
        }

        .contact-info input,
        select {
            width: 72%;
        }

        .contact-info p,
        .newsletter p {
            margin-top: .5em;
            margin-bottom: .5em;
        }

        form {
            display: flex;
            justify-content: space-between;
            padding-top: 1em;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-width: 340px;
            /* height: 5600px; */
            justify-content: space-around;
        }

        .contact-info {
            width: 55%;
        }

        .newsletter {
            width: 41%;
        }


        .action-button {
            padding: 1rem 11.6rem;
            border: 3px solid;
            border-radius: 0.7rem;
            text-decoration: none;
            font-size: 1.5rem;
        }



        .submit {
            border-color: rgb(114, 114, 220);
            background: linear-gradient(to right, #6e66ff, #5eccff);
            color: #000000;
        }

        .reset {
            border-color: rgb(134, 134, 219);
            background: linear-gradient(to right, #8699f9, #69d7f9);
            color: #000000;
        }

        a:hover {
            background: linear-gradient(to right, white, white);
        }

        .declaration {
            margin-top: 15rem;
        }
    </style>
</head>

<body background="images/1.jpg">
    <div class="header">
        <span class="header-title">Waterfootprints</span>
    </div>
    <header>
        <h2 class="tag-line">REGISTRATION FORM</h2>
    </header>

    <div class="wrapper">
        <main>
            <div class="info">
                <h2></h2>
                <p></p>
            </div>
            <form action="#" method="GET" id="form">
                <fieldset class="contact-info">
                    <div class="container">
                        <legend>Personal Information</legend>
                        <p>
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="user_name" placeholder="Required"
                                title="Please fill out this field">
                        </p>
                        <p>
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="user_email" placeholder="Required"
                                title="Please fill out this field">
                        </p>
                        <p>
                            <label for="address">Street Adress</label>
                            <input type="text" id="address" name="user_address">
                        </p>
                        <p>
                            <label for="dob">Date Of Birth</label>
                            <input type="date" id="dob" name="user_dob">
                        </p>
                        <p>
                            <label for="phone_number">Phone Number:</label>
                            <input type="tel" id="phone_number" name="user_number">
                        </p>
                        <p>
                            <label for="city">City</label>
                            <input type="text" id="city" name="user_city">
                        </p>
                        <p>
                            <label for="state">State</label>
                            <select id="state" name="user_state">
                                <option value="state">Choose State</option>
                                <option value="abc">AP|Andhra Pradesh</option>
                                <option value="def">AR|Arunachal Pradesh</option>
                                <option value="geh">AS|Assam</option>
                                <option value="ijk">BR|Bihar</option>
                                <option value="ftg">CT|Chhattisgarh</option>
                                <option value="hjk">GA|Goa</option>
                                <option value="kil">GJ|Gujarat</option>
                                <option value="tyu">HR|Haryana</option>
                                <option value="ewt">HP|Himachal Pradesh</option>
                                <option value="yrt">DL|Delhi</option>
                                <option value="sef">WB|West Bengal</option>
                            </select>
                        </p>
                        <p>
                            <label for="zipcode">Zipcode</label>
                            <input type="number" id="zipcode" name="user_zipcode">
                        </p>
                    </div>
                </fieldset>

                <fieldset class="newsletter">
                    <div class="container">

                        <p>
                            <label for="passcode">Set Password:</label>
                            <input type="password" id="passcode" name="user_passcode">
                        </p>
                        </p>
                        <div class="declaration">
                            <legend>Declaration</legend>
                            <P>
                                <label style="font-size: medium;">
                                    <input type="checkbox" id="tfw" name="new2" value="Yes">
                                    <b>Subscribe to newsletter</b>
                                </label>
                            </P>
                            <label style="font-size: medium;">
                                <input type="checkbox" id="tfw" name="new2" value="Yes">
                                <b>Accept <a href="{{route('terms')}}">Terms and Conditions</a></b>
                        </div>
                    </div>
                </fieldset>
            </form>

        </main>
        <div class="footer">
            <a class="action-button submit" onclick="onformsubmit()">Sign Up</a>
            <a class="action-button reset" onclick="reset()">Reset</a>
        </div>
    </div>
    <script>
        function reset() {
			document.getElementById("form").reset();
			document.getElementById("income").hidden = true;
		}

		function tfwchanged(){
				document.getElementById("income").hidden = !(document.getElementById("tfw").checked);
		}

		function onformsubmit() {
			if(!document.getElementsByName("user_email")[0].value || !document.getElementsByName("user_address")[0]) {
				alert('Required fields missing!');
			} else {
				alert('Account Created Successfully! Redirecting to main page...');
				window.location.href = "{{route('land')}}"
			}
		}
    </script>
</body>

</html>