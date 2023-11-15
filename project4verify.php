<?php
    //Connect
    session_start();
    require_once('project4db.php');
    
    //First Name Verification
    $fname = $_POST["fname"];
    $queryfname="SELECT `Receptionist First Name` FROM `Mega Table`";
    $resultfname = mysqli_query($con,$queryfname);
    while($row = mysqli_fetch_array($resultfname)) {
        $fnames[] = $row['Receptionist First Name'];
    }
    if (!in_array($fname, $fnames)) {
        echo '<script>window.alert("First name not found. Please re-enter."); location.href="project4login.php";</script>';
    }
    $_SESSION['fname'] = $_POST['fname'];
    
    //Last Name Verification
    $lname = $_POST["lname"];
    $querylname="SELECT `Receptionist Last Name` FROM `Mega Table`";
    $resultlname = mysqli_query($con,$querylname);
    while($row = mysqli_fetch_array($resultlname)) {
        $lnames[] = $row['Receptionist Last Name'];
    }
    if (!in_array($lname, $lnames)) {
        echo '<script>window.alert("Last name not found. Please re-enter."); location.href="project4login.php";</script>';
    }
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['pw'] = $_POST['pw'];

    //ID Number Verification
    $id = $_POST["id"];
    $queryid="SELECT `Receptionist ID` FROM `Mega Table`";
    $resultid = mysqli_query($con,$queryid);
    while($row = mysqli_fetch_array($resultid)) {
        $ids[] = $row['Receptionist ID'];
    }
    if (!in_array($id, $ids)) {
        echo '<script>window.alert("Receptionist ID not found. Please re-enter."); location.href="project4login.php";</script>';
    }
    $_SESSION['id'] = $_POST['id'];

    //Phone Number Verification
    $number = $_POST["number"];
    $querynumber="SELECT `Receptionist Phone` FROM `Mega Table`";
    $resultnumber = mysqli_query($con,$querynumber);
    while($row = mysqli_fetch_array($resultnumber)) {
        $numbers[] = $row['Receptionist Phone'];
    }
    if (!in_array($number, $numbers)) {
        echo '<script>window.alert("Receptionist Phone Number not found. Please re-enter."); location.href="project4login.php";</script>';
    }
    $_SESSION['number'] = $_POST['number'];

    //Email Verification
    if ($_POST['econfirm'] == 'on') {
        $email = $_POST["email"];
        $queryemail="SELECT `Receptionist Email` FROM `Mega Table`";
        $resultemail = mysqli_query($con,$queryemail);
        while($row = mysqli_fetch_array($resultemail)) {
            $emails[] = $row['Receptionist Email'];
        }
        if (!in_array($email, $emails)) {
            echo '<script>window.alert("Receptionist Email not found. Please re-enter."); location.href="project4login.php";</script>';
        }
        $_SESSION['email'] = $_POST['email'];
    }
    $_SESSION['id'] = $id;
    if ($_POST['transaction'] == 'receptionist') {
        echo '<script>location.href="project4search.php";</script>';
    } elseif ($_POST['transaction'] == 'update') {
        echo '<script>location.href="project4update.php";</script>';
    } elseif ($_POST['transaction'] == 'bookapp') {
        echo '<script>location.href="project4patientverification.php";</script>';
    } elseif ($_POST['transaction'] == 'cancelapp') {
        echo '<script>location.href="project4cancelapp.php";</script>';
    } elseif ($_POST['transaction'] == 'bookpro') {
        echo '<script>location.href="project4bookpro.php";</script>';
    } elseif ($_POST['transaction'] == 'cancelpro') {
        echo '<script>location.href="project4cancelpro.php";</script>';
    } elseif ($_POST['transaction'] == 'create') {
        echo '<script>location.href="project4create.php";</script>';
    }
?>
