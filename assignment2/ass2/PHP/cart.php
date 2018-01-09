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

        <title>Cart</title>
        <!--Awesome icons-->  
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Icons/Glyphs -->
        <!-- <link rel="stylesheet" href="../CSS/font-awesome.min.css"> -->
        <!-- Customizable CSS -->
        <meta name="distributor" content="Global" />	    
	    <meta name="robots" content="All" />
	    <meta name="revisit-after" content="7 days" />	
        <link rel="stylesheet" href="../CSS/css_cart.css" type="text/css" />  <!--File css-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>       
        <!-- Icons/Glyphs -->          
        <link href="../CSS/css_single_product.css" rel="stylesheet" type="text/css" />  <!--File css-->        
        <!-- <script src="../JS/javaScript_single_product.js"></script> File JavaScript-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--Font -->        		    
		<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../CSS/slider/responsive-slider.css" >
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../CSS/owl.carousel.css">
		<link rel="stylesheet" href="../CSS/owl.theme.default.css">				
		<link rel="stylesheet" type="text/css" href="../CSS/bestseller.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Bootstrap Core CSS -->
		<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="../JS/active-cart.js"></script>
		<script type="text/javascript" src="../JS/check_key_promotion_cart.js"></script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<!--header-->
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

	<!-- ========================================= HEADER END ========================================= --> 

		<!--/**===================================================================================*/
		/*  Breadcrumb
		/*=================================================================================== -->    
    <div class="breadcrumb">
        <div class="container">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <!--link to Home-->
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a class="breadcrumb__link breadcrumb__link--home" href="#" itemprop="item" title="Home">
                        <span>Trang chủ</span>
                        <meta itemprop="name" content="ShopingOnline">
                        <meta itemprop="position" content="1">
                    </a>                
                </li>
                <!--Icons angle-right-->  
                <li><span class="breadcrumb__sep"><i class="fa fa-angle-right"></i></span></li>
                <!--link to New Products page-->
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a class="breadcrumb__link breadcrumb__link--last" href="#" title="New Products">
                        <span itemprop="name">Sản phẩm mới</span>
                        <meta itemprop="position" content="-1">
                    </a>                 
                </li>
                <!--Icons angle-right--> 
                <li><span class="breadcrumb__sep"><i class="fa fa-angle-right"></i></span></li>
                <!--link to Women's Fashion page-->
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a class="breadcrumb__link breadcrumb__link--last" href="#" title="Women's Fashion">
                        <span itemprop="name">Mặc hàng công nghệ</span>
                        <meta itemprop="position" content="0">
                    </a>
                </li>
                <!--Icons angle-right-->  
                <li><span class="breadcrumb__sep"><i class="fa fa-angle-right"></i></span></li>
                <!--link to Shirt page-->
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a class="breadcrumb__link breadcrumb__link--last" href="#" title="Shirt">
                        <span itemprop="name">Điện thoại</span>
                        <meta itemprop="position" content="1">
                    </a>
                </li>
                <!--Icons angle-right--> 
                <li><span class="breadcrumb__sep"><i class="fa fa-angle-right"></i></span></li>
                <!--link to T-shirt page-->
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a class="breadcrumb__link breadcrumb__link--last" href="#" title="T-shirt">
                        <span itemprop="name">Ốp lưng</span>
                        <meta itemprop="position" content="2">
                    </a>
        </li></ol></div></div>

		<!--=================================Breadcrumb end ====================================*/-->


<!-- ========================================= Anh dong bia ========================================= -->

<div class="container">
	<div class="row" >        
		<div class="col-xs-12 col-md-8 items-holder no-margin">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			      <li data-target="#myCarousel" data-slide-to="3"></li>
			      <li data-target="#myCarousel" data-slide-to="4"></li>
			      <li data-target="#myCarousel" data-slide-to="5"></li>
			      <li data-target="#myCarousel" data-slide-to="6"></li>
			      <li data-target="#myCarousel" data-slide-to="7"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <div class="item active">
			        <img src="../images/products/anhbia19.png" alt="" style="width: 800px;height: 240px;" >
			      </div>

			      <div class="item">
			        <img src="../images/products/anhbia12.png" alt="" style="width: 800px;height: 240px;">
			      </div>
			    
			      <div class="item">
			        <img src="../images/products/anhbia13.png" alt="" style="width: 800px;height: 240px;" >
			      </div>
			      <div class="item ">
			        <img src="../images/products/anhbia14.png" alt="" style="width: 800px;height: 240px;">
			      </div>

			      <div class="item">
			        <img src="../images/products/anhbia15.png" alt="" style="width: 800px;height: 240px;">
			      </div>
			    
			      <div class="item">
			        <img src="../images/products/anhbia16.png" alt="" style="width: 800px;height: 240px;">
			      </div>
			      <div class="item ">
			        <img src="../images/products/anhbia17.png" alt="" style="width: 800px;height: 240px;">
			      </div>

			      <div class="item">
			        <img src="../images/products/anhbia18.png" alt="" style="width: 800px;height: 240px;">
			      </div>
			    
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			</div>			
  		</div>
		<div class="col-xs-12 col-md-3 no-margin sidebar" >
			<div class="body">
		  	<a class="khuyenmai" href="#" >
		  		<img src="../images/products/khuyenmai.png" alt="khuyenmai">
		    </a>
		</div>
	 	</div>
	</div>
</div>


<!-- ========================================= Anh dong bia ========================================= -->

<!-- ========================================= CART ========================================= -->
<div class="oo-clearfixcart">		
	</div>

<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin"> 
        <span class='cart_update'>

		<!-- ===========================Cart product============================= -->
		<?php 
			if(isset($_SESSION["addproducts"])&& count($_SESSION["addproducts"])>0){
				// echo count($_SESSION["addproducts"]); //add products number
				$cart_box_view= "";
				foreach($_SESSION["addproducts"] as $product){ //loop though items and prepare html content
			
					//set variables to use them in HTML content below
					$product_name = $product["productname"]; 
					$product_price = $product["normalprice"];
					$sale_rate = $product["salerate"];
					$product_code = $product["productcode"];
					$product_image = $product["productimage"];
					$soluong = $product["product_qty"];
					$sale_price = (1-($sale_rate/100))*$product_price*$soluong;
					$cart_box_view .= "<div class='row no-margin cart-item' id='products1'>";
					$cart_box_view .= <<<EOT
					<div class="col-xs-12 col-sm-2 no-margin">
		                    <a href='single-product.php?productcode="$product_code"' class="thumb-holder">
		                        <img class="lazy" alt="" src='../images/$product_image'/>
		                    </a>
		                </div>

		                <div class="col-xs-12 col-sm-5">
		                    <div class="title">
		                        <a href="#">$product_name</a>
		                    </div>
		                    <div class="brand">$product_code</div>
		                </div> 

		                <div class="col-xs-12 col-sm-3 no-margin">
		                    <div class="quantity">                        
		                            <input type="number" name="product_qty" id = "quantity1" value= $soluong style='width: 60px; height: 30px' >		
		                            <input name='productcode' type='hidden' value= '$product_code'>                        
		                    </div>
		                </div>

		                <div class="col-xs-12 col-sm-2 no-margin">
		                    <div class="price_t" id="price1">
		                        $$sale_price
		                    </div>
		                    <a class='close-btn remove-item' data-code=$product_code href='#'></a>
		                    <a class="close-btn" href="#"></a>
		                </div>
		            </div><!-- /.cart-item -->
				
EOT;
}
	echo $cart_box_view; 
	}else{
		echo "<div class='cart_empty'>Your Cart is empty</div>"	
			."<img  src='../images/empty_cart.jpg' alt='empty_cart_img' class= 'empty_cart_img'/>"; //we have empty cart	
		}


?>
		</span>
         <div class="col-xs-12 col-sm-4 no-margin">	
	         <!-- <div class="buy">                   
				<button type='submit' id="book" class="btn-2 form-item book" name="book">"btn btn-2" >
						<b>MUA NGAY</b>
						<span class="fa fa-long-arrow-right" style="font-size:35px;"></span> 
				</button> 
			</div>	  -->	 
	    	<button class="btn btn-2" id="demo" style="background-color: #ff5800;" onclick="bookproduct()" >ĐẶT HÀNG</button>
	    	<a id = "buttons-holder2" class="btn btn-5" href="../HTML/index.php" style="color: #0000ff; font-weight: 4px;" >Tiếp tục mua sắm	    	
	          <span class="glyphicon glyphicon-arrow-right" ></span>	         
	        </a>
	    </div>    
        <!-- ===========================Cart product============================= -->
        
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">Giỏ hàng:</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>Tổng tiền sản phẩm:</label>
                            <div class="value pull-right" style="color: #00ff00;" id="sumprice">
                            <div class='total-price-basket'> 
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
                        </div>                            
                        </li>
                        <li>
                            <label>Chi phí vận chuyển:</label>
                            <div class="value pull-right" style="color: #00ff00;" id="ship">$0</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>Tổng đơn hàng:</label>
                            <div class="value pull-right" style="color: #00ff00;" id="valuesum">
                         <div class='total-price-basket'> 
		                    <span class='total-price'>
								<?php 
									if(isset($_SESSION["total_price"])){
										echo "$" .array_sum($_SESSION["total_price"]); //add products price
										echo "<input id= 'price_total_id' value ='1' type='hidden'></input>";
									}
									else{
										echo "$0"; 
										// echo "<input id= 'price_total_id' value ='0' type='hidden'></input>";
									}
									
								?>
							</span>
		                </div>
                        	</div>                            
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a id ="buttons-holder1" class="btn btn-2" role="button" aria-pressed="true" href="#" onclick="checkproduct()" >Kiểm tra</a>
                       
                    </div>
                </div>
            </div><!-- /.widget -->

        </div><!-- /.sidebar -->
		<!--  <div class="col-xs-12 col-sm-4 no-margin">		 	 


    </div>
    
</section>	

<!-- ========================================= script ========================================= --> 
<script>
	function bookproduct() {  
	alert("Vui lòng xác nhận bạn muốn đặt hàng!");  
     window.location.href='cart_info_customer.php?preUrl='+window.location.href;
    	//alert("Giỏ hàng trống!");        
    
	}
	function checkproduct() {
	    alert("Bạn muốn yêu cầu kiểm tra hàng!");    
	}
	function checkma() {
		var key = document.getElementById('key'); 
		    var filter = /^([a-zA-Z0-9_\.\-])+(([a-zA-Z0-9\-])+)+([a-zA-Z0-9]{2,4})+$/; 
		    var result_key;		    
		    if (!filter.test(key.value)) { 
		             alert('Vui lòng nhập key hợp lệ.');
		             key.focus; 
		            result_key = false; 		            
		    }	       
		   
		    return result_key;    
	}

</script>
<!-- ========================================= script ========================================= --> 


<div class="oo-clearfixcart">		
	</div>
<!-- ========================================= CART PRODUCT ========================================= -->


<!-- ========================================= RECENTLY VIEWED ========================================= -->


<!-- ========================================= SẢN PHẨM MỚI ========================================= -->
		<div class="container">
			<div class="oo-new-product">
				<div class="title-nav">
					<h2 class="h1"><a href="new-arrivals.php">Sản phẩm mới</a></h2>
					<div class="nav-holder">
						<a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
						<a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
					</div>
				</div>

				<div class="oo-carousel-recently-view">
					
				<?php
						//List products from database
						$results = $mysqli_conn->query("SELECT type_id, productcode, productname, productimage, best, new, hot, salerate, normalprice FROM product WHERE product.new=1");
						if (!$results){
							printf("Error: %s\n", $mysqli_conn->error);
							exit;
						}
						$new_product_list = "<div class='owl-carousel owl-theme'>";
						while ($row = $results->fetch_assoc()) {
							$productcode = $row["productcode"];
							$sale_price = $row["normalprice"]*(1-($row["salerate"]/100));
							$new_product_list .= "<div class='items'>
							<form class='form-item' style='overflow:hidden'>
							<figure class='product-card'>
								<div class='labels'>";
							if ($row["best"] == 1){
								$new_product_list .="<div class='ribbon green'><span>Best seller</span></div>";
							}
							if ($row["hot"] == 1){
								$new_product_list .="<div class='ribbon red'><span>Hot</span></div>";
							}
							$new_product_list .="<div class='ribbon blue'><span>New</span></div>";
							$new_product_list .= "</div>";
							$new_product_list .= <<<EOT

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
								<a href='single-product.php?productcode="$productcode"' class='add-to-cart add-to-detail'>Chi tiết</a>
								<button type='submit' id='add-to-cart' class='add-to-cart' style='padding: 0px 36%'>Mua</button>
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
						$new_product_list .= "</div>
											</div>
										</div>
									</div>";
						echo $new_product_list;
				?>
<!-- ========================================= RECENTLY VIEWED ========================================= -->


<!-- ========================================= BEST SELLERS ========================================= -->
		<div class="container">
			<div class="oo-best-sellers">
				<div class="title-nav">
					<h2 class="h1"><a href="best-seller.php">Bán Chạy Nhất</a></h2>
					<div class="nav-holder">
						<a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
						<a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
					</div>
				</div>

				<div class="oo-carousel-recently-view">
				<?php
				//List products from database
				$results = $mysqli_conn->query("SELECT type_id, productcode, productname, productimage, best, new, hot, salerate, normalprice FROM product WHERE product.best=1");
				if (!$results){
					printf("Error: %s\n", $mysqli_conn->error);
					exit;
				}
				$new_product_list = "<div class='owl-carousel owl-theme'>";
				while ($row = $results->fetch_assoc()) {
					$productcode = $row["productcode"];
					$sale_price = $row["normalprice"]*(1-($row["salerate"]/100));
					$new_product_list .= "<div class='items'>
					<form class='form-item' style='overflow:hidden'>
					<figure class='product-card'>
						<div class='labels'>";
					if ($row["best"] == 1){
						$new_product_list .="<div class='ribbon green'><span>Best seller</span></div>";
					}
					if ($row["new"] == 1){
						$new_product_list .="<div class='ribbon blue'><span>New</span></div>";
					}
					if ($row["hot"] == 1){
						$new_product_list .="<div class='ribbon red'><span>Hot</span></div>";
					}
					
					$new_product_list .= "</div>";
					$new_product_list .= <<<EOT

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
						<a href='single-product.php?productcode="$productcode"' class='add-to-cart add-to-detail'>Chi tiết</a>
						<button type='submit' id='add-to-cart' class='add-to-cart' style='padding: 0px 36%'>Mua</button>
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
				$new_product_list .= "</div>
									</div>
								</div>
							</div>";
				echo $new_product_list;
		?>
<!-- ========================================= BEST SELLERS ========================================= -->

	
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
								<a href="index.php"><img src="../oo-logo.png" alt="Orang Once" class="img-logo img-responsive"></a>
														
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
		                    &copy; <a href="index.php">Orange Once</a> - all rights reserved
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
	
	
	

		<!-- <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script> -->
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../JS/javascript.js" type="text/javascript"></script>
		<script src="../JS/owl.carousel.min.js"></script>
	</body>
</html>