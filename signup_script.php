<?php
//Making connection to database and starting the session.
require "Includes/common.php";

//flag for checking wheather all field are properly validated.
$count=0;

//Defining required input variables and set to empty values.
$name=$email=$password=$contact=$city=$address="";
//Retreiving values from form input fields.
//Note:Before retreiving values,any kind of form-injection is also checked by test_input function.
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=test_input($con,$_POST["name"]);
$email=test_input($con,$_POST["email"]);
$password=test_input($con,$_POST["password"]);
$contact=test_input($con,$_POST["contact"]);
$city=test_input($con,$_POST["city"]);
$address=test_input($con,$_POST["address"]);
}

//Performing all possible security measures in test_input function to prevent form injection in backend.
function test_input($con,$data)
{
$data=trim($data);
$data= stripslashes($data);
$data= mysqli_real_escape_string($con, $data);
$data= htmlspecialchars($data);
return $data;
}



//Required patterns of important input fields for backend validation.
$pat_name="/^[a-zA-Z ]+$/";
$pat_email="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
$pat_contact = "/^[6789][0-9]{9}$/";
$pat_city="/^[a-zA-Z ]+$/";

if(!preg_match($pat_name, $name))
{
    echo ("<script>location.href='signup.php?name_error=Enter valid name(Only letters and spaces)'</script>");
    $count=1;
}
else if(!preg_match($pat_email, $email))
{
    echo ("<script>location.href='signup.php?email_error=Email entered is invalid'</script>");
    $count=1;
}
else if(strlen($password)<9)
{
    echo ("<script>location.href='signup.php?password_error=Password(Min. 10 characters)'</script>");
    $count=1;
}
else if(!preg_match($pat_contact, $contact))
{
    echo ("<script>location.href='signup.php?contact_error=Contact number is invalid(Must start with 6,7,8,9)'</script>");
    $count=1;
}
else if(!preg_match($pat_city, $city))
{
    echo ("<script>location.href='signup.php?city_error=Enter valid City(Only letters and spaces)'</script>");    
    $count=1;
}
//All validations checked($count=0)
$new_count=0;

//Restricting duplicate emails.
if($count==0)
{
 $query="Select id from users where email='$email'";
 $res_query= mysqli_query($con, $query);
 $num_rows= mysqli_num_rows($res_query);
 if($num_rows>0)
 {
    echo ("<script>location.href='signup.php?email_error=This email address is already registered'</script>");
    $new_count=1;
 }
}
//If no duplicate email($new_count=0) and proper validations($count=0).
//Inserting values.
if($new_count==0&&$count==0)
{
 $password= md5($password);
 //Insert these results into the database depending upon "user signup" or "admin signup".
 $ins_query="Insert into users (name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
 $processed_query= mysqli_query($con, $ins_query) or die(mysqli_error($con));
 //Getting the primary key value.
 $id= mysqli_insert_id($con);
 //Setting the session variables.
 $_SESSION['email']=$email;
 $_SESSION['user_id']=$id;
 //After successful signup,user will go to products page.
 echo ("<script>location.href='products.php?success_msg=User successfully registered'</script>");
}
?>
 
 
 
 
    
 




