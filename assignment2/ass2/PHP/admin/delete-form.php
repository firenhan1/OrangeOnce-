<?php  
   include 'model/connect.php';
    if(isset($_REQUEST["total"])) {
       
    $index = $_REQUEST["total"];
    
    
    if(isset($_REQUEST["retype"])){
        
     if($_REQUEST["retype"]==1){
        if (!$mysqli_conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            $sql = "DELETE FROM members WHERE id = $index";
            
            if (mysqli_query($mysqli_conn, $sql)) {
                
            } else {
                echo "Error deleting record: " . mysqli_error($mysqli_conn);
            }
            mysqli_close($mysqli_conn);
        } 
     }
     else if($_REQUEST["retype"]==2){
        if (!$mysqli_conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            $sql = "DELETE FROM product WHERE ID = $index";
            
            if (mysqli_query($mysqli_conn, $sql)) {
                
            } else {
                echo "Error deleting record: " . mysqli_error($mysqli_conn);
            }
            mysqli_close($mysqli_conn);
        } 
     } 
    }
    } 
      
?>