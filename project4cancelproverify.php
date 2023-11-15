<?php
    //Connect
    session_start();
    require_once('project4db.php');

    if ($_SESSION['proid'] != $_POST['proid']) {
        echo '<script>window.alert("Procedure ID does not exist for this patient. Please check and re-enter."); location.href="project4cancelpro.php";</script>';
    }
    $querycancelpro = "UPDATE `Mega Table` SET `Procedure Date`='', `Procedure Type`='' WHERE `Appointment Date`='$_SESSION[appdate]';";
    echo '<script>
        if (!window.confirm("You are about to CANCEL an procedure. Are you sure you want to do this?")) {
            location.href="project4cancelpro.php";
        }
    </script>';
    if (mysqli_query($con, $querycancelpro)) {
        echo '<script>
            window.alert("Procedure cancelled.");
            location.href="project4search.php";
        </script>';
    }
?>