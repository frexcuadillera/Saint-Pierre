<?php
	include 'connect.php';
	session_start();
	

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted


}		
?>


$buy = "INSERT INTO item (item_user_email, item_product_id)";

	if($query_run = mysqli_query($link,$sql)){
		while($query_row = $query_run->fetch_assoc()){
			$product_id = $query_row['product_id'];
			$product_name = $query_row['product_name'];
			$product_price = $query_row['product_price'];
			$product_sale_count = $query_row['product_sale_count'];
			$product_img_src = $query_row['product_img_src'];
		
			echo "							
							<li>
					            <div class='products'>
									<a href='#'>
										<img src='products/".$product_img_src."' alt=''>
									</a>
									<a href='#'>
										<h4>".$product_name."</h4>
									</a>
									<p class='price'>Price: ₱".$product_price."</p>
									<p>Sale Count: ".$product_sale_count." pcs.</p>
									<div>
										<i>
										<input type='button' onclick='buy(".$product_id.");' value='BUY'></input>
										</i>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
			";
		}

		
	$_SESSION['buy']= "+product_id+";	
		$buy_add = 'INSERT INTO item (item_user_email,item_product_id) VALUES('.$_SESSION['user_email'].','.$_SESSION['buy'].')';
		mysqli_query($link, $buy_add);		
	?>");
	}