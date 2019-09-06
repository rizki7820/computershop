<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>TECHNO PARTY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/product.css">
<link  href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">

</head>
<body>
	<div class="topnav">
      <div class="nav1" id="nav2">
	      <a class="ggwp"  href="index.php">TECHNO PARTY</a>
	      <a href="#">SHOP</a>
	      <div class="dropdown">
	      <a href="#">CATEGORIES</a>
				 <div class="dropdown-content">
			      <a href="#">Desktop Computer</a>
			      <a href="#">Laptop</a>
			      <a href="#">Note Book</a>
			      <a href="#">Accessories</a>
			      <a href="#">Spare Part</a>
			     </div>
			 </div>
	     
	      <a href="#"><i class="fa fa-shopping-cart"></i> CART</a>
	      <a href="login.php">LOG IN</a>
	      <a href="registration.php">SIGN UP</a>
	   
	      <a href="#"><i class="fa fa-search"></i> SEARCH</a>
	      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	   	  <i class="fa fa-bars"></i></a>
      </div>
   </div>
    <div class="mpage">
		<div class="sidebar">	
    		<div class="side scat">
    		<a class="tl" href="">CATEGORIES</a>
    		<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    			<ul id="category">
    				<li><a href="#">Desktop Computer</a></li>
    				<li><a href="#">Laptop</a></li>
    				<li><a href="#">Note Book</a></li>
    				<li><a href="#">PC All In One</a></li>
    				<li><a href="#">Accsesories</a></li>
    				<li><a href="#">Sparepart</a></li>
    			</ul>
    		</div>
    		<div class="side sfilt">
    			<a class="tl" href="">FILTER</a>
    			<a href="#">Price Range</a>
    			<a href="#">Brand</a>
    			<a href="#">Highest Price</a>
    			<a href="#">Lowest Price</a>
    		</div>
    	</div>
    <div class="row" id="row">

    	<div class="ordfil">
    		<div class="icon2">
    			<a class="ord" href=""><i class="fa fa-sort-amount-desc" aria-hidden="true"></i>SORT</a>
    		</div>
    		<div class="icon3">
    			<a href=""><i class="fa fa-th" aria-hidden="true"></i></a>

    			<a href=""><i class="fa fa-list" aria-hidden="true"></i></a>
    		</div>
    	</div>
   	  	<div class="pros">
   	  	
				    	
	    	
	    	</div>
		</div>
    </div>
</div>
<div class="footer">
  <div class="sosmed">
    
</div>
  <p> TECHNO PARTY bill pay services provided by Internship Indo  Inc. under applicable licenses. © 2019 Intuit, Inc. All rights reserved.</p>
  <p>  Terms, conditions, features, availability, pricing, fees, service and support options subject to change without notice.
  </p>
</div>
<script>
	var i = 0 ;
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("category");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
};

function cartFunction (){
	i++;
	var cartp =[];
	cartp[0]=document.getElementById("")


}

$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.pros').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:100,
        max:500,
        values:[50, 500],
        step:10,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
</body>
</html>