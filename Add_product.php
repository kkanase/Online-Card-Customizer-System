<?php
include 'connect.php';
?>

<html>
<head>
<title>Index page</title>
<meta name="viewport" content="width=device-width,initial scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<title>
CardStore---Homepage
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
   background-color:#00468C;
   color:white;
   padding:0px;  position:relative;
   
}

.foot
{  
  display:block;
   width:100%;
   min-height:auto;
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
#t1{
font-size:20px;
font-weight:bold;
color:#910690;
font-family:Lucida Calligraphy;
}
hr{
color:#910690;	
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
.dropdown-content 
{
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content a 
{
    color: black; background-color:white;
    padding: 12px 16px;z-index=5;
    text-decoration: none;
    display: block;
    font-family:Bradley Hand ITC;
    font-size:17px;
    font-style:bold;
    text-align: left;
}

.dropdown-content a:hover 
{background-color:CCCCFF;
}

.nav1:hover .dropdown-content
 {  
    display: block;
}

.content
{display:block;
width:100%;
height:auto;
background-color:white;
background: rgba(255,255,255,0.6);

}

.steps
{list-style-type:circle;
 list-style-position:inside;
font-family:Comic Sans MS;
font-size:20px;
display: block;
border-style:inset;
color:	#a0333a;
background-color:#DDE26A;
}
.o_steps
{padding:10px;
text-align:center;

}
.under_footer
{
   color:white;

list-style-type:none;
float:left;
}
 .lnk  .lnk_foot:hover 
{color: black;
background-color:#00468C;
text-decoration :none;}
.lnk a
{color:white;
background-color:#00468C;
text-decoration :none;
}
  
</style>
<script type=text/javascript>
function bigImg(x) {
    x.style.height = "200px";
    x.style.width = "280px";
}

function normalImg(x) {
    x.style.height = "100px";
    x.style.width = "180px";
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="\CardStore\images\grey-back.jpg" style="background-size:cover" >
<div id="wrapper" >
<div class="heads" >
<p class="acc_n_crt" align=right><span class="glyphicon glyphicon-user">&nbsp<a href="myaccount.php">My Account</a>&nbsp|&nbsp<span class="glyphicon glyphicon-shopping-cart">&nbsp<a href="\CardStore\cart.php" onclick="val();">My Cart</a>&nbsp|&nbsp<span class="glyphicon glyphicon-off">&nbsp<a href="\CardStore\logout.php">Logout</a>&nbsp&nbsp</p>
<p><font Face="Showcard Gothic"  size=25>CardStore</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Choose it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Design it</font></br><font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Buy it</font></p></p>
<form >

</div>
<body>
<div class="content">
<div class="row">
	<div class="col-lg-12" >
		<div class="panel-heading" style="background-color:#f2f2f2;">
								<div class="panel-title" align=center>Welcome<font style="font-family:Lucida Calligraphy;">&nbsp;&nbsp;Admin</font>
								</div>
				</div>
		<div class="panel-body">
						
				<div class="col-lg-12" >
		
							<div class="panel-heading" style="background-color:#f2f2f2;">
								<div class="panel-title" align=center>ADD PRODUCT
								</div>
							</div>
						
								<div class="panel-body">
<form action="upload.php" method="post" enctype="multipart/form-data">
   <p id="t1">Select Image To Upload:</p><br /><br />
    <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-primary "><hr>
	<p id="t1">Product Initial</p><br />
	<select name="productinitial" class="form-control">
    <option selected="" value="Default">--select product initial--</option>
    <option value="VC">VC</option>
    <option value="TC">TC</option>
    <option value="WC">WC</option>
  </select><hr>
	<p id="t1">Product Name</p><br />
    <input type="text" name="pname" class="form-control"><hr>
	<p id="t1">Product Description</p><br />
	<select name="productdesc" class="form-control">
    <option selected="" value="Default">--select product Description--</option>
    <option>Single Sided Business Card</option>
    <option>Flat Thank You Card</option>
    <option>Flat Wedding Invitation Card</option>
  </select><hr>
	<p id="t1">Image Name</p><br />
	<input type="text" name="iname" class="form-control"><hr>
	<p id="t1">Image Path</p><br />
	<input type="text" name="impath" value="images\" class="form-control" readonly><hr>
	<p id="t1">Paper Size</p><br />
	<input type="text" name="psize"class="form-control" ><hr>
	<p id="t1">Total Paper Sides</p><br />
	<input type="text" name="pside" value="2" class="form-control" readonly><hr>
	<p id="t1">Price</p><br />
	<input type="text" name="price" class="form-control" ><hr>
    <font face="Lucida Calligraphy"><input type="submit" class="btn btn-primary " value="Upload Product" name="submit"></font>
</form>
</div>
</div>				
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
<p style="clear:both;"><center><font face=Forte>&copy Copyright 2016</font></center></p>
</footer>
</div>
</body>
</html>
