<?php
//Making connection to database and starting the session.
require "Includes/common.php";

//Defining required input variables and set to empty values.
$email=$password=$password_temp="";
//Retreiving values from form input fields.
//Note:Before retreiving values,any kind of form-injection is also checked by test_input function.
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$email=test_input($con,$_POST["email"]);
$password_temp=test_input($con,$_POST["password"]);
}
$password= md5($password_temp);
//Performing all possible security measures in test_input function to prevent form injection in backend.
function test_input($con,$data)
{
$data=trim($data);
$data= stripslashes($data);
$data= mysqli_real_escape_string($con, $data);
$data= htmlspecialchars($data);
return $data;
}
//Fetching the authenticity of user trying to log-in.
$query="Select id,email from users where email='$email' AND password='$password'";
$query_result= mysqli_query($con, $query);
$no_of_rows= mysqli_num_rows($query_result);

//If number of rows is 0,that means either incorrect credentials or user is not registered.
if($no_of_rows==0)
{ 
echo ("<script>location.href='login.php?login_error=Enter correct credentials'</script>");
}
//else
else
{
$row= mysqli_fetch_array($query_result);
//Fetching the email and id of the logged-in user.
$res_email=$row['email'];
$res_id=$row['id'];
//Setting the session variables to be used in other webpages.
$_SESSION['email']=$res_email;
$_SESSION['user_id']=$res_id;
//Use cookie variables for remember me utility.
if(!empty($_POST["remember"]))
{
setcookie("email",$res_email, time()+1800);
setcookie("password",$password_temp, time()+1800);        
}
else{
setcookie("email","",time()+300);
setcookie("password","",time()+300);    
}
header('location: products.php');
}
?>
