<?php 

//index.php

include('connection/connection.php');
include('process/action.php');

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>TECHNO PARTY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/cart.css">
<link href='https://fonts.googleapis.com/css?family=Hepta Slab' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui.js"></script>
<link href = "css/jquery-ui.css" rel = "stylesheet">
<script src=" js/cart.js"></script>

</head>
<body>
	<div class="topnav">
      <div class="nav1" id="nav2">
	      <a class="ggwp"  href="index.php">TECHNO PARTY</a>
	      <a href="product.php">SHOP</a>
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
		
    <div class="row1" id="row1" style="overflow-x:auto;">

   	  	
                      <div id="cart" class="tab-pane fade">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered"> 
                               <br>  
                                    <tr>  

                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  

                                   
                                    <?php  
                                    if(!empty($_SESSION["shop"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shop"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         
                                         <td align="right">$ <?php echo $values["product_price"]; ?></td>  
                                         
                                         <td align="right">$ <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                                         <td align="center"><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>"><i class="fa fa-trash" aria-hidden="true"></i></button></td>  

                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="center">  
                                              <form method="post" action="placeorder2.php" target="_blank">  
                                                   <input type="submit" name="place_order" target="_blank" class="btn btn-warning" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                </div>  
           </div>  
	    	
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

// PROCESS CART 
 $(document).ready(function(data){  
  var old_val;
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
               $('#quantity'+product_id).val('1');
                alert("Please Enter Number of Quantity") ;

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
       $(document).on('focusin','.quantity', function(){  
          old_val =$(this).val(); 
      });  
      $(document).on('change', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity > 0)  
           {  
                $.ajax({  
                     url :"process/action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           } else {
            $('#quantity'+product_id).val(old_val);
            alert("Please Enter Number of Quantity") ;

           }
      });  
 });  





</script>
</body>
</html>