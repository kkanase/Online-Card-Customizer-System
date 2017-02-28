<?php
include 'connect.php';
  if (isset($_POST['submit'])) {
	$_id=$_POST['id'];  
	$remove="delete from product where pID='$_id'";
	mysqli_query($connect,$remove);
	echo "product is deleted successfully";
    
  }
?>
<html>
<head>
<title>
CardStore---Homepage
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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #000080;
    color: white;
}

.content
{display:block;
width:100%;
height:auto;
background-color:white;
font-size:15px;
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

<center><b><font face="Lucida Calligraphy" color="#00BFFF" size="40px"><align="left">Product List</align></font></center></b><br />
<?php $sql = "SELECT * FROM product";
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>PRODUCT INITIALS</th>";
                echo "<th>PRODUCT NAME</th>";
				echo "<th>PRODUCT ID</th>";
                echo "<th>PRODUCT DESCRIPTION</th>";
                echo "<th>PRICE</th>";
				 echo "<th>PRIVILAGES</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_init'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['pID'] . "</td>";
                echo "<td>" . $row['p_desc'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
				echo "<td><form action='' method='POST'><input type=hidden name=id value='$row[pID]'><input type=submit class='btn btn-primary' name='submit' value='Remove'></form></td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}?>
<br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Add_product.php"><input type=button name="add" class="btn btn-primary " value="Add Product" /></a><br /><br />
</div><footer class="foot">
<ul class="under_footer">
	<li><font face=Forte><h3>Main Categories</h3></font></li><br>
	<li class="lnk" ><a href="vcard_templates.html" class="lnk_foot"><font face=Comic Sans MS>Visiting Cards</font></a></li><br>
	<li class="lnk"><a href="wcard_templates.html" class="lnk_foot"><font face=Comic Sans MS>Wedding Cards</font></a></li><br>
	<li class="lnk"><a href="#" class="lnk_foot"><font face=Comic Sans MS>Thankyou Cards</font></a></li><br>
</ul>
<ul class="under_footer">
        <li><font face=Forte ><h3>Customer Care</h3></font></li><br><br>
	<li><font face=Comic Sans MS color=#516ca1>Contact us at </font></li><br>
	<li><font face=Comic Sans MS color=#516ca1>cardstore@gmail.com</font></li><br>
	<li><font face=Comic Sans MS color=#516ca1>022-162866811</font></li><br>
</ul>
<ul class="under_footer">
	<li><font face=Forte><h3>About Cardstore</h3></font></li><br>
	<li class="lnk" ><a href="#" class="lnk_foot"><font face=Comic Sans MS>About us</font></a></li><br>
	<li class="lnk" ><a href="#" class="lnk_foot"><font face=Comic Sans MS>Cardstore Benefits</font></a></li><br>
		<li class="lnk" ><a href="#" class="lnk_foot"><font face=Comic Sans MS>Our Policy</font></a></li><br>
</ul><br>
<p style="clear:both;"><center><font face=Forte>&copy Copyright 2016</font></center></p>
</footer>
</div>
</body>
</html>
