<?php 
include 'connect.php';
session_start();
if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
header("Location:Login.php");
}?>
<html>
<head>
<title>
CardStore---Visiting Card Templates !!
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
.dropdown-content 
{
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content a {
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
{background-color: CCCCFF;

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
font-family:Forte;
font-size:15px;
overflow: auto;

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
 div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
    height:auto;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
    font-size:20;
    font-family:Comic Sans MS;background-color:#F7468A;
    color:#FBE7B2;
} 

</style>
<script type=text\javascript>
function bigImg(x) {
    x.style.height = "200px";
    x.style.width = "280px";
}

function normalImg(x) {
    x.style.height = "100px";
    x.style.width = "180px";
}
</script>
</head>
<body background="images\grey-back.jpg" style="background-size:cover">
<div id="wrapper">
<div class="heads" >
<p class="acc_n_crt" align=right><span class="glyphicon glyphicon-user">&nbsp<a href="#">My Account</a>&nbsp|&nbsp<span class="glyphicon glyphicon-shopping-cart">&nbsp<a href="\CardStore\cart.php" onclick="val();">My Cart</a>&nbsp|&nbsp<span class="glyphicon glyphicon-off">&nbsp<a href="\CardStore\logout.php">Logout</a>&nbsp&nbsp</p>
<p><font Face="Showcard Gothic"  size=25>CardStore</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Choose it</font></br>
<font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Design it</font></br><font Face="FORTE"  size=4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp....Buy it</font></p></p>
<form >

</div>

<ul style="list-style-type:none;background-color:#28304d;display:block;margin:0;padding:0;width:900px;height:60px;">
	<li class="nav2"><a href="Homepage.php">Home</a></li>
	<li class="nav1"><a href="#" class="drop">Category</a>
 		<div class="dropdown-content" style="z-index:20;">
      			<a href="\CardStore\vcard_templates.php">Visiting Cards</a>
      			<a href="\CardStore\wcard_templates.php">Wedding Cards</a>
      			<a href="\CardStore\tcard_templates.php">Thank You Cards</a>
    		</div></li>
	<li class="nav2"><a href="\CardStore\AboutUs.php">About Us</a></li>
</ul>
<div class="content">
<h2><font size=11 color=#F7468A face="Comic Sans MS">&nbsp&nbsp&nbspThankyou Cards</font></h2><br>

<?php 
$retrieveTC="SELECT * FROM `product` WHERE `p_init`='TC'";
$resultTC=mysqli_query($connect,$retrieveTC);

$num=1;
$link_address="Personalization\PersonalizationT0";
$extn=".php";
while($row=mysqli_fetch_array($resultTC))
{?>

<div class="img_gallery" style="margin-left: auto;margin-right: auto;width:650px;">
<div class="img"><a target="_blank" href="<?php echo $link_address.$num.$extn;?>"><img src="<?php echo $row['imgPath'].$row['imgName'];?>" style="width:300px; height:200px;"></a>
<div class="desc">Select Design</div>
</div>
</div>

<?php $num++;}
?>
<div style="clear:both;">
<br/><br/><br/><br/>
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
