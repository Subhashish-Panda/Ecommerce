<?php 
include 'Includes/common.php';
//if logged-out user,then first login.
if(!isset($_SESSION['email']))
{
header('location:login.php');
}
$page= htmlspecialchars($_SERVER["PHP_SELF"]);
//Performing all possible security measures in test_input function to prevent form injection in backend.
function test_input($con,$data){
$data=trim($data);
$data= stripslashes($data);
$data= mysqli_real_escape_string($con, $data);
$data= htmlspecialchars($data);
return $data;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Linking necessary files of bootstrap-->
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Cart page</title>
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
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     <!--Addition of navigation bar to our page-->
        <?php
         include 'Includes/header.php';
         ?>
    <!--Addition of main content of our page-->
     <div class="container-fluid" style="margin-top: 70px; margin-bottom: 380px;min-height:600px;">
     <div class="row">
     <?php
     $user_id=$_SESSION['user_id'];
     $query="Select * from users_items where user_id='$user_id' and status='Added to cart'";
     $res_query= mysqli_query($con, $query);
     $num_rows= mysqli_num_rows($res_query);
     //$num_rows greater than 0 means user has purchased certain items/i.e the items added to cart.
     if($num_rows>0) { ?>
            <div class=" col-xs-12 col-sm-offset-3 col-sm-6 ">
            <div class="table-responsive">
            <table class="table">
               <tbody>
                   <tr><th>Item Number </th> <th>Item Name</th> <th>Price </th> <th>Quantity</th> <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>
            <?php
            $sum=0;
            $id=0;
            $query="Select i.pid,i.name,i.price,ui.quantity from users_items ui inner join users u ON u.id=ui.user_id inner join items i on i.pid=ui.item_id where ui.user_id='$user_id' and ui.status='Added to cart'";
            $res_query= mysqli_query($con, $query);
            while($row= mysqli_fetch_array($res_query))
            {
            $cost=$row['price']*$row['quantity'];
            $id=$row['pid'];
            //Item Number-Item Name-Price -certain spaces-format.
            echo "<tr><td>". "#" .$row['pid']. "</td><td>". $row['name'] ."</td><td>Rs " . $row['price']."<b>x</b>".$row['quantity'] ."</td><td>" ."<form method=POST action=$page><select name=item_qua$id required><option value=1>1</option><option value=2>2</option><option value=3>3</option></select><button class=btn-info type=submit name=Submit$id>Add</button></form>" ."</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
            if(isset($_POST["Submit$id"]))
            {
            $q= test_input($con,$_POST["item_qua$id"]); 
            if($q==1||$q==2||$q==3)
            {
            $up_query="Update users_items set quantity='$q' where user_id='$user_id' and item_id='$id'";
            mysqli_query($con, $up_query);$cost=$row['price']*$q;
            header('location:cart.php');
            }
            else
            {
            echo "<script>alert('Enter valid quantity')</script>";
             }
            }            
            $sum+=$cost;
            }
            echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Total</td><td><b>Rs</b> " . $sum . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a href='success.php' class='btn btn-success btn-block'><b>Confirm Order</b></a></td></tr>";
            ?>
            </tbody>
        <?php 
     }
            else
            {
            echo "<script>alert('Add items to cart first')</script>";
            echo "<script>location.href='products.php'</script>";
            }
            ?>
            </table>
            </div>
            </div>
     </div>
     </div>
     <!--Addition of footer to our page-->
     <?php
        include 'footer.php';
        ?>
    </body>
</html>


