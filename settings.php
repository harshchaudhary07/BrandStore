<?php
require_once("includes/common.php"); //connection
if (!isset($_SESSION['email'])) { //if user not logged in
    header('location: index.php');//redirect to index page
}
?>

<!DOCTYPE html>
<!--
Setting Page, E-commerce website, Bootstrap/html/css/phpmyadmin, Assignment
-->
<html>
    <head>
        <title>Settings |Brand Store</title>
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
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="setting_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        echo "<br><br><b class='red'>";
                        if(isset($_GET["error"])){
                                          echo $_GET['error'];
                                        } "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- footer of web page-->
        <?php include("includes/footer.php"); ?>
        
        
    </body>
</html>
