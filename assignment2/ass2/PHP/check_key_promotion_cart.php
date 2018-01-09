<?php
session_start(); //start session
include 'model/connect.php'; //include config file
 // US national format (see : http://php.net/money_format)
############# add products to session #########################


	################# check key from shopping cart ################
	if(isset($_POST["load_cart_key"]) && $_POST["load_cart_key"]==1)
{
		$result_key = false; 
		$resultspromotion = $mysqli_conn->query("SELECT code_promotion FROM promotion ");	
					
			if (!$resultspromotion){
				echo "<scrip> alert('Vui lòng nhập key hợp lệ.'); </scrip>";
    			//key.focus; 
        		$result_key = false;  
			}
			else{
			if(isset($_SESSION["total_price"])){
				$total_price = array_sum($_SESSION["total_price"]); //add products price
				$t = 1;
			
				while ($row = $resultspromotion->fetch_assoc() && $t == 1) {
					$code_promotion =$row["code_promotionz;"];
					$date_start = $row["date_start"];
					$date_end = $row["date_end"];

					if(($code_promotion == document.getElementById('key') ) && CURDATE() >= $date_start && CURDATE() <= $date_end){
						$promotionpercent = $row["promotionpercent"];
						$results_total_price = (100-$promotionpercent)*$total_price/100;
						$_SESSION["results_total_price"]=$results_total_price ;		
						$t = 0;		
					}								
				}
				if($t == 0) {
					// alert('Xác nhận mã key hợp lệ! Khách hàng được giảm $promotionpercent %.');
					$result_key = true;
					die(json_encode(array('results_total_price'=>$results_total_price,'promotionpercent'=>$promotionpercent,'result_key'=>$result_key))); //output json //,'cart_box_view'=>$cart_box_view
				}else{
					// alert('Vui lòng nhập key hợp lệ.');
					$result_key = false;
				}
				
		    }
			else{
				// alert("Mã nhập hợp lệ!");
				$result_key = true;
			}
		}
	}
################# remove item from shopping cart ################
