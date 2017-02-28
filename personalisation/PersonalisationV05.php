<?php
include 'C:\xampp\htdocs\CardStore\connect.php';
error_reporting(0);
$id_no=mysqli_query($connect,"SELECT * FROM product WHERE p_name='greF Visiting Card'");
$cardID=mysqli_fetch_array($id_no);


session_start();
	$_SESSION['cardID']=$cardID['pID'];
	$_SESSION['price']=$cardID['price'];
	$_SESSION['vctype']=$cardID['p_init'];


if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
header("Location:/CardStore/Login.php");
}
?><html>
<head>
<title>
CardStore---Visiting Card Customization !!
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <script
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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

form
{ margin: 3px;
    border: 1px solid #ccc;
    width: 800px;
    height:auto;
background-color:#E6E6FA;
text-align:center;
Font-family:Comic Sans MS;
margin:0 auto;
}
.box
{margin: 5px;
 border: 1px solid #ccc;
width:40%;
text-align:center;
position:relative;overflow-y:auto;overflow-x:hidden;
}

img
{position:relative;
border:1px solid #b4bcc0;
border-style:ridge;
}
#e
{  overflow:hidden;
    position: absolute;
   color:white;
   font-family:Papyrus;
   font-size:22px;
   font-weight: bold;
   top: 20px; 
   left: 100px; 
   width: 300px;
 }
#e1
{   overflow:hidden;
   position: absolute;
   color:#d2ff4d;
   font-family:Papyrus;
   font-size:15px; 
   top: 80px; 
   right:130px;
   width: 30%;
 }
#e2
{   overflow:hidden;
   position: absolute;
   color:#d2ff4d;
   font-family:Papyrus;
   font-size:15px; 
    top: 100px; 
   right:130px;
   width: 30%;
 }
#e3
{   overflow:hidden;
   position: absolute;
   color:#d2ff4d;
  font-family:Papyrus;
   font-size:15px; 
   right:130px;
 top: 180px; 
   width: 50%;
 }
#e4
{   overflow:hidden;
   position: absolute;
   color:#d2ff4d;
 font-family:Papyrus;
   font-size:15px; 
     top: 120px; 
   right:130px;
   width: 60%;
 }
#e5
{  overflow:hidden;
   position: absolute;
 color:#d2ff4d;
 font-family:Papyrus;
   font-size:15px; 
   top: 200px; 
   right:130px;
   width: 50%;
 }
.APPROVE_button{width:200px;
height:30px;
background-color:#299617;
color:white;
border-style:outset;
 border-color:#00755E;
font-size:15;
font-family:Comic Sans MS;}

PROCEED_button{width:80px;
height:30px;
background-color:#00477e;
color:white;
border-style:outset;
 border-color:#00755E;
font-size:15;
font-family:Comic Sans MS;}
.about
{ margin: 3px;
    border: 1px solid #ccc;
    width: 800px;
    height:auto;
background-color:#E6E6FA;
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
{color:black;
background-color:#00468C;
text-decoration :none;
}
.lnk a
{color:white;
background-color:#00468C;
text-decoration :none;
}
</style>

<script type=text/javascript>
function goback()
{
    return "Write something clever here...";
}
function val()
{var k=document.getElementById("frs").value;
 document.getElementById('e').innerHTML = k;    
}
function val1()
{var k1=document.getElementById("fn").value;
document.getElementById('e1').innerHTML = k1;
}
function val2()
{var k2=document.getElementById("des").value;
document.getElementById('e2').innerHTML = k2;
}
function val3()
{var k3=document.getElementById("ct").value;
document.getElementById('e3').innerHTML = k3;
}
function val4()
{var k4=document.getElementById("ad").value;
document.getElementById('e4').innerHTML = k4;
}
function val5()
{var k5=document.getElementById("eid").value;
document.getElementById('e5').innerHTML = k5;
}
function approve()
{ var i= confirm("Do you approve the details you have filled?");
  if (i== true)
  {
        alert("I have reviewed and approve my design.");   document.getElementById("pro").disabled = false;
  }
  else
  {
	alert("No,I want to edit the details "); 
        location.reload();
  }
    
}function option(){window.onbeforeunload = null;window.location.assign("/CardStore/Add_to_cart.php")}</script>
</head>
<body background="\CardStore\images\grey-back.jpg" onbeforeunload="return goback()">
<div id="wrapper">
<div class="heads" >
<p class="acc_n_crt" align=right><span class="glyphicon glyphicon-user">&nbsp<a href="#">My Account</a>&nbsp|&nbsp<span class="glyphicon glyphicon-shopping-cart">&nbsp<a href="\CardStore\cart.php" >My Cart</a>&nbsp|&nbsp<span class="glyphicon glyphicon-off">&nbsp<a href="\CardStore\logout.php">Logout</a>&nbsp&nbsp</p>
<p><font Face="Showcard Gothic"  size=25>CardStore</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Choose it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Design it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Buy it</font></p>
</p>


</div>


<div class="content">
<center><a href="\CardStore\Homepage.php" class="LinkColor"><font face=Comic Sans MS>Home</font></a>
<font color=#b4bcc0>&nbsp > &nbsp</font>
<a href="\CardStore\vcard_templates.php"  class="LinkColor"><font face=Comic Sans MS>Visiting Cards</font></a>
<font  color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>Personalize</font>
</center><hr>

<form name="myform" method="post" action=" \CardStore\customize.php" onsubmit="option()" >
<center><legend><b><font face="Harrington" size="5" color="#00468C">Personalise your card</font></b></legend></center><br>
<label for="Vid" >Card Id:</label>
<input type="text" id="Vid" name="Vid" readonly value="<?php echo $_SESSION['cardID']; ?>"><br>

<label for="frs">Company Name:</label>
<input type="text" id="frs" name="frs" oninput="val()"><br>

<label for="fn" >Name:</label>
<input type="text" id="fn" name="fn" oninput="val1()"><br>

<label for="des" >Designation:</label>
<input type="text" id="des" name="des" oninput="val2()"><br>

<label for="ct" >Contact Number:</label>
<input type="text" id="ct" name="ct" oninput="val3()" maxlength=10><br>

<label for="ad" >Address:</label>
<input type="text" id="ad" name="ad" oninput="val4()"><br>

<label for="eid" >Email id:</label>
<input type="text" id="eid" name="eid" oninput="val5()"><br><br>
<center><input type="submit"onMouseover="this.style.background = '#A7F432'"  onMouseout="this.style.background = '#299617'"  VALUE="PROCEED TO BUY" disabled="true" id='pro' class="PROCEED_button" ></input></center>
<br>
</form>
<br>
<div class="box" style="margin-left: auto;margin-right: auto;width:600px;">
<br><center style="display:block;color:white;background-color:#292a34;position:absolute;top:0px;width:90px;">Front</center>
<img src="\CardStore\images\greF.jpg" height=230px width=400px >
<p id="e" >COMPANY NAME</p><br>
<p id="e1" align=right>YOUR NAME</p><br>
<p id="e2" align=right>DESIGNATION</p><br>
<p id="e3" align=right>CONTACT NO.</p><br>
<p id="e4" align=right>ADDRESS</p><br>
<p id="e5" align=right>EMAIL ID</p>

<center style="display:block;color:white;background-color:#292a34;position:absolute;width:90px;">Back</center>
<img src="\CardStore\images\greB.jpg" height=230px width=400px style="position=relative;"><br>
<br>
<center><input type="button" onMouseover="this.style.background = '#0067a7'" onMouseout="this.style.background = '#00477e'" onclick="approve()"
  value="APPROVE" class="APPROVE_button"></input></center>
<br></div><br>

<div class="about" >
<center><legend><b><font face="Harrington" size="5" color="#00468C">About this card</font></b></legend></center>
<p style="text-align:center;color: #E62E6B;"><b>This is a Single Sided Business Card that is aimed to leave a lasting impression!!!<b></p>

<b><font color=#215097 size="3">Size</font></b>
<p style="text-align:center;color: #E62E6B;">Standard Size(3.5 x 2 inches)</p>
<b><font color=#215097 size="3">Number of Pages</font></b>
<p style="text-align:center;color: #E62E6B;">2 </p>
<b><font color=#215097 size="3">Paper Stock</font></b>
<p style="text-align:center;color: #E62E6B;">Normal Paper 300 gsm art card.</p>
<p style="text-align:center;color:  #E62E6B;">Premium Pearl White Matte Paper 350gsm.</p>
<p style="text-align:center;color: #E62E6B;">Off-white Matte Paper 250gsm</p>
<b><font color=#215097 size="3">Price per card</font></b>
<p style="text-align:center;color: #E62E6B;">Rs 1.50</p><br></div><br>
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
