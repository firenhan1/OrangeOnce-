<?php  
include 'model/connect.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["totalife"])) {
      /////lấy giá trị từ ô thông tin
    $username =$_POST["username"];
    $password = $_POST["password"];
    $sdt = $_POST["sdt"];
    $email =$_POST["email"];
    $pin = $_POST["pin"];
    /////////////////////////
    $s1= $s2 =$s3 =$s4 =$s5 ="";//////////// tạo giá trị tạm thời để lưu câu truy vấn
    $scount = 0;//// tạo biến đếm số lượng phần tử cần sửa trong câu truy vấn
       if (! empty($_POST["username"])) {////// kiếm tra phần tử 1
        
        $s1 = "username='$username'";
        $scount =+1;
           
       }
       if (! empty($_POST["password"])) {////// kiếm tra phần tử 2
        if($scount >=1){
            $s2 = ",password='$password'";
        }
        else{
            $s2 = " password='$password'";
        }
        
        $scount =+1;
       }
       if (! empty($_POST["sdt"])) {////// kiếm tra phần tử 3
        if($scount >=1){
            $s3 = ",sdt='$sdt'";
        }
        else{
            $s3 = " sdt='$sdt'";
        }
        
        $scount =+1;
       }
       if (! empty($_POST["email"])) {////// kiếm tra phần tử 4
        if($scount >=1){
            $s4 = ",email='$email'";
        }
        else{
            $s4 = " email='$email'";
        }
        
        $scount =+1;
           
       }
       if (! empty($_POST["pin"])) {////// kiếm tra phần tử 5
        if($scount >=1){
            $s5 = ",pin ='$pin' ";
        }
        else{
            $s5 = "pin ='$pin' ";
        }
        $scount =+1;
       }
       
       if( $scount >0){ ///////////// kiểm tra rỗng hay không
       if(isset($_REQUEST["totalife"])) {
       $index2 = $_REQUEST["totalife"];
       if (!$mysqli_conn) {
           die("Connection failed: " . mysqli_connect_error());
       } else {
        $sqledit = "UPDATE members SET  $s1 $s2 $s3 $s4 $s5 WHERE id='$index2'"; /// thực hiện truy vấn 
           
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