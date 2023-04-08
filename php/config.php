<?php
$con = new mysqli('localhost', 'root', '', 'chat');
if(!$con){
    die(mysqli_error());
}
?>