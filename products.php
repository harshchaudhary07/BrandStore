<?php

require ("includes/common.php");
?>
<!DOCTYPE html>
<!--
Products Page, E-commerce website, Bootstrap/html/css/phpmyadmin, Assignment
-->
<html>
    <head>
        <title>Products |Brand Store</title>
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
        
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <div class="container" id="content"> <!-- Content Heading -->
            <div class="jumbotron" id="products-jumbotron"> <!-- jumbotron indicates a big grey box -->
                <h1>
                    Welcome to our Brand Store !
                </h1>
                <p>
                   We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place. 
                </p>
            </div> <hr>
        
            
         <!-- Product Content Body-->
            
            <div class="row text-center" id="cameras"> <!-- Row for Cameras-->
                
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Camera Product -->
                    <div class="thumbnail"><img src="img/5.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Cannon EOS</h3>
                            <p> Price: Rs.36000.00 </p>
                            
                            <?php if (!isset($_SESSION['email'])) {//means user is not logged in ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else { 
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 1
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { // for adding to cart
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Camera Product -->
                    <div class="thumbnail"><img src="img/2.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>NIKON DSLR</h3>
                            <p> Price: Rs.40000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else { 
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 2
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Camera Product -->
                    <div class="thumbnail"><img src="img/3.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Sony DSLR</h3>
                            <p> Price: Rs.50000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else { 
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 3
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Camera Product -->
                    <div class="thumbnail"><img src="img/4.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Olympus DSLR</h3>
                            <p> Price: Rs.80000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else { 
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 4
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            
            </div> <!-- Camera Row Closes-->
        
            <div class="row text-center" id="watches"> <!-- Row for Watches-->
                
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Watch Product -->
                    <div class="thumbnail"><img src="img/9.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Titan Model #301</h3>
                            <p> Price: Rs.13000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 5
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Watch Product -->
                    <div class="thumbnail"><img src="img/10.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Titan Model #201</h3>
                            <p> Price: Rs.3000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 6
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Watch Product -->
                    <div class="thumbnail"><img src="img/11.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>HMT Milan</h3>
                            <p> Price: Rs.8000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 7
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Watch Product -->
                    <div class="thumbnail"><img src="img/4.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Fabur Luba #111</h3>
                            <p> Price: Rs.18000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 8
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            
            </div> <!-- Watch Row Closes-->

            <div class="row text-center" id="shirts"> <!-- Row for Shirts-->
                
                <div class="col-md-3 col-sm-6 home-feature" > <!-- Shirt Product -->
                    <div class="thumbnail"><img src="img/8.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>H&W</h3>
                            <p> Price: Rs.800.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 9
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Shirt Product -->
                    <div class="thumbnail"><img src="img/6.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Luis Phil</h3>
                            <p> Price: Rs.1000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 10
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Shirt Product -->
                    <div class="thumbnail"><img src="img/13.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>John Zok</h3>
                            <p> Price: Rs.1500.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 11
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature"> <!-- Shirt Product -->
                    <div class="thumbnail"><img src="img/14.jpg" alt="Camera image"> 
                        <div class="caption"> 
                            <h3>Jhalsani</h3>
                            <p> Price: Rs.1300.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    // item_id passed in the function as 12
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            
            </div> <!-- Shirt Row Closes-->
            <hr>
        </div><!-- container class,Products Content closes -->
        
         <?php include("includes/footer.php"); ?>
        
    </body>
</html>
