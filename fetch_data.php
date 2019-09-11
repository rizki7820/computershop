<?php

//fetch_data.php

include('connection/connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM product WHERE ID_PRODUCT > '0'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND PRICE BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND BRAND IN('".$brand_filter."')
		";
	}
	

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			
			<div class="pro1" id="pro1" >
				    		<a href="">'.$row["NAME"].'</a>
				    		<img src="images/'.$row["IMAGE"].'" alt="">
				    		<p class="price">$ '.$row["PRICE"].'</p>
			  				<p  class="des">'.$row["DESCRIBE"].'</p>
			  				<p><input type="text" name="quantity" id="quantity'. $row["ID_PRODUCT"].'" class="form-control" value="1" />  </p>
			  				<p><input type="button" name="add_to_cart" id="'. $row["ID_PRODUCT"].'" class="cartb" value="Add to Cart" /> </p>
				    		
				    	</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>