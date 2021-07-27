<?php
include('security.php');
require('functions.php');
?>
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="https://www.wrraptheme.com/templates/hexabit/html/assets/images/icon-light.svg" width="48" height="48" alt="HexaBit"></div>
            <p>Wait Admin We'r Presenting....</p>        
        </div>
    </div>

    
<?php
// $id1 = $_POST['id'];
$url=$_SERVER['HTTP_REFERER'];
////////////////////////////////////////// ADD TEAM ///////////////////////////////////////////////////////////
if ($_POST['Update']=="Addteam")
{
	$target="image/".$_FILES['img']['name'];
	if(is_uploaded_file($_FILES['img']['tmp_name']))
	{
		$image=$_FILES['img']['tmp_name'];
		$image2=$_FILES['img']['name'];
	}
    $target2="image/".$_FILES['img2']['name'];
    if(is_uploaded_file($_FILES['img2']['tmp_name']))
	{
		$image3=$_FILES['img2']['tmp_name'];
		$image4=$_FILES['img2']['name'];
	}    
	$sql="INSERT INTO team (img,img2,name,position) VALUES('$image2','$image4','$_POST[name]','$_POST[position]')";
	if(mysqli_query($conn,$sql))
	{
		if(move_uploaded_file($image,$target)&&move_uploaded_file($image3,$target2))
			poutput("new content added in Testimonial",$url);
		else
			noutput("new content not added in Testimonial",$url);
	}
	else
		noutput("new content not added in Testimonial",$url);

}
////////////////////////////////////// ADD TESTMONIAL //////////////////////////////////////////////////////////
if ($_POST['Update']=="Addtest")
{
	$target="image/".$_FILES['imgtest']['name'];
	if(is_uploaded_file($_FILES['imgtest']['tmp_name']))
	{
		$image=$_FILES['imgtest']['tmp_name'];
		$image2=$_FILES['imgtest']['name'];
	}
    $target2="image/".$_FILES['imgtest2']['name'];
    if(is_uploaded_file($_FILES['imgtest2']['tmp_name']))
	{
		$image3=$_FILES['imgtest2']['tmp_name'];
		$image4=$_FILES['imgtest2']['name'];
	}    
	$sql="INSERT INTO testmon (imgtest,imgtest2,name,testmoni) VALUES('$image2','$image4','$_POST[name]','$_POST[testmoni]')";
	if(mysqli_query($conn,$sql))
	{
		if(move_uploaded_file($image,$target)&&move_uploaded_file($image3,$target2))
			poutput("new content added in Testimonial",$url);
		else
			noutput("new content not added in Testimonial",$url);
	}
	else
		noutput("new content not added in Testimonial",$url);

}
////////////////////////////////// ADD Projects //////////////////////////////////////////////////////////////////////////
if ($_POST['Update']=="Addpro")
{
	$target="image/".$_FILES['imgp']['name'];
	if(is_uploaded_file($_FILES['imgp']['tmp_name']))
	{
		$image=$_FILES['imgp']['tmp_name'];
		$image2=$_FILES['imgp']['name'];
	}
	$sql="INSERT INTO projects (imgp,namep,des) VALUES('$image2','$_POST[namep]','$_POST[des]')";
	if(mysqli_query($conn,$sql))
	{
		if(move_uploaded_file($image,$target))
			poutput("new content added in Testimonial",$url);
		else
			noutput("new content not added in Testimonial",$url);
	}
	else
		noutput("new content not added in Testimonial",$url);

}
?>
