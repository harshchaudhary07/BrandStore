<?php
 require("includes/common.php"); //connection
if (isset($_SESSION['email'])) { // this page is not visited by logged in users
    //if the session is set, redirect the user to products.php page.
    header('location: products.php');
}
?>
<html>
    <head>
        <title>Signup |Brand Store</title>
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
        
        <div class="container-fluid decor_bg" id="content"> 
            <div class="row" > <!-- provide negative margin ,to remove extra padding -->
                <div class="container" >
                    
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3"> <br> <br>
                        <div class="thumbnail">
                            <center><h2 style="color: background;">SIGN UP</h2> </center>
                            <form action="signup_script.php" method="POST" style="color: graytext">
                            <div class="form-group"> <!-- form-group ,for optimum spacing/proper margin, we wrap labels and control -->
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div><!-- form-control, have width=100%, requires= true means compulsory field -->
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail"required = "true" >
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true"  pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true" >
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button> <!-- btn-primary for style-->
                        </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
       <!-- footer of web page-->
        <?php include "includes/footer.php"; ?>      
    </body>
</html>


