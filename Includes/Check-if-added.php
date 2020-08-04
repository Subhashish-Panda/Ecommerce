<?php
function check_if_added_to_cart($item_id,$con)
{
    //Getting the user id if set.
    $user_id=$_SESSION['user_id'];
    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and 
status='Added to cart'";
    $query_res= mysqli_query($con, $query);
    $rows= mysqli_num_rows($query_res);
    //If no.of rows is >=1 then [multiple quantities] of same product purchased.
    if($rows>=1)
    {
        return 1;
    }
    //Else this product isn't purchased.
    else
    {
        return 0;
    }
}
?>
