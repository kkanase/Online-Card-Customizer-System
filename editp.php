<?php 
include 'connect.php';
error_reporting(0);
session_start();
$c_ID=$_SESSION['CustID'];
$_Fname=$_POST['F_name'];
$_Lname=$_POST['L_name'];
$_email1=$_POST['email'];
$_pwd=$_POST['passwd'];
$_phoneNo1=$_POST['cont'];
$_state=$_POST['state'];
$_addr=$_POST['addr'];
$_update="update customer set `Fname`='$_Fname',`Lname`='$_Lname',`email`='$_email1',`phoneNO`='$_phoneNo1',`state`='$_state',`billAddress`='$_addr',`password`='$_pwd' where `CustID`='$c_ID'";
$result=mysqli_query($connect,$_update);
header('location: myaccount.php');
?>
