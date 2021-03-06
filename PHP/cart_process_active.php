

<?php
session_start(); //start session
include 'model/connect.php'; //include config file
 // US national format (see : http://php.net/money_format)
############# add products to session #########################

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
					$soluong = $product["product_qty"];
					$sale_price = (1-($sale_rate/100))*$product_price*$soluong;
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
		
		echo $cart_box_view; //exit and output content
	}else{
		//echo "Your Cart is empty"; //we have empty cart
		echo "<div class='cart_empty'>Your Cart is empty</div>"	
			."<img  src='../images/empty_cart.jpg' alt='empty_cart_img' class= 'empty_cart_img'/>"; //we have empty cart
	}

}


