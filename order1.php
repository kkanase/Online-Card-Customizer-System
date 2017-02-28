<?php
include "connect.php";
$pi=$_POST['Vid'];
$cid=$_SESSION['CustID'];
$c=mysqli_query($connect,"SELECT  `CartID`,`pID`, `quantity`, `pprType`, `total`FROM `shoppingcart` WHERE `custID`='{$_SESSION['CustID']}'")
$count=mysqli_query($connect,"SELECT count(*) FROM `shoppingcart`");
if($count>0)
{while($row=mysqli_fetch_array($c) ){
	$crt=$row['CartID'];
	$qty=$row['quantity'];
	$ptype=$row['pprType'];
	$ttl=$row['total'];
    $d_addr=$_SESSION['ad'].",".$_SESSION['state'];
	
$save=INSERT INTO `custorder`(`orderID`, `CustID`, `CartID`, `delAddr`, `amount`, `status`, `orderDate`) VALUES ('','$cid','$crt',' $d_addr','$ttl','pending','');
$s=mysqli_query('$connect','$save');

$count--;
}


?>
