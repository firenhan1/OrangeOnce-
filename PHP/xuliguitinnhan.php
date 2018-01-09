<?php include 'model/connect.php' ;?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$name = $_POST["name"];
		$email = $_POST["email"];
		$chude = $_POST["chude"];
		$loinhan = $_POST["loinhan"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($name == "" || $email=="" || $chude =="" || $loinhan =="") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO contact(name,email,chude,loinhan) VALUES ('{$name}', '{$email}', '{$chude}', '{$loinhan}')";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($mysqli_conn,$sql);
			echo "Cảm ơn bạn đã góp ý ";
			echo "<meta http-equiv='refresh' content='3;url=index.php'>";
			
		}
	}
 
?>
