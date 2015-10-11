<html>
<head>

<body background="123.jpg">
<center>
<title>Sign Up</title>
<form action="register.php" method=get>
<body vlink=red alink=red link=red>
<table cellpadding=180 bgcolor=#F0F8FF>
<tr>
<td>
<table bgcolor=#F0F8FF>
<tr>
<td>
<p align = right><table>
<tr>
<td><a href="login.php"><img src="man.jpeg" height="40" width="40"><br/>Log In</a>
</table>
<tr>
<td colspan=2><font size="12"  color="black""">Sign Up Now 
<tr>
<td>

<table>
<tr>
<td colspan=2><font size="2" face="Verdana">Full Name
<tr>
<td colspan=2><input type=text name=lname placeholder="Last name" name style="width:200px; height:35px"><input type=text name=fname placeholder="First name" style="width:200px; height:35px"><input type=text name=mname placeholder="Middle name" style="width:200px; height:35px">
</table>

<tr>
<td>

<table>
<tr>
<td colspan=2><font size="2" face="Verdana">Username
<tr>
<td colspan=2><input type=text name=Username required style="width:300px; height:35px">
</table>	

<tr>
<td>

<table>
<tr>
<td colspan=2><font size="2" face="Verdana">Password
<tr>
<td colspan=2><input type=password name=Password required style="width:300px; height:35px">
</table>

	
		
<tr>
<td>

&nbsp
<p>&nbsp

<tr>
<td><p align="right">
<table>
<input type=submit value='Save Record' name='save' style="width:200px; height:35px; background-color:red; color:white;">
<input type=reset value=Clear name=go style="width:100px; height:35px; background-color:#82CAFF; color:white" >
	</table>
</form>
	
	<?php
		if(isset($_GET['save']))
		{
		$a=$_GET['Username'];
		$b=$_GET['Password'];
		$c=$_GET['fname'];
		$d=$_GET['mname'];
		$e=$_GET['lname'];
		include("connection.php");
		
		$k="select * from secur where Username='$a'";
		
		$res=mysql_query($k);
		
		$bilang=mysql_num_rows($res);
	
	if ($bilang==0)
	{
	$insert="insert into secur(Username,Password,First,Middle,Last)values('$a','$b','$c','$d','$e')";
	mysql_query($insert);
	print "<center>RECORD SAVED";
	}
	
	else{
	print"<center>Oops! $a already exist, try something else.";
	}
	
	
	}
	?>
		
	
</table>
</body>
</html>