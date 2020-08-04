<?php
require "Includes/common.php";

//If session variable is set,that means logged in users.
//Then,Proceed to products page since no need of login again.
if (isset($_SESSION['email']))
{
header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Linking necessary bootstrap files-->
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Login Page</title>
        <style>
            .row_style{
                margin-top: 80px;
            }
            .style_form{
                background-color: rgba(0,0,0,0)!important;
                border-color:rgba(0,0,0,0)!important; 
            }
            .style_login{
            background: url(images/ecom_login.jpg) no-repeat center;
            }
            footer{
            padding: 10px 0;
            background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            }
            @media(min-height: 750px){
                footer{
                    position: fixed;
                }
                .style_login{
                 min-height: 800px !important;
                }
            }
            @media(min-height: 1000px){
                 .style_login{
                 min-height: 1200px !important;
                }   
            }
            @media(min-height: 1200px){
                 .style_login{
                 min-height: 1500px !important;
                }   
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Addition of navigation bar of our webpage-->
         <?php
         include 'Includes/header.php';
         ?>         
        <!--Addition of login-form-->
        <div class="container-fluid style_login" style="min-height:700px" >
            <div class="row row_style">
                <div class=" col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default style_form">
                        <div class="panel-heading" style="text-align:center;background-color:rgba(0,0,0,0);">
                        <h3>Login</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="login_submit.php">
                            <div class="form-group">
                                <label style="color:black">Email</label>
                                <input type="email" placeholder="Email" class="form-control" name="email" value="<?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"];}?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            </div>
                            <div class="form-group">
                                <label style="color:black">Password</label>
                                <input type="password" placeholder="Password" class="form-control" name="password" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>" pattern=".{9,}" required>
                            </div>
                            <div class="checkbox">
                                <label style="color: black;font-weight:bolder;"><input type="checkbox" name="remember" checked>Remember me</label>
                            </div>       
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-danger btn-block">Login</button>
                                <div><b><?php if(isset($_GET['login_error'])){$error=$_GET['login_error'];echo "<script>alert('$error')</script>";}?></b></div>
                            </div>
                            </form>
                            <div class="form-group" style="color:black;">
                                <p style="font-weight:bolder;">Don't have an account?<a href="signup.php" style="color:gold">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Adding footer of our page-->
        <?php
        include 'footer.php';
        ?>   

    </body>
</html>


