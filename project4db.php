<?php
$servername = "sql1.njit.edu";
$username = "jsm34";
$password = "MyDatabasePassword0&";
$dbname = "jsm34";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>