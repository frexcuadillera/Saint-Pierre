	function buy($product_bought, $quantity){
		include 'connect.php';
		$buysql = "SELECT * FROM product WHERE product_name ='".$product_bought."'";
		$buyquery_run = mysqli_query($link, $buysql);
		
			while($buyquery_row = $buyquery_run->fetch_assoc()){
				$buyproductid = $buyquery_row['product_id'];
				$currentqty = $buyquery_row['product_stock_qty'];
				$currentsale = $buyquery_row['product_sale_count'];
			}
		
		if($currentqty < $quantity){
			echo "<script> alert('Not enough stock'); </script>";
			die();
		}else{
			$decreasedqty = $currentqty - $quantity;
			$increasedsale = $currentsale + $quantity;
			
			mysqli_query($link,"UPDATE product SET product_stock_qty = '".$decreasedqty."', product_sale_count = '".$increasedsale."'");
			mysqli_query($link,"INSERT INTO item (item_product_id, item_qty) VALUES('".$buyproductid."','".$quantity."')");
		}
		
	}