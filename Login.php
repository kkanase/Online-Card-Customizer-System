<?php
include 'connect.php';

?><html>
<head>
<title>Sign In</title>
<meta name="viewport" content="width=device-width,initial scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>



.btn
{
color:	#b49d80;
background-color:#00468C;
padding:10px;
}
a
{
color:#1c6293	;	
text-decoration:none;
}
a: hover
{color:#292a34	;
text-decoration:none;
}
</style>


<script language="javascript" type="text/JavaScript">
function val()
{ 
if (document.myform.eid.value == "") 
{
    document.getElementById('error2').innerHTML="*An Email address is required*";
    return false;
}


else if(document.myform.eid.value != "") 
{var validemail =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
    if(!(validemail.test(document.myform.eid.value)))
    {
    document.getElementById('error2').innerHTML="*The email address '"+document.myform.eid.value+"' is not valid *";
    return false;
    }
    else
   {document.getElementById('error2').innerHTML="";
    }
}
    if (document.myform.pwd.value == "") 
    { 
     document.getElementById('error1').innerHTML="*A Password is Required*";
     return false;
    }
    else if (document.myform.pwd.value != ""&&document.myform.pwd.value.length>8) 
    { document.getElementById('error1').innerHTML="*Maximum 8 characters only *";
     return false;
    }
    else
    {document.getElementById('error1').innerHTML="";
    }
return true;
}

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
*/
</script>
</head>

<body  background ="\CardStore\images\backg.jpg" style="background-size:cover">
<br>
 <div class="jumbotron" style="background-color:#00468C;"><!--  #e8af01; -->
 
 <div class="container" style="color:white;" >
        <h1><font Face="Showcard Gothic"  size="25"><center>Cardstore<center></font></h1>
</div>
</div>
<div class="con" style="width=900px;margin:0 auto;">

 <!--form name ="myform" method="post" action="authenticate.php"onsubmit="return val();"> 
<!--label for="sign_in"></label><input type="radio" name="sign_in"  value="AdminLogin.php" onClick="gotolink()" />Admin Login!<br/-->
<!--label for="sign_in"></label><input type="radio" name="sign_in"  value="Login.php"  checked />Login!<br/> 
<label for="sign_in"></label><input type="radio" name="sign_in"  value="Register.php" onClick="gotolink()"/>New Customer,Lets Register!<br/><br/>
<label for="eid">Email address:</label><input type ="text" name="eid" id="eid"/><br/><br/>
<label for="pwd">Password: </label><input type ="password" name="pwd" /><br/><br/>
<label for="submit"></label><input type ="submit" name="submit" value="submit" class="btn"/>
</form-->

    <div class="container" >

      <form class="form-signin" name ="myform" method="post" action="authenticate.php"onsubmit="return val(); ">
        <h2 class="form-signin-heading"><font face="Harrington" size="7"><center><strong>Sign In</strong></center></font></h2>
        <div class="col-md-6 col-md-offset-3 centered"><label for="eid" class="sr-only">Email address</label>
        <input type="email" id="eid" name="eid" class="form-control" placeholder="Email address" autofocus><div id="error2" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /> 
		
		<br>
		
        <!--div class="col-xs-6"--><label for="pwd" class="sr-only">Password</label>
        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" ><div id="error1" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br /> 
        
        
        <!--button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button-->
		<label for="submit"></label><input type ="submit" name="submit" value="submit" class="btn btn-lg btn-block"  onMouseout="this.style.background = '#00468C';" onMouseover="this.style.background = '	#339ACC';color:black;"/>
      <br>
	  <a href="Register.php"  >New to CardStore? Lets Sign Up!</a>
	  <br>
	   <p style="position:relative;bottom:3px"><strong>Cardstore.com knows that you care how 
information about you is used and shared, 
and we appreciate your trust that we will 
do so carefully and sensibly.<strong></p>
</div></form>

	  
    </div>







</div>
</body>
</html>
