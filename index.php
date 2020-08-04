<?php if(isset($_GET['pswd_msg'])){$msg=$_GET['pswd_msg'];echo "<script>alert('$msg')</script>";}?>
<?php
//Making connection to database and starting session on this page.
require "Includes/common.php";
//If user is a logged in user,then redirect to products page.
if (isset($_SESSION['email']))
{
header('location: products.php');
}
?>

<!DOCTYPE html>

<html>
    <head>
        <!--Linking necessary files of bootstrap-->
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css2.css">
        <title>Lifestyle store</title>
        <style>
            footer{
            padding: 10px 0;
            background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            }
            @media(min-height: 1100px)
            {
                #banner_image
                {
                    background: url(images/bg1.jpg) no-repeat center;
                    min-height: 1500px;
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
        <!--Addition of background image in index page-->
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h2>We sell lifestyle.</h2>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                </center>
            </div>
        </div>
        <!--Adding footer to the page-->
        <?php
        include 'footer.php';
        ?>
   </body>
</html>