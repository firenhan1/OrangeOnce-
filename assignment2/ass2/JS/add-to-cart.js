$(document).ready(function(){	
	$(".form-item").submit(function(e){
		var form_data = $(this).serialize();
		var button_content = $(this).find('button[type=submit]');
		 

		$.ajax({ //make ajax request to cart_process.php
			url: "cart_process.php",
			type: "POST",
			dataType:"json", //expect json value from server
			data: form_data
		}).done(function(data){ //on Ajax success
			$(".amount").html(data.items);  //total items in cart-info element
			
			$(".total-price-basket .total-price").html("$"+data.total_price);
			alert("Giỏ hàng của bạn vừa được thêm sản phẩm!"); //alert user
			if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
				$(".amount").trigger( "click" ); //trigger click to update the cart box.
				$(".total-price-basket .total-price").trigger( "click" );
			}
		})
		e.preventDefault();
	});

//Show Items in Cart
	$( "#cart-info").click(function(e) { //when user clicks on cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(); //display cart box
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	});

	//Close Cart
$(".close-shopping-cart-box").click(function(e){ //user click on cart box close link
	e.preventDefault(); 
	$(".shopping-cart-box").fadeOut(); //close cart-box
});

//Remove items from cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code

		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode, "price":pcode} , function(data){ //get Item count from Server
			$(".amount").html(data.items); //update Item count in cart-info
			$(".total-price-basket .total-price").html("$"+data.total_price);
			$(".amount").trigger( "click" ); //trigger click on cart-box to update the items list
			$(".total-price-basket .total-price").trigger( "click" );
		});
	});

});
////
/*$(document).ready(function(){   
    $(".book").submit(function(e){
        var form_data = $(this).serialize();
         

        $.ajax({ //make ajax request to cart_process.php
            url: "cart_process.php",
            type: "POST",
            dataType:"json", //expect json value from server
            data: form_data
        }).done(function(data){ //on Ajax success
            $(".amount").html(data.items);  //total items in cart-info element
            button_content.html('Mua hàng'); //reset button text to original text
            $(".total-price-basket .total-price").html(data.total_price);
            // $(".cart_update").html(data.cart_box_view);
            // Tien update show_cart_product//
                $(".cart_update" ).load("single-product_process.php", {"load_cart":"2"}); //trigger click to update the show_cart_product.
            // Tien update show_cart_product//      
            alert("Giỏ hàng của bạn vừa được thêm sản phẩm!"); //alert user
            if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
                $(".amount").trigger( "click" ); //trigger click to update the cart box.
                $(".total-price-basket .total-price").trigger( "click" );
            // Tien update show_cart_product//
                $(".cart_update" ).load("single-product_process", {"load_cart":"2"}); //trigger click to update the show_cart_product.
            // Tien update show_cart_product//      
            }
            
        })
        e.preventDefault();
    });
})
*/