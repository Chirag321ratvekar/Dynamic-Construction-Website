<?php
include('security.php');

if (isset($_POST['login_btn'])) {
$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
$sql2=mysqli_query($conn,$query);
$usertype=mysqli_fetch_array($sql2);

if ($usertype['usertype']=="admin") 
{
// $_SESSION['name']=$usertype['username'];
// $_SESSION['username']=$usertype['bid'];
 header('Location:index.php');
}

else
{
	$_SESSION['status']='Email id/Password is Invalid';
	header('Location:page-login.php');
}
}


?>