<?php 
include 'model/connect.php'; 
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["addpro"])) {

      /////lấy giá trị từ ô thông tin
    $type_id =$_POST["type_id"];
    $productcode = $_POST["productcode"];
    $productname = $_POST["productname"];
    $productimage =$_POST["productimage"];
    $best = $_POST["best"];
    $new = $_POST["new"];
    $hot = $_POST["hot"];
    $salerate = $_POST["salerate"];
    $normalprice = $_POST["normalprice"];
    $category_id = $_POST["category_id"];
    /////////////////////////
       if (!$mysqli_conn) {
           die("Connection failed: " . mysqli_connect_error());
       } else {
        $sqladdpro = "INSERT INTO product (type_id, productcode, productname,productimage,best,new,hot,salerate,normalprice,category_id) VALUES ('$type_id', '$productcode ', '$productname ', '$productimage', '$best', '$new', '$hot', '$salerate', '$normalprice', '$category_id')"; /// thực hiện truy vấn
           
           if (mysqli_query($mysqli_conn, $sqladdpro)) {
               
           } else {
               echo "Error deleting record: " . mysqli_error($mysqli_conn);
           }
           mysqli_close($mysqli_conn);
       }   
  }        
?>