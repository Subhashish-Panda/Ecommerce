<?php
//Making connection to database and starting session on this page.
require "Includes/common.php";

//If session variable is set,that means logged in users.
//Then,Proceed to products page since no need of signup.
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
        <title>Signup page</title>
        <link rel="stylesheet" type="text/css" href="css2.css">
        <style>
            footer{
            padding: 10px 0;
            background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            }
            .style_signup
            {
            background: url(images/ecom_signup1.jpg) no-repeat center;
            }
            .row_style{
            margin-top: 80px;
            }
            .style_form{
                background-color: rgba(0,0,0,0)!important;
                border-color:rgba(0,0,0,0)!important; 
            }
            .form-control{
               background-color: rgba(0,0,0,0)!important; 
            }
            @media(min-height: 750px){
                footer{
                    position: fixed;
                }
                .style_signup{
                 min-height: 800px !important;
                }
            }
            @media(min-height: 1000px){
                 .style_signup{
                 min-height: 1200px !important;
                }   
            }
            @media(min-height: 1200px){
                 .style_signup{
                 min-height: 1500px !important;
                }   
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!--Addition of navigation bar of our webpage-->
         <?php
         include 'Includes/header.php';
         ?>
        <!--Creation of sign up form-->
        <div class="container-fluid style_signup" style="min-height:600px;">
           <div class="row row_style">
               <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                   <div class="panel panel-default style_form">
                    <div class="panel-heading" style="text-align: center;background-color:rgba(0,0,0,0);">
                    <h3>Sign Up</h3>
                    </div>
                    <div class="panel-body">
                    <form method="POST" action="signup_script.php">
                       <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Your name" class="form-control" pattern="[a-zA-Z ]+" required>
                        <?php if(isset($_GET['name_error'])){$error=$_GET['name_error'];echo "<script>alert('$error')</script>";}?>
                       </div>
                       <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Your email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        <?php if(isset($_GET['email_error'])){$error=$_GET['email_error'];echo "<script>alert('$error')</script>";}?>
                       </div>
                       <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Your password" class="form-control" pattern=".{9,}" required>
                        <?php if(isset($_GET['password_error'])){$error=$_GET['password_error'];echo "<script>alert('$error')</script>";}?>
                       </div>
                       <div class="form-group">
                        <label>Contact</label>
                        <input type="tel" name="contact" placeholder="Your contact" class="form-control" pattern=".{10}" required>
                        <?php if(isset($_GET['contact_error'])){$error=$_GET['contact_error'];echo "<script>alert('$error')</script>";}?>
                       </div>
                       <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" placeholder="Your city" class="form-control" pattern="[a-zA-Z ]+"  required>
                        <?php if(isset($_GET['city_error'])){$error=$_GET['city_error'];echo "<script>alert('$error')</script>";}?>
                       </div>
                       <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Your address" class="form-control" required>
                        <?php if(isset($_GET['address_error'])){$error=$_GET['address_error'];echo "<script>alert('$error')</script>";}?>
                       </div>
                       <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-danger btn-block">Signup</button>
                        </div>
                        </div>
                       </div>
                      </div>
                   </form>
               </div>
           </div>
        </div>
      </div>
    </div>
        <!--Adding footer to the page-->
        <?php
        include 'footer.php';
        ?>
   </body>
</html>
