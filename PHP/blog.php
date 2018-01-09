<?php
session_start(); //start session
include 'model/connect.php' ; //include config file
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.huuly.blog.css" />
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
<!--                CONTENT                     -->

	<div class="content">
		<div  class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="post-sidemeta">
						<div class="post-format"> <!-- post image -->
							<div class="post-content">
								<div>
								<img src="../images/blog-post-image.jpg" alt="load">
								</div>
								<div>
									<h2 class="title-post">A Beautiful Day – Standard Post With Image</h2>
								</div>
								<div>
									<ul class="meta"> 
										<li> <a href="#"> Post by Admin </a></li>
										<li><a href="#"> Comment </a></li>
									</ul>
								</div>
								<p>
									Lest erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. 
								</p>
								<button class="button button1"> View more</button>
							</div>
						</div><!-- end post image -->
		<div class="post-format">
			<div class="post-content">
				<div class="video-wrapper">
						<iframe width="750" height="315" src="https://www.youtube.com/embed/_0tusyXOeKE?rel=0" allowfullscreen></iframe>
				</div>
					<h2 class="post-title">Introduction to CSS3 &ndash; Standard Post with Video</h2>
					<ul class="meta"> 
						<li> <a href="#"> Post by Admin </a></li>
						<li><a href="#"> Comment </a></li>
					</ul><!-- /.meta -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.</p>
					<button class="button button1"> View more</button>
			</div><!-- /.post-content -->
		</div><!-- /.post video -->
		<div class="post-format">
			<div class="post-content">
				<h2 class="post-title">Announcement &ndash; Standard Post without Image</h2>
					<ul class="meta">
						<li><a href="#">Posted By Admin</a></li>
						<li><a href="#">3 Comments</a></li>
					</ul><!-- /.meta -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.</p>
			<button class="button button1"> View more</button>
			</div><!-- /.post-content -->
		</div><!-- /.post -->
		<hr>
		<ul class="pagination blog-pagination">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">Next</a></li>
		</ul><!-- /.pagination -->
	</div>
</div> 
<!--==================================================col md 3 ========================================================================== -->				
				<div class="col-md-3">
					<aside class="sidebar blog-sidebar">
						<div class="widget clearfix">
							<form class="frm-search">
							        <div class="control-group">
							            <input class="search-field" placeholder="Enter your keywords" />
							            <a><span class="glyphicon glyphicon-search"></span></a>
							           </div>
							    </form>
						</div>
						<div class="widget">
							<h4> About Blog</h4>
							<div class="body">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. 
								</p>
							</div>
						</div>
						<div class="widget">
							<h4> Category</h4>
							<div class="body">
								<ul class="li-links">
									<li class="links-side"><a href="#" class=""> Business</a></li>
									<li class="links-side"><a href="#" class=""> Company</a></li>
									<li class="links-side"><a href="#" class=""> Entertainment</a></li>
									<li class="links-side"><a href="#" class=""> Health</a></li>
									<li class="links-side"><a href="#" class=""> News</a></li>
									<li class="links-side"><a href="#" class=""> Stories</a></li>
									<li class="links-side"><a href="#" class=""> Travel</a></li>
								</ul>
							</div>
						</div>
						<div class="widget">
							<div class="simple-banner">
								<a href="#"> <img alt="load" class="img-responsive" src="../images/banner-simple.jpg"></a>
							</div>
						</div>

						
						<div class="widget">
							<h4>Recent Posts</h4>

    <div class="body">
        <ul class="recent-post-list">
            <li class="sidebar-recent-post-item">
                <div class="media">
                    <a href="#" class="thumb-holder pull-left">
                        <img alt="" class="size-image" src="../images/1.jpg" />
                    </a>
                    <div class="media-body">
                        <h5><a href="#">Coffee Time in Office </a></h5>
                        <div class="posted-date">July 12 2014</div>
                    </div>
                </div>
            </li><!-- /.sidebar-recent-post-item -->

            <li class="sidebar-recent-post-item">
                <div class="media">
                    <a href="#" class="image-post">
                        <img alt="" class="size-image" src="../images/2.jpg" />
                    </a>
                    <div class="media-body">
                        <h5><a href="#">Lets Meet The Whole Team of MediaCenter </a></h5>
                        <div class="posted-date">July 10 2014</div>
                    </div>
                </div>
            </li><!-- /.sidebar-recent-post-item -->

            <li class="sidebar-recent-post-item">
                <div class="media">
                    <a href="#" class="image-post">
                        <img alt="" class="size-image" src="../images/3.jpg" />
                    </a>
                    <div class="media-body">
                        <h5><a href="#">The Best Wordpress Support 24/7 </a></h5>
                        <div class="posted-date">July 06 2014</div>
                    </div>
                </div>
            </li><!-- /.sidebar-recent-post-item -->

            <li class="sidebar-recent-post-item">
                <div class="media">
                    <a href="#" class="image-post">
                        <img alt="" class="size-image" src="../images/4.jpg" />
                    </a>
                    <div class="media-body">
                        <h5><a href="#">Gallery Post with Supported Animation</a></h5>
                        <div class="posted-date">July 04 2014</div>
                    </div>
                </div>
            </li><!-- /.sidebar-recent-post-item -->

            <li class="sidebar-recent-post-item">
                <div class="media">
                    <a href="#" class="image-post">
                        <img alt="" class="size-image" src="../images/5.jpg" />
                    </a>
                    <div class="media-body">
                        <h5><a href="#">Sweet memories in our Store </a></h5>
                        <div class="posted-date">July 01 2014</div>
                    </div>
                </div>
            </li><!-- /.sidebar-recent-post-item -->

        </ul><!-- /.recent-post-list -->
    </div><!-- /.body -->
    <!-- ==================================================end col md 3 ====================================================================== -->
						</div><!-- /.widget -->
					</aside>
				</div>
			</div>
		</div>
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