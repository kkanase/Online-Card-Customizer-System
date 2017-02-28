<?php
include 'connect.php';

?>

<html>
<head>
<title>Sign Up</title>
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
function vald()
{if (document.myform.eid.value == "") 
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
{ document.getElementById('error1').innerHTML="*A Password is Required*";
  return false;
}
else if (document.myform.pwd.value != "" && document.myform.pwd.value.length>8) 
{ document.getElementById('error1').innerHTML="*Maximum 8 characters only *";
  return false;
}
 else
    {document.getElementById('error1').innerHTML="";
    }
if (document.myform.cpwd.value == "") 
{ document.getElementById('error3').innerHTML="*Password confirmation is Required*";
  return false;
}
else if (document.myform.pwd.value != "") 
{ var a=document.myform.pwd.value
  var b=document.myform.cpwd.value
  if(!(a==b))
 {document.getElementById('error3').innerHTML="*Passwords are not matching*";
  return false;
 }

 else
    {document.getElementById('error3').innerHTML="";
    }
}
if (document.myform.fnam.value == "")
{   document.getElementById('error4').innerHTML="*Please enter your First name *";
    return false;
}
 else
    {document.getElementById('error4').innerHTML="";
    }
if (document.myform.lnam.value == "")
{   document.getElementById('error5').innerHTML="*Please enter your Last name *";
    return false;
}
 else
    {document.getElementById('error5').innerHTML="";
    }

if( document.myform.phn.value == "" )
         {
            document.getElementById('error6').innerHTML="*Please provide your Phone Number *";
            return false;
         }
    if( document.myform.phn.value != "" )
{
inputStr = myform.phn.value
   for (var i = 0; i < inputStr.length; i++) 
    {
        var oneChar = inputStr.substring(i, i + 1)
        if (oneChar < "0" || oneChar > "9"||inputStr.length<10) 
        {
            document.getElementById('error6').innerHTML="*Phone Number must contain only 10 numeric characters(0-9)*";
	    return false;
        }
        else
   	{
	   document.getElementById('error6').innerHTML="";
    	}
   }
}
    

if (document.myform.add.value == "") 
{ document.getElementById('error7').innerHTML="*An Address is Required*";
  return false;
}
else
    {document.getElementById('error7').innerHTML="";
    }
if (document.myform.cit.value == "") 
{ document.getElementById('error8').innerHTML="*Please enter a City *";
  return false;
}
else
    {document.getElementById('error8').innerHTML="";
    }
return true;
}

/*function gotolink()
 { 
var destination= self.location; 

for(var i = 0; i<document.myform.sign_in.length; i++)
{
  if(document.myform.sign_in[i].checked) {
    destination=document.myform.sign_in[i].value }
  }
window.location = destination;
}
*/


</script>
</head>

<body background ="\CardStore\images\backg.jpg" style="background-size:cover">
  <br>
  <div class="jumbotron" style="background-color:#00468C"><!--  #e8af01; -->
 <div class="container" style="color:white;" >
        <h1><font Face="Showcard Gothic"  size="25"><center>Cardstore<center></font></h1>
</div>
</div>
<div class="con" style="width=900px;margin:0 auto;">
<div class="container" >

      <form class="form-signin"name ="myform" action="regIn.php" method="post" onsubmit="return vald();"> 
        <h2 class="form-signin-heading"><font face="Harrington" size="7"><center><strong>Sign Up</strong></center></font></h2>
        <div class="col-md-6 col-md-offset-3 centered"><label for="eid" class="sr-only">Email address</label>
        <input type="email" id="eid" name="eid" class="form-control" placeholder="Email address" autofocus><div id="error2" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /> 
		
		<br>
		<label for="pwd" class="sr-only">Password</label>
        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" ><div id="error1" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br /> 
        
		<label for="cpwd" class="sr-only">Confirm Password</label>
        <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="Confirm Password" ><div id="error3" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br /> 
        
		<label for="fnam" class="sr-only">First Name</label>
        <input type="text" id="fnam" name="fnam" class="form-control" placeholder="First Name" ><div id="error4" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br /> 
        
		<label for="lnam"  class="sr-only">Last Name</label>
		<input type ="text" id="lnam" name="lnam" class="form-control" placeholder="Last Name"/><div id="error5" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br />
<label for="phn"  class="sr-only">Phone Number </label>
<input type ="text"  id="phn" name="phn" maxlength="10"class="form-control" placeholder="Phone Number"/><div id="error6" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br />
<label for="add"  class="sr-only">Address </label>
<textarea rows="5" cols="22" id="add" name="add" class="form-control" placeholder="Address"></textarea><div id="error7" style="color:#a6001a;display:inline;font-weight:bold;"></div><br /><br />
<label for="state" class="sr-only">State</label>
<select name="state" id="state" class="form-control">
    <option selected="" value="Default">-Your State-</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    
  </select></p><br>
    
<!--button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button-->
	<label for="submit"></label><input type ="submit" name="submit" value="submit" class="btn btn-lg btn-block"  onMouseout="this.style.background = '#00468C';" onMouseover="this.style.background = '	#339ACC';color:black;"/>
      <br>
	  <a href="Login.php"  >Returning Member?  Lets Sign In!</a>
	  <br>
	   <p style="position:relative;bottom:3px"><strong>Cardstore.com knows that you care how 
information about you is used and shared, 
and we appreciate your trust that we will 
do so carefully and sensibly.<strong></p>
</div></form>



</div>
<div>

</body>
</html>
