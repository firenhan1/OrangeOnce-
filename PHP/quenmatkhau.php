<?php include 'model/connect.php'; ?>
<?php
if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$email = $_POST["email1"];
		$pin = $_POST["pin"];
		$password2= $_POST["password2"];
		$cfpass = $_POST["cfpass1"];
		if ($email =="" ) {
			echo "Bạn vui lòng nhập email ";
			
		}else{
				$sql = "SELECT password,pin FROM members WHERE email ='$email'";
    								$result = $mysqli_conn->query($sql);

    								if ($result->num_rows > 0) {
									// output data of each row
        							while($row = $result->fetch_assoc()) {
                    		
                    						 $pini  = $row["pin"];
                    					
                				
       						 }
   				 } else {
						echo " Email bạn nhập không chính xác.<br/> ";
						echo "<meta http-equiv='refresh' content='2;url=giaodienquenmmatkhau.php'>";
   				 }
	}

		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($password2 != $cfpass || $pin !=$pini) {
			echo " Bạn vui lòng nhập đầy đủ thông tin và kiểm tra lại việc nhập mật khẩu và mã pin.";
			echo "<meta http-equiv='refresh' content='2;url=giaodienquenmmatkhau.php'>";
		}else{
			$sql = "UPDATE members SET password = '$password2' WHERE email='$email'";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($mysqli_conn,$sql);
			echo "Chúc mừng bạn đã đổi mật khẩu thành công";
			echo "<meta http-equiv='refresh' content='3;url=index.php'>";
			
		}
	}

?>