<body background="123.jpg">
 
 <body> 
<keno>
<center>

 
 <?php
session_start();
if (isset($_SESSION['user']))
{
echo"<br/><br/><br/><br/><br/><br/><br/>
<form action=morse.php method=post>
<body vlink red alink=red link=red>
<table cellpadding=10 font bgcolor=#82CAFF size='16'>
<tr>
<td rowspan=2><font size=4 face=verdana><br>Enter Text to Encrypt: &nbsp<input name=user><br><center><input type=submit value=Enter name=enter style=width:200px; height:35px></td>
<br><br>
<br><td rowspan=2><font size=4 face=verdana><br>Enter Text to Decrypt: &nbsp<input name=userb><br><center><input type=submit value=Enter name=enterasd style=width:200px; height:35px></td>

</table>

<br><font color=#82CAFF size='16'><a href='module.php'>BACK</a>

<br><br><br>
</form>";


$g = $_SESSION['user'];
if (isset($_POST['enter']))
{
$a=$_POST['user'];
print "Your Message was: $a";
print"<br><br><br>";
$a = strtolower($a);
$x = str_replace(" ","/___/","$a");
$x = str_replace("a","/ .- /","$x");
$x = str_replace("c","/ -.-. /","$x");
$x = str_replace("d","/ -.. /","$x");
$x = str_replace("e","/ . /","$x");
$x = str_replace("f","/ ..-. /","$x");
$x = str_replace("g","/ --. /","$x");
$x = str_replace("h","/ .... /","$x");
$x = str_replace("i","/ .. /","$x");
$x = str_replace("j","/ .--- /","$x");
$x = str_replace("k","/ -.- /","$x");
$x = str_replace("l","/ .-.. /","$x");
$x = str_replace("m","/ -- /","$x");
$x = str_replace("n","/ -. /","$x");
$x = str_replace("o","/ --- /","$x");
$x = str_replace("p","/ .--. /","$x");
$x = str_replace("q","/ --.- /","$x");
$x = str_replace("r","/ .-. /","$x");
$x = str_replace("s","/ ... /","$x");
$x = str_replace("t","/ - /","$x");
$x = str_replace("u","/ ..- /","$x");
$x = str_replace("v","/ ...- /","$x");
$x = str_replace("w","/ .-- /","$x");
$x = str_replace("x","/ -..- /","$x");
$x = str_replace("y","/ -.-- /","$x");
$x = str_replace("z","/ --.. /","$x");

//final display
print"Result: ";
echo str_replace("b","/ 02 /","$x");
include ("connection.php");
$gg="UPDATE secur SET Input ='$a',Encrypted ='$x' WHERE Username = '$g'";
mysql_query($gg);
}
}
?>


<?php
if (isset($_POST['enterasd']))
{
$b=$_POST['userb'];
print "Your Message was: $b";
print"<br><br><br>";
$b = strtolower($b);

$x = str_replace("/___/"," ","$b");
$x = str_replace("/ .- /","a","$x");
$x = str_replace("/ -.-. /","c","$x");
$x = str_replace("/ -.. /","d","$x");
$x = str_replace("/ . /","e","$x");
$x = str_replace("/ ..-. /","f","$x");
$x = str_replace("/ --. /","g","$x");
$x = str_replace("/ .... /","h","$x");
$x = str_replace("/ .. /","i","$x");
$x = str_replace("/ .--- /","j","$x");
$x = str_replace("/ -.- /","k","$x");
$x = str_replace("/ .-.. /","l","$x");
$x = str_replace("/ -- /","m","$x");
$x = str_replace("/ -. /","n","$x");
$x = str_replace("/ --- /","o","$x");
$x = str_replace("/ .--. /","p","$x");
$x = str_replace("/ --.- /","q","$x");
$x = str_replace("/ .-. /","r","$x");
$x = str_replace("/ ... /","s","$x");
$x = str_replace("/ - /","t","$x");
$x = str_replace("/ ..- /","u","$x");
$x = str_replace("/ ...- /","v","$x");
$x = str_replace("/ .-- /","w","$x");
$x = str_replace("/ -..- /","x","$x");
$x = str_replace("/ -.-- /","y","$x");
$x = str_replace("/ --.. /","z","$x");

//final display
print"Result: ";
echo str_replace("/ 02 /","b","$x");
include ("connection.php");
$gg="UPDATE secur SET Input ='$b',Encrypted ='$x' WHERE Username = '$g'";
mysql_query($gg);


}
?>

</keno>
</center>
</body>



