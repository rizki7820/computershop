<?php 

//index.php

include('connection/connection.php');

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>TECHNO PARTY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/product.css">
<link href='https://fonts.googleapis.com/css?family=Hepta Slab' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui.js"></script>
<link href = "css/jquery-ui.css" rel = "stylesheet">

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
                    <div class="submenu">\
                        <a href="">Link 1</a>
                        <a href="">Link 2</a>
                        <a href="">Link 3</a>
                        
                    </div>
			      <a href="#">Laptop</a>
			      <a href="#">Note Book</a>
			      <a href="#">Accessories</a>
			      <a href="#">Spare Part</a>
			     </div>
			 </div>
	     
	      
          <a href="cart.php"><span class="badge"><?php if(isset($_SESSION["shop"])) { echo count($_SESSION["shop"]); } else { echo '0';}?></span> <i class="fa fa-shopping-cart"></i> CART</a>
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
    			<div class="pricer">
                    <input type="hidden" id="hidden_minimum_price" value="50" />
                    <input type="hidden" id="hidden_maximum_price" value="500" />
                    <p id="price_show">50 - 500</p>
                    <div id="price_range"></div>
                 </div>
    			<div class="brander">
                    <a href="#">Brand</a>

                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                    <?php

                    $query = "SELECT DISTINCT(BRAND) FROM product WHERE ID_PRODUCT >'0' ORDER BY ID_PRODUCT DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['BRAND']; ?>"  > <?php echo $row['BRAND']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
                
            </div>
        </div>
    <div class="row1" id="row1">

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
        $('.pros').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand},
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
// PROCESS CART 
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"process/action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"process/action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
</script>
</body>
</html>