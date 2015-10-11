

<body>

<center>
<?php
session_start();
 
if (isset($_SESSION['user']))
{
print"<br><br><br><br><br><br><br><br><br><br><br><br><a href=login.php>Thank you!</a><br><br>".$_SESSION['user'];
session_unset();
session_destroy();
}
else
print"<a href=login.php>Please Log in </a>";
 
?>
</center>

</body>
