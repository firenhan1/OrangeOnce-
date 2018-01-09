<?php
	//Gọi file connection.php ở bài trước
	require_once("model/connect.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$email = $_POST["email"];
		$password = $_POST["password"];

		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$email = strip_tags($email);
		$email = addslashes($email);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($email == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "SELECT email,password,sdt FROM members WHERE email = '$email' AND password='$password'";
			$query = mysqli_query($mysqli_conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				session_start();
				$_SESSION["email"] = $email;
				$_SESSION["password"]= $password;
                header('Location: index.php');
			}
		}
	}
?>