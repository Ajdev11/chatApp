<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
if(!empty($email) && !empty($password)){
    //let's check users entered email & password matched to database any table row email and password
    $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}' AND password ='{$password}'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $status = "Active now";
        $sql2 = mysqli_query($con, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
      if($sql2){
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
      }
    }else{
        echo "Email or password is incorrect!";
    }
}else{
    echo "All fields are required";
}

?>