<?php
    
    require("..\ConnectDB.php");
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM login WHERE (em_id LIKE'$username') AND (em_pass LIKE'$password')";
    // $Query = mysql_db_query($dbname, $sql);
    // $res = mysql_fetch_array($Query);

    $Query = $con->query($sql);
    $res = $Query->fetch_assoc();

    if(!$res){
        echo "<script>alert('Username หรือ Password ไม่ถูกต้อง!');";
        echo "window.history.back()";
        echo "</script>";
        
        exit();
    }else{
        session_start();
        $_SESSION["em_type"] = $res["em_type"];
        $_SESSION['em_id'] = $res['em_id'];

        if($res["em_type"] == "admin")
        {
            header("Location:/Admin_page/page_admin2.php");
        }else
        {
            header("Location:/User_page/page_user2.php");
        }
    }
?>