<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) { // $_SEESSION i.e return TRUE means it will not enter the loop cause it make !TRUE= FALSE
// means only logged in user can visit it, logged out user will enter here
    header('location: index.php'); // redirecting to index page
}
?>
<!DOCTYPE html>
<!--
Cart Page, E-commerce website, Bootstrap/html/css/phpmyadmin, Assignment
-->
<html>
    <head>
        <title> Cart | Brand Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS ,using absolute online link -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery library ,using absolute online link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript, using absolute online link -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="container-fluid" id="content"> 
            <?php include 'includes/header.php'; ?>
        
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-stripped">
                       <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];//Get user id from the session.
                        //Select all the items from users_items of particular user. Use inner join to get the product details of the items added to cart by the user.
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) { //means some  data is selected , $result show 1 or more items
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) { //fetches a row as an associative array
                                    $sum+= $row["Price"]; //adding price of items when loop iterates
                                    $id = $row["id"] . ", "; //adding id of items to the table
                                    // displaying items added to cart and showing remove link
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", "); //RTRIM() function removes trailing spaces from a string.
                                //displaying total sum 
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } 
                        else { // if no items found then this works
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div> <!-- table closes-->
        </div>
        <!-- footer of web page-->
        <?php include("includes/footer.php"); ?>
        
    </body>
</html>
