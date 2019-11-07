<?php 
require("../ConnectDB.php");
$key = $_GET['key'];

    $Query = "SELECT * FROM employee WHERE em_id LIKE '$key%' limit 100";
    $res = mysql_db_query($dbname, $Query);

    echo "<table class='table'>";
    echo "<thead class='thead-light'>";
    echo "<tr>
            <th>No.</th>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Manage</th>
          </tr>";

    $i = 1;
    while ($row = mysql_fetch_array($res)) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $row["em_id"] . "</td>";
            echo "<td>" . $row['em_name'] . "</td>";
            echo "<td>" . $row["em_pos"] . "</td>";
            echo "<td>";
            echo "<a href='Edit_Account.php?em_id=".$row['em_id']."'>";
            echo "<button type='submit' class='btn btn-primary' style='width:5em'>";
            echo "Edit";
            echo "</button>"; 
            echo "<a>";
            echo "&nbsp";
            echo "<button type='submit' class='btn btn-danger' style='width:5em'>";
            echo "Remove";
            echo "</button>";
            echo "</td>";
            echo "</tr>";
            $i++;
    }
        echo "</thead>";
        echo "</table>";
    ?>










