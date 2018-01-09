<?php
session_start(); //start session
include 'model/connect.php'; //include config file
 // US national format (see : http://php.net/money_format)
############# add products to session #########################
/*
$cart_box_view = "Your Cart is empty";
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==2)
{	
if(isset($_SESSION["addproducts"]) && count($_SESSION["addproducts"])>0){ 
				// echo count($_SESSION["addproducts"]); //add products number
				$cart_box_view= "";
				foreach($_SESSION["addproducts"] as $product){ //loop though items and prepare html content
			
					//set variables to use them in HTML content below
					$product_name = $product["productname"]; 
					$product_price = $product["normalprice"];
					$sale_rate = $product["salerate"];
					$product_code = $product["productcode"];
					$product_image = $product["productimage"];
					$sale_price = (1-($sale_rate/100))*$product_price;
					$cart_box_view .= "<div class='row no-margin cart-item' id='products1'>";
					$cart_box_view .= <<<EOT
					<div class="col-xs-12 col-sm-2 no-margin">
		                    <a href="../HTML/single-product.html" class="thumb-holder">
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
		                            <select style="width: 50px; height: 30px;" id="number1" onchange="sumvalue()">
									  <option value="0">0</option>
									  <option value="1" selected="selected">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									</select>  
		                        
		                    </div>
		                </div>

		                <div class="col-xs-12 col-sm-2 no-margin">
		                    <div class="price" id="price1">
		                        $$sale_price
		                    </div>
		                    <a class="close-btn" href="#"></a>
		                    <a class='close-btn remove-item' data-code=$product_code href='#'></a>
		                </div>
		            </div><!-- /.cart-item -->
				
EOT;
}		
		
		echo $cart_box_view; //exit and output content
	}else{
		//echo "Your Cart is empty"; //we have empty cart
		echo "<div class='cart_empty'>Your Cart is empty</div>"	
			."<img  src='../images/empty_cart.jpg' alt='empty_cart_img' class= 'empty_cart_img'/>"; //we have empty cart
	}

}

*/



if(isset($_POST["productcode"]))
{
	
	$total1= 0;
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array 
	}
	
	//we need to get product name and price from database.
	$statement = $mysqli_conn->prepare("SELECT productname, productimage, salerate, normalprice FROM product WHERE productcode=? ");
	$statement->bind_param('s', $new_product["productcode"]);
	$statement->execute();
	$statement->bind_result($product_name, $product_image, $sale_rate, $normal_price);
	

	while($statement->fetch()){ 
		$new_product["productname"] = $product_name; //fetch product name from database
		$new_product["productimage"] = $product_image; //fetch product name from database
		$new_product["salerate"] = $sale_rate; //fetch product name from database
		$new_product["normalprice"] = $normal_price;  //fetch product price from database
		$new_product["product_qty"] = $_POST["product_qty"];
		if(isset($_SESSION["addproducts"])){  //if session var already exist
			if(isset($_SESSION["addproducts"][$new_product["productcode"]])) //check item exist in products array
			{
				unset($_SESSION["addproducts"][$new_product["productcode"]]); //unset old item
			}			
		}
		if(isset($_SESSION["total_price"])){  //if session var already exist
			if(isset($_SESSION["total_price"][$new_product["productcode"]])) //check item exist in products array
			{
				unset($_SESSION["total_price"][$new_product["productcode"]]); //unset old item
			}			
		}
		$_SESSION["total_price"][$new_product["productcode"]] = (1-($new_product["salerate"]/100))*$new_product["normalprice"]*$new_product["product_qty"];
		$_SESSION["addproducts"][$new_product["productcode"]] = $new_product;	//update products with new item array	
	}
	
	$total_items = count($_SESSION["addproducts"]); //count total items
	$total_price = array_sum($_SESSION["total_price"]);
	die(json_encode(array('items'=>$total_items,'total_price'=>$total_price))); //output json 

}

################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["addproducts"]) && count($_SESSION["addproducts"])>0){ //if we have session variable
		$cart_box = "<li>";
		$cart_box = "<ul class='cart-products-loaded'>";
		$total = 0;
		$total_items = count($_SESSION["addproducts"]);
		foreach($_SESSION["addproducts"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$product_name = $product["productname"]; 
			$product_price = $product["normalprice"];
			$sale_rate = $product["salerate"];
			$product_code = $product["productcode"];
			$product_image = $product["productimage"];
			$soluong = $product["product_qty"];
			$sale_price = (1-($sale_rate/100))*$product_price*$soluong;

			$cart_box .= "<li>";
			$cart_box .= "<div class='basket-item'>
							<div class='row'>
								<div class='col-xs-4 col-sm-4 no-margin text-center'>
									<div class='thumb'>
										<img style='max-width: 73px; max-height: 73px 'alt='sample' src='../images/$product_image'/>
									</div>
								</div>
								<div class='col-xs-8 col-sm-8 no-margin'>
									<div class='title'>$product_name<span>(-$sale_rate%)</span></div>
									<div class='price'>$$sale_price</div>
									<div class='price'>Số lượng: $soluong</div>
								</div>
							</div>
							<a class='close-btn remove-item' data-code=$product_code href='#'></a>
						</div>
					</li>";
			//$cart_box .=  "<li> $product_name (Qty : $product_qty | $product_color  | $product_size ) &mdash; $currency ".sprintf("%01.2f", ($product_price * $product_qty)). " <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
			
			$total = $total + $sale_price;
			
		}
		$cart_box .= "</ul></li>";
		
		//$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%u",$total).' <u><a href="view_cart.php" title="Review Cart and Check-Out">Check-out</a></u></div>';
		//$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%01.2f",$total).' <u><a href="view_cart.php" title="Review Cart and Check-Out">Check-out</a></u></div>';
		die($cart_box); //exit and output content
	}else{
		die("Your Cart is empty"); //we have empty cart
	}
}

################# remove item from shopping cart ################
if(isset($_GET["remove_code"]) && isset($_SESSION["addproducts"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["addproducts"][$product_code]))
	{
		unset($_SESSION["addproducts"][$product_code]);
	}
	if( isset($_SESSION["total_price"][$product_code]))
	{
		unset($_SESSION["total_price"][$product_code]);
	}
	
	 $total_items = count($_SESSION["addproducts"]);
	 $total_price = array_sum($_SESSION["total_price"]);
	die(json_encode(array('items'=>$total_items,'total_price'=>$total_price)));
}

/*if(isset($_POST["productcode"]))
{
	$total1= 0;
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array 
	}
	
	//we need to get product name and price from database.
	$statement = $mysqli_conn->prepare("SELECT productname, productimage, salerate, normalprice FROM product WHERE productcode=? ");
	$statement->bind_param('s', $new_product["productcode"]);
	$statement->execute();
	$statement->bind_result($product_name, $product_image, $sale_rate, $normal_price);
	

	while($statement->fetch()){ 
		$new_product["productname"] = $product_name; //fetch product name from database
		$new_product["productimage"] = $product_image; //fetch product name from database
		$new_product["salerate"] = $sale_rate; //fetch product name from database
		$new_product["normalprice"] = $normal_price;  //fetch product price from database
		
		if(isset($_SESSION["addproducts"])){  //if session var already exist
			if(isset($_SESSION["addproducts"][$new_product["productcode"]])) //check item exist in products array
			{
				unset($_SESSION["addproducts"][$new_product["productcode"]]); //unset old item
			}			
		}
		if(isset($_SESSION["total_price"])){  //if session var already exist
			if(isset($_SESSION["total_price"][$new_product["productcode"]])) //check item exist in products array
			{
				unset($_SESSION["total_price"][$new_product["productcode"]]); //unset old item
			}			
		}
		$_SESSION["total_price"][$new_product["productcode"]] = (1-($new_product["salerate"]/100))*$new_product["normalprice"];// product price now
		$_SESSION["addproducts"][$new_product["productcode"]] = $new_product;	//update products with new item array	
	}	
	
	$total_items = count($_SESSION["addproducts"]); //count total items
	$total_price = array_sum($_SESSION["total_price"]);
	die(json_encode(array('items'=>$total_items,'total_price'=>$total_price,'cart_box_view'=>$cart_box_view))); //output json //,'cart_box_view'=>$cart_box_view

}

################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["addproducts"]) && count($_SESSION["addproducts"])>0){ //if we have session variable
		$cart_box = "<li>";
		$cart_box = "<ul class='cart-products-loaded'>";
		$total = 0;
		$total_items = count($_SESSION["addproducts"]);
		foreach($_SESSION["addproducts"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$product_name = $product["productname"]; 
			$product_price = $product["normalprice"];
			$sale_rate = $product["salerate"];
			$product_code = $product["productcode"];
			$product_image = $product["productimage"];
			$sale_price = (1-($sale_rate/100))*$product_price;

			$cart_box .= "<li>";
			$cart_box .= "<div class='basket-item'>
							<div class='row'>
								<div class='col-xs-4 col-sm-4 no-margin text-center'>
									<div class='thumb'>
										<img style='max-width: 73px; max-height: 73px 'alt='sample' src='../images/$product_image'/>
									</div>
								</div>
								<div class='col-xs-8 col-sm-8 no-margin'>
									<div class='title'>$product_name<span>(-$sale_rate%)</span></div>
									<div class='price'>$$sale_price</div>
								</div>
							</div>
							<a class='close-btn remove-item' data-code=$product_code href='#'></a>
						</div>
					</li>";
			//$cart_box .=  "<li> $product_name (Qty : $product_qty | $product_color  | $product_size ) &mdash; $currency ".sprintf("%01.2f", ($product_price * $product_qty)). " <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
			
			$total = $total + $sale_price;
			
		}
		$cart_box .= "</ul></li>";
		
		//$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%u",$total).' <u><a href="view_cart.php" title="Review Cart and Check-Out">Check-out</a></u></div>';
		//$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%01.2f",$total).' <u><a href="view_cart.php" title="Review Cart and Check-Out">Check-out</a></u></div>';
		die($cart_box); //exit and output content
	}else{
		die("Your Cart is empty"); //we have empty cart
	}
}

################# remove item from shopping cart ################
if(isset($_GET["remove_code"]) && isset($_SESSION["addproducts"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["addproducts"][$product_code]))
	{
		unset($_SESSION["addproducts"][$product_code]);
	}
	if( isset($_SESSION["total_price"][$product_code]))
	{
		unset($_SESSION["total_price"][$product_code]);
	}
	
	 $total_items = count($_SESSION["addproducts"]);
	 $total_price = array_sum($_SESSION["total_price"]);
	die(json_encode(array('items'=>$total_items,'total_price'=>$total_price,'cart_box_view'=>$cart_box_view)));//,'cart_box_view'=>$cart_box_view
}
*/


////////////////////////
if(isset($_POST["book"]))
{
	$total1= 0;
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array 
	}
	
	//we need to get product name and price from database.
	$statement = $mysqli_conn->prepare("SELECT productname, productimage, salerate, normalprice FROM product WHERE productcode=? ");
	$statement->bind_param('s', $_SESSION["productcode"]);
	$statement->execute();
	$statement->bind_result($product_name, $product_image, $sale_rate, $normal_price);
	

	while($statement->fetch()){ 
		$new_product["productname"] = $product_name; //fetch product name from database
		$new_product["productimage"] = $product_image; //fetch product name from database
		$new_product["salerate"] = $sale_rate; //fetch product name from database
		$new_product["normalprice"] = $normal_price;  //fetch product price from database
		
		if(isset($_SESSION["addproducts"])){  //if session var already exist
			if(isset($_SESSION["addproducts"][$new_product["productcode"]])) //check item exist in products array
			{
				unset($_SESSION["addproducts"][$new_product["productcode"]]); //unset old item
			}			
		}
		if(isset($_SESSION["total_price"])){  //if session var already exist
			if(isset($_SESSION["total_price"][$new_product["productcode"]])) //check item exist in products array
			{
				unset($_SESSION["total_price"][$new_product["productcode"]]); //unset old item
			}			
		}
		$_SESSION["total_price"][$new_product["productcode"]] = (1-($new_product["salerate"]/100))*$new_product["normalprice"];// product price now
		$_SESSION["addproducts"][$new_product["productcode"]] = $new_product;	//update products with new item array	
	}	
	
	$total_items = count($_SESSION["addproducts"]); //count total items
	$total_price = array_sum($_SESSION["total_price"]);
	die(json_encode(array('items'=>$total_items,'total_price'=>$total_price,'cart_box_view'=>$cart_box_view))); //output json //,'cart_box_view'=>$cart_box_view

}
################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["addproducts"]) && count($_SESSION["addproducts"])>0){ //if we have session variable
		$cart_box = "<li>";
		$cart_box = "<ul class='cart-products-loaded'>";
		$total = 0;
		$total_items = count($_SESSION["addproducts"]);
		foreach($_SESSION["addproducts"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$product_name = $product["productname"]; 
			$product_price = $product["normalprice"];
			$sale_rate = $product["salerate"];
			$product_code = $product["productcode"];
			$product_image = $product["productimage"];
			$sale_price = (1-($sale_rate/100))*$product_price;

			$cart_box .= "<li>";
			$cart_box .= "<div class='basket-item'>
							<div class='row'>
								<div class='col-xs-4 col-sm-4 no-margin text-center'>
									<div class='thumb'>
										<img style='max-width: 73px; max-height: 73px 'alt='sample' src='../images/$product_image'/>
									</div>
								</div>
								<div class='col-xs-8 col-sm-8 no-margin'>
									<div class='title'>$product_name<span>(-$sale_rate%)</span></div>
									<div class='price'>$$sale_price</div>
								</div>
							</div>
							<a class='close-btn remove-item' data-code=$product_code href='#'></a>
						</div>
					</li>";
			//$cart_box .=  "<li> $product_name (Qty : $product_qty | $product_color  | $product_size ) &mdash; $currency ".sprintf("%01.2f", ($product_price * $product_qty)). " <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
			
			$total = $total + $sale_price;
			
		}
		$cart_box .= "</ul></li>";
		
		//$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%u",$total).' <u><a href="view_cart.php" title="Review Cart and Check-Out">Check-out</a></u></div>';
		//$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%01.2f",$total).' <u><a href="view_cart.php" title="Review Cart and Check-Out">Check-out</a></u></div>';
		die($cart_box); //exit and output content
	}else{
		die("Your Cart is empty"); //we have empty cart
	}
}