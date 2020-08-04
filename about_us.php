<?php
//Making connection to the database and starting the session.
require "Includes/common.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Linking necessary bootstrap files-->
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <!--Title of the webpage-->
        <title>About us page</title>
        
        <!--Required styling for this page.-->
        <style>
            .row_style{
                margin-top: 80px;
            }
            footer{
            padding: 10px 0;
            background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            }
            .style_me
            {
            background-color: black;
            }
            @media(min-height: 750px){
                footer{
                    position: fixed;
                }
                .style_me{
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
        
        <!--Addition of required content to about_us page-->
        <div class="container-fluid style_me" style="min-height:650px;">
            <div class="row row_style">
                    <div class="col-sm-6 text-dark" style="font-family:Times New Roman;font-size: 18px;color:lightseagreen;">
                        <h3><u>Who are we?</u></h3>
                        Welcome to Lifestyle store, your number one source for all things.We're dedicated to giving you the very best of <b>[shirts,watches,cameras and smartphones]</b> with a focus on <i>branded products,fast-delivery and reasonable pricing</i>.<br><br>
                        Founded in 2020 by Subhashish Panda,Lifestyle store has come a long way from its beginnings in Odisha. When Subhashish Panda first started out, his passion for "setting up the perfect lifestyle" drove him to quit day job, do tons of research, etc. so that 
                        Lifestyle store can offer you- <b>The world's most stylish products for a perfect lifestyle</b>.We now serve customers all over India and are thrilled that we're able to turn our passion into our own website.
                        We hope you enjoy our products as much as we enjoy offering them to you.If you have any questions or comments, please don't hesitate to contact us.
                        <p>
                        <h3><u>Contact us:</u></h3>
                        <b><u>Email</u></b><br>
                        subhashish.panda16@gmail.com
                        <br>
                        <b><u>Mobile</u></b><br>
                        8917230657
                        </p>
                    </div>
                    <div class="col-sm-6 text-dark" style="font-family:Times New Roman;font-size: 18px;color:lightseagreen;">
                        <h3><u>Why choose us?</u></h3>
                    <p>We provide you with a predominant way to choose and shop all those products that you need for your desirable Lifestyle.
                    <b>With us,your style never fades!</b></p>
                    </div>
            </div>
        </div>
        
        <!--Addition of footer to our webpage-->
        <?php
        include 'footer.php';
        ?>
    </body>
</html>

