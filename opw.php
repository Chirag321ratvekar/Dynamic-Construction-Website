<?php 
    include("admin/light/dbconfig.php");
    include('admin/light/security.php');
    require('admin/light/functions.php');

    if ($_POST['Update']=="send")
    {
        $sql="INSERT INTO contact(namec,emailc,subjectc,msgc) VALUES('$_POST[namec]','$_POST[emailc]','$_POST[subjectc]','$_POST[msgc]')";
        if(mysqli_query($conn,$sql))
        {
            // echo "success";
            header('Location:contact2.php');
        }
        else{
            echo "Failed";
        }
    }


?>