<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
   //let's validate email address if it's valid or not
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
    //lets check that email already existed or not
    $sql = mysqli_query($con, "SELECT email FROM users WHERE email = '{$email}'");
    if(mysqli_num_rows($sql)> 0){
        echo "$email - This email already exist";
    }else{
        if(isset($_FILES['image'])){ //if file is uploaded
         $img_name = $_FILES['image']['name']; //getting user uploaded user name
         $tmp_name = $_FILES['image']['tmp_name'];//temporary name used to save or store file in the folder
        //let's explode image and get the last extensions
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode);
         $extensions = ['png', 'jpeg', 'jpg'];
         if(in_array($img_ext, $extensions)===true){
            $time = time();
            $new_img_name = $time.$img_name;
          if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ // if user upload file, move to our folder
                $status = "Active now";
                $random_id = rand(time(), 1000000000); //creating random id for users
                //inserting all users data inside tables
                $sql2 = mysqli_query($con, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')"); }
             if($sql2){//if these data are inserted
                $sql3 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
                if(mysqli_num_rows($sql3) > 0){
                    $row = mysqli_fetch_assoc($sql3);
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }
             } else{
                echo "something went wrong";
             }                                            
         }else{
            echo "Please select an image file - jpeg, png, jpg";
         }
        }else{
            echo "Please select an image file";
        }
    }
   }else{
       echo "$email - this is not a valid email";
   }
}else{
    echo "All fields are required";
}
?>