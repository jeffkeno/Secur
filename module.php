
<html>
<head>

<body background="123.jpg">

<center>
<title>Home</title>
<form action="login.php" method=get>
<body vlink=#82CAFF alink=#82CAFF link=#82CAFF>

<p align = right><table>
<center>

<keno>

<?php
session_start();
if (isset($_SESSION['user']))
{
print"<br/><br/><br/><br/><br/>";	
echo "<font color=#82CAFF size='16'>WELCOME</font>";
echo "<font size='16'>
<br><br><br><br><br><a href='transposition.php'>Transposition</a><br><br><a href='morse.php'>Morse</a><br><br><a href='login.php'>Sign-out</a><br><br><br><br><br><br></font>";

}

else
echo "<font color=#82CAFF size='16'><p class='cc'><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Please log in to continue<br><br><a href=login.php>Log In</a></p></font>";


?>

</keno>

</body>
</html>