<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname="tsf_bank";

// Create connection
$conn = mysqli_connect($servername, $username, $password);


// Check connection


    $db=mysqli_select_db($conn,$dbname);

?>