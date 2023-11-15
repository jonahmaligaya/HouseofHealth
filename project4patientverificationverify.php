<?php
    //Connect
    session_start();
    require_once('project4db.php');

    //Patient First Name Verification
    $patientfname = $_POST["patientfname"];
    $querypatientfname="SELECT `Patient First Name` FROM `Mega Table`";
    $resultpatientfname = mysqli_query($con,$querypatientfname);
    while($row = mysqli_fetch_array($resultpatientfname)) {
        $patientfnames[] = $row['Patient First Name'];
    }
    if (!in_array($patientfname, $patientfnames)) {
        echo '<script>window.alert("Patient NOT found. You will be redirected to create an account for a patient."); location.href="project4create.php";</script>';
    }

    //Patient Last Name Verification
    $patientlname = $_POST["patientlname"];
    $querypatientlname="SELECT `Patient Last Name` FROM `Mega Table`";
    $resultpatientlname = mysqli_query($con,$querypatientlname);
    while($row = mysqli_fetch_array($resultpatientlname)) {
        $patientlnames[] = $row['Patient Last Name'];
    }
    if (!in_array($patientlname, $patientlnames)) {
        echo '<script>window.alert("Patient NOT found. You will be redirected to create an account for a patient."); location.href="project4create.php";</script>';
    }

    //Patient ID Verification
    $patientid = $_POST["patientid"];
    $querypatientid="SELECT `Patient ID` FROM `Mega Table`";
    $resultpatientid = mysqli_query($con,$querypatientid);
    while($row = mysqli_fetch_array($resultpatientid)) {
        $patientids[] = $row['Patient ID'];
    }
    if (!in_array($patientid, $patientids)) {
        echo '<script>window.alert("Patient NOT found. You will be redirected to create an account for a patient."); location.href="project4create.php";</script>';
    }
    $_SESSION['patientid'] = $patientid;
    echo '<script>location.href="project4bookapp.php"</script>';
?>