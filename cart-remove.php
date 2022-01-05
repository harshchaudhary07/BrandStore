<?php

require("includes/common.php"); //connection
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // $_GET takes 'id' value from URL and check if it numeric or not , if above condition true , values enter the loop

    $item_id = $_GET["id"]; //from URL
    $user_id = $_SESSION['user_id'];//from seesion
    
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php"); // redirecting to the cart
}
?>