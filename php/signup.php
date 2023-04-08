<?php
include_once "config.php";
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
   //let's validate email address if it's valid or not
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
    //lets check that email already existed or not
    $sql = mysqli_query($con, "SELECT email FROM");

   }else{
       echo "$email - this is not a valid email";
   }
}else{
    echo "All fields are required";
}

?>