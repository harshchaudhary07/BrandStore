<?php
require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  // POST , value do not appear in URL and more secure
  // real_escape_string function escapes special character in a string for use in an SQL Query
  $name = $_POST['name']; 
  $name = mysqli_real_escape_string($con, $name); 

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password); //security function md5 

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  //backend validations
  
  $regex_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'"; // selecting required data from users table to check if email input already present or not
  $result = mysqli_query($con, $query)or die($mysqli_error($con)); //query runs in the database
  $num = mysqli_num_rows($result); // count no.of rows already present in query
  
  if ($num != 0) { // num !=0 , means there already exist some user with this emal in the database
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    // inserting user details into users table in the database
    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con)); //query runs in the database
    $user_id = mysqli_insert_id($con); //returns the id (generated with AUTO_INCREMENT) from the last query.
    $_SESSION['email'] = $email; //session varaiable initialised
    $_SESSION['user_id'] = $user_id; //session varaiable initialised
    header('location: products.php'); // redirecting to products page
  }
?>

