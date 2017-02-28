<?php
include 'C:\xampp\htdocs\CardStore\connect.php';
error_reporting(0);

$id_no=mysqli_query($connect,"SELECT * FROM product WHERE p_name='purpF Wedding Card'");
$cardID=mysqli_fetch_array($id_no);


session_start();
	$_SESSION['cardID']=$cardID['pID'];
	$_SESSION['price']=$cardID['price'];
	$_SESSION['wctype']=$cardID['p_init'];
session_start();

if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
header("Location:/CardStore/Login.php");
}
?><html>
<head>
<title>
CardStore---Wedding Card Customization !!
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
{color: white;
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
#e0
{  overflow:hidden;
    position: absolute;
   color:#803790;
   font-family:Edwardian Script ITC;
   font-size:40px;
   font-weight: bold; 
   top: 170px; 
   //left: 170px; 
   //width: 300px;
  width: 100%;
}
#e1
{  overflow:hidden;
    position: absolute;
   color:#D96CBE;
   font-family:Edwardian Script ITC;
   font-size:24px;
   font-weight: normal; 
   top: 220px; 
  // left: 170px; 
  // width: 350px;
  width: 100%;

 }
#h1
{   overflow:hidden;
   position: absolute;
   color:#d2aa56;
   font-family:Edwardian Script ITC;
   font-size:32px;
   Font-weight:bold;
   top: 245px; 
   //left:240px;
   width: 100%;
 }
#e2
{   overflow:hidden;
   position: absolute;
   color:#803790;
   font-family:Edwardian Script ITC;
   font-size:40px;
   Font-weight:bold;
   top: 270px; 
   //left:170px;
   //width: 300px;
  width: 100%;
 }

#e3
{   overflow:hidden;
   position: absolute;
   color:#D96CBE;
   font-family:Edwardian Script ITC;
font-size:24px; 
   top: 320px; 
    //left:170px;
    //width:350px;
  width: 100%;
 }
#e4
{   overflow:hidden;
   position: absolute;
   color:#B56917;
  font-family:Edwardian Script ITC;
   font-size:24px; 
  //left:170px;
 top: 370px; 
   //width: 350px;
  width: 100%;
 }
#e5
{   overflow:hidden;
   position: absolute;
   color:#B56917;
 font-family:Edwardian Script ITC;
   font-size:24px; 
    top: 390px; 
    //  left:210px; 
   //width: 300px;
  width: 100%; 
}
#h2
{   overflow:hidden;
   position: absolute;
   color:#803790;
 font-family:Edwardian Script ITC;
   font-size:24px; 
   font-weight:bold;
    top: 420px; 
      //left:250px; 
   //width: 300px;
    width: 100%;
 }

#e6
{  overflow:hidden;
   position: absolute;
   color:#B56917;
   font-family:Edwardian Script ITC;
   font-size:24px; 
   top: 440px; 
   left:80px; 
  width: 80%;
 }
#e7
{  overflow:hidden;
   position: absolute;
   color:#B56917;
   font-family:Edwardian Script ITC;
   font-size:24px; 
   top: 530px; 
   width:100%;
 }
#e8
{  overflow:hidden;
   position: absolute;
   color:White;
   font-family:Edwardian Script ITC;
   font-size:24px; 
   top: 1060px; 
     left:95px; 
   width: 60%;
 }
#h3
{  overflow:hidden;
   position: absolute;
   color:#d2aa56;
  
 font-family:Edwardian Script ITC;

   font-size:24px; 
   top: 1090px; 
     left:110px; 
   width: 60%;
 }
#e9
{  overflow:hidden;
   position: absolute;
   color:white;
  
 font-family:Edwardian Script ITC;

   font-size:24px; 
   top: 1120px; 
     left:125px; 
   width: 60%;
 }
#e10
{  overflow:hidden;
   position: absolute;
   color:#B56917;
   font-family:Edwardian Script ITC;
   font-size:24px; 
   top: 350px; 
   left:80px; 
   width:70%;
 }

.APPROVE_button
{width:200px;
height:30px;
background-color:#299617;
color:white;
border-style:outset;
 border-color:#00755E;
font-size:15;
font-family:Comic Sans MS;}

.PROCEED TO BUY_button
{width:80px;
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
{color: black;
background-color:#00468C;
text-decoration :none;
}
.lnk a
{color: white;
background-color:#00468C;
text-decoration :none;
}
</style>

<script type=text/javascript>
function goback()
{
    return "Write something clever here...";
}

function val0()
{var k=document.getElementById("bname").value;
 document.getElementById('e0').innerHTML = k;    
}
function val1()
{var k1=document.getElementById("Dpname").value;
 document.getElementById('e1').innerHTML = k1;    
}
function val2()
{var k2=document.getElementById("gname").value;
document.getElementById('e2').innerHTML = k2;
}
function val3()
{var k3=document.getElementById("Gpname").value;
document.getElementById('e3').innerHTML = k3;
}
function val4()
{var k4=document.getElementById("wdate").value;
document.getElementById('e4').innerHTML = k4;
}
function val5()
{var k5=document.getElementById("evt").value;
document.getElementById('e5').innerHTML = k5;
}
function val6()
{var k6=document.getElementById("venue").value;
document.getElementById('e6').innerHTML = k6;
}
function val7()
{var k7=document.getElementById("ad").value;
document.getElementById('e7').innerHTML = k7;
}
function val8()
{var k8=document.getElementById("Bname").value;
document.getElementById('e8').innerHTML = k8;
}
function val9()
{var k9=document.getElementById("Gname").value;
document.getElementById('e9').innerHTML = k9;
}
function val10()
{var k10=document.getElementById("req").value;
document.getElementById('e10').innerHTML = k10;
}


function approve()
{ var i= confirm("Do you approve the details you have filled?");
  if (i== true)
  {
       document.getElementById("pro").disabled = false;  alert("I have reviewed and approve my design.");   
  }
  else
  {
	alert("No,I want to edit the details "); 
        location.reload();
  }
    
}
function option()
{window.onbeforeunload = null;
window.location.assign("/CardStore/Add_to_cart.php")

}
</script>
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
<a href="\CardStore\wcard_templates.php"  class="LinkColor"><font face=Comic Sans MS>Wedding Cards</font></a>
<font  color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>Personalize</font>
</center><hr>

<form name="myform" method="post" action="\CardStore\customize.php" onsubmit="option()">
<center><legend><b><font face="Harrington" size="5" color="#00468C">Personalise your card</font></b></legend></center><br>
<label for="Vid" >Card Id:</label><input type="text" id="Vid" name="Vid"  value="<?php echo $_SESSION['cardID']; ?>" readonly><br><u><p>For Front Side</p></u>
<label for="bname" >Bride's Name:</label>
<input type="text" id="bname" name="bname" oninput="val0()" placeholder="First Name" size=25px><br>

<label for="Dpname">Daughter Of:</label>
<input type="text" id="Dpname" name="Dpname" oninput="val1()" placeholder="Ex: D/o Rajiv & Sanjana Khanna" size=25px><br>

<label for="gname">Groom's Name:</label>
<input type="text" id="gname" name="gname" oninput="val2()" placeholder="First Name" size=25px><br>


<label for="Gpname">Son Of:</label>
<input type="text" id="Gpname" name="Gpname" oninput="val3()" placeholder="Ex: S/o Saumesh & Nivedita Roy" size=25px><br>

<label for="req">Request Line:</label>
<input type="text" id="req" name="req" oninput="val10()" placeholder="Ex: Request the Honour Of.." size=25px><br>


<label for="wdate" >Wedding Date:</label>
<input type="text" id="wdate" name="wdate" oninput="val4()" placeholder="Ex: Wednesday 25th March,2016" size=25px><br>

<label for="evt" >Event Time:</label>
<input type="text" id="evt" name="evt" oninput="val5()" placeholder="Ex: at 8 PM" size=25px><br>

<label for="venue" >Venue:</label>
<textarea  id="venue" name="venue" oninput="val6()" rows="5" cols="26"></textarea><br>

<label for="ad" >Addtional Details:</label>
<input type="text" id="ad" name="ad" oninput="val7()" placeholder="Ex: Dress Code/No gifts accepted" size=25px><br>

<u><p>For Back Side</p></u>
<label for="Bname" >Bride's Name:</label>
<input type="text" id="Bname" name="Bname" oninput="val8()" placeholder="First Name" size=25px><br>

<label for="Gname" >Grooms's Name:</label>
<input type="text" id="Gname" name="Gname" oninput="val9()" placeholder="First Name" size=25px><br>
<br>
<center><input type="submit"onMouseover="this.style.background = '#A7F432'"  onMouseout="this.style.background = '#299617'"  VALUE="PROCEED TO BUY" disabled="true" id="pro" class="PROCEED_button"  ></input></center>
<br>
</form>
<br>
<div class="box" style="margin-left: auto;margin-right: auto;width:600px;">
<br>
<center style="display:block;color:white;background-color:#292a34;position:absolute;top:0px;width:90px;">Front</center>
<br>
<img src="\CardStore\images\purpF.jpg" height=600px width=550px >
<p id="e0" >Bride's Name</p><br>
<p id="e1" >Daughter of.......</p><br>
<p id="h1">And</p><br>
<p id="e2" >Groom's Name</p><br>
<p id="e3" >Son of.......</p><br>
<p id="e10">Add a Request Line.........</p><br>
<p id="e4" >Add a Wedding Date.........</p><br>
<p id="e5" >Add the Event Time.........</p><br>
<p id="h2" >--|Venue|--</p>
<p id="e6" >Add the Venue Details.........</p>
<p id="e7" >Add any Additional Detail.........</p>
<center style="display:block;color:white;background-color:#292a34;position:absolute;width:90px;">Back</center>
<br><br>
<img src="\CardStore\images\purpB.jpg" height=600px width=550px style="position=relative;"><br>
<br>
<p id="e8">Name</p>
<p id="h3">Weds</p>
<p id="e9">Name</p>
<center><input type="button" onMouseover="this.style.background = '#0067a7'" onMouseout="this.style.background = '#00477e'" onclick="approve()"
  value="APPROVE" class="APPROVE_button"></input></center>
<br></div><br>

<div class="about" >
<center><legend><b><font face="Harrington" size="5" color="#00468C">About this card</font></b></legend></center>
<p style="text-align:center;color: #E62E6B;"><b>This is a Flat Wedding Invitation Card with intricate designs in purple on a white background.Also it includes a free white Envelope!!<b></p>

<b><font color=#215097 size="3">Size</font></b>
<p style="text-align:center;color: #E62E6B;">5.25 x 7.25 inch Flat Card</p>
<b><font color=#215097 size="3">Number of Pages</font></b>
<p style="text-align:center;color: #E62E6B;">2 </p>
<b><font color=#215097 size="3">Paper Stock</font></b>
<p style="text-align:center;color: #E62E6B;">Premium Velvet.</p>
<p style="text-align:center;color:  #E62E6B;">Premium Pearl White Matte Paper</p>
<p style="text-align:center;color: #E62E6B;">Premium Glossy</p>
<b><font color=#215097 size="3">Price per card</font></b>
<p style="text-align:center;color: #E62E6B;">Rs 80</p><br></div><br>
</div>
 
<footer class="foot">
<ul class="under_footer">
	<li><font face=Forte><h3>Main Categories</h3></font></li><br>
	<li class="lnk" ><a href="vcard_templates.php" class="lnk_foot"><font face=Comic Sans MS>Visiting Cards</font></a></li><br>
	<li class="lnk"><a href="\CardStore\wcard_templates.php" class="lnk_foot"><font face=Comic Sans MS>Wedding Cards</font></a></li><br>
	<li class="lnk"><a href="tcard_templates.php" class="lnk_foot"><font face=Comic Sans MS>Thankyou Cards</font></a></li><br>
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
