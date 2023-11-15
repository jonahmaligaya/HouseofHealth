<?php
    session_start();
    $_SESSION['appid'] = rand(0,9999);
    $_SESSION['appdate'] = $_POST['appdate'];
    $_SESSION['apptype'] = $_POST['apptype'];
    echo "<script> let jsappid='$_SESSION[appid]'; </script>";
?>
<?php
    //Connect
    require_once('project4db.php');

    //Doctor ID Verification
    $doctorid = $_POST["doctorid"];
    $querydoctorid="SELECT `Doctor ID` FROM `Mega Table`";
    $resultdoctorid = mysqli_query($con,$querydoctorid);
    while($row = mysqli_fetch_array($resultdoctorid)) {
        $doctorids[] = $row['Doctor ID'];
    }
    if (!in_array($doctorid, $doctorids)) {
        echo '<script>window.alert("Doctor ID not found. Please re-enter."); location.href="project4bookapp.php";</script>';
    }
    $querybookapp = "UPDATE `Mega Table` SET `Appointment Date`='$_POST[appdate]', `Appointment Type`='$_POST[apptype]' WHERE `Patient ID`='$_SESSION[patientid]';";
    echo '<script>
        if (!window.confirm("You are about to REQUEST an appointment. Are you sure you want to do this?")) {
            location.href="project4bookapp.php";
        }
    </script>';
    if ($_POST['apptype'] == "Ill Visit" || $_POST['apptype'] == "Physical") {
        echo '<script>window.alert("Appointment made. Your appointment ID is " + jsappid + ". Proceeding to schedule a procedure."); location.href="project4bookpro.php";</script>';
    }
    if (mysqli_query($con, $querybookapp)) {
        echo '<script>
            window.alert("Appointment made. Your appointment ID is " + jsappid + ".");
            location.href="project4search.php";
        </script>';
    }
?>