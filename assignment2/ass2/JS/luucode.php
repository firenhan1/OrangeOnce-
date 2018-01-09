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
					            	<li class="link"><a href="register.html"><i class="fa fa-lock"></i> Đăng nhập</a></li>
					                <li class="link"><a href="register.html"><i class="fa fa-edit"></i> Đăng ký</a></li>
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
							    <form>
							        <div class="control-group">
							            <input class="search-field" placeholder="Tìm kiếm..." />

							            <ul class="categories-filter animate-dropdown">
							                <li class="dropdown">

							                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html"> All Categories</a>

							                    <ul class="dropdown-menu" role="menu" >
							                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">Laptop</a></li>
							                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">tv/audio</a></li>
							                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">Thời trang</a></li>
							                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">Ẩm thực</a></li>

							                    </ul>
							                </li>
							            </ul>

							            <a class="search-button" href="#" ></a>    

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
														echo count($_SESSION["addproducts"]); //add products number
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
														echo "$" .array_sum($_SESSION["total_price"]); //add products price
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
						                                <a href='cart.html' class='le-button inverse'>View cart</a>
						                            </div>
						                            <div class='col-xs-12 col-sm-6'>
						                                <a href='checkout.html' class='le-button'>Checkout</a>
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
								<a href="#">Trang chủ</a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle uppercase" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Sản phẩm<span class="caret"></span></a>
								<ul class="dropdown-menu nav-dropdown nav-submenu" role="menu">
						            <li><a href="#">Page 1-1</a></li>
						            <li><a href="#">Page 1-2</a></li>
						            <li><a href="#">Page 1-3</a></li>
						        </ul>
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
							<a href="#">Trang chủ</a>
						</li>
						<li class="drop-down">
							<a href="#" class="uppercase">Sản phẩm</a>
						 
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
							<a href="#">Đơn hàng</a>
						</li>
						<li class="uppercase">
							<a href="about.html">Công ty</a>
						</li>
						<li class="uppercase">
							<a href="blog.html">Blog</a>

						</li>
						<li class="uppercase">
							<a target="_blank" href="contact.html">Liên hệ</a>
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
   
<div class="panel panel-default address-form is-edit" style="display: block;">
	<div class="address_customer control-label">Địa chỉ giao hàng mới</div>
<div class="panel-body">
    <form class="form-horizontal bv-form" role="form" id="address-info" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
        <div class="form-group row">
            <label for="full_name" class="col-lg-4 control-label visible-lg-block">Họ tên </label>
            <div class="col-lg-8 input-wrap has-feedback has-success">
                <input type="text" name="full_name" class="form-control address" id="full_name" value="" placeholder="Nhập họ tên" data-bv-field="full_name"><i class="form-control-feedback bv-no-label fa fa-check" data-bv-icon-for="full_name" style=""></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="full_name" data-bv-result="VALID" style="display: none;">Vui lòng nhập Họ tên</small></div>
        </div>

        <div class="form-group row">
            <label for="telephone" class="col-lg-4 control-label visible-lg-block">Điện thoại di động</label>
            <div class="col-lg-8 input-wrap has-feedback has-success">
                <input type="tel" name="telephone" class="form-control address" id="telephone" value="" placeholder="Nhập số điện thoại" data-bv-field="telephone"><i class="form-control-feedback bv-no-label fa fa-check" data-bv-icon-for="telephone" style=""></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="telephone" data-bv-result="VALID" style="display: none;">Vui lòng nhập Số điện thoại</small><small class="help-block" data-bv-validator="regexp" data-bv-for="telephone" data-bv-result="VALID" style="display: none;">Số điện thoại không hợp lệ (chỉ chấp nhận số)</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="telephone" data-bv-result="VALID" style="display: none;">Số điện thoại chỉ được chứa 9 - 15 chữ số</small></div>
        </div>

        <input type="hidden" id="country_id" name="country_id" value="VN">
        <div class="form-group row" hidden="hidden">
            <label for="country_id" class="col-lg-4 control-label visible-lg-block">Quốc gia</label>
            <div class="col-lg-8 input-wrap">
                <select name="country_id" class="form-control address" id="country_id" disabled="disabled">
                    <option value="">Chọn Quốc gia</option>
                                            <option value="VN" selected="">Việt Nam</option>
                                            <option value="AU">Úc</option>
                                            <option value="US">Hoa Kỳ</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AE">Các Tiểu Vương quốc A-rập Thống nhất</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AG">Antigua và Barbuda</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AL">Albani</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AN">Tây Ấn Hà Lan</option>
                                            <option value="AO">Angola</option>
                                            <option value="AQ">Nam Cực</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AS">Đảo Somoa thuộc Mỹ</option>
                                            <option value="AT">Áo</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AX">Quần đảo Aland</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BA">Bô-xni-a Héc-xê-gô-vi-na</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BE">Bỉ</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BG">Bungari</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BI">Burundi</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BR">Bra-xin</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BV">Đảo Bouvet</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BZ">Bê-li-xê</option>
                                            <option value="CA">Ca-na-đa</option>
                                            <option value="CC">Quần đảo Cocos</option>
                                            <option value="CD">Congo - Kinshasa</option>
                                            <option value="CF">Cộng hòa Trung Phi</option>
                                            <option value="CG">Công-gô</option>
                                            <option value="CH">Thụy Sĩ</option>
                                            <option value="CI">Bờ Biển Ngà</option>
                                            <option value="CK">Quần Đảo Cook</option>
                                            <option value="CL">Chile</option>
                                            <option value="CM">Ca-mơ-run</option>
                                            <option value="CN">Trung Quốc</option>
                                            <option value="CO">Colombia</option>
                                            <option value="CR">Cốt-xta Ri-ca</option>
                                            <option value="CU">Cu Ba</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="CX">Đảo Giáng Sinh</option>
                                            <option value="CY">Síp</option>
                                            <option value="CZ">Cộng hòa Séc</option>
                                            <option value="DE">Đức</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DK">Đan Mạch</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Cộng hòa Dominica</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EE">Estonia</option>
                                            <option value="EG">Ai Cập</option>
                                            <option value="EH">Tây Sahara</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="ES">Tây Ban Nha</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FI">Phần Lan</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FK">Quần Đảo Falkland</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="FO">Quần Đảo Faroe</option>
                                            <option value="FR">Pháp</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GB">Vương quốc Anh</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GE">Georgia</option>
                                            <option value="GF">Quiana thuộc Pháp</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GL">Băng Đảo</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GQ">Guinea Xích Đạo</option>
                                            <option value="GR">Hy Lạp</option>
                                            <option value="GS">Quần đảo Nam Georgia và Nam Sandwich</option>
                                            <option value="GT">Goa-tê-ma-la</option>
                                            <option value="GU">Guam</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HK">Đặc khu hành chính Hồng Kông thuộc CHND Trung Hoa</option>
                                            <option value="HM">Đảo Heard và Quần đảo McDonald</option>
                                            <option value="HN">Hôn-đu-rát</option>
                                            <option value="HR">Croatia</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HU">Hungari</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IE">Ai-len</option>
                                            <option value="IL">Israel</option>
                                            <option value="IM">Đảo Man</option>
                                            <option value="IN">Ấn Độ</option>
                                            <option value="IO">Thuộc địa Anh tại Ấn Độ Dương</option>
                                            <option value="IQ">I-rắc</option>
                                            <option value="IR">I-ran</option>
                                            <option value="IS">Ai-xơ-len</option>
                                            <option value="IT">Ý</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JO">Jordan</option>
                                            <option value="JP">Nhật Bản</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="KH">Campuchia</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KM">Comoros</option>
                                            <option value="KN">Saint Kitts và Nevis</option>
                                            <option value="KP">Bắc Triều Tiên</option>
                                            <option value="KR">Hàn Quốc</option>
                                            <option value="KW">Cô-oét</option>
                                            <option value="KY">Quần Đảo Cayman</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="LA">Lào</option>
                                            <option value="LB">Li-băng</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="LR">LIberia</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LY">Li-bi</option>
                                            <option value="MA">Ma-rốc</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MD">Moldova</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MF">Saint Martin</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MH">Quần đảo Marshall</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="ML">Mali</option>
                                            <option value="MM">Myanmar [Miến Điện]</option>
                                            <option value="MN">Mông Cổ</option>
                                            <option value="MO">Đặc khu hành chính Macao thuộc CHND Trung Hoa</option>
                                            <option value="MP">Quần Đảo Bắc Mariana</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MT">Malta</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="MV">Maldives</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MX">Mê-hi-cô</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NE">Niger</option>
                                            <option value="NF">Đảo Norfolk</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NL">Hà Lan</option>
                                            <option value="NO">Na Uy</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NU">Niue</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="OM">Oman</option>
                                            <option value="PA">Pa-na-ma</option>
                                            <option value="PE">Peru</option>
                                            <option value="PF">Polynesia thuộc Pháp</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PH">Philippin</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PL">Ba Lan</option>
                                            <option value="PM">Saint Pierre và Miquelon</option>
                                            <option value="PN">Quần đảo Pitcairn</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="PS">Lãnh thổ Palestine</option>
                                            <option value="PT">Bồ Đào Nha</option>
                                            <option value="PW">Palau</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RS">Serbia</option>
                                            <option value="RU">Nga</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="SA">A-rập Xê-út</option>
                                            <option value="SB">Quần đảo Solomon</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SD">Xu-đăng</option>
                                            <option value="SE">Thụy Điển</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SJ">Svalbard và Jan Mayen</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SN">Senegal</option>
                                            <option value="SO">Somali</option>
                                            <option value="SR">Suriname</option>
                                            <option value="ST">São Tomé và Príncipe</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="SY">Syria</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="TC">Quần Đảo Turk và Caicos</option>
                                            <option value="TD">Chad</option>
                                            <option value="TF">Thuộc Địa Nam của Pháp</option>
                                            <option value="TG">Togo</option>
                                            <option value="TH">Thái Lan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TL">Đông Ti-mo</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TN">Tuy-ni-di</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TR">Thổ Nhĩ Kỳ</option>
                                            <option value="TT">Trinidad và Tobago</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="TW">Đài Loan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="UA">Ukraina</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UM">Các đảo nhỏ xa trung tâm thuộc Mỹ</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VA">Va-ti-căng</option>
                                            <option value="VC">Saint Vincent và Grenadines</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VG">Quần đảo Virgin thuộc Anh</option>
                                            <option value="VI">Quần đảo Virgin thuộc Mỹ</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="WF">Wallis và Futuna</option>
                                            <option value="WS">Samoa</option>
                                            <option value="YE">Yemen</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="ZA">Nam Phi</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                    </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="region_id" class="col-lg-4 control-label visible-lg-block">Tỉnh/Thành phố</label>
            <div class="col-lg-8 input-wrap has-feedback">
<!--                --><!--                    <input name="region" id="region_id" type="text" class="form-control address" value="--><!--" placeholder="Nhập Tỉnh/Thành phố">-->
<!---->
<!--                -->                    <select name="region_id" class="form-control address" id="region_id" data-bv-field="region_id">
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
<!--                -->            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="region_id" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng chọn Tỉnh/Thành phố</small></div>
        </div>

        <div class="form-group row">
            <label for="city_id" class="col-lg-4 control-label visible-lg-block">Quận/Huyện</label>
            <div class="col-lg-8 input-wrap has-feedback">
<!--                --><!--                    <input name="city" id="city_id" type="text" class="form-control address" value="--><!--" placeholder="Nhập Quận/Huyện">-->
<!---->
<!--                -->                <select name="city_id" class="form-control address" id="city_id" data-bv-field="city_id">
                    <option value="">Chọn Quận/Huyện</option>
                                            <option value="484">Quận 1</option>
                                            <option value="485">Quận 2</option>
                                            <option value="486">Quận 3</option>
                                            <option value="487">Quận 4</option>
                                            <option value="488">Quận 5</option>
                                            <option value="489">Quận 6</option>
                                            <option value="490">Quận 7</option>
                                            <option value="491">Quận 8</option>
                                            <option value="492">Quận 9</option>
                                            <option value="493">Quận 10</option>
                                            <option value="494">Quận 11</option>
                                            <option value="495">Quận 12</option>
                                            <option value="496">Quận Bình Tân</option>
                                            <option value="497">Quận Bình Thạnh</option>
                                            <option value="498">Quận Gò Vấp</option>
                                            <option value="499">Quận Phú Nhuận</option>
                                            <option value="500">Quận Tân Bình</option>
                                            <option value="501">Quận Tân Phú</option>
                                            <option value="502">Quận Thủ Đức</option>
                                            <option value="503">Huyện Bình Chánh</option>
                                            <option value="504">Huyện Cần Giờ</option>
                                            <option value="505">Huyện Củ Chi</option>
                                            <option value="506">Huyện Hóc Môn</option>
                                            <option value="507">Huyện Nhà Bè</option>
                    
<!--                    -->                </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="city_id" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="city_id" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng chọn Quận/Huyện</small></div>
        </div>

        <div class="form-group row">
            <label for="ward_id" class="col-lg-4 control-label visible-lg-block">Phường/Xã</label>
            <div class="col-lg-8 input-wrap has-feedback">
<!--                --><!--                    <input name="ward" id="ward_id" type="text" class="form-control address" value="--><!--" placeholder="Nhập Phường/Xã">-->
<!---->
<!--                -->                <select name="ward_id" class="form-control address" id="ward_id" data-bv-field="ward_id">
                    <option value="">Chọn Phường/Xã</option>
                                            <option value="10626">Phường Bình Chiểu</option>
                                            <option value="10627">Phường Bình Thọ</option>
                                            <option value="10628">Phường Hiệp Bình Chánh</option>
                                            <option value="10629">Phường Hiệp Bình Phước</option>
                                            <option value="10630">Phường Linh Chiểu</option>
                                            <option value="10631">Phường Linh Đông</option>
                                            <option value="10632">Phường Linh Tây</option>
                                            <option value="10633">Phường Linh Trung</option>
                                            <option value="10634">Phường Linh Xuân</option>
                                            <option value="10635">Phường Tam Bình</option>
                                            <option value="10636">Phường Tam Phú</option>
                                            <option value="10637">Phường Trường Thọ</option>
                    
<!--                    -->                </select><i class="form-control-feedback bv-no-label" data-bv-icon-for="ward_id" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ward_id" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng chọn Phường/Xã</small></div>
        </div>

        <div class="form-group row">
            <label for="street" class="col-lg-4 control-label visible-lg-block">Địa chỉ</label>
            <div class="col-lg-8 input-wrap has-feedback">
                <textarea name="street" class="form-control address" id="street" placeholder="Ví dụ: 52, đường Trần Hưng Đạo" data-bv-field="street"></textarea><i class="form-control-feedback bv-no-label" data-bv-icon-for="street" style="display: none;"></i>
                <span class="help-block"></span>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="street" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập Địa chỉ</small></div>
        </div>

                             
        
        <div class="form-group row">
            <div class="col-lg-offset-4 col-lg-8">
                <input type="hidden" name="address_id" value="2912516">
                                <button type="button" class="btn btn-default btn-custom2 visible-lg-inline-block js-hide">Hủy bỏ</button>
                                                <button id="btn-address" type="submit" class="btn btn-primary btn-custom3" value="update" onclick="bookproduct()">Xác nhận</button>
            </div>
        </div>
    </form>
</div>
</div>

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
			                <form role="form">
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
									<img src="../oo-logo.png" alt="Orang Once" class="img-logo img-responsive">
															
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
							        <h3>Thông tin khách hàng</h3>
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