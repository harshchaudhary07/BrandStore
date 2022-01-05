<?php
require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  // POST , value do not appear in URL and more secure
  // real_escape_string function escapes special character in a string for use in an SQL Query
  $name = $_POST['name']; 
  $name = mysqli_real_escape_string($con, $name); 

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  
  $message = $_POST['message'];
  $message = mysqli_real_escape_string($con, $message);
  
  //backend validations
  
  $regex_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
   
  if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: contact_us.php?m1=' . $m);
  } else  {
    // inserting user details into users table in the database
    $query = "INSERT INTO contact(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
    mysqli_query($con, $query) or die(mysqli_error($con)); //query runs in the database
    $user_id = mysqli_insert_id($con); //returns the id (generated with AUTO_INCREMENT) from the last query.
    
    header('location: message_success.php'); // redirecting to products page
  }
