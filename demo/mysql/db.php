<?php
$connection = mysqli_connect('localhost','root','','trial');
    if($connection){
        echo "Connected";
    } else{
        die("Database connection failed.");
    }
?>