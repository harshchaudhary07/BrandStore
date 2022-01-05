<?php
require("includes/common.php"); //connection

// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
Login Page, E-commerce website, Bootstrap/html/css/phpmyadmin, Assignment
-->
<html>
    <head>
        <title>Login |Brand Store</title>
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
    <body>
        
        <?php include 'includes/header.php'; ?>
        <!-- Creating Login Form using panel -->
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel"> <br> <br>
             
                    <div class="row"> <!-- provide negative margin ,to remove extra padding -->
                        <div class="col-md-4 col-md-offset-4">
                            <div class="panel panel-primary"> <!-- panel-primary give style to panel and id is for margin on page -->

                                <div class="panel-heading"> <!--adds a heading to the panel -->
                                    <h4> LOGIN </h4>
                                </div>

                                <div class="panel-body"> <!-- for main body content of panel-->
                                    <p class="text-warning"> <!-- text warning for style-->
                                        <i>Login to make a purchase</i>
                                    </p>
                                    <form action="login_submit.php" method="POST">
                                        <div class="form-group" > <!-- form-group ,for optimum spacing/proper margin, we wrap labels and control --> 
                                            <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                        </div> 
                                        <!-- form-control, have width=100%, requires= true means compulsory field -->
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br> <!-- btn-primary for style-->
                                       <?php
                                        if(isset($_GET["error"])){
                                          echo $_GET['error'];
                                        }
                                       ?>
                                    </form><br/>
                                </div>

                                <div class="panel-footer"> <!--adds a footer to the panel -->
                                    <p> Don't have an account? <a href="signup.php">Register </a>
                                    </p>
                                </div>

                            </div> <!-- panel closes -->
                        </div>    
                    </div>
            </div>
        </div>
        
        <!-- footer of web page-->
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>