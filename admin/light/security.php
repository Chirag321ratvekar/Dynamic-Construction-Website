<?php

session_start();

require('dbconfig.php');

if ($dbconfig) 
{
	//echo "Database Connected";
}
else
{
	header('Location:dbconfig.php');
}

if (!$_SESSION['username']) 
{
header('Location: index.php');
}
?>