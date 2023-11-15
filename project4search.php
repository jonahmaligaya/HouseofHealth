<?php
    session_start();
    $savedid=$_SESSION['id'];
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
            #titlemain {
                text-align: center;
                font-size: 20px;
                font-family: courier;
                border-radius: 12px;
                border-style: solid;
                border-color: white;
                background-color: rgba(255,255,255,0.5);
                background-blend-mode: overlay;
                color: black;
                margin: 0 auto;
                max-width: 400px;
            }
            #megatable {
                background-color: lightgray;
                color: black;
                font-size: 13px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                border-color: white;
                border-style: solid;
                border-width: thick;
                margin: 0 auto;
            }
            td {
                border-color: white;
                border-style: solid;
                border-width: thin;
                text-align: center;
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
        <br>
        <p id="titlemain"><b>House of Health</b></p><br>
        <table id="megatable">
            <tr>
                <td>Receptionist First Name</td>
                <td>Receptionist Last Name</td>
                <td>Receptionist Password</td>
                <td>Receptionist ID</td>
                <td>Receptionist Phone</td>
                <td>Receptionist Email</td>
                <td>Patient First Name</td>
                <td>Patient Last Name</td>
                <td>Patient ID</td>
                <td>Patient DOB</td>
                <td>Patient Age</td>
                <td>Patient Address and Phone</td>
                <td>Shots</td>
                <td>Illness</td>
                <td>Appointment Date</td>
                <td>Appointment Type</td>
                <td>Procedure Date</td>
                <td>Procedure Type</td>
                <td>Doctor's Name</td>
                <td>Doctor ID</td>
            </tr>
            
            <?php
                $queryselect = "SELECT * FROM `Mega Table` WHERE `Receptionist ID`=$savedid";
                $resultselect = mysqli_query($con, $queryselect) or die(mysqli_error());
                while ($row = mysqli_fetch_assoc($resultselect)) {
            ?>
            <tr>
                <td><?php echo $row['Receptionist First Name']; ?></td>
                <td><?php echo $row['Receptionist Last Name']; ?></td>
                <td><?php echo $row['Receptionist Password']; ?></td>
                <td><?php echo $row['Receptionist ID']; ?></td>
                <td><?php echo $row['Receptionist Phone']; ?></td>
                <td><?php echo $row['Receptionist Email']; ?></td>
                <td><?php echo $row['Patient First Name']; ?></td>
                <td><?php echo $row['Patient Last Name']; ?></td>
                <td><?php echo $row['Patient ID']; ?></td>
                <td><?php echo $row['Patient DOB']; ?></td>
                <td><?php echo $row['Patient Age']; ?></td>
                <td><?php echo $row['Patient Address and Phone']; ?></td>
                <td><?php echo $row['Shots']; ?></td>
                <td><?php echo $row['Illness']; ?></td>
                <td><?php echo $row['Appointment Date']; ?></td>
                <td><?php echo $row['Appointment Type']; ?></td>
                <td><?php echo $row['Procedure Date']; ?></td>
                <td><?php echo $row['Procedure Type']; ?></td>
                <td><?php echo $row['Doctor\'s Name']; ?></td>
                <td><?php echo $row['Doctor ID']; ?></td>
            </tr>
            <?php
                }
                mysqli_free_result($resultselect);
            ?>
        </table>
        <script type="text/javascript">
        </script>
    </body>
</html>