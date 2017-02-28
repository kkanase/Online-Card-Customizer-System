<?php
include 'connect.php';
error_reporting(0);
$email=$_POST['eid'];
$password=$_POST['pwd'];
  
$sql_users="select * from customer where                                                                                                                                                
email='$email' AND password='$password'"; 

$sql_usersa="select* from Admin where                                                                                                                                                  
Email='$email' AND password='$password'";

$result_usersa=mysqli_query($connect,$sql_usersa);


$result_users=mysqli_query($connect,$sql_users);

 ?>
 <html>
 <head><title>Oops..! That's Not Valid</title>
 <body>
	 <?php if(mysqli_num_rows($result_users)<=0&&mysqli_num_rows($result_usersa)<=0)
{
   ?> <center><h1><?php echo "Invalid Login,please login again";?></h1>
   <a href='Login.php'>Click here to Sign in</a></center>	
<?php }
else if(($email == "admin@gmail.com")&&($password == "admin123"))
{
		header('location: viewprod.php');
   	
}
else 
{
	$row_users= mysqli_fetch_array($result_users);
	
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_users['name'];
	$_SESSION['CustID']=$row_users['CustID'];
   header('location: Homepage.php');
		
		
}
 ?>
 </body>
 </html>
