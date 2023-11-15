<?php
    require_once('project4db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-image: url('https://www.pcgamesn.com/wp-content/uploads/2021/04/csgo-map-bureau-office.jpg');
                color: black;
            }
            form {
                border-color: white;
                border-style: solid;
                background-blend-mode: overlay;
                background-color: rgba(255,255,255,0.5);
                margin: 0 auto;
                position: relative;
                margin-top: 44px;
                max-width: 800px;
                padding: 0 24px;
                padding-bottom: 30px;
                line-height: 2;
            }
            #title {
                text-align: center;
                font-size: 20px;
                font-family: courier;
            }
            .labels {
                font-size: 16px;
                float: left;
                position: absolute;
                line-height: 2;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .text {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 10px;
                clear: left;
                line-height: 2;
                border-radius: 18px;
                background-color: lightgrey;
                width: 400px;
                font-family:Verdana, Geneva, Tahoma, sans-serif;
            }
            .rqlabel {
                position: absolute;
                left: 650px;
                color: red;
                line-height: 2;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .buttons {
                float: right;
                position: relative;
                display: block;
                border-radius: 12px;
                background-color: gray;
                color: black;
                font-size: 24px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                margin-bottom: 10px;
            }
            input {
                margin-bottom: 10px;
            }
            .tlabels {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .check {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
        </style>
    </head>
    <body>
        <form id="loginform" method="POST" action="project4verify.php" onsubmit="validate();">
            <p id="title"><b>House of Health</b></p>
            <label for="fname" class="labels">Receptionist's First Name:</label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="text" name="fname" id="fname" placeholder="Example: Jane">
            <label for="lname" class="labels">Receptionist's Last Name:</label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="text" name="lname" id="lname" placeholder="Example: Doe">
            <label for="pw" class="labels">Receptionist's Password:</label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="password" name="pw" id="pw" placeholder="Example: Dr3@m!bU1">
            <label for="id" class="labels">Receptionist's ID #:</label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="text" name="id" id="id" placeholder="Example: 7404">
            <label for="number" class="labels">Receptionist's Phone #:</label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="text" name="number" id="number" placeholder="Example: 901-398-4839">
            <label for="email" class="labels">Receptionist's Email:</label>
            <input class="text" type="text" name="email" id="email" placeholder="Example: jef@gmail.com">
            <input class="checkbox" type="checkbox" name=econfirm id="econfirm">
            <label for="econfirm" class="check">Check the box to request an Email confirmation:<br></label>
            <label for="transaction" class="tlabels" name="transaction">Select a Transaction:</label>
            <select id="transaction" name="transaction" id="transaction">
                <option id="receptionist" value="receptionist" selected>Search a receptionist's accounts.</option>
                <option id="bookapp" value="bookapp">Book an appointment.</option>
                <option id="cancelapp" value="cancelapp">Cancel an appointment.</option>
                <option id="bookpro" value="bookpro">Book a patient's procedures.</option>
                <option id="cancelpro" value="cancelpro">Cancel procedures.</option>
                <option id="update" value="update">Update patient account.</option>
                <option id="create" value="create">Create new patient account.</option>
            </select><br>
            <button class="buttons" type="submit" name="submit" id="submit">Submit</button>
            <button class="buttons" type="reset" name="reset" id="reset">Reset</button><br>
        </form>
        <script type="text/javascript">
            function validate() {
                transact = "Search a receptionist's accounts.";
                if (!(/[A-Za-z]+/.test(document.getElementById('fname').value))) {
                    window.alert("Receptionist's First Name missing. Please enter.");
                }
                if (!(/[A-Za-z]+/.test(document.getElementById('lname').value))) {
                    window.alert("Receptionist's Last Name missing. Please enter.");
                }
                if (!(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[\.@$!%*#?&])[A-Za-z\.\d@$!%*#?&]{3,16}$/.test(document.getElementById('pw').value))) {
                    window.alert("Password missing. Please enter.");
                }
                if (!(/[0-9]{3,4}/.test(document.getElementById('id').value))) {
                    window.alert("ID # missing. Please enter.");
                }
                if (!(/[0-9]{3}[- ]?[0-9]{3}[- ]?[0-9]{4}/.test(document.getElementById('number').value))) {
                    window.alert("Phone # missing. Please enter.");
                }
                if (document.getElementById('econfirm').checked) {
                    if (!(/.*@.{3,5}\..+/.test(document.getElementById('email').value))) {
                        window.alert("Email missing. Please enter.");
                    }
                }
            }
        </script>
    </body>
</html>