<?php  
include 'model/connect.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["productlife"])) {

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
    $s1= $s2 =$s3 =$s4 =$s5 = $s6= $s7 =$s8 =$s9 =$s10= "";//////////// tạo giá trị tạm thời để lưu câu truy vấn
    $scount = 0;//// tạo biến đếm số lượng phần tử cần sửa trong câu truy vấn
       if (! empty($_POST["type_id"])) {////// kiếm tra phần tử 1
        
        $s1 = "type_id='$type_id'";
        $scount =+1;
           
       }
       if (! empty($_POST["productcode"])) {////// kiếm tra phần tử 2
        if($scount >=1){
            $s2 = ",productcode='$productcode'";
        }
        else{
            $s2 = " productcode='$productcode'";
        }
        
        $scount =+1;
       }
       if (! empty($_POST["productname"])) {////// kiếm tra phần tử 3
        if($scount >=1){
            $s3 = ",productname='$productname'";
        }
        else{
            $s3 = " productname='$productname'";
        }
        
        $scount =+1;
       }
       if (! empty($_POST["productimage"])) {////// kiếm tra phần tử 4
        if($scount >=1){
            $s4 = ",productimage='$productimage'";
        }
        else{
            $s4 = " productimage='$productimage'";
        }
        
        $scount =+1;
           
       }
       if (! empty($_POST["best"])) {////// kiếm tra phần tử 5
        if($scount >=1){
            $s5 = ",best ='$best' ";
        }
        else{
            $s5 = "best ='$best' ";
        }
        $scount =+1;
       }
       if (! empty($_POST["new"])) {////// kiếm tra phần tử 6
        if($scount >=1){
            $s6 = ",new ='$new' ";
        }
        else{
            $s6 = "new ='$new' ";
        }
        $scount =+1;
       }
       if (! empty($_POST["hot"])) {////// kiếm tra phần tử 7
        if($scount >=1){
            $s7 = ",hot ='$hot' ";
        }
        else{
            $s7 = "hot ='$hot' ";
        }
        $scount =+1;
       }
       if (! empty($_POST["salerate"])) {////// kiếm tra phần tử 8
        if($scount >=1){
            $s8= ",salerate ='$salerate' ";
        }
        else{
            $s8 = "salerate ='$salerate' ";
        }
        $scount =+1;
       }
       if (! empty($_POST["normalprice"])) {////// kiếm tra phần tử 9
        if($scount >=1){
            $s9 = ",normalprice ='$normalprice' ";
        }
        else{
            $s9 = "normalprice = '$normalprice' ";
        }
        $scount =+1;
       }
       if (! empty($_POST["category_id"])) {////// kiếm tra phần tử 10
        if($scount >=1){
            $s10 = ",category_id ='$category_id' ";
        }
        else{
            $s10 = "category_id ='$category_id' ";
        }
        $scount =+1;
       }
       
       if( $scount >0){ ///////////// kiểm tra rỗng hay không
       if(isset($_REQUEST["productlife"])) {
       $index2 = $_REQUEST["productlife"];
       if (!$mysqli_conn) {
           die("Connection failed: " . mysqli_connect_error());
       } else {
        $sqledit = "UPDATE product SET  $s1 $s2 $s3 $s4 $s5 $s6 $s7 $s8 $s9 $s10  WHERE ID='$index2'"; /// thực hiện truy vấn 
           
           if (mysqli_query($mysqli_conn, $sqledit)) {
               
           } else {
               echo "Error deleting record: " . mysqli_error($mysqli_conn);
           }
           mysqli_close($mysqli_conn);
       }   
       }   
       
    }

  }
         
?>