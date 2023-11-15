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
            #navui {
                padding: 0;
                margin: 0;
                top: 0;
                left: 0;
                position: fixed;
                background-color: black;
                list-style-type: none;
                width: 100%;
            }
            .navbuttons {
                border: none;
                background: none;
                padding: 0;
                font-family: Arial, Helvetica, sans-serif;
                color: white;
                margin-right: 29px;
            }
            .navbuttons:hover {
                color: gray;
            }
        </style>
    </head>
    <body>
        <nav id="navui">
            <a href="project4login.php"><button class="navbuttons">Home</button></a>
            <a href="project4search.php"><button class="navbuttons">Search a Receptionist's Accounts</button></a>
            <a href="project4update.php"><button class="navbuttons">Update a Patient Record</button></a>
            <a href="project4patientverification.php"><button class="navbuttons">Book a Patient's Appointment</button></a>
            <a href="project4cancelapp.php"><button class="navbuttons">Cancel a Patient's Appointment</button></a>
            <a href="project4bookpro.php"><button class="navbuttons">Book a Patient's Procedure</button></a>
            <a href="project4cancelpro.php"><button class="navbuttons">Cancel a Patient's Procedures</button></a>
            <a href="project4create.php"><button class="navbuttons">Create a New Patient Account</button></a>
        </nav>
        <form id="updateform" method="POST" action="project4patientverificationverify.php">
            <p id="title"><b>House of Health: Patient Verification</b></p>
            <label for="patientfname" class="labels">Patient's First Name:</label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="text" name="patientfname" id="patientfname" placeholder="Example: Rodrick">
            <label for="patientlname" class="labels">Patient's Last Name:</label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="text" name="patientlname" id="patientlname" placeholder="Example: Heffley">
            <label for="patientid" class="labels">Patient's ID: </label>
            <label class="rqlabel">REQUIRED</label>
            <input class="text" type="text" name="patientid" id="patientid" placeholder="Example: 5">
            <button class="buttons" type="submit" name="submit" id="submit">Submit</button><br>
        </form>
    </body>
</html>
