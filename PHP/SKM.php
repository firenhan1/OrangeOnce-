<?php
	session_start(); //start session
	include 'model/connect.php' ; //include config file
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		
	    
	    <meta name="robots" content="All" />
	    <meta name="revisit-after" content="7 days" />
	    <meta name="description" content="The source of truly unique and awesome jquery plugins." />
	    <meta name="keywords" content="slider, carousel, responsive, swipe, one to one movement, touch devices, jquery, plugin, bootstrap compatible, html5, css3" />
	    <meta name="author" content="w3widgets.com">
	    
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
		<link rel="stylesheet" type="text/css" href="../CSS/bestseller.css" />
		<link rel="stylesheet" type="text/css" href="../CSS/product.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link href="../CSS/slider/responsive-slider.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../CSS/owl.carousel.css">
		<link rel="stylesheet" href="../CSS/owl.theme.default.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Responesive-slider -->
		
  		
		<title>ORANGE Once - Hot Deals</title>
		<script type="text/javascript" src="../JS/add-to-cart.js"></script>
	</head>

	<body>
<!-- ============================================================================================== 
 ========================================= HEADER =========================================
 ================================================================================================= --> 
		

		<!-- ========================================= TOP- HEADER ========================================= -->
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

		<!-- ========================================= MEGA MENU ========================================= -->

<!-- ============================================================================================== 
 ========================================= HEADER =========================================
 ================================================================================================= --> 







<!-- ============================================================================================== 
 ========================================= CONTENT =========================================
 ================================================================================================= -->
 		<div class="oo-content">
 			<div class="container">
 				<div class="row">
 			<!-- ========================================= LEFT SIDEBAR ========================================= -->
 					<div class="col-xs-12 col-md-3 no-margin col-sm-3 col-lg-3 sidebar">
 						
 						<div class="left-sidebar">


 				<!-- ==================================== CATEGORY =================================== -->			
							<div class="nav-side-menu">
							    <div class="brand uppercase">Danh mục sản phẩm</div>
							    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
							  
							    <div class="menu-list">
							  
							        <ul id="menu-content" class="menu-content collapse out">
							            <li>
							                <a href="SKM.php">
							                	<i class="fa fa-fire fa-lg"></i>Siêu khuyến mãi
							                </a>
							            </li>

							            <li  data-toggle="collapse" data-target="#Electronics" class="collapsed active">
							                <a href="dien-tu.php"><i class="fa fa-laptop fa-lg"></i>Điện tử<span class="arrow"></span></a>
							            </li>
							            <li>
									        <ul class="sub-menu collapse" id="Electronics">
									           	<li class="active2"><a href="#">Laptop &amp; Máy vi tính</a></li>
									            <li class="active2"><a href="#">Điện thoại</a></li>
									            <li class="active2"><a href="#">Máy tính bảng</a></li>
									            <li class="active2"><a href="#">Máy ảnh</a></li>
									            <li class="active2"><a href="#">Camera</a></li>
									            <li class="active2"><a href="#">Tivi</a></li>
									            <li class="active2"><a href="#">Game</a></li>
									            <li class="active2"><a href="#">Phụ kiện</a></li>
									        </ul>
								    	</li>


								        <li data-toggle="collapse" data-target="#fashion" class="collapsed active">
								            <a href="thoi-trang.php"><i class="fa fa-globe fa-lg"></i> Thời trang <span class="arrow"></span></a>
								        </li>
								        <li>  
									        <ul class="sub-menu collapse" id="fashion">
										        <li class="active2"><a href="#">Thời trang nam</a></li>
										        <li class="active2"><a href="#">Thời trang nữ</a></li>
										       
									        </ul>
									    </li>
								        <li  data-toggle="collapse" data-target="#dongho" class="collapsed active">
							                <a href="dong-ho.php"><i class="fa fa-clock-o fa-lg"></i>Đồng hồ<span class="arrow"></span></a>
							            </li>
							            <li>
									        <ul class="sub-menu collapse" id="dongho">
									           	
									            <li class="active2"><a href="#">Đồng hồ nam</a></li>
									            <li class="active2"><a href="#">Đồng hồ nữ</a></li>
									            <li class="active2"><a href="#">Đồng hồ dây da</a></li>
									            <li class="active2"><a href="#">Đồng hồ chống nước</a></li>
									            <li class="active2"><a href="#">Đồng hồ trẻ em</a></li>
									            
									        </ul>
									    </li>
								        <li  data-toggle="collapse" data-target="#dogiadung" class="collapsed active">
							                <a href="do-gia-dung.php"><i class="fa fa-plug fa-lg"></i>Đồ gia dụng<span class="arrow"></span></a>
							            </li>
							            <li>
									        <ul class="sub-menu collapse" id="dogiadung">
									           	
									            <li class="active2"><a href="#">Tủ lạnh</a></li>
									            <li class="active2"><a href="#">Bếp nấu</a></li>
									            <li class="active2"><a href="#">Lò vi sóng</a></li>
									            <li class="active2"><a href="#">Dụng cụ làm bếp</a></li>
									            <li class="active2"><a href="#">Dọn dẹp &amp; vệ sinh</a></li>
									            
									        </ul>
									    </li>
								        <li  data-toggle="collapse" data-target="#beautiful" class="collapsed active">
							                <a href="my-pham.php"><i class="fa fa-gift fa-lg"></i>Mỹ phẩm &amp; làm đẹp<span class="arrow"></span></a>
							            </li>
							            <li>
									        <ul class="sub-menu collapse" id="beautiful">
									           	<li class="active2"><a href="#">Nước hoa</a></li>
									            
									            <li class="active2"><a href="#">Máy tạo kiểu tóc</a></li>
									            <li class="active2"><a href="#">Dụng cụ trang điểm</a></li>
									            <li class="active2"><a href="#">Chăm sóc da</a></li>
									            <li class="active2"><a href="#">Chăm sóc toàn thân</a></li>
									            <li class="active2"><a href="#">Chăm sóc da mặt</a></li>
									            <li class="active2"><a href="#">Chăm sóc cho nam</a></li>
									        </ul>
									    </li>
								        <li  data-toggle="collapse" data-target="#health" class="collapsed active">
							                <a href="suc-khoe.php"><i class="fa fa-heart fa-lg"></i>Sức khỏe<span class="arrow"></span></a>
							            </li>
							            <li>
									        <ul class="sub-menu collapse" id="health">
									           	
									            <li class="active2"><a href="#">Thực phẩm chức năng</a></li>
									            <li class="active2"><a href="#">Dinh dưỡng cho người lớn</a></li>
									            <li class="active2"><a href="#">Dinh dưỡng cho trẻ em</a></li>
									            <li class="active2"><a href="#">Thực phẩm bổ sung</a></li>
									            
									        </ul>
									    </li>
								        <li>
								            <a href="noi-that.php"><i class="fa fa-bed fa-lg"></i> Nội thất</a>
								        </li>
								        

								        <li>
								            <a href="am-thuc.php">
								                <i class="fa fa-cutlery fa-lg"></i> Ẩm thực &amp; Nhà hàng
								            </a>
								        </li>

								        <li>
								            <a href="giai-tri.php">
								                <i class="fa fa-film fa-lg"></i> Giải trí
								            </a>
								        </li>
								        
								        <li>
								            <a href="book.php">
								                <i class="fa fa-book fa-lg"></i> Sách
								            </a>
								        </li>
								        <li>
								            <a href="du-lich.php">
								                <i class="fa fa-plane fa-lg"></i> Du lịch
								            </a>
								        </li>
								        <li>
								            <a href="bach-hoa.php">
								                <i class="fa fa-home fa-lg"></i> Bách hóa gia đình
								            </a>
								        </li>
								        <li>
								            <a href="khac.php">
								                <i class="fa fa-users fa-lg"></i> Khác
								            </a>
								        </li>
							        </ul>
							   	</div>
							</div>
	 					</div>

	 					<!-- ==================================== CATEGORY =================================== -->


	 				<!-- ==================================== SEARCH FILTER =================================== -->	

	 					<div class="widget">
						    <h1>Lọc sản phẩm</h1>
						    <div class="body bordered">
						        
						        <div class="category-filter">
						            <h2>Nhãn hiệu</h2>
						            <hr>
						            <ul>
						                <li><input checked="checked" class="le-checkbox" type="checkbox"  /> <label>Samsung</label> <span class="pull-right">(2)</span></li>
						                <li><input  class="le-checkbox" type="checkbox" /> <label>Dell</label> <span class="pull-right">(8)</span></li>
						                <li><input  class="le-checkbox" type="checkbox" /> <label>Toshiba</label> <span class="pull-right">(1)</span></li>
						                <li><input  class="le-checkbox" type="checkbox" /> <label>Apple</label> <span class="pull-right">(5)</span></li>
						            </ul>
						        </div><!-- /.category-filter -->
						        <br/>

							    <label for="price-min">Giá tối thiểu:</label>
							    <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
							    <label for="price-max">Giá tối đa:</label>
							    <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
							      
							    <button class="button-filter"><span>Lọc </span></button>
							        
							      
							</div>
						</div>


						<!-- ==================================== SEARCH FILTER =================================== -->
	 				</div>

	 		<!-- ========================================= LEFT SIDEBAR ========================================= -->



	 		<!-- ========================================= CONTENT BAR ========================================= -->

 					<div class="col-xs-12 col-md-9 padding-content col-sm-9 col-lg-9">
 						
						<?php
							$results = $mysqli_conn->query("SELECT product.type_id AS type_id,
                                                                   product.productcode AS productcode,
                                                                   product.productname AS productname,
                                                                   product.productimage AS productimage, 
                                                                   product.best AS best, 
                                                                   product.new AS new, 
                                                                   product.hot AS hot, 
                                                                   product.salerate AS salerate, 
                                                                   product.normalprice AS normalprice, 
                                                                   product.category_id AS category_id, 
                                                                   category.category_name AS category_name
                                                            FROM product, category 
                                                            WHERE product.category_id=category.category_id AND product.category_id = 'SKM'");
                            if (!$results){
                                printf("Error: %s\n", $mysqli_conn->error);
                                exit;
                            }
                            if ($results->num_rows > 0) {
                                
                                $product_list= "<div class='product-list'>
                                                    <div class='title-list'>
                                                        <h1>Siêu khuyến mãi</h1>
                                                    </div>
                                                    
                                                    <div class='control-bar'>
                                                        <div id='popularity-sort' class='le-select' >  
                                                            <select data-placeholder='sort by popularity'>
                                                                <option value='1'>Xếp theo tên (A-Z)</option>
                                                                <option value='2'>Xếp theo tên (Z-A)</option>
                                                                <option value='3'>Xếp theo giá nhỏ nhất</option>
                                                                <option value='4'>Xếp theo giá lớn nhất</option>
                        
                                                            </select>
                                                        </div>
                                                        
                                                        <div id='item-count' class='le-select'>
                                                            <select>
                                                                <option value='1'>24 sản phẩm/trang</option>
                                                                <option value='2'>32 sản phẩm/trang</option>
                                                                <option value='3'>48 sản phẩm/trang</option>
                                                            </select>
                                                        </div>
                        
                                                        <div class='grid-list-buttons'>
                                                            <ul>
                                                                <li class='grid-list-button-item active'><a data-toggle='tab' href='#grid-view'><i class='fa fa-th-large'></i> Grid</a></li>
                                                                <li class='grid-list-button-item '><a data-toggle='tab' href='#list-view'><i class='fa fa-th-list'></i> List</a></l>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class='product-grid row'>";
                                while ($row = $results->fetch_assoc()) {
                                    $sale_price = $row["normalprice"]*(1-($row["salerate"]/100));
                                    $product_list .= "<div class='col-xs-6 col-md-4 margin-product-grid col-sm-4 col-lg-4'>
                                    <form class='form-item' style='overflow:hidden'>
                                        <figure class='product-card'>
                                        <div class='labels'>";
                                    if ($row["best"] == 1){
                                        $product_list .="<div class='ribbon green'><span>Best seller</span></div>";
                                    }
                                    if ($row["new"] == 1){
                                        $product_list .="<div class='ribbon blue'><span>New</span></div>";
                                    }
                                    if ($row["hot"] == 1){
                                        $product_list .="<div class='ribbon red'><span>Hot</span></div>";
                                    }
                                    
                                    $product_list .= "</div>";
                                    $product_list .= <<<EOT
                
                                        <div class='image'>
                                            <img style='max-height:206px' src='../images/{$row["productimage"]}' alt='sq-sample1'/>
                                            
                                        </div>
                                        <div class='icons'>
                                            <a href='#'><i class='ion-star'></i></a>
                                            <a href='#'> <i class='ion-share'></i></a>
                                            <a href='#'> <i class='ion-search'></i></a>
										</div>
										<input type="number" name="product_qty" id = "quantity1" value="1" style='width: 60px; height: 30px' >
                                        <input name='productcode' type='hidden' value='{$row["productcode"]}'>
                                        <a href='#' class='add-to-cart add-to-detail'>Chi tiết</a>
                                        <button type='submit' id='add-to-cart' class='add-to-cart' style='padding: 0px 71px 0px 71px;'>Mua hàng</button>
                                        <figcaption>
                                            <h3 id="productname">{$row["productname"]}</h3>
                                        
                                            <div class="price">
                                                <div class="off-sale">{$row["salerate"]}% OFF</div>
                                                <s id="price"><span>$</span>{$row["normalprice"]}</s>
                
                                                <div id="saleprice">$$sale_price </div></div>
                                        </figcaption>
                                    </figure>
                                    </form>
                                    </div>
EOT;
                                }	
                                $product_list .="</div>
                                            </div>";
                                echo $product_list;
                            }
                        
						?>

 						<div class="oo-clearfix-product"></div>

 		


 		<!--=============================	PRODUCT LIST   =======================================================-->
 						


						    <div class="pagination-holder">
			                    <div class="row">
			                        
			                        <div class="col-xs-12 col-sm-6 text-left">
			                            <ul class="pagination">
			                                <li class="current"><a  href="#">1</a></li>
			                                <li><a href="#">2</a></li>
			                                <li><a href="#">3</a></li>
			                                <li><a href="#">4</a></li>
			                                <li><a href="#">next</a></li>
			                            </ul>
			                        </div>

			                        <div class="col-xs-12 col-sm-6">
			                            <div class="result-counter">
			                                kết quả từ <span>1-15</span> trong <span>20</span> sản phẩm
			                            </div>
			                        </div>

			                    </div><!-- /.row -->

                			</div>


 						</div>
 					</div>
 			<!-- ========================================= CONTENT BAR ========================================= -->
 				</div>
 			</div>
 		</div>






<!-- ============================================================================================== 
 ========================================= CONTENT =========================================
 ================================================================================================= --> 

 		<div class="oo-clearfix">
		
		</div>

 <!-- ========================================= TOP BRANDS ========================================= -->
		<div class="container">
			<div class="oo-top-brands">
				<div class="title-nav">
					<h2 class="h1">Nhãn hiệu hàng đầu</h2>
					<div class="nav-holder">
						<a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
						<a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
					</div>
				</div>

				<div class="oo-carousel-top-brands">
					<div class="owl-carousel owl-theme">
						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/asus_logo-isoi.png" alt="brand1"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/apple.gif" alt="brand2"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/baloon_game_club.jpg" alt="brand3"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/Calvin-Klein.png" alt="brand4"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/KFC.gif" alt="brand5"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/Lacoste.png" alt="brand6"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/logo-lg-3d.png" alt="brand7"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/Mango.png" alt="brand8"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/M-city.png" alt="brand9"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/Novadomos.png" alt="brand10"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/Quesos.png" alt="brand11"/>
    								
  							</div>
  						</div>
  						<div class="items">
							<div class="image">
    							<img src="../images/brand_logo/samsung.gif" alt="brand12"/>
    								
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!-- ========================================= TOP BRANDS ========================================= -->


  	<div class="oo-clearfix">
		
	</div>


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