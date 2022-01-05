<?php
require("includes/common.php");// connection

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // $_GET takes 'id' value from URL and check if it numeric or not , if above condition true , values enter the loop
    // is_numeric() function checks whether a variable is a number or a numeric string.
    // This function returns true (1) if the variable is a number or a numeric string, otherwise it returns false/nothing.
    $item_id = $_GET['id']; //from URL
    $user_id = $_SESSION['user_id']; //from seesion
    //inserting user_id and item_id and updating/adding Status of product in user_items table of database
    $query = "INSERT INTO users_items (user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php'); // redirect to products page
}
?>   