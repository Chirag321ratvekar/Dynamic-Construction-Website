<?php
include('security.php');
require('functions.php');

//-----------------------------Delete Category(Product)-----------------------------
if ($_POST['delete']=="Deltest") 
{
	$id1=$_POST['id'];
	$sql="DELETE  FROM testmon WHERE id=$id1";

	if(mysqli_query($conn,$sql))
	{
		$_SESSION['Success']="Content Deleted from category";
		header("Location:testmonials.php");
		
	}
	else
	{
		$_SESSION['Status']="Content Not Deleted from category";
		header('Location:testmonials.php');
	}
}
//-----------------------------Delete Team(Product)-----------------------------
if ($_POST['delete']=="Delteam") 
{
	$id1=$_POST['id'];
	$sql="DELETE  FROM team WHERE id=$id1";

	if(mysqli_query($conn,$sql))
	{
		$_SESSION['Success']="Content Deleted from category";
		header("Location:team.php");
		
	}
	else
	{
		$_SESSION['Status']="Content Not Deleted from category";
		header('Location:team.php');
	}
}
//-----------------------------Delete project--------------------------------------------------
if ($_POST['delete']=="Delpro") 
{
	$id1=$_POST['id'];
	$sql="DELETE  FROM projects WHERE id=$id1";

	if(mysqli_query($conn,$sql))
	{
		$_SESSION['Success']="Content Deleted from category";
		header("Location:project-list.php");
		
	}
	else
	{
		$_SESSION['Status']="Content Not Deleted from category";
		header('Location:project-list.php');
	}
}
?>