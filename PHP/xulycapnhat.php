<?php require_once("model/connect.php"); ?>
<?php
if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$uusername = $_POST["user"];
		$upassword = $_POST["pass"];
		$usdt = $_POST["sdt1"];
		$uemail = $_POST["email1"];
		$upin = $_POST["pin1"];
		$cfpass=  $_POST["cfpasswordi"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($uusername == "" || $upassword != $cfpass || $usdt == "" || $uemail == "" || $upin =="" ) {
			echo "Bạn vui lòng nhập đầy đủ thông tin và kiểm tra lại việc nhập mật khẩu";
			
		}else{
			$sql = "UPDATE members SET username='$uusername',password = '$upassword', email='$uemail', sdt= '$usdt', pin = '$upin' WHERE email='$uemail'";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($mysqli_conn,$sql);
			echo "Chúc mừng bạn đã cap nhat thành công";
			
		}
	}

?>