<?php
include 'model/connect.php';
$sqldon = "SELECT  id_cumtomer,namecustomer,productname,numbers,date_book FROM cart";
$result = $mysqli_conn->query($sqldon);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id_cumtomer</th><th>namecustomer</th><th>productname</th><th>numbers</th><th>date_book</th></tr>";
    while($row = $result->fetch_assoc()) {
       
       echo "<tr><td>".$row["id_cumtomer"]." </td><td>".$row["namecustomer"]."</td><td>".$row["productname"]." </td><td>".$row["numbers"]." </td><td>".$row["date_book"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>