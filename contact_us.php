<?php

require ("includes/common.php");
?>
<!DOCTYPE html>
<!--
Contact us, E-commerce website, Bootstrap/html/css/phpmyadmin, Assignment
-->
<html>
    <head>
        <title>Contact US |Brand Store</title>
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
        
        <?php include 'includes/header.php';?>

        <div class="container">
            <div class="row">
                <div class ="jumbotron">
                    <div class="col-sm-9">
                    
                        <h1 class="title" style="color: dodgerblue">LIVE SUPPORT</h1>
                        <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
                        <div>
                            <p>Welcome to Brand Store, your number one source for all life-style products like shirts, watches, camaras and much more.
                            We're dedicated to giving you the very best of product quality, with a focus on dependability, customer service and uniqueness.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img align="right" src="./img/contact.png" alt="contact us" >
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h2>Get In Touch</h2>
                        </div>
                        <div class="panel-body">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="contact_script.php">

                            <div class="form-group col-sm-9">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
                            </div>

                            <div class="form-group col-sm-9">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                } ?>
                            </div>

                            <div class="form-group col-sm-9">
                                <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
                            </div>

                            <div class="form-group col-sm-7">
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                        </div> 
                    </div>
            </div>
	    		
            <div class="col-sm-3">
                <div class="contact-info">
                    <h2 class="title" style="color: dodgerblue">Contact Info</h2>
                        <address>
                                     <p>Brand Store</p>
                                     <p>Vasant Kunj</p>
                                     <p> Delhi, India</p>
                                     <p>Phone:(00) 987 654 3210</p>
                                     <p>Fax:(000) 77 88 00 11 22</p>
                                     <p>Email: info@lifestylestore.com</p>
                        </address>

                    <div><h2 class="title">Follow Us On&#58;</h2>
                        <h4><a href="#" ><span class="fa fa-facebook">  Facebook</span></a></h4>
                        <h4><a href="#"><span  class="fa fa-linkedin">  LinkedIn</span></a></h4>
                        <h4><a href="#"><span class="fa fa-instagram">  Instagram</span></a></h4>
                    </div>
                </div>
            </div>
    </div>
</div>
        
        <?php include("includes/footer.php"); ?>
    </body>
</htlm>
        
