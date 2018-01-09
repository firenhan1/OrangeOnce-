<?php
include 'model/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["search2"])) {  
  
  {
    $searchpro=$_POST["search-pro"];
      $sqlsearch2 ="SELECT ID,type_id,productcode,productname,productimage,best,new,hot,salerate,normalprice,category_id FROM product WHERE productname LIKE '%$searchpro%'";
      $result = $mysqli_conn->query($sqlsearch2);

      if ($result->num_rows > 0) {
          echo "<table><tr><th>ID</th><th>type_id</th><th>productcode</th><th>productname</th><th>productimage</th><th>best</th><th>new</th><th>hot</th><th>salerate</th><th>normalprice</th><th>category_id</th><th>Delete</th><th>Edit</th></tr>";
        while($row = $result->fetch_assoc()) {
               
                      $idsearch = $row["ID"];
                      echo "<tr><td>".$row["ID"]." </td><td>".$row["type_id"]." </td><td>".$row["productcode"]."</td><td>".$row["productname"]." </td><td>".$row["productimage"]." </td><td>".$row["best"]." </td><td>".$row["new"]." </td><td>".$row["hot"]." </td><td>".$row["salerate"]." </td><td>".$row["normalprice"]." </td><td>".$row["category_id"]." </td><td><button class='delete' onclick='deletebtn($idsearch,2)'>Delete</button> </td><td><button class='edit' onclick='editproduct($idsearch)'>Edit</button> </td></tr>";
                   
              }	
          echo "</table>";               	
      } else {
          echo "0 results";
      }
  
  }    
} 
else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["allpro"])) {  
    $sql_pro = "SELECT ID,type_id,productcode,productname,productimage,best,new,hot,salerate,normalprice,category_id FROM product";
    $result = $mysqli_conn->query($sql_pro);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>type_id</th><th>productcode</th><th>productname</th><th>productimage</th><th>best</th><th>new</th><th>hot</th><th>salerate</th><th>normalprice</th><th>category_id</th><th>Delete</th><th>Edit</th></tr>";
        while($row = $result->fetch_assoc()) {
            $idpro = $row["ID"];
            echo "<tr><td>".$row["ID"]." </td><td>".$row["type_id"]." </td><td>".$row["productcode"]."</td><td>".$row["productname"]." </td><td>".$row["productimage"]." </td><td>".$row["best"]." </td><td>".$row["new"]." </td><td>".$row["hot"]." </td><td>".$row["salerate"]." </td><td>".$row["normalprice"]." </td><td>".$row["category_id"]." </td><td><button class='delete' onclick='deletebtn($idpro,2)'>Delete</button> </td><td><button class='edit' onclick='editproduct($idpro)'>Edit</button> </td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}   
      
 ?>