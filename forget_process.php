<?php

$opass = $_POST['olpass'];
$newpss = $_POST['newpass'];
$compass = $_POST['copass'];

$con = mysqli_connect("localhost","root","","slcamping_project");
if(!$con){
    echo "connection erroe";
    die($con);
}
$res = mysqli_query($con,"insert into forget_pass values('$opass','$newpss','$compass')");
if($res){
    echo "ok";
}else{
    echo "no";
}
?>