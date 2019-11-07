<?php
require('../ConnectDB.php');
$key = $_GET['key'];
$q = "select * from symp_tbl where dise_id like '$key'";
$res = mysql_db_query($dbname,$q);
while($row = mysql_fetch_array($res)){
    echo "<option>".$row['symp_name']."</option>";
}