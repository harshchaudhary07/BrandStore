<?php
 require("includes/common.php"); //connection
 
$email = $_POST['e-mail']; // POST , value do not appear in URL and more secure
$email = mysqli_real_escape_string($con, $email); // real_escape_string function escapes special character in a string for use in an SQL Query

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password); //security function md5 

// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'"; // selecting required data from users table 
$result = mysqli_query($con, $query)or die($mysqli_error($con));//query runs in the database
$num = mysqli_num_rows($result); // count no.of rows already present in query
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) { // num==0 , means no result found for the entered information in the users table in lifestylestore database
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error); // redirecting to login page
} else {  
  $row = mysqli_fetch_array($result); //mysqli_fetch_array function fetches a result row as an associative array, a numeric array or both
  $_SESSION['email'] = $row['email']; //session varaiable initialised
  $_SESSION['user_id'] = $row['id']; //session varaiable initialised
  header('location: products.php'); // redirecting to products page
}

 ?>

