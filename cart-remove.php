<?php
require 'Includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$query="delete from users_items where user_id='$user_id' AND item_id='$item_id'";
$del_query= mysqli_query($con, $query);
header('location:cart.php');
?>




