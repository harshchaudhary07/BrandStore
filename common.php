<?php
//common file for establishing connection to database
$con = mysqli_connect("localhost", "root", "", "lifestylestore")
        or die($mysqli_error($con));
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
