<?php
    //Connect
    session_start();
    require_once('project4db.php');

    if ($_SESSION['appid'] != $_POST['appid']) {
        echo '<script>window.alert("Appointment ID does not exist for this patient. Please check and re-enter."); location.href="project4cancelapp.php";</script>';
    }
    $querycancelapp = "UPDATE `Mega Table` SET `Appointment Date`='', `Appointment Type`='', `Procedure Date`='', `Procedure Type`='' WHERE `Appointment Date`='$_SESSION[appdate]';";
    echo '<script>
        if (!window.confirm("You are about to CANCEL an appointment. If this is a pre-procedural appointment, it will cancel your procedures too. Are you sure you want to do this?")) {
            location.href="project4cancelapp.php";
        }
    </script>';
    if (mysqli_query($con, $querycancelapp)) {
        echo '<script>
            window.alert("Appointment \(and procedures\) cancelled.");
            location.href="project4search.php";
        </script>';
    }
?>