<?php
session_start(); //start session
include 'model/connect.php' ; //include config file
unset($_SESSION['Musername']);
unset($_SESSION['Mpassword']);

// define variables and set to empty values
$Err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"]) || empty($_POST["password"])) {
	$Err = "Tài khoản của bạn không hợp lệ";
  } else {
		$sqladmin = "SELECT  username,password FROM admin";
		$result = $mysqli_conn->query($sqladmin);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if( $row["username"]== $_POST["username"] && $row["password"]== $_POST["password"]){
					$_SESSION['Musername'] =$_POST["username"];
					$_SESSION['Mpassword'] =$_POST["password"];
					header("location: ./admin.php");
				}	
			}
			$Err = "Tài khoản của bạn không hợp lệ";	
		} else {
			echo "0 results";
		}
    
    }    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
</style>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style.huuly.register.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.nam.registeradmin.css" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link href="../CSS/slider/responsive-slider.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../CSS/owl.carousel.css">
	<link rel="stylesheet" href="../CSS/owl.theme.default.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
	<!-- Responesive-slider -->
	
	
	<title>ORANGE Once - Hot Deals</title>
	<script type="text/javascript" src="../JS/add-to-cart.js"></script>
	<script type="text/javascript" src="../JS/search-form.js"></script>
</head>

	<body>

    <div class="container">
		<div class="row">	
			
				<section class="section-admin">
				    <div class="title-tab">
					<h2 class="sign-up-tit"> Đăng Nhập</h2>	
					</div>		
					<div class="note-tab">
					<p class="note">* Dành riêng cho admin, nếu bạn không phải admin mời thoát ra!</p>	
					</div>		
					<form class="login-form" action="register-admin.php" method="POST">
						<div class="field-row">
                            <label>Username</label>
                            <input type="text" class="le-input" name="username">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Password</label>
                            <input type="password" class="le-input" name="password">
                        </div><!-- /.field-row -->
						<div class="warning">
						<span class="error"><?php echo $Err;?></span>
                        </div>
                        <div class="submit-tab">
                            <button type="submit" class="btn1" name="btn_submit">Login admin</button>
                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->
				</section><!-- /.sign-in -->
			
            </div><!-- /.row -->
            </div><!-- /.container -->
    </body>
</html>