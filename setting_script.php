<?php

// This page updates the user password
require("includes/common.php");
if (!isset($_SESSION['email'])) { //to check if user is logged in
    // if user is logged out , redirect to index
    header('location: index.php');
}
// POST , value do not appear in URL and more secure
// real_escape_string function escapes special character in a string for use in an SQL Query
// MD5 encrypt the password
$old_pass = $_POST['old-password']; //old password
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['password'];//new password
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1']; //retype password
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

//Use select query to fetch the password stored in the database.
$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con)); //running query
$row = mysqli_fetch_array($result);////fetches a row as an associative array
$orig_pass = $row['password'];//original password 

if ($new_pass != $new_pass1) { //checking new password = re-type new password
    $error_password = header('location: settings.php?error=The two passwords don\'t match'); // error
} else {
    if ($old_pass == $orig_pass) { // old password enter = password in database
        // query for updating password in database
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con)); // running query
        header('location: settings.php?error=Password Updated'); // password updated
    } else{
        header('location: settings.php?error=Wrong Old Password'); //wrong old password error
    }
}
?>