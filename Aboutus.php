<?php 
session_start();
if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
header("Location:Login.php");
}
?><html>
<head>
<title>
CardStore---About Us !!
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
{color:white;
background-color:#00468C;
text-decoration :none;
}
</style>



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
<center><a href="Homepage.php" class="LinkColor"><font face=Comic Sans MS>Home</font></a>
<font color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>About Us</font></a></center><hr>
 
<br/><br/><br/><br/><br/><br/>
<div class="about" style="margin:30 auto;width:80%; padding:10px;font-size:16px;">

<center><h1><font face=Comic Sans MS color=#F7468A>About CardStore</font></h1></center>
<p><font face="Bradley Hand ITC" size=5 color=blue>Simply put, we provide you with top-quality printed products at affordable prices.

CARDSTORE, a Cimpress company, empowers millions of business owners worldwide to market themselves professionally.
</font></p>
<p> <font face="Bradley Hand ITC" size=5  color=blue>Our wide range of quality products at affordable prices, along with design tools suited to every skill level and need, mean everyone can create the customised materials they need to get their message across.</font></p>
 
<p><font face="Bradley Hand ITC" size=5  color=blue>Our commitment to helping you promote your business is stronger than ever. We’re confident you’ll be 100% satisfied with our products, quality, design experience and attentive service. In fact, it’s absolutely guaranteed.
</font>
</p>
</div>

 
<br/><br/><br/><br/><br/><br/>





















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
