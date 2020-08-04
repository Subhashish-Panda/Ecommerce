<?php
require 'Includes/common.php';
if (!isset($_SESSION['email'])){
header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Linking necessary files of bootstrap-->
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
         <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Success page</title>
        <style>
            footer{
            padding: 10px 0;
            background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            }
            @media(min-height: 850px){
                footer{
                    position: fixed;
                }
            }
            tr:hover{
                color:green;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Addition of navigation bar of our webpage and other functionality.-->
        <?php
        include 'Includes/header.php';
        $user_id = $_SESSION["user_id"];
        //Extracting each products that the user has purchased.
        $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        //Changing status of each item to order confirmed(from added to cart) since its now purchased.
        while($row = mysqli_fetch_array($result)){
        $item_id = $row["item_id"];
        $date=date("Y-m-d", time());
        $query_update = "UPDATE users_items SET status = 'Confirmed',pur_date='$date'  WHERE item_id = '$item_id'";            
        $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
        ?>
         <!--Addition of main content to our web page-->
         <div class="container" style="margin-top:90px;margin-bottom:390px;">
         <div class="jumbotron" style="background-color:rgba(135,135,135,1)">
         <h3><b>Your order is confirmed&#9996; Thank you for shopping with us&#128526.</b></h3>
         <hr/>
         <p><a href="products.php" style="text-decoration:none; color: orange;">Click here</a> to purchase any other item.</p>
         </div>
         </div>
         <!--Addition of footer to our web page-->
         <?php
         include 'footer.php';
         ?>
    </body>
</html>
