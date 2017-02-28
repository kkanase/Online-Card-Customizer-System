<?php
include 'connect.php';
error_reporting(0);
session_start();
if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
header("Location:Login.php");
}

if($_SESSION['vctype']=='VC')
{$comp=$_POST['frs'];
$name=$_POST['fn'];
$designation=$_POST['des'];
$cont=$_POST['ct'];
$addr=$_POST['ad'];
$mailID=$_POST['eid'];
$pi=$_POST['Vid'];
$cid=$_SESSION['CustID'];
$str="INSERT INTO `vcustom`VALUES ('$pi','$cid','$comp','$name','$designation','$cont','$addr','$mailID')";
$vstore=mysqli_query($connect,$str);
}

if($_SESSION['wctype']=='WC')
	
	{
		$fbn=$_POST['bname'];
		$dof=$_POST['Dpname'];
		$fgn=$_POST['gname'];
		$sof=$_POST['Gpname'];
		$req=$_POST['req'];
		$wd=$_POST['wdate'];
		$wt=$_POST['evt'];
		$wv=$_POST['venue'];
		$adt=$_POST['ad'];
		$bbn=$_POST['Bname'];
		$bgn=$_POST['Gname'];
		$pi=$_SESSION['cardID'];
		$cid=$_SESSION['CustID'];
	
		$str2="INSERT INTO `wcustom`(`pID`, `CustID`, `F_bride`, `D_of`, `F_groom`, `S_of`, `Req`, `Wdate`, `Wtime`, `Wvenue`, `add_det`, `B_bride`, `B_groom`) 
		VALUES ('$pi','$cid','$fbn','$dof','$fgn','$sof','$req','$wd','$wt','$wv','$adt','$bbn','$bgn')";
		$wstore=mysqli_query($connect,$str2);
	}
	
 if($_SESSION['tctype']=='TC')
{$msg=$_POST['msg'];
$sal=$_POST['sal'];
$yname=$_POST['nm'];
$pi=$_SESSION['cardID'];
$cid=$_SESSION['CustID'];
$str1="INSERT INTO `tcustom`(`pID`, `CustID`, `s_mesg`, `salutation`, `s_name`)
VALUES ('$pi','$cid','$msg','$sal','$yname')";
$tstore=mysqli_query($connect,$str1);

}

?>
<html>
<head>
<title>
CardStore---Add to Cart!!
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
overflow-x:none;
}

form
{ margin: 3px;
    border: 1px solid #ccc;
    width: 80%;
    height:auto;
background-color:#E6E6FA;
text-align:center;
Font-family:Comic Sans MS;
margin:10 auto;
}

label
{display:inline-block;
text-align:left;
width:40%;

}
.cart_button
{width:200px;
height:30px;
background-color:#299617;
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

<script type="text/javascript">

function display_amt()
{
//var price = 1.50;
var price=<?php echo json_encode($_SESSION['price']); ?>;
 var quan = document.myform.qty.value;
var total=price*quan;
document.getElementById('t_amt').innerHTML=total;

}
function back()
{
	<?php  if($_SESSION['vctype']=='VC')
	{$del="DELETE FROM `vcustom` WHERE `pID`='$pi' AND `CustID`={$cid}";
	mysqli_query($connect,$del);
?>
window.location.assign("vcard_templates.php")
<?php } else if($_SESSION['wctype']=='WC'){?>window.location.assign("wcard_templates.php")
<?php } else  {?>window.location.assign("tcard_templates.php")
<?php } ?>
}
function added()
{
window.location.assign("cart.php")
}


</script>
</head>
<body background="\CardStore\images\grey-back.jpg" style="background-size:cover" onbeforeunload="return goback()" onpageshow="return display_amt()">
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
<a href=
"<?php if($_SESSION['vctype']=='VC'){echo "vcard_templates.php";}
else if ($_SESSION['wctype']=='WC'){echo "wcard_templates.php";}
else{ echo "tcard_templates.php";}?>"
    class="LinkColor"><font face=Comic Sans MS>
<?php if($_SESSION['vctype']=='VC'){echo "Visiting Cards";}
else if ($_SESSION['wctype']=='WC'){echo "Wedding Card";}
else{ echo "Thankyou Card";}?>
</font></a>
<font  color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>Add To Cart</font>
</center><hr>
<br><br><br>
<form name="myform" method='post' action='add.php'>
<center ><legend><b><font face="Harrington" size="5" color="#00468C"><u>Please Select Options Below</u></font></b></legend></center><br>

<center style="width:95%;">Paper Type</center>
<?php if($_SESSION['vctype']=='VC'){?>

<input type="radio" id="chk" name="chk" value="Normal Paper"  checked ><label for="chk" >Normal Paper 300 gsm art card.</label><br><br>
<input type="radio" id="chk" name="chk" value="Premium Pearl White Matte Paper "><label for=chk" >Premium Pearl White Matte Paper 350gsm.</label><br><br>
<input type="radio" id="chk" name="chk" value="Off-white Matte Paper "><label for="chk" >Off-white Matte Paper 250gsm.</label><br><br>

<?php } else if($_SESSION['tctype']=='TC'){?>

<input type="radio" id="chk" name="chk" value="Premium Glossy" checked><label for=chk" >Premium Glossy.</label><br><br>
<input type="radio" id="chk" name="chk" value="Premium White Matte Stock."><label for="chk" >Premium White Matte Stock.</label><br><br>
<input type="radio" id="chk" name="chk" value="Textured Paper."><label for="chk" >Textured Paper.</label><br><br>

<?php } else {?>
<input type="radio" id="chk" name="chk" value="Premium Velvet." checked><label for=chk" >Premium Velvet.</label><br><br>
<input type="radio" id="chk" name="chk" value="Premium Pearl White Matte Paper."><label for="chk" >Premium Pearl White Matte Paper.</label><br><br>
<input type="radio" id="chk" name="chk" value="Premium Glossy."><label for="chk" >Premium Glossy.</label><br><br>

<?php  }?>
Quantity&nbsp&nbsp&nbsp&nbsp
<select id="qty" name="qty" onchange="return display_amt()" >
<option>50</option>
<option>60</option>
<option>70</option>
<option>80</option>
<option>90</option>
<option>100</option>
<option>150</option>
<option>200</option>
<option>250</option>
<option>300</option>
<option>350</option>
<option>400</option>
<option>450</option>
<option>500</option>
</select><br><br>
<center></br>
<center><b>Card Id : </b> <?php echo $_SESSION['cardID'];?></center>
<hr>
Total Amount&nbsp&nbsp<span>Rs.</span><span id="t_amt"></span>
<hr>
<input type="button" onMouseover="this.style.background = '#A7F432'" onMouseout="this.style.background = '#299617'"  
 value="<< GO BACK" class="cart_button" onclick="back()"></input>&nbsp&nbsp
<input type="submit"  onMouseover="this.style.background = '#A7F432'"onMouseout="this.style.background ='#299617'"
value="ADD TO CART >>" class="cart_button" onclick="added()"></input></center>
<br>
</form>
<br><br><br>


 
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
