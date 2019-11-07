<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "data";
    $con = mysqli_connect($host, $user, $pass, $dbname) or die ("Error");
    if (mysqli_connect_errno())
    {
        echo "Database Connect Failed : " . mysqli_connect_error();
    }
    else
    {
        echo "Database Connected.";
    }
    mysqli_query($con, "SET NAMES 'utf8'");
        mysqli_close($con);


    // $con = mysql_connect($host, $user, $pass) or die ("Error");
    // mysql_select_db($dbname, $con);
    // mysql_query("SET character set UTF8");
?>