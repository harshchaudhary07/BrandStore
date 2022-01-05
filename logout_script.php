<?php
session_start();
if (!isset($_SESSION['email'])) { // cheching logged IN or Not
    header('location: login.php');
}
session_destroy();// destroying session
header('location: index.php'); // redirecting to index
?>
