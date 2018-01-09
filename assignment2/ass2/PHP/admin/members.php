<?php
          
          include 'model/connect.php';
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["search1"])) {  
            $search_username =$_POST["search-mem"];
            {
                $sqlsearch1 = "SELECT  id,username,password,sdt,email,pin FROM members WHERE username LIKE '%$search_username%'";
                $result = $mysqli_conn->query($sqlsearch1);
        
                if ($result->num_rows > 0) {
                    echo "<table><tr><th>id</th><th>username</th><th>password</th><th>sdt</th><th>email</th><th>pin</th><th>Delete</th><th>Edit</th></tr>";
                    while($row = $result->fetch_assoc()) {
                        
                                $idsearch = $row["id"];
                                echo "<tr><td>".$row["id"]." </td><td>".$row["username"]."</td><td>".$row["password"]." </td><td>".$row["sdt"]." </td><td>".$row["email"]." </td><td>".$row["pin"]." </td><td><button class='delete' onclick='deletebtn($idsearch,1)'>Delete</button> </td><td><button class='edit' onclick='editmember($idsearch)'>Edit</button> </td></tr>";  
                             
                        }	
                    echo "</table>";               	
                } else {
                    echo "0 results";
                }
            
            }    
          } 
          else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["allmem"])) {  
            $sql_mem = "SELECT  id,username,password,sdt,email,pin FROM members";
            $result = $mysqli_conn->query($sql_mem);
  
            if ($result->num_rows > 0) {
                echo "<table><tr><th>id</th><th>username</th><th>password</th><th>sdt</th><th>email</th><th>pin</th><th>Delete</th><th>Edit</th></tr>";
                while($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                   echo "<tr><td>".$row["id"]." </td><td>".$row["username"]."</td><td>".$row["password"]." </td><td>".$row["sdt"]." </td><td>".$row["email"]." </td><td>".$row["pin"]." </td><td><button class='delete' onclick='deletebtn($id,1)'>Delete</button> </td><td><button class='edit' onclick='editmember($id)'>Edit</button> </td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
          }      
 ?>