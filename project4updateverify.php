<?php
    //Connect
    session_start();
    require_once('project4db.php');

    //Patient ID Verification
    $patientid = $_POST["patientid"];
    $querypatientid="SELECT `Patient ID` FROM `Mega Table`";
    $resultpatientid = mysqli_query($con,$querypatientid);
    while($row = mysqli_fetch_array($resultpatientid)) {
        $patientids[] = $row['Patient ID'];
    }
    $_SESSION['patientid'] = $patientid;
    if (!in_array($patientid, $patientids)) {
        echo '<script>window.alert("Patient ID not found. Please re-enter."); location.href="project4update.php";</script>';
    }
    $queryupdate = "UPDATE `Mega Table` SET `Shots`='$_POST[shots]', `Illness`='$_POST[illness]' WHERE `Patient ID`='$_POST[patientid]';";
    echo '<script>
        if (!window.confirm("You are about to UPDATE the shots and illness for the patient. Are you sure you want to do this?")) {
            location.href="project4update.php";
        }
    </script>';
    if (mysqli_query($con, $queryupdate)) {
        echo '<script>window.alert("Shots and illnesses updated."); location.href="project4search.php";</script>';
    }
?>