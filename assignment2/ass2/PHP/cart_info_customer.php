<!-- /*===================================================================================*/
/*  Cart Page 
/*===================================================================================*/ -->
<?php
	session_start(); //start session
	include 'model/connect.php' ; //include config file
?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<!-- Meta -->    
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="Accumsan Elit">
        <meta name="author" content="Ngo Thi Tien">
        <meta name="keywords" content="MediaCenter, Template, eCommerce,Accumsan Elit">
        <meta name="robots" content="all">

        <title>Cart Information Customer</title>
        <!--Awesome icons-->  
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="../CSS/font-awesome.min.css">
        <!-- Customizable CSS -->
        
        <link rel="stylesheet" href="../CSS/css_cart.css" type="text/css" />  <!--File css-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>       



        <!-- Icons/Glyphs -->          
        <link href="../CSS/css_single_product.css" rel="stylesheet" type="text/css" />  <!--File css-->
        
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />  
        <script src="../JS/javaScript_single_product.js"></script><!--File JavaScript-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--Font -->
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<!--header-->
		<meta name="distributor" content="Global" />	    
	    <meta name="robots" content="All" />
	    <meta name="revisit-after" content="7 days" />	
	    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" /> -->
		<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link href="../CSS/slider/responsive-slider.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../CSS/owl.carousel.css">
		<link rel="stylesheet" href="../CSS/owl.theme.default.css">		

  		<script type="text/javascript" src="../JS/add-to-cart.js"></script>
  		<link rel="stylesheet" type="text/css" href="../CSS/css_cart_info_customer.css" />
  		
  		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../CSS/bestseller.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		
		<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="../JS/add-to-cart.js"></script>
		<!-- Responesive-slider -->
	</head>
	</head>

	<body>
		
	<!-- ========================================= HEADER ========================================= --> 		
	
		
	<div class="oo-header">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="top-header-left">
						<ul class="link-header-left">
							<?php
								
								if (isset($_SESSION["email"]) && isset($_SESSION["password"])){
									$email = $_SESSION["email"];
									$password = $_SESSION["password"]; 
								echo "<li style='color:blue'>";
									echo "Welcome,  " .$_SESSION['email'];
								echo"</li>";
								echo"<li class='link'><a href='capnhainfo.php'><i class='fa fa-lock'></i> Quản lí tài khoản</a></li>";
								echo"<li class='link'><a href='dangxuat.php'><i class='fa fa-lock'></i> Đăng xuất</a></li>";
								}
								else {
									echo"<li class='link'><a href='register.php'><i class='fa fa-lock'></i> Đăng nhập</a></li>";
									echo"<li class='link'><a href='register.php'><i class='fa fa-edit'></i> Đăng ký</a></li>";
								}


							?>
						</ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="top-header-right">
						<ul class="link-header">
							
							<li class="link"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="link"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="link"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							
							<li class="link"><a href="#"><i class="fa fa-flickr"></i></a></li>
							<li class="link"><a href="#"><i class="fa fa-youtube"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
					<div class="oo-logo">
						<a href="index.html"><img src="../oo-logo.png" alt="Orang Once" class="img-logo img-responsive"></a>
						
					</div>

				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder ">
					<div class="contact-row">
						<div class="phone inline">
							<i class="fa fa-phone"></i> (+800) 123 456 7890
						</div>
						<div class="contact inline">
							<i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span>
						</div>
					</div>


					
					<div class="search-area">
						<form action="search-result-page.php" id="oo-search-form" method="get">
							<div class="control-group">
								<input type="text" class="search-field" id="search-keyword" name="search-keyword" placeholder="Tìm kiếm..." />

								<ul class="categories-filter animate-dropdown">
									

										

										<select id="select-category" name="select-category" class="dropdown-toggle"  data-toggle="dropdown">
											<option value="Tất cả" selected>Tất cả</option>
											<option value="Điện tử">Điện tử</option>
											<option value="Thời trang">Thời trang</option>
											<option value="Đồ gia dụng">Đồ gia dụng</option>
											<option value="Đồng hồ">Đồng hồ</option>
										</select>
											
								   
								</ul>

								<button type="submit" class="search-button"></button>  
								
							</div>
						</form>
						
					</div>
				</div>

				<div class='col-xs-6 col-sm-2 col-md-2 col-lg-2'>
					<div class='top-cart-holder'>

						<div class='basket'>
							
							<a href='#' id='cart-info'>
								
								<div class='basket-item-count'>
									<span class='amount'>
										<?php 
											if(isset($_SESSION["addproducts"])){
												echo count($_SESSION["addproducts"]); 
											}
											else{
												echo 0; 
											}
										?>
									</span>
									<img src='../images/icon-cart.png' alt='' >
								</div>

								<div class='total-price-basket'> 
									<span class='lbl'>Đơn hàng:</span>
									
									<span class='total-price'>
										<?php 
											if(isset($_SESSION["total_price"])){
												echo "$".array_sum($_SESSION["total_price"]); 
											}
											else{
												echo "$0"; 
											}
										?>
									</span>
								</div>
							</a>

							<ul class='dropdown-menu shopping-cart-box'>
								<a href="#" class="close-shopping-cart-box" >Close</a>
								<h3 class="cart-box-title">Your Shopping Cart</h3>
								<div id='shopping-cart-results'></div>


								<li class='checkout'>
									<div class='basket-item'>
										<div class='row'>
											<div class='col-xs-12 col-sm-6'>
												<a href='cart.php' class='le-button inverse'>View cart</a>
											</div>
											<div class='col-xs-12 col-sm-6'>
												<a href='cart_info_customer.php' class='le-button'>Checkout</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div><!-- /.basket -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="oo-megamenu ">
	<div class="container">
		
		<div class="xs-menu-cont">
			<a id="menutoggle"><i class="fa fa-align-justify"></i> Menu</a>
			<nav class="xs-menu displaynone">
				<ul>
					<li class="active1 uppercase">
						<a href="index.php">Trang chủ</a>
					</li>
					<li class="uppercase">
						<a  href="product.php" >Sản phẩm</a>	
					</li>
					<li class="uppercase">
						<a href="#" >Dịch vụ</a>
					</li>
					<li class="uppercase">
						<a href="#" >Đơn hàng</a>
					</li>
					<li class="uppercase">
						<a href="#">Công ty</a>
					</li>
					<li class="uppercase">
						<a href="#">Blog</a>
					</li>
					<li class="uppercase">
						<a href="#">Liên hệ</a>
					</li>

				</ul>
			</nav>
		</div>
		<nav class="menu">
			<ul>
				<li class="active1 uppercase">
					<a href="index.php">Trang chủ</a>
				</li>
				<li class="drop-down">
					<a href="product.php" class="uppercase">Sản phẩm</a>
				 
					<div class="mega-menu fadeIn animated">
						<div class="mm-3column">
							
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">Máy tính</a></li>
									<li><a href="#"> Desktops</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Tablets</a></li>
									<li><a href="#">Monitors</a></li>
									<li><a href="#">Networking Printers</a></li>
									<li><a href="#">Scanners</a></li>
									<li><a href="#">Jumpers &amp; Cardigans</a></li>
									<li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>
						
						</div>
						<div class="mm-3column">
							
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">Máy tính</a></li>
									<li><a href="#">Desktops</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Tablets</a></li>
									<li><a href="#">Monitors</a></li>
									<li><a href="#">Networking Printers</a></li>
									<li><a href="#">Scanners</a></li>
									<li><a href="#">Jumpers &amp; Cardigans</a></li>
									<li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>
						
						</div>
						<div class="mm-3column">
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">TV &amp; Video</a></li>
									
									<li><a href="#">LED TVs</a></li>
									<li><a href="#">Plasma TVs</a></li>
									<li><a href="#">3D TVs</a></li>
									<li><a href="#">DVD &amp; Blu-ray Players</a></li>
									<li><a href="#">Home Theater Systems</a></li>
									<li><a href="#">Cell Phones</a></li>
									<li><a href="#">Apple iPhone</a></li>
									<li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>							
						</div>
						<div class="mm-3column">
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">Phụ kiện</a></li>
									
									<li><a href="#">GPS &amp; Navigation</a></li>
									<li><a href="#">In-Dash Stereos</a></li>
									<li><a href="#">Speakers</a></li>
									<li><a href="#">Subwoofers</a></li>
									<li><a href="#">Amplifiers</a></li>
									<li><a href="#">MP3 Players</a></li>
									<li><a href="#">iPods</a></li>
									   <li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>
						</div>
						<div class="mm-3column">
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">Máy tính</a></li>
									
									<li><a href="#">Desktops</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Tablets</a></li>
									<li><a href="#">Monitors</a></li>
									<li><a href="#">Networking Printers</a></li>
									<li><a href="#">Scanners</a></li>
									<li><a href="#">Jumpers &amp; Cardigans</a></li>
									<li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>							
						</div>
						<div class="mm-3column">
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">TV &amp; Video</a></li>
									<li><a href="#">LED TVs</a></li>
									<li><a href="#">Plasma TVs</a></li>
									<li><a href="#">3D TVs</a></li>
									<li><a href="#">DVD &amp; Blu-ray Players</a></li>
									<li><a href="#">Home Theater Systems</a></li>
									<li><a href="#">Cell Phones</a></li>
									<li><a href="#">Apple iPhone</a></li>
									<li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>							
						</div>
						<div class="mm-3column">
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">TV &amp; Video</a></li>
									<li><a href="#">LED TVs</a></li>
									<li><a href="#">Plasma TVs</a></li>
									<li><a href="#">3D TVs</a></li>
									<li><a href="#">DVD &amp; Blu-ray Players</a></li>
									<li><a href="#">Home Theater Systems</a></li>
									<li><a href="#">Cell Phones</a></li>
									<li><a href="#">Apple iPhone</a></li>
									<li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>							
						</div>
						<div class="mm-3column">
							<div class="categories-list">
								<ul>
									<li class="mm-title"><a href="#">TV &amp; Video</a></li>
									<li><a href="#">LED TVs</a></li>
									<li><a href="#">Plasma TVs</a></li>
									<li><a href="#">3D TVs</a></li>
									<li><a href="#">DVD &amp; Blu-ray Players</a></li>
									<li><a href="#">Home Theater Systems</a></li>
									<li><a href="#">Cell Phones</a></li>
									<li><a href="#">Apple iPhone</a></li>
									<li><a class="mm-view-more" href="#">Chi tiết →</a></li>
								</ul>
							</div>							
						</div>
					</div>
		 
				</li>
				<li class="uppercase">
					<a href="#" >Dịch vụ</a>
				</li>
				<li class="uppercase">
					<a href="cart.php">Đơn hàng</a>
				</li>
				<li class="uppercase">
					<a href="about.php">Công ty</a>
				</li>
				<li class="uppercase">
					<a href="blog.php">Blog</a>

				</li>
				<li class="uppercase">
					<a target="_blank" href="contact.php">Liên hệ</a>
				</li>
				

			</ul>
			
		</nav>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown login">
				 <a href="register.html" class="dropdown-toggle uppercase" data-toggle="dropdown" role="button" aria-expanded="false">Tài khoản<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="register.html">Thông tin tài khoản</a></li>
					<li><a href="#">Đơn hàng</a></li>
					<li><a href="#">Thanh toán</a></li>
					<li class="divider"></li>
					<li><a href="#">Chăm sóc khách hàng</a></li>
				  </ul>
			</li>

		  </ul>
	</div>
</div>

		<div>
			<br>
			<br>
		</div>
	<!-- ========================================= HEADER END ================================ --> 

<!-- ========================================= CART ========================================= -->		
   <?php 
   	$fullname = null;
	$telephone = null;
	$email = null;
	$city = null;
	$address = null;

	$errofullname ="";
	$errotelephone ="";
	$erroemail ="";
	$errocity ="";
	$erroaddress ="";



$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;

	if($email != null){
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    echo "<script>alert('$email không đúng.');</script>";
			}
		}
	if($fullname != null){
		if (!preg_match('/^([a-zA-Z ])+$/',$fullname)) {
		  		$errofullname = "Tên chỉ chứa chữ cái và khoảng trắng"; 
			}
		}
	// if($lastname != null){
	// 	if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
	// 	  		$errolastname = "Only letters and white space allowed"; 
	// 		}
	// 	}


function test_input($number) {
	  $number = trim($number);
	  $number = stripslashes($number);
	  $number = htmlspecialchars($number);
	  return $number;
	}

	$fullname = null;
	$telephone = null;
	$email = null;
	$city = null;
	$address = null;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {//post
    if(isset($_POST["fullname"])) { $fullname = $_POST['fullname']; }
    if(isset($_POST["telephone"])) { $telephone = $_POST['telephone']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["city"])) { $city = $_POST['city']; }
    if(isset($_POST["address"])) { $address = $_POST['address']; }
    if( $fullname != null && $telephone != null && $email != null && $city != null && $address != null){//check and save information
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$erroemail ="$email không là địa chỉ hợp lệ.";
			}
		else{//else check email
			if (!preg_match('/^([a-zA-Z ])+$/',$fullname)) {
		  		$errofullname = "Tên chỉ chứa chữ cái và khoảng trắng"; 
			}
			else{//else check fullname
				$sql = "INSERT INTO cumtomer (namecustomer, phone, email,city,address)VALUES ('$fullname', '$telephone', '$email', '$city', '$address')";								
				 if (!($mysqli_conn->query($sql) === TRUE)) {
				 	echo "Error: " . $sql . "<br>" . $mysqli_conn->error;

			    } else {// else add table cart 
			    	// $id_cumtomer= mysqli_query($mysqli_conn,"SELECT `id_cumtomer`FROM `cumtomer` WHERE namecustomer = '$fullname' && phone = '$telephone' && email = '$email' && address = '$address'");

			    			//from database
							$id_cumtomer_results = $mysqli_conn->query("SELECT `id_cumtomer`FROM `cumtomer` WHERE namecustomer = '$fullname' && phone = '$telephone' && email = '$email' && address = '$address'");
							if (!$id_cumtomer_results){
								printf("Error: %s\n", $mysqli_conn->error);
								exit;
							}
							while ($row = $id_cumtomer_results->fetch_assoc()) {
							$id_cumtomer =$row['id_cumtomer'];
			   //  	while ($row = $id_cumtomer->fetch_assoc() ) {
						// $id_cumtomer =$row["id_cumtomer;"];
					}
			    if(isset($_SESSION["addproducts"])){ 
				// echo count($_SESSION["addproducts"]); //add products number
			    	$product_name ="";
					foreach($_SESSION["addproducts"] as $product){ //loop though items and prepare html content
			
					//set variables to use them in HTML content below
					$product_name = $product["productname"]; 	
					$soluong = $product["product_qty"];		        
			        $sql1 = "INSERT INTO cart (id_cumtomer, namecustomer, productname,numbers, date_book)VALUES ('$id_cumtomer', '$fullname', '$product_name','$soluong',CURDATE() )";
			        if (!($mysqli_conn->query($sql1) === TRUE)) {
				 	echo "Error: " . $sql1 . "<br>" . $mysqli_conn->error;
			    	}
				}//foreach
				//if (($mysqli_conn->query($sql1) === TRUE)) {
					unset($_SESSION["addproducts"]);
					unset($_SESSION["total_price"] );
					echo "<script>alert('Khách hàng đã đặt hàng thành công!');
					window.location.href='index.php?preUrl='+window.location.href;</script>";

				//}
			}
		   }// else add table cart 
		}//else check fullname

		}//else check email
		
    }//check and save information
    else 
    	{echo "<script>alert('Khách hàng vui lòng nhập đầy đủ thông tin.')</script>";}

}//post

   ?>
<script type="text/javascript">
            function submitComplete() {
               //window.location="/info.php";               
               var fullname = document.getElementById('fullname').value;
               var telephone = document.getElementById('telephone').value;
               var email = document.getElementById('email').value;
               var city = document.getElementById('city').value;
               var address = document.getElementById('address').value;

               if(fullname == ""){
                  document.getElementById('errofullname').innerHTML = "*Bắt buộc: Nhập tên khách hàng";
               }
               if(telephone == ""){
                  document.getElementById('errotelephone').innerHTML = "*Bắt buộc: Nhập số điện thoại của khách hàng";
               }
               if(email == ""){
                  document.getElementById('erroemail').innerHTML = "*Bắt buộc: Nhập email của khách hàng";
               }
               if(city == ""){
                  document.getElementById('errocity').innerHTML =  "*Bắt buộc: Nhập tỉnh/thành phố nhận sản phẩm";
               }
               if(address ==""){
                  document.getElementById('erroaddress').innerHTML = "*Bắt buộc: Nhập địa chỉ cụ thể nhận sản phẩm";
               //onMouseMove ="document.getElementById('demo').innerHTML = 'Hello JavaScript!'"
            	}      

		
         }
     webshims.setOptions('waitReady', false);
	 webshims.setOptions('forms-ext', {type: 'date'});	 
	 webshims.polyfill('forms forms-ext');


	function submitcheckComplete(){
		if(checkfullname() && checkEmail() ){
			alert('Complete!');
		}

	}
	function checkEmail() { 
	    var email = document.getElementById('email'); 
	    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
	    var result;
	    if (!filter.test(email.value)) { 
	             alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
	             email.focus; 
	            result = false; 
	    }	       
	    else {
	    	result= true;
	    }
	    return result;
	} 
	function checkfullname()
    {      
        var fullname = document.getElementById('fullname').value;
        if(fullname != ""){
		if (!preg_match('/^([a-zA-Z ])+$/',fullname)) {
		  		document.getElementById('errofullname').innerHTML = "Tên chỉ chứa chữ cái và khoảng trắng";
		  		fullname.focus; 
		  		result = false;  
			}
		else {result = true; }
		}
		else {result = false; }
	}
</script>
<form method="post" >	
	<div class="address_customer">Thông tin khách hàng:</div>
<div class="panel-body">
    <form class="form-horizontal bv-form" role="form" id="address-info" >
        <div class="form-group row">
            <label for="full_name" class="col-lg-4 control-label visible-lg-block">Họ tên </label>
            <div class="col-lg-8">
                <input type="text" name="fullname" class="form-control address" id="fullname" value="" placeholder="Nhập họ tên" data-bv-field="full_name" minlength="2" maxlength="30" onblur="checkfullname()" >
                <i class="form-control-feedback bv-no-label fa fa-check" data-bv-icon-for="full_name" style=""></i> <!-- icon check succeed -->
                <div><span class="erro"><?php echo $errofullname ?></span></div>
                <div id="errofullname" class="erro"></div>
            </div>
        </div>

        <div class="form-group row">
            <label for="telephone" class="col-lg-4 control-label visible-lg-block">Điện thoại di động</label>
            <div class="col-lg-8 input-wrap has-feedback has-success">
                <input type="tel" name="telephone" class="form-control address" id="telephone" value="" placeholder="Nhập số điện thoại" data-bv-field="telephone">

                <i class="form-control-feedback bv-no-label fa fa-check" data-bv-icon-for="telephone" style=""></i><!-- icon check succeed -->
                <div><span class="erro"><?php echo $errotelephone ?></span></div>
                <div id ="errotelephone" class="erro"></div>
           </div>
        </div>       




		<div class="form-group row">
            <label for="telephone" class="col-lg-4 control-label visible-lg-block">Email:
            </label>
            <div class="col-lg-8 input-wrap has-feedback has-success">                
                <input type="Email" id="email" class="font form-control" name="email" placeholder="abc@a-zA-Z.com">
                <i class="form-control-feedback bv-no-label fa fa-check" data-bv-icon-for="telephone" style=""></i><!-- icon check succeed -->
                <div><span class="erro"><?php echo $erroemail ?></span></div>
                <div id="erroemail" class="erro" ></div>
           </div>
        </div>  


				
        <div class="form-group row">
            <label  class="col-lg-4 control-label visible-lg-block">Tỉnh/Thành phố</label>
            <div class="col-lg-8 input-wrap has-feedback">
<!--                --><!--                    <input name="region" id="region_id" type="text" class="form-control address" value="--><!--" placeholder="Nhập Tỉnh/Thành phố">-->
<!---->
<!--                -->                    
		<select name="city" class="form-control address" id="city" data-bv-field="region_id">
                        <option value="">Chọn Tỉnh/Thành phố</option>
                                                    <option value="294">Hồ Chí Minh</option>
                                                    <option value="297">Hà Nội</option>
                                                    <option value="291">Đà Nẵng</option>
                                                    <option value="278">An Giang</option>
                                                    <option value="280">Bà Rịa - Vũng Tàu</option>
                                                    <option value="282">Bắc Giang</option>
                                                    <option value="281">Bắc Kạn</option>
                                                    <option value="279">Bạc Liêu</option>
                                                    <option value="283">Bắc Ninh</option>
                                                    <option value="284">Bến Tre</option>
                                                    <option value="285">Bình Dương</option>
                                                    <option value="286">Bình Phước</option>
                                                    <option value="287">Bình Thuận</option>
                                                    <option value="316">Bình Định</option>
                                                    <option value="289">Cà Mau</option>
                                                    <option value="290">Cần Thơ</option>
                                                    <option value="288">Cao Bằng</option>
                                                    <option value="293">Gia Lai</option>
                                                    <option value="295">Hà Giang</option>
                                                    <option value="296">Hà Nam</option>
                                                    <option value="299">Hà Tĩnh</option>
                                                    <option value="300">Hải Dương</option>
                                                    <option value="301">Hải Phòng</option>
                                                    <option value="319">Hậu Giang</option>
                                                    <option value="302">Hoà Bình</option>
                                                    <option value="320">Hưng Yên</option>
                                                    <option value="321">Khánh Hòa</option>
                                                    <option value="322">Kiên Giang</option>
                                                    <option value="323">Kon Tum</option>
                                                    <option value="304">Lai Châu</option>
                                                    <option value="306">Lâm Đồng</option>
                                                    <option value="305">Lạng Sơn</option>
                                                    <option value="324">Lào Cai</option>
                                                    <option value="325">Long An</option>
                                                    <option value="326">Nam Định</option>
                                                    <option value="327">Nghệ An</option>
                                                    <option value="307">Ninh Bình</option>
                                                    <option value="328">Ninh Thuận</option>
                                                    <option value="329">Phú Thọ</option>
                                                    <option value="308">Phú Yên</option>
                                                    <option value="309">Quảng Bình</option>
                                                    <option value="310">Quảng Nam</option>
                                                    <option value="311">Quảng Ngãi</option>
                                                    <option value="330">Quảng Ninh</option>
                                                    <option value="312">Quảng Trị</option>
                                                    <option value="313">Sóc Trăng</option>
                                                    <option value="331">Sơn La</option>
                                                    <option value="332">Tây Ninh</option>
                                                    <option value="333">Thái Bình</option>
                                                    <option value="334">Thái Nguyên</option>
                                                    <option value="335">Thanh Hóa</option>
                                                    <option value="303">Thừa Thiên Huế</option>
                                                    <option value="336">Tiền Giang</option>
                                                    <option value="314">Trà Vinh</option>
                                                    <option value="315">Tuyên Quang</option>
                                                    <option value="337">Vĩnh Long</option>
                                                    <option value="338">Vĩnh Phúc</option>
                                                    <option value="339">Yên Bái</option>
                                                    <option value="292">Đắk Lắk</option>
                                                    <option value="340">Đắk Nông</option>
                                                    <option value="341">Điện Biên</option>
                                                    <option value="317">Đồng Nai</option>
                                                    <option value="318">Đồng Tháp</option>
                            </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="region_id" style="display: none;"></i>
                            <div><span class="erro"><?php echo $errocity ?></span></div>
                            <div id = "errocity" class="erro"></div>
			</div>
        </div>


        <div class="form-group row">
            <label class="col-lg-4 control-label visible-lg-block">Địa chỉ</label>
            <div class="col-lg-8 input-wrap has-feedback"><!-- 

            	<input type="text" name="fullname" class="form-control address" id="fullname" value="" placeholder="Nhập họ tên" data-bv-field="full_name" minlength="2" maxlength="30" onblur="checkfullname()" >
 -->


                <input type="text" name="address" class="form-control address" id="address" value="" placeholder="Ví dụ: 52, đường Trần Hưng Đạo" data-bv-field="address"></input>
                <i class="form-control-feedback bv-no-label" data-bv-icon-for="street" style="display: none;"></i>
                <span class="help-block"></span>
                <div><span class="erro"><?php echo $erroaddress ?></span></div>
                <div id="erroaddress" class="erro"></div>
           </div>
        </div>

                             
        
        <div class="form-group row">
            <div class="col-lg-offset-4 col-lg-8">
                <input type="hidden" name="address_id" value="">
                               <!--  <button type="button" class="btn btn-default btn-custom2 visible-lg-inline-block js-hide">Hủy bỏ</button>
                                                <button id="btn-address" type="submit" class="btn btn-primary btn-custom3" value="Submit"  onclick="bookproduct()" onMouseMove ="submitComplete()">Xác nhận</button> -->


             <input class="btn btn-danger" type="reset" value="Reset">
			<input type="submit" class="btn btn-info" id="submitSave" value="Submit" name="submit" onMouseMove ="submitComplete()" onclick = "submitcheckComplete()">	
            </div>
        </div>
    </form>
</div>
</form>
<!-- ========================================= CART ========================================= -->


<!-- ========================================= script ========================================= --> 
<script>
	function bookproduct() {


	   	alert("Vui lòng xác nhận bạn muốn đặt hàng!");
	}
	function checkproduct() {
	    alert("Bạn muốn yêu cầu kiểm tra hàng!");    
	}
	function checkma() {
		var key = document.getElementById('key'); 
		    var filter = /^([a-zA-Z0-9_\.\-])+(([a-zA-Z0-9\-])+)+([a-zA-Z0-9]{2,4})+$/; 
		    var result;
		    if (!filter.test(key.value)) { 
		             alert('Vui lòng nhập key hợp lệ.');
		             key.focus; 
		            result = false; 
		    }	       
		    else {
		    	alert("Mã nhập hợp lệ!");
		    	result= true;
		    }
		    return result;    
	}

</script>
<!-- ========================================= script ========================================= --> 


<div class="oo-clearfixcart">		
	</div>
<!-- ========================================= CART PRODUCT ========================================= -->


<!-- ========================================= RECENTLY VIEWED ========================================= -->



	
<!-- ============================================================================================== 
 ========================================= FOOTER =========================================
 ================================================================================================= -->
  	<footer id="footer" class="color-bg">	
  		<div class="container">
  			<div class="sub-form-row">
		        <div class="container">
		            <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
		                <form>
		                    <input placeholder="Subscribe to our newsletter">
		                    <button class="le-button">Subscribe</button>
		                </form>
		            </div>
		        </div>
		    </div>

		    <div class="link-list-row">
		        <div class="container no-padding">
		            <div class="col-xs-12 col-md-4  col-sm-4 col-lg-4">
		                
						<div class="contact-info">
							<div class="oo-logo">
								<a href="index.html"><img src="../oo-logo.png" alt="Orang Once" class="img-logo img-responsive"></a>
														
							</div>
						    
						    
						    <div class="regular-bold"> Mọi tư vấn vui lòng liên hệ với chúng tôi qua điện thoại hoặc email
						    </div>
						    
						    <div class="regular-bold">
						       	268 Lý Thường Kiệt Street, Quận 10, TP.HCM
						        info@orangeonce.com (1-123-456-7890)
						    </div>
						    
						    

						</div>
					</div>
           

            		<div class="col-xs-12 col-md-8 no-margin  col-sm-8 col-lg-8">
                
						<div class="link-widget">
						    <div class="widget">
						        <h3>Mặt hàng</h3>
						        <ul>
						            <li><a href="#">Laptop &amp; Máy vi tính</a></li>
						            <li><a href="#">Điện thoại</a></li>
						            <li><a href="#">Thời trang</a></li>
						            <li><a href="#">Đồng hồ</a></li>
						            <li><a href="#">Đồ gia dụng</a></li>
						            <li><a href="#">Mỹ phẩm &amp; làm đẹp</a></li>
						            <li><a href="#">Sức khỏe</a></li>
						            <li><a href="#">Nội thất</a></li>
						        </ul>
						    </div>
						</div>

						<div class="link-widget">
						    <div class="widget">
						        <h3>Thông tin</h3>
						        <ul>
						            <li><a href="#">Tìm cửa hàng</a></li>
						            <li><a href="#">Về công ty</a></li>
						            <li><a href="#">Liên hệ</a></li>
						            <li><a href="#">Giảm giá</a></li>
						            <li><a href="#">Gift Cards</a></li>
						            <li><a href="#">Voucher</a></li>
						            <li><a href="#">Cộng đồng</a></li>
						            <li><a href="#">Tuyển dụng</a></li>

						        </ul>
						    </div>
						</div>

						<div class="link-widget">
						    <div class="widget">
						        <h3>Khách hàng</h3>
						        <ul>
						            <li><a href="#">Tài khoản</a></li>
						            <li><a href="#">Đặt hàng</a></li>
						            <li><a href="#">Danh sách sản phẩm</a></li>
						            <li><a href="#">Dịch vụ khách hàng</a></li>
						            <li><a href="#">Quay lại/Trao đổi</a></li>
						            <li><a href="#">FAQs</a></li>
						            <li><a href="#">Tư vấn sản phẩm</a></li>
						            <li><a href="#">Mở rộng dịch vụ</a></li>
						        </ul>
						    </div>
						</div>
					</div>
						          
       			</div>
    		</div>
    	</div>

    	<!-- ========================================= COPY RIGHT ========================================= -->
		    <div class="copyright-bar">
		        <div class="container">
		            <div class="col-xs-12 col-sm-6 no-margin">
		                <div class="copyright">
		                    &copy; <a href="index.html">Orange Once</a> - all rights reserved
		                </div><!-- /.copyright -->
		            </div>
		            <div class="col-xs-12 col-sm-6 no-margin">
		                <div class="payment-methods ">
		                    <ul>
		                        <li><img alt="" src="../images/payments/payment-visa.png"></li>
		                        <li><img alt="" src="../images/payments/payment-master.png"></li>
		                        <li><img alt="" src="../images/payments/payment-paypal.png"></li>
		                        
		                    </ul>
		                </div><!-- /.payment-methods -->
		            </div>
		        </div><!-- /.container -->
		    </div><!-- /.copyright-bar -->
		<!-- ========================================= COPY RIGHT ========================================= -->
	</footer>
<!-- ============================================================================================== 
 ========================================= FOOTER =========================================
 ================================================================================================= -->
	
	
	

		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../JS/javascript.js" type="text/javascript"></script>
		<script src="../JS/owl.carousel.min.js"></script>
	</body>
</html>