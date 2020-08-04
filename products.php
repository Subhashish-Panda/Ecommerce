<?php if(isset($_GET['success_msg'])){$msg=$_GET['success_msg'];echo "<script>alert('$msg')</script>";}//After successful registration occurs from signup page.?>

<?php
//Making connection to the database and starting the session.
require 'Includes/common.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <!--Linking all the necessary bootstrap files-->
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
         <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Products page</title>
        <style>
            footer{
            padding: 10px 0;
            background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Addition of navigation bar of our webpage-->
         <?php
         include 'Includes/header.php';
         include 'Includes/Check-if-added.php';

         ?>
        
        <!--Addition of content to our page-->
        <div class="container-fluid" style="margin-top:90px;">
            <div class="jumbotron" style="text-align:center;">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>
                We have the best cameras,watches,shirts and smartphones for you.
                No need to hunt around, we have all in one place.
                </p>
            </div>
        </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/5.jpg" alt="">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs 36,000.00</p>
                        <!--For logged out users,they can't buy products until they log in-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users,they can buy products-->
                    <?php } 
                        else{
                        //to check whether this particular product is already added to cart or not.
                       //Here the item_id  passed is 1.
                       //Note,in our website now multiple quantities of a particular item is also allowed.
                       if (check_if_added_to_cart(1,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>

                    </div>
                </div>
            </div>
 <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/2.jpg" alt="">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price:Rs 40,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 2.
                       if (check_if_added_to_cart(2,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else
                       {?>
                       <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                        }?>
                    </div>
                    </div>
                </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/3.jpg" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs 45,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 3.
                       if (check_if_added_to_cart(3,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else
                       {?>
                       <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/4.jpg" alt="">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs 50,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 4.
                       if (check_if_added_to_cart(4,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else
                       {?>
                       <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--Adding watches to our page-->
<div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/9.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model#301</h3>
                        <p>Price:Rs 13,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 5.
                       if (check_if_added_to_cart(5,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                    </div>
                </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/10.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model#201</h3>
                        <p>Price:Rs 3,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 6.
                       if (check_if_added_to_cart(6,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/11.jpg" alt="">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs 8,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 7.
                       if (check_if_added_to_cart(7,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/12.jpg" alt="">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price:Rs 18,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 8.
                       if (check_if_added_to_cart(8,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else
                       {?>
                       <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Adding shirts to our web page-->
<div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/8.jpg" alt="">
                    <div style="margin-top:20px;"></div>
                    <div class="caption">
                        <h3>H&AMP;W</h3>
                        <p>Price:Rs 800.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 9.
                       if (check_if_added_to_cart(9,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                    </div>
                </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/6.jpg" alt="">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price:Rs 1,000.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 10.
                       if (check_if_added_to_cart(10,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/13.jpg" alt="">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price:Rs 1,500.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 11.
                       if (check_if_added_to_cart(11,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/14.jpg" alt="">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price:Rs 1,300.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 12.
                       if (check_if_added_to_cart(12,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {                            
                       ?>
                       <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
        </div>
</div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/15.jpg" alt="">
                    <div class="caption">
                        <h3>Redmi Note8</h3>
                        <p>Price:Rs 12,799.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 13.
                       if (check_if_added_to_cart(13,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {                            
                      ?>
                       <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/16.jpg" alt="">
                    <div class="caption">
                        <h3>OnePlus 7T</h3>
                        <p>Price:Rs 34,999.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 14.
                       if (check_if_added_to_cart(14,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {                           
                       ?>
                       <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/17.jpg"  alt="">
                    <div class="caption">
                        <h3>OnePlus 7T pro</h3>
                        <p>Price:Rs 49,999.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 15.
                       if (check_if_added_to_cart(15,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {                       
                       ?>
                       <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/18.jpg"  alt="">
                    <div class="caption">
                        <h3>Samsung Galaxy S10</h3>
                        <p>Price:Rs 49,999.00</p>
                        <!--For logged out users-->
                   <?php if (!isset($_SESSION['email'])) {?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                   Now</a></p>
                        <!--For logged in users-->
                    <?php } 
                        else{
                        //to check whether this particular product is added to cart or not.
                       //Here the item_id is 16.
                       if (check_if_added_to_cart(16,$con)) 
                       {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';}
                       else {
                       ?>
                       <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php } 
                    }?>
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