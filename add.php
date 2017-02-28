<?php
include 'connect.php';
error_reporting(0);
session_start();
$pprtype=$_POST['chk'];
$quantity=$_POST['qty'];
$id=$_SESSION['cardID'];

 if($_SESSION['ctype']=='VC')
 { $price=$_SESSION['price'];
$total=$price*$quantity;
$_SESSION['total']=$total;
$_SESSION['pp']=$pprtype;
      $insrt="INSERT INTO `shoppingcart`(`CartID`, `CustID`, `pID`, `quantity`, `pprType`, `total`) VALUES ('','{$_SESSION['CustID']}','{$_SESSION['cardID']}','$quantity','$pprtype','{$_SESSION['total']}')";
	  $entr=mysqli_query($connect,$insrt);	
}
 else if($_SESSION['ctype']=='WC')
 { $price=$_SESSION['price'];
$total=$price*$quantity;
$_SESSION['total']=$total;
$_SESSION['pp']=$pprtype;
   $insrt="INSERT INTO `shoppingcart`(`CartID`, `CustID`, `pID`, `quantity`, `pprType`, `total`) VALUES ('','{$_SESSION['CustID']}','{$_SESSION['cardID']}','$quantity','$pprtype','{$_SESSION['total']}')";
	  $entr=mysqli_query($connect,$insrt);
 }
else
{$price=$_SESSION['price'];
$total=$price*$quantity;
$_SESSION['total']=$total;
$_SESSION['pp']=$pprtype;
   $insrt="INSERT INTO `shoppingcart`(`CartID`, `CustID`, `pID`, `quantity`, `pprType`, `total`) VALUES ('','{$_SESSION['CustID']}','{$_SESSION['cardID']}','$quantity','$pprtype','{$_SESSION['total']}')";
$entr=mysqli_query($connect,$insrt);
}

echo "<h2>Item Added!!</h2>";
header("Location:cart.php");

?>
