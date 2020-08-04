<?php
 include 'Includes/common.php';
 //Fetch the product_id through get attribute passed to this page.
 $pid=$_GET['id'];
 $user_id=$_SESSION['user_id'];
 /*Generate the no.of quantity of this particular product,added to cart.
 $new_query="Select quantity from users_items where user_id='$user_id' and item_id='$pid'";
 $sol_query= mysqli_query($con, $new_query);
 $row= mysqli_fetch_array($sol_query);
 $result=$row['quantity'];
 
 if(!isset($result))
 {
 //Make a query to store the product name,price,status and its quantity purchased.
 $query="Insert into users_items(user_id,item_id,status,quantity) values('$user_id','$pid','Added to cart','1')"; 
 }
 else{
 //Make a query to update this product quantity only.
 $result+=1;
 $query="Update users_items set quantity='$result' where user_id='$user_id' and item_id='$pid'";
 }*/
 $query="Insert into users_items(user_id,item_id,status,quantity) values('$user_id','$pid','Added to cart','1')";
 $pro_query= mysqli_query($con, $query);
 header('location: products.php');
 ?>

