<?php

$uname =$_POST['uname'];
$pass =$_POST['pasword'];
$eadd =$_POST['eaddress'];
$yadd =$_POST['yaddess'];
$mobi =$_POST['mnumber'];


$con = mysqli_connect("localhost","root","","slcamping_project");
if(!$con){
    echo "connection erroe";
    die($con);
}
$res = mysqli_query($con,"insert into register(`username`,`password`,`email`,`address`,`mobile`,`role_id`) values('$uname','$pass','$eadd','$yadd','$mobi','1')");
if($res){
    header("Location: login.php");
}else{
    echo "Registation Error";
}
?>

