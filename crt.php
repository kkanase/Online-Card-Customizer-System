<?php
include 'connect.php';
error_reporting(0);
session_start();
$pprtype=$_POST['chk'];
$quantity=$_POST['qty'];
$id=$_SESSION['cardID'];
 if($_SESSION['ctype']=='VC')
	 $price=$_SESSION['price'];
 else if($_SESSION['ctype']=='WC')
     $price=$_SESSION['price'];
else
	$price=$_SESSION['price'];
$total=$price*$quantity;
$_SESSION['total']=$total;



?>
<html>
<head>
<title>
CardStore---My Cart !!
</title>

<style>
#wrapper
{width:900px;
 margin:0 auto;
}

.heads 
{  
   display:block;
   width:100%; height:190px;
   background-color:#45bca1;
   color:white;
   padding:0px;  position:relative;
   
}

.foot
{  
  display:block;
   width:100%;
   min-height:100px; 
   background-color:#45bca1;
   color:white;
   padding:0px;
 
}

.acc_n_crt a
{color:#516ca1;
 font-family:Forte;
 font-size:20px;
 text-decoration:none;
}
a:hover
{color:white;
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
background-color:000099;
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
{background-color:0066CC ;
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
{color: white;
background-color:#45bca1;
text-decoration :none;
}
.lnk a
{color: #516ca1;
background-color:#45bca1;
text-decoration :none;
}
.forcart
{ position:relative;
width:500px;
Font-family:Times;
margin:100 auto;
}
</style>
<script type="text/javascript">

funtion checkout()
{
	<?php if(isset($_POST['qty'])){?>
	document.getElementById("check").style.backgroundColor = "red";
	document.getElementById("check").disabled = true;  alert("Please continue shopping!.");
      	 
	<?php } else {?>
	document.getElementById("check").disabled = false;
	window.location.assign("checkout.php");
	<?php }?>
}
function cont()
{
	window.location.assign("../CardStore/Homepage.php");
}

function del(){
	<?php $d=mysqli_query($connect,"DELETE FROM `tab` WHERE `numb`=1002"); 
	if(mysqli_query($connect,"DROP table `tab`"))
		echo "succesful deletion";
	else 
		echo "fail";
	?>
	
}
</script>


</head>
<body background="\CardStore\images\grey-back.jpg" style="background-size:cover" >
<div class='div-responsive'>
<div id="wrapper">
<div class="heads" >
<p class="acc_n_crt" align=right><img src="\CardStore\images\myAcc.jpg" height=20px width=15px><a href="#">My Account</a>&nbsp|&nbsp<img src="\CardStore\images\Shopping_cart.jpg" height=20px width=15px ><a href="\CardStore\cart.php" onclick="val();">My Cart</a></p>
<p><font Face="Showcard Gothic"  size=25>CardStore</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Choose it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Design it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Buy it</font>
</p>


</div>


<div class="content">
<center><a href="\CardStore\Homepage.php" class="LinkColor"><font face=Comic Sans MS>Home</font></a>
<font color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>My Cart</font></a></center><hr>

<form class="myform" method='post' action="checkout.php">
<?php if($_POST['qty']){?><table border='0' class='forcart''>
<tr>
<th>Card Id</th>
<th >Paper type</th>
<th>quantity</th>
<th>total<th>

</tr>

<?php while($row=mysqli_fetch_<tr>
<!--td align=center><input type='text' name='Vid' value='<?php echo $_SESSION['cardID'] ;?>' readonly size=4/></td>
<td align=center width=20px><input type='text' name='chk' value='<?php echo $pprtype ;?>' readonly /></td>
<td align=center><input type='text' name='qty' value='<?php echo $quantity ;?>' readonly size=4/></td>
<td align=center><input type='text' name='' value='<?php echo $_SESSION['total'] ;?>' readonly size=4/></td>
</tr-->
<td align=center ><?php echo $id ;?></td>
<td align=center width=20px><?php echo $pprtype ;?> </td>
<td align=center><?php echo $quantity ;?></td>
<td align=center><?php echo $_SESSION['total'] ;?></td>
<td align=center><input type ='button' value='Remove' onClick="del()"</td>
</tr>

</table><?php } else {?>
<br></br></br><br></br></br>
<center><h2><font face='Times'>You have no items in your cart!</font></h2></center>
<br></br></br><br></br></br>
<?php } ?>

<center><input type='submit' value='Continue Shopping' style="background-color:#299617;width:200px;
height:30px;"onMouseover="this.style.background = '#A7F432'" 
onMouseout="this.style.background = '#299617'"  onclick="cont()" ></input></center>
<br>
<center><input type='submit' value='Checkout'  id='check' style="background-color:#299617;width:200px;
height:30px;"onMouseover="this.style.background = '#A7F432'"
 onMouseout="this.style.background = '#299617'"  onclick="checkout()"></input></center>


<br>


</form>
</div>





<footer class="foot">
<ul class="under_footer">
	<li><font face=Forte><h3>Main Categories</h3></font></li><br>
	<li class="lnk" ><a href="\CardStore\vcard_templates.php" class="lnk_foot"><font face=Comic Sans MS>Visiting Cards</font></a></li><br>
	<li class="lnk"><a href="\CardStore\AboutUs.php" class="lnk_foot"><font face=Comic Sans MS>Wedding Cards</font></a></li><br>
	<li class="lnk"><a href="\CardStore\AboutUs.php" class="lnk_foot"><font face=Comic Sans MS>Thankyou Cards</font></a></li><br>
</ul>
<ul class="under_footer">
        <li><font face=Forte ><h3>Customer Care</h3></font></li><br><br>
	<li><font face=Comic Sans MS color=#516ca1>Contact us at </font></li><br>
	<li><font face=Comic Sans MS color=#516ca1>cardstore@gmail.com</font></li><br>
	<li><font face=Comic Sans MS color=#516ca1>022-162866811</font></li><br>
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
