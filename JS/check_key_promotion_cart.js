$(".inline-input").submit(function(e){
		var form_data_check = $(this).serialize();
		var button_content = $(this).find('button[type=submit]');		

		$.ajax({ //make ajax request to cart_process.php
			url: "check_key_promotion_cart.php",
			type: "POST",
			dataType:"json", //expect json value from server
			data: form_data_check
		}).done(function(data){ //on Ajax success
			$(".total-price-basket .total-price").html(data.results_total_price);  //total items in cart-info element
			button_content.html('Kiểm tra'); //reset button text to original text
			//$(".total-price-basket .total-price").html(data.total_price);

			// $(".cart_update").html(data.cart_box_view);
			// Tien update show_cart_product//
				$(".total-price" ).load("check_key_promotion_cart.php", {"load_cart_key":"1"}); //trigger click to update the show_cart_product.
			// Tien update show_cart_product//		
			//alert("Giỏ hàng của bạn vừa được thêm sản phẩm!"); //alert user
			if(data.result_key ){ //if cart box is still visible
				$(".total-price-basket .total-price").trigger( "click" ); //trigger click to update the cart box.
				$(".total-price-basket .total-price").html(data.results_total_price);  //
				alert("Mã nhập đúng, khách hàng ddowcj giảm data.promotionpercent %!"); 
				//$(".total-price-basket .total-price").trigger( "click" );
			// Tien update show_cart_product//
				//$(".cart_update" ).load("check_key_promotion_cart.php", {"load_cart_key":"2"}); //trigger click to update the show_cart_product.
			// Tien update show_cart_product//		
			}
			else {
				alert("Mã nhập chưa đúng vui lòng nhập key khác!"); 
			}
			
		})
		e.preventDefault();
	});

