<?php
require "includes/common.php"; //connection

if (isset($_SESSION['email'])) { //Index page can be visited by logged out users only. therefore redirect them to products.php
 header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
Index Page, E-commerce website, Bootstrap/html/css/phpmyadmin, Assignment
-->
<html>
    <head>
        <title>Welcome | Brand Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS ,using absolute online link -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="css/style.css" rel="stylesheet">

        <!-- jQuery library ,using absolute online link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript, using absolute online link -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
    </head>
    <body style="padding-top: 50px;">
        <!-- Header-->
        <?php include 'includes/header.php'; ?>
        
        <div id="content">
            <div id="banner_image"> <!-- adding background image and style using id-->
                <div class="container">
                    <center>
                    <div id="banner_content">
                        <h1>
                                We Sell Lifestyle
                            </h1>
                            <p>
                                Flat 40% OFF on Premium brands
                            </p> <br/>
                            <a href="products.php" class="btn btn-danger btn-lg active" title="Shop Now">
                            Shop Now </a>
                    </div> 
                    </center>
                </div>
            </div>
            <!-- banner image end-->
            
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/7.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/8.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>  <!--Item categories listing end-->
            
                <div class="row text-center" id="item_list"> <!-- about us and contact us -->
                    <div class="col-sm-6">
                        <a href="about_us.php" >
                            <div class="thumbnail">
                                <img src="./img/pic4.jpg" alt="about us">
                                <div class="caption">
                                    <h3>About us</h3>
                                  
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="contact_us.php" >
                            <div class="thumbnail">
                                <img src="./img/pic6.jpg" alt="contact us">
                                <div class="caption">
                                    <h3>Contact Us</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>

                    
                </div> 
                
            </div>
           
        </div>
        
           
        <!-- footer of web page-->
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>
