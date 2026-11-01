<!DOCTYPE html>
<html lang="en">

<?php
    require_once "settings.php";
    $dbconn = @mysql_connect ($host,$user,$pwd,$sql_db)
    if ($dbconn) {
        
        $query = "SELECT * FROM cars"; 
        $result = mysql_query ($dbconn, $query)
        if ($result) 
            while ($row = mysqli_fetch_assoc($result)) { //table headings
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";
        }
        else {echo "There are no cars to display"}
        
        mysql_close ($dbconn);

    } 
    else echo "<p>Unable to connect to the db.</p>"

?>