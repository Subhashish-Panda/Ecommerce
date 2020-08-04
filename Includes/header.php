<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand" style="color:#FF851B">Lifestyle Store</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                             if (isset($_SESSION['email'])){?>
                               <li><a href="about_us.php" style="color:goldenrod"><span class="glyphicon glyphicon-info-sign"></span>About us</a></li>
                               <li><a href="mypurchase.php" style="color:goldenrod"><span class="glyphicon glyphicon glyphicon-check"></span>My purchases</a></li>
                               <li><a href = "cart.php" style="color:goldenrod"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                               <li><a href = "settings.php" style="color:goldenrod"><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
                               <li><a href = "logout.php" style="color:goldenrod"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
                            <?php }
                            else{?>
                            <li><a href="about_us.php" style="color:goldenrod"><span class="glyphicon glyphicon-info-sign"></span>About us</a></li>
                            <li><a href="signup.php" style="color:goldenrod"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                            <li><a href="login.php" style="color:goldenrod"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
</nav>