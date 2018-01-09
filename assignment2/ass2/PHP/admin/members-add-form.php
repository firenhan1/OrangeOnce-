<?php  
  include 'model/connect.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["addmem"])) {
      /////lấy giá trị từ ô thông tin
    $username =$_POST["username"];
    $password = $_POST["password"];
    $sdt = $_POST["sdt"];
    $email =$_POST["email"];
    $pin = $_POST["pin"];

    
       if (!$mysqli_conn) {
           die("Connection failed: " . mysqli_connect_error());
       } else {
        $sqladdmem = "INSERT INTO members (username, password,sdt,email,pin) VALUES ('$username', '$password ', '$sdt ', '$email', '$pin')"; /// thực hiện truy vấn 
           
           if (mysqli_query($mysqli_conn, $sqladdmem)) {
               
           } else {
               echo "Error deleting record: " . mysqli_error($mysqli_conn);
           }
           mysqli_close($mysqli_conn);
       }   
         
       
    

  }
         
?>