<?php
    $dbname="constro";
    $conn = new mysqli('127.0.0.1','root','',$dbname);
    $dbconfig = mysqli_select_db($conn,$dbname);

    if($dbconfig)
    {
        //echo "Database Connected";
    }
    else
    {
        echo "Database Is Not Connected";
    }
?>