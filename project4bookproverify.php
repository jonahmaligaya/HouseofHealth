<?php
    session_start();
    $_SESSION['proid'] = rand(0,9999);
    $_SESSION['prodate'] = $_POST['prodate'];
    $_SESSION['protype'] = $_POST['protype'];
    echo "<script> let jsproid='$_SESSION[proid]'; </script>";
?>
<?php
    //Connect
    require_once('project4db.php');

    //Appointment ID Verification
    if ($_SESSION['appid'] != $_POST['appid']) {
        echo '<script>window.alert("Appointment ID does not exist for this patient. Please check and re-enter."); location.href="project4bookpro.php";</script>';
    }

    $querybookpro = "UPDATE `Mega Table` SET `Procedure Date`='$_POST[prodate]', `Procedure Type`='$_POST[protype]' WHERE `Appointment Date`='$_SESSION[appdate]';";
    echo '<script>
        if (!window.confirm("You are about to REQUEST a procedure. Are you sure you want to do this?")) {
            location.href="project4bookpro.php";
        }
    </script>';
    if (mysqli_query($con, $querybookpro)) {
        echo '<script>
            window.alert("Procedure made. Your procedure ID is " + jsproid + ".");
            location.href="project4search.php";
        </script>';
    }
?>