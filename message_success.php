<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--
message Success Page, E-commerce website, Bootstrap/html/css/phpmyadmin, Assignment
-->
<html>
    <head>
        <title>Message Success |Brand Store</title>
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
        
        <?php include 'includes/header.php'; ?>
        
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your Message sent Successfully. Thank you for Contacting us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase awesome Lifestyle Products.</p>
                </div>
            </div>
        </div>
        
        <!-- footer of web page-->
            <?php include("includes/footer.php");?>
        
    </body>
</html>

