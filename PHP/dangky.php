<?php require_once("model/connect.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["password"];
		$sdt = $_POST["sdt"];
		$email = $_POST["email"];
		$pin = $_POST["pin"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $sdt == "" || $email == "" || $pin =="") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO members(username, password,sdt, email,pin) VALUES ('{$username}', '{$password}', '{$sdt}', '{$email}','{$pin}')";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($mysqli_conn,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
			echo "<meta http-equiv='refresh' content='3;url=index.php'>";
		}
	}
 
?>
