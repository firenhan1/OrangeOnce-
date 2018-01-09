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
    <link rel="stylesheet" type="text/css" href="../CSS/bestseller.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/product.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/style.huuly.about.css" />
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
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-lg-8 col-sm-6">
						<section class="sectionabout">
							<h2>Chúng tôi là ai?</h2>
							<p>
								Chúng tôi là các sinh viên đến từ trường đại học bách khoa TP.HCM 
								Với phương châm học hỏi là chủ yếu và ngày càng hoàn thiện hơn khả năng của mình để đưa ra các sản phẩm có chất 
								lượng cao phục vụ cho khách hàng.
							</p>
							<p>
								Sản phẩm Organe One là 1 trang tổng hợp các chương trình giảm giá hàng khuyến mãi từ nhiều nguồn tin cậy khác nhau,
								Với hi vọng mang đến cho mọi người nhiều sự lựa chọn mua sắm với giá cả tốt nhất, cập nhật nhanh nhất các thông tin khuyến mãi, mua được sản phẩm ưng ý với giá cả hợp lý và nhanh nhất 
							</p>
							<p>
								
							</p>							
						</section>	
						 <section id="idea-goal">
						 	<h2> Mục tiêu hướng đến</h2>
						 	<p>
						 		Trang web sẽ là cầu nối 1 kênh thông tin hữu ích với mọi người, được nhiều người biết đến, cung cấp ngày càng đa dạng hơn về chủng loại sản phẩm hình thức giảm giá, hỗ trợ thông tin tốt nhất đến người dùng và hỗ trợ quảng bá chương trình khuyến mãi cho các doanh nghiệp.
						 	</p>
						 	<p>
						 		Nâng cao trải nghiệm người dùng, tạo sự thoải mái mua hàng dễ dàng nhất.
						 	</p>
						 	<h2> Kế hoạch phát triển </h2>
						 	<p>
						 		Lest erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. 
						 	</p>
						 </section>		
					</div>	
					<div class="col-xs-12 col-md-4 col-lg-4 col-sm-6">
						 		<section id="ourteam">
						 			<h2> Our Team</h2>
						 			<ul class="team-members list-unstyled">
						
						<li class="team-member">
							<div class="image-team">
								<img src="../images/1.jpg" alt="" class="img-responsive">
							</div>
							<div class="profile">
								<h3>Nguyễn Thiện Nhân</h3>
							</div><!-- /.profile -->
						</li><!-- /.team-member -->

							<li class="team-member">
							<div class="image-team">
								<img src="../images/1.jpg" alt="" class="img-responsive">
							</div>
							<div class="profile">
								<h3>Trần Hữu Lý</h3>
							</div><!-- /.profile -->
						</li><!-- /.team-member -->
								
								<li class="team-member">
							<div class="image-team">
								<img src="../images/1.jpg" alt="" class="img-responsive">
							</div>
							<div class="profile">
								<h3>Bùi Hải Nam</h3>
							</div><!-- /.profile -->
						</li><!-- /.team-member -->
								<li class="team-member">
							<div class="image-team">
								<img src="../images/1.jpg" alt="" class="img-responsive">
							</div>
							<div class="profile">
								<h3>Ngô Thị Tiến</h3>
							</div><!-- /.profile -->
						</li><!-- /.team-member -->


							</ul><!-- /.team-members -->
						 </section>
					 </div>		
				</div>
			</div>
		</div>
	<section class="row light-bg inner-sm">
		<div class="whatcan">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
					
					<h2>Chúng tôi có thể giúp gì cho bạn ?</h2>
					<p>Donec libero dolor, tincidunt id laoreet vitae, ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.</p>
				</div>

				<div class="col-md-9">
					<ul class="services list-unstyled row m-t-35">
						<li class="col-md-4">
							<div class="service">
								<div class="service-icon primary-bg"><i class="fa fa-truck"></i></div>
								<h3>Fast News</h3>
								<p>Sed in mi rutrum, mattis eros ut, sagittis orci. Suspendisse vehicula auctor leo, nec egestas tellus fringilla ac integer.</p>
							</div>
						</li>
						<li class="col-md-4">
							<div class="service">
								<div class="service-icon primary-bg"><i class="fa fa-life-saver"></i></div>
								<h3>Support 24/7</h3>
								<p>Sed in mi rutrum, mattis eros ut, sagittis orci. Suspendisse vehicula auctor leo, nec egestas tellus fringilla ac integer.</p>
							</div>
						</li>
							<li class="col-md-4">
							<div class="service">
								<div class="service-icon primary-bg"><i class="fa fa-star"></i></div>
								<h3>Best Quality</h3>
								<p>Sed in mi rutrum, mattis eros ut, sagittis orci. Suspendisse vehicula auctor leo, nec egestas tellus fringilla ac integer.</p>
							</div>
							</li>
						</ul><!-- /.services -->
					</div>
				</div><!-- /.row -->
			</div>
		</div><!-- /.container -->	
	</section>



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