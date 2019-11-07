<?php
require('../ConnectDB.php');
session_start();
$em_id = $_SESSION['em_id'];
$q = "SELECT * FROM employee WHERE em_id LIKE '$em_id'";
$res = mysql_db_query($dbname, $q);
$row = mysql_fetch_array($res);
$selectQuery = 'SELECT * FROM dise_tbl';
$selectRes = mysql_db_query($dbname, $selectQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>หน้าสำหรับ User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="..\stylesheets\bootstrap.min.css">
    <script src="..\jquery\jquery.min.js"></script>
    <script src="..\jquery\popper.min.js"></script>
    <script src="..\jquery\bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="fix_user.css">
    <style>
        .tab-content {
            background-color: whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <img src="..\imgs\bg_navbar.png" class="img-fluid" alt="Responsive image">
        <!-- Nav tabs -->
        <div class="row">
            <div class="col-10">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Tab1">ประวัติการเบิกสวัสดิการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Tab2">เบิกสวัสดิการ</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="btn">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">ออกจากระบบ</button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">

            <!-- Tab1 หน้าประวัติการเบิกสวัสดิการ -->
            <div id="Tab1" class="tab-pane active"><br>
                <?php include("Tab1.php"); ?>
            </div>

            <!-- Tab2 หน้าเบิกสวัสดิการ -->
            <div id="Tab2" class="tab-pane fade">
                <?php include("Tab2.php"); ?>
            </div>

        </div>
    </div>
    <script>
        function selectorGen(key) {
            var select1 = document.getElementById('Select1').value;
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('Select2').innerHTML = this.responseText;
                }
            }
            xml.open('GET', '../Admin_page/admin_api_1.php?key=' + key, true);
            xml.send();
        }
    </script>
</body>

</html>