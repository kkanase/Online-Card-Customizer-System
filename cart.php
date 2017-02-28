<?php
include 'connect.php';

error_reporting(0);
session_start();


if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
{
header("Location:Login.php");
}

?>
<html>
<head>
<title>
CardStore---My Cart !!
</title>
<meta name="viewport" content="width=device-width,initial scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#wrapper
{width:900px;
 margin:0 auto;
}

.heads 
{  
   display:block;
   width:100%; height:190px;
   background-color:#00468C;
   color:white;
   padding:0px;  position:relative;
   
}

.foot
{  
  display:block;
   width:100%;
   min-height:100px; 
   background-color:#00468C;
   color:white;
   padding:0px;
 
}

.acc_n_crt a
{color:white;
 font-family:Forte;
 font-size:20px;
 text-decoration:none;
}
a:hover
{color:black;
}
.p
{position:absolute;
 bottom:80px;
 left:600px;
}
table 
{position:absolute;
 bottom:30px;
 right:20px;
}

.nav2 a,.nav1 a
{display:block;
color:white;
background-color:#28304d;
width:100%;
padding: 20px 20px;
text-decoration:none;

font-size: 16px;
font-family:Bradley Hand ITC;
}
li
{float:left;
}
li a:hover,.drop:hover,.nav1:hover
{background-color:#8B9DC3;
}

.LinkColor 
{text-decoration:none;
color:#b4bcc0;

}
a.LinkColor:hover
{color:black;
}
label
{display:inline-block;width:130px;
text-align:left;
}

.content
{display:block;
width:100%;
height:auto;
background-color:white;
font-family:Forte;
font-size:15px;
overflow-y:auto;
overflow-x:none;}

.cartdet
{ margin: 3px;
   position:relative;
width:500px;
 border: 1px solid #ccc;
background-color:pink;
text-align:center;
Font-family:Comic Sans MS;
margin:0 auto;
}
.under_footer
{color:white;
list-style-type:none;
float:left;
}
 .lnk  .lnk_foot:hover 
{color: black;
background-color:#00468C;
text-decoration :none;
}
.lnk a
{color:white;
background-color:#00468C;
text-decoration :none;
}
.forcart
{ position:relative;
width:500px;
Font-family:Times;
margin:100 auto;
}
.btn{
width:200px;
height:30px;
background-color:#299617;
color:white;
border-style:outset;
 border-color:#00755E;
font-size:15;
font-family:Comic Sans MS;
}
</style>
<script language="javascript" type="text/JavaScript">
function checkout()
{   //document.getElementById("check").disabled = false;
	window.location.assign("\CardStore\checkout.php");	
}
function home()
{
	window.location.assign("\CardStore\Homepage.php");
}

/*function del()
{
	<?php 
	$d="DELETE FROM `tcustom` WHERE `pID`='{$_SESSION['pID']}' AND `CustID`='{$_SESSION['CustID']}'";
	$del=mysqli_query($connect,$d);
	$d1="DELETE FROM `shoppingcart` WHERE `pID`='{$_SESSION['pID']}' AND `CustID`='{$_SESSION['CustID']}'";
	$des=mysqli_query($connect,$d1);
		
	

	?>
	
}*/
</script>


</head>
<body background="\CardStore\images\grey-back.jpg" style="background-size:cover" >
<div class='div-responsive'>
<div id="wrapper">
<div class="heads" >
<p class="acc_n_crt" align=right><span class="glyphicon glyphicon-user">&nbsp<a href="#">My Account</a>&nbsp|&nbsp<span class="glyphicon glyphicon-shopping-cart">&nbsp<a href="\CardStore\cart.php">My Cart</a>&nbsp|&nbsp<span class="glyphicon glyphicon-off">&nbsp<a href="\CardStore\logout.php">Logout</a>&nbsp&nbsp</p>
<p><font Face="Showcard Gothic"  size=25>CardStore</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Choose it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Design it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Buy it</font></p>
</p>


</div>


<div class="content">
<center><a href="\CardStore\Homepage.php" class="LinkColor"><font face=Comic Sans MS>Home</font></a>
<font color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>My Cart</font></a></center><hr>

<form class="myform" method='post' action="checkout.php">
<?php 
$checkcount="SELECT count(*) FROM `shoppingcart`";
$count=mysqli_query($connect,$checkcount);
if($count==0){?>
<center ><h2 ><font face='Times'>You have no items in your cart!</font></h2></center><br></br></br><br></br></br>
<center>

<a class="btn lg" href="Homepage.php"  style="background-color:#299617;width:200px;
height:30px;"onMouseover="this.style.background = '#A7F432'" onMouseout="this.style.background = '#299617'" >Continue Shopping </a></center><br>

<?php } else if($count>0){

$c=mysqli_query($connect,"SELECT  `CartID`,`pID`, `quantity`, `pprType`, `total`FROM `shoppingcart` WHERE `custID`='{$_SESSION['CustID']}'"); 
if($c==0){ ?>
<center ><h2 ><font face='Times'>You have no items in your cart!</font></h2></center><br></br></br><br></br></br>
<center>

<a class="btn lg" href="Homepage.php"  style="background-color:#299617;width:200px;
height:30px;"onMouseover="this.style.background = '#A7F432'" onMouseout="this.style.background = '#299617'" >Continue Shopping </a></center><br>
<?php  } else {?>
<table border='1' class='table table-striped' style="width:500px; position:relative;margin:100 auto;Font-family:Times;">
<tr>
<th>Card Id</th>
<th >Paper type</th>
<th>quantity</th>
<th>total<th>
</tr>

	
<?php  while($row=mysqli_fetch_array($c) ){$cid=0;$_SESSION['cartID']=$row['CartID'];?>
<tr class='table table-striped'>
<!--<td align=center><input type='text' name='Vid' value='<!?php echo  $_SESSION['cardID'];?>' readonly size=4/></td>
<td align=center width=20px><input type='text' name='chk' value='<!?php echo $pprtype ;?>' readonly /></td>
<td align=center><input type='text' name='qty' value='<!?php echo $quantity ;?>' readonly size=4/></td>
<td align=center><input type='text' name='tot' value='<!?php echo $_SESSION['total'] ;?>' readonly size=4/></td>
</tr>-->
<td align=center ><?php echo $row['pID'] ;?></td>
<td align=center width=20px><?php echo $row['pprType'] ;?> </td>
<td align=center><?php echo $row['quantity'];?></td>
<td align=center><?php echo $row['total'];?></td>
<td align=center><a class="btn lg" href="remove.php"  style="background-color:red;width:200px;
height:30px;"
onMouseover="this.style.background = '#A7F432'" onMouseout="this.style.background = '#299617'" >remove</a>

<!--input type ='button' value='Remove' onClick="del()"--></td>
</tr>
<?php }}
?> 
</table>


<br><br>
<center>

<a class="btn lg" href="Homepage.php"  style="background-color:#299617;width:200px;
height:30px;"
onMouseover="this.style.background = '#A7F432'" onMouseout="this.style.background = '#299617'" >Continue Shopping </a>
</center>
<br>
<center><input type='submit' value='Checkout'  class="btn lg" id='check' style="background-color:#299617;width:200px;
height:30px;"onMouseover="this.style.background = '#A7F432'" onMouseout="this.style.background = '#299617'"  onclick="checkout()"></input></center>
<?php }?>
<br>
</form>


<br></br></br><br></br></br>


</div>





<footer class="foot">
<ul class="under_footer">
	<div class="row"><li><font face=Forte><h3>Main Categories</h3></font></li><br></div>
	<div class="row"><li class="lnk" ><a href="\CardStore\vcard_templates.php" class="lnk_foot"><font face=Comic Sans MS>Visiting Cards</font></a></li><br></div>
	<div class="row"><li class="lnk"><a href="\CardStore\wcard_templates.php" class="lnk_foot"><font face=Comic Sans MS>Wedding Cards</font></a></li><br></div>
	<div class="row"><li class="lnk"><a href="\CardStore\tcard_templates.php" class="lnk_foot"><font face=Comic Sans MS>Thankyou Cards</font></a></li><br></div>
</ul>
<ul class="under_footer">
        <li><font face=Forte ><h3>Customer Care</h3></font></li><br><br>
	<li><font face=Comic Sans MS color=white>Contact us at </font></li><br>
	<li><font face=Comic Sans MS color=white>cardstore@gmail.com</font></li><br>
	<li><font face=Comic Sans MS color=white>022-162866811</font></li><br>
</ul>
<ul class="under_footer">
	<li><font face=Forte><h3>About Cardstore</h3></font></li><br>
	<li class="lnk" ><a href="\CardStore\AboutUs.php" class="lnk_foot"><font face=Comic Sans MS>About us</font></a></li><br>

</ul><br>
<p style="clear:both;">
<center>
<font face=Forte>&copy Copyright 2016</font>
</center>

</footer>

</div>
</div>
</body>
</html>
