<!-- 
HTML , CSS, BOOTSTRAP, MYSQLi , PHPMYADMIN
Header of web page
As navbar is included in all the web pages, we will add this code in all web pages using 
include statement.
-->
<div class="navbar navbar-inverse navbar-fixed-top"> <!-- NAVBAR - Black with fixed position at top-->
    <div class="container"> <!-- provide fixed width container -->
        <div class="navbar-header"> <!-- used to insert website logo or to add website name-->
            <!-- here Button will have pages link when screen size reduces/collapse-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- data target,#myNavbar is unique ID for collapse class of links-->
                <span class="icon-bar"></span> <!-- button design tags, for 3 straight line or bar -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Brand Store</a>
            <!-- class navbar-brand used for brand/logo,company, product, or project name. it automatically style it to fit in-->
        </div> <!-- navbar header class closes -->
        
        <div class="collapse navbar-collapse" id="myNavbar">
        <!--div link various pages to create navigation links, class helps to make it responsive and collapse, id link it to button while collapsing -->
            <!--collapse navbar-collapse for grouping and hiding navbar contents by a parent breakpoint. -->
            <ul class="nav navbar-nav navbar-right">
            <!-- navbar-right for right side position, navbar-nav for a full-height and lightweight navigation (including support for dropdowns).-->
                <?php
                if (isset($_SESSION['email'])) { // if isset($_SESSION['email']) is TRUE, 
                // Then the user is logged in. Therefore cart,settings and logout links will be shown
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else { // if isset($_SESSION['email']) is FALSE above,
                //that means session is not set, then sign up and login links will be showed
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about_us.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                    <li><a href="contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>

                        <?php
                    }
                    ?>
            </ul>
        </div>
        
    </div>
</div> <!-- navbar closes --> 

