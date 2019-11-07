<style>
        th,
        td {
                text-align: center;
        }
        /* button{
                width: 5em;
        } */
</style>
<?php
require("../ConnectDB.php");

$Query = "SELECT * FROM employee ORDER BY em_id ASC limit 100" or die("Error:" . mysql_error());
$res = mysql_db_query($dbname, $Query);

echo "<table id='tableGroup' class='table'>";
echo "<thead class='thead-light'>";
echo "<tr>
        <th>No.</th>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Manage</th>
      </tr>";
      
// $i = 1;
// while ($row = mysql_fetch_array($res)) {

//         echo "<tr>";
//         echo "<td>" . $i . "</td>";
//         echo "<td>" . $row["em_id"] . "</td>";
//         echo "<td>" . $row['em_name'] . "</td>";
//         echo "<td>" . $row["em_pos"] . "</td>";
//         echo "<td>";

//         echo '<a href="Edit_Account.php">';
//         echo "<button type='button' class='btn btn-primary' style='width:5em'>Edit</button>";
//         echo '</a>';
//         // echo '<a href="Edit_Account.php"><button type="button" class="btn btn-primary" style="width:5em">Edit</button></a>';
//         echo "&nbsp";
//         echo "<button type='submit' class='btn btn-danger' style='width:5em'>";
//         echo "Remove";
//         echo "</button>";
//         echo "</td>";
//         echo "</tr>";
//         $i++;
// }
        echo "</thead>";
        echo "</table>";
        
?>