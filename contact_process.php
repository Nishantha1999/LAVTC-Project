<?php

$cfname = $_POST['cfullname'];
$cemi =$_POST['cemail'];
$cnnumber =$_POST['cnumber'];
$cmass =$_POST['cmass'];

$con = mysqli_connect("localhost","root","","slcamping_project");
if(!$con){
    echo "connection erroe";
    die($con);
}
$res = mysqli_query($con,"insert into contact values('$cfname','$cemi','$cnnumber','$cmass')");
if($res){

    header('Location: contact.php?error=badpass');
}else{
    echo "no";
}

?>