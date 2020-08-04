<?php
require 'Includes/common.php';
if (!isset($_SESSION['email'])){
header('location: index.php');
}
$id=$_SESSION["user_id"];
$demo="Select name from users where id='$id'";
$demo_res= mysqli_query($con, $demo);
$final_res= mysqli_fetch_array($demo_res);
function fetch_data($con)
{
    $res= [];
    $output='';
    $total=0;
    $uid=$_SESSION["user_id"];
    $query="Select i.name,i.price,ui.quantity,ui.pur_date from users_items ui inner join users u ON u.id=ui.user_id inner join items i on i.pid=ui.item_id where ui.user_id='$uid' and ui.status='Confirmed'";
    $sel_query= mysqli_query($con, $query);
    while($row=mysqli_fetch_array($sel_query))
    {
        $output.= '<tr><td>'.$row["name"].'</td><td>'.$row["price"].'</td><td>'.$row["quantity"].'</td><td>'.$row["pur_date"].'</td></tr>';
        $total+=$row["price"]*$row["quantity"];
    }
    $res[0]=$output;
    $res[1]=$total;
    return $res;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Linking necessary files of bootstrap-->
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
         <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Mypurchases page</title>
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
                color:red;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Addition of navigation bar of our webpage and other functionality.-->
        <?php
        include 'Includes/header.php';
        ?>
         <!--Addition of main content to our web page-->
         <div class="container" style="margin-top:90px;margin-bottom:390px;">
             <div class="table-responsive ">
                 <table class="table table-bordered">
                     <tbody>
                         <tr><th>Item name</th><th>Item price</th><th>Quantity purchased</th><th>Purchased On</th></tr>
                         <?php
                         $rec=[];
                         $rec=fetch_data($con);
                         echo $rec[0];
                         ?>
                     </tbody>   
                 </table>
            </div>    
        </div>
         <!--Addition of footer to our web page-->
         <?php
         include 'footer.php';
         ?>
    </body>
</html>

