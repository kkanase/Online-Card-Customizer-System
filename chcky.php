<?php
include 'connect.php';
session_start();

if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
header("Location:Login.php");
}
?>
<html>
<head>
<title>
CardStore---Confirm !!
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

.order
{ 
   position:relative;
width:500px;

 
background-color:#E6E6FA;
text-align:center;
Font-family:Times;
margin:0 auto;
}
.confirmation
{width:130px;
height:30px;
background-color:#A7F432;
color:white;
border-style:outset;
 border-color:#00755E;
font-size:15;
font-family:Comic Sans MS;
}
.under_footer
{color:white;
list-style-type:none;
float:left;
}
 .lnk  .lnk_foot:hover 
{color:white;
background-color:#00468C;
text-decoration :none;
}
.lnk a
{color: black;
background-color:#00468C;
text-decoration :none;
}
.forcart
{ position:relative;
width:500px;
Font-family:Times;
margin:100 auto;
}
</style>
<script language="javascript" type="text/JavaScript">
/*function gotolink()
{ 
var destination= self.location; 
for(var i = 0; i<document.myform.sign_in.length; i++)
{    if(document.myform.sign_in[i].checked) 
    {
    	destination=document.myform.sign_in[i].value 
    }
}
window.location = destination;
}
function gotolink()
{ 
var destination= self.location; 
for(var i = 0; i<document.myform.sign_in.length; i++)
{    if(document.myform.sign_in[i].checked) 
    {
    	destination=document.myform.sign_in[i].value 
    }
}
window.location = destination;
}*/
function gotolink()
{
	
	window.location.assign("checkout.php");
}

function vald()
{
	
if (document.myform.add.value == "") 
{ document.getElementById('error7').innerHTML="*An Address is Required*";
  return false;
}

}
</script>


</head>
<body background="\CardStore\images\grey-back.jpg" style="background-size:cover" >
<div id="wrapper">
<div class="heads" >
<p class="acc_n_crt" align=right><span class="glyphicon glyphicon-user">&nbsp<a href="#">My Account</a>&nbsp|&nbsp<span class="glyphicon glyphicon-shopping-cart">&nbsp<a href="\CardStore\cart.php" onclick="val();">My Cart</a>&nbsp|&nbsp<span class="glyphicon glyphicon-off">&nbsp<a href="\CardStore\logout.php">Logout</a>&nbsp&nbsp</p>
<p><font Face="Showcard Gothic"  size=25>CardStore</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Choose it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Design it</font></br><font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Buy it</font></p>
</p>


</div>


<div class="content">
<center><a href="\CardStore\Homepage.php" class="LinkColor"><font face=Comic Sans MS>Home</font></a>
<font color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>Checkout</font></a></center><hr>

<div class="order">
<br>
<br><h1> Payment Method </h1><hr style=" border: 1px solid #00477e;">
<h3> Cash on delivery</h3>

<br>
<p>Do you want to change the delivery Address?</p>
<form class="form-signin" method='post' action="thanks.php" onsubmit="return vald();">

<div class='radio'><input type="radio"  name="sign_in" value="chcky.php" checked ><label for="sign_in"   >Yes, I want to.</label><br><br>
<input type="radio"  name="sign_in" value="checkout.php" onClick="gotolink()"><label for="sign_in" >No,I don't want to.</label><br><br>
</div>
<label for="add"  class="sr-only">Address </label>
<div class='row'>
<div class="form-group col-md-6 col-md-offset-3 centered"> <textarea rows="5" cols="22" id="add" name="add" class="form-control" placeholder="Address"></textarea><div id="error7" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br />
</div>
</div>
<label for="state" class="sr-only">State</label>
<div class='row'><div class="form-group col-md-6 col-md-offset-3 centered"> <select name="state" id="state" class="form-control">
    <option selected="" value="Default">-Your State-</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
  
  </select></p> </div> </div><br>


<input type="submit" value="Save & Confirm" name= "submit" onMouseover="this.style.background = '#A7F432'"  onMouseout="this.style.background = '#299617'" class="confirmation"></input>
<br><br>

</form>
</div>
<br>
<br>


<p style="bottom:0;"><font face='Times'><b>*We provide only Cash On delivery! </b></font></p>
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
</body>
</html>
