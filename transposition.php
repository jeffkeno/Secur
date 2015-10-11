



<keno>
<center>
<body background="123.jpg">
<?php
session_start();
if (isset($_SESSION['user']))
{
echo"
<br><br><br><br><br/><br/><form action=transposition.php method=post>
<body vlink red alink=red link=red>
<br/><br/><br/>
<table cellpadding=0 bgcolor=#F0F8FF>
<tr>
<td>
<table font bgcolor=#82CAFF size='16'>
<tr>
<td>
<p align = right><table>
<td colspan=2><font size=4 face=verdana>Transposition 1  <tr><td><input name=user style=width:200px; height:35px></td>
</tr>
<tr>
<tr>
<td colspan=2><input type=submit value=Enter name=enter style=width:70px; height:35px;><br></td>
</tr>
</table>

<table>
<tr>
<td><font size=4 face=verdana>Transposition 2  <tr><td><input name=userz style=width:200px; height:35px ><br></td>
</tr>
<tr>
<td colspan=2><input type=submit value=Enter name=enterz style=width:70px; height:35px;><br></td>
</tr>
</table>

</form>";




$g = $_SESSION['user'];
if (isset($_POST['enter']))
{
$a=$_POST['user'];

//get msg and convert letters to array or something like that
print "<br>Your Message was: $a";
print"<br>";
$a = strtolower($a);
$pieces2 = explode(" ", $a);
$arrlength2=count($pieces2);

for($h=0;$h<$arrlength2;$h++)
	{
		$arr1 = str_split($pieces2[$h],2);
		$arrlength=count($arr1);
			for($i=0;$i<$arrlength;$i++)
				{
				print strrev ("$arr1[$i]");	
				}
				
				print(" ");
	
	}	

print"<br><br><br>";


//print_r($arr1);
}
}
?>


<?php
if (isset($_POST['enterz']))
{
$z=$_POST['userz'];


//get msg and convert letters to array or something like that
print "Your Message was: $z";


print"<br><br><br>";
$z = strtolower($z);
$pieces = explode(" ", $z);
$arrlength=count($pieces);
for($x=0;$x<$arrlength;$x++)
	{
	print strrev("$pieces[$x]");
	print"<br><br><br>";
	
	}	
include ("connection.php");
$gg="UPDATE secur SET Input ='$z',Encrypted ='' WHERE Username = '$g'";
mysql_query($gg);

}
?>
<center><font color=#82CAFF size='16'><a href ='module.php'>BACK</a>


</keno>
</center>
</body>
</head>
