<?php

$ofullname = $_POST['ofname'];
$oemail =$_POST['oemail'];
$opnumber =$_POST['opnum'];
$opnumber =$_POST['oiname'];
$itencn =$_POST['oicno'];
$howitem =$_POST['hmitem'];
$omassage =$_POST['omassage'];

$con = mysqli_connect("localhost","root","","slcamping_project");
if(!$con){
    echo "connection erroe";
    die($con);
}
$res = mysqli_query($con,"insert into pro_order values('$ofullname','$oemail','$opnumber','$opnumber','$itencn','$howitem','$omassage')");
if($res){
    
    header('Location: order.php?error=badpass');
}else{
    echo "no";
}


?>