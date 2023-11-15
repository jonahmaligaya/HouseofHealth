<?php
    //Connect
    session_start();
    require_once('project4db.php');
    $_SESSION['patientfname']=$_POST['patientfname'];
    $_SESSION['patientlname']=$_POST['patientlname'];
    $_SESSION['patientid']=$_POST['patientid'];
    
    //Verification
    $patient = $_POST["patientfname"]." ".$_POST["patientlname"]." ".$_POST["patientid"];
    $querypatient="SELECT CONCAT(`Patient First Name`, ' ', `Patient Last Name`, ' ', `Patient ID`) AS Patient FROM `Mega Table`";
    $resultpatient = mysqli_query($con,$querypatient);
    while($row = mysqli_fetch_array($resultpatient)) {
        $patients[] = $row['Patient'];
    }
    if (in_array($patient, $patients)) {
        echo '<script>window.alert("Patient account already exists."); location.href="project4create.php";</script>';
    }
    $patientidint=(int)$_SESSION['patientid'];
    $idint=(int)$_SESSION['id'];

    $querycreate = "INSERT INTO `Mega Table`(`Receptionist First Name`, `Receptionist Last Name`, `Receptionist Password`, `Receptionist ID`, `Receptionist Phone`, `Receptionist Email`, `Patient First Name`, `Patient Last Name`, `Patient ID`, `Patient DOB`, `Patient Age`, `Patient Address and Phone`, `Shots`, `Illness`, `Appointment Date`, `Appointment Type`, `Procedure Date`, `Procedure Type`, `Doctor's Name`, `Doctor ID`) VALUES ('$_SESSION[fname]','$_SESSION[lname]','$_SESSION[pw]',$idint,'$_SESSION[number]','$_SESSION[email]','$_SESSION[patientfname]','$_SESSION[patientlname]',$patientidint,'',NULL,'','','','','','','','',NULL);";
    if (mysqli_query($con, $querycreate)) {
        echo '<script>
            window.alert("Patient account created.");
            location.href="project4search.php";
        </script>';
    }
?>
