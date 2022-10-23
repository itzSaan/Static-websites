<?php 
// Database connection credentials
$hostname = 'localhost'; 
$database = 'ct_sangram'; 
$db_user = 'root'; 
$db_pass = ''; 


$connection = mysqli_connect("$hostname" , "$db_user" , "$db_pass", "$database");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}    

// print("<br />Successfully connected to database:<strong> ".$database."</strong><br />");
// print("Using host:<strong> ".$hostname."</strong><br />");
// print("As the user:<strong> ".$db_user."</strong><br />");


?>