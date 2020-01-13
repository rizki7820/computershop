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
	<div class="topnav" >
      <ul class="nav1" id="nav2">
	      <li><a class="ggwp"  href="index.php">TECHNO PARTY</a></li>
	      <li><a href="#">SHOP</a></li>
	      <li><a class="category" href="#">CATEGORIES</a>
            <ul class="subMenu" id="ctr">
             <li><a href="#">Desktop Computer</a>
                <ul class="SuperSubMenu" >
                    <li><a href="#">Desktop Tower / Mt / Sff</a>
                      <ul class="SuperSubMenu">
                            <li><a href="#"> Intel Core I5</a></li>
                            <li><a href="#"> Intel Core I3</a></li>
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Dual Core</a></li>
                            <li><a href="#"> Amd Quad Core</a></li>
                            <li><a href="#"> Intel Celeron</a></li>
                            <li><a href="#"> Amd Octa Core</a></li>
                            <li><a href="#"> Intel Core I9</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Desktop Mini Pc</a>
                      <ul class="SuperSubMenu">
                        <li><a href="#"> Intel Core Celeron</a></li>
                        <li><a href="#"> Intel Core I3</a></li>
                        <li><a href="#"> Intel Core I5</a></li>
                        <li><a href="#"> Intel Core I7</a></li>
                        <li><a href="#"> Intel Atom</a></li>
                        <li><a href="#"> Intel Dual Core</a></li>
                        <li><a href="#"> Intel Quad Core</a></li>
                        <li><a href="#"> Intel Rockchip Quad Core</a></li>
                      </ul>
                    </li>
                </ul>          
            </li>
            <li><a href="#">Laptop</a>
                <ul class="SuperSubMenu">
                    <li><a href="#"> Laptop Consumer</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#">Intel Core I5</a></li>
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Core I3</a></li>
                            <li><a href="#"> Intel Celeron</a></li>
                            <li><a href="#"> Amd Dual Core</a></li>
                            <li><a href="#"> Amd Quad Core</a></li>
                            <li><a href="#"> Intel Dual Core</a></li>
                            <li><a href="#"> Intel Quad Core</a></li>
                            <li><a href="#">Intel Core M</a></li>
                            <li><a href="#"> Intel Core I9</a></li>
                            <li><a href="#">Intel Atom</a></li>
                        </ul>
                    </li>    
                    <li><a href="#"> Laptop Gaming</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Core I5</a></li>
                            <li><a href="#"> Amd Octa Core</a></li>
                            <li><a href="#"> Amd Quad Core</a></li>
                            <li><a href="#"> Intel Core I9</a></li>
                        </ul>
                    </li>    
                    <li><a href="#"> Laptop Hybrid</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Core I5</a></li>
                            <li><a href="#"> Amd Octa Core</a></li>
                            <li><a href="#"> Amd Quad Core</a></li>
                            <li><a href="#"> Intel Core I9</a></li>
                        </ul>
                    </li>
                </ul>
              </li>
             <li><a href="#">NoteBook</a>
                <ul class="SuperSubMenu">
                     <li><a href="#"> Notebook Consumer</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#">Intel Core I5</a></li>
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Core I3</a></li>
                            <li><a href="#"> Intel Celeron</a></li>
                            <li><a href="#"> Amd Dual Core</a></li>
                            <li><a href="#"> Amd Quad Core</a></li>
                            <li><a href="#"> Intel Dual Core</a></li>
                            <li><a href="#"> Intel Quad Core</a></li>
                            <li><a href="#">Intel Core M</a></li>
                            <li><a href="#"> Intel Core I9</a></li>
                            <li><a href="#">Intel Atom</a></li>
                        </ul>
                    </li> 
                    <li><a href="#"> Notebook Business</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#">Intel Core I5</a></li>
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Core I3</a></li>
                            <li><a href="#"> Intel Celeron</a></li>
                            <li><a href="#"> Amd Dual Core</a></li>
                            <li><a href="#"> Amd Quad Core</a></li>
                            <li><a href="#"> Intel Dual Core</a></li>
                            <li><a href="#"> Intel Quad Core</a></li>
                            <li><a href="#">Intel Core M</a></li>
                        </ul>
                    </li> 
                    <li><a href="#"> Notebook Hybrid</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Core I5</a></li>
                            <li><a href="#"> Amd Octa Core</a></li>
                            <li><a href="#"> Amd Quad Core</a></li>
                            <li><a href="#"> Intel Core I9</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Sleekbook</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#"> Intel Core I7</a></li>
                            <li><a href="#"> Intel Core I5</a></li> 
                        </ul>
                    </li>
                 </ul>
             </li>
             <li><a href="#">PC All In One</a>
                <ul class="SuperSubMenu">
                      <li><a href="#"> Intel Core I5</a></li>
                      <li><a href="#"> Intel Core I3</a></li>
                      <li><a href="#"> Intel Core I7</a></li>
                      <li><a href="#"> Intel Celeron</a></li>
                      <li><a href="#"> Amd Dual Core</a></li>
                      <li><a href="#"> Amd Quad Core</a></li>
                      <li><a href="#"> Intel Dual Core</a></li>
                      <li><a href="#"> Intel Xeon</a></li>
                      </li>
                 </ul>
             </li>
             <li><a href="#">Accessories</a>
                <ul class="SuperSubMenu">
                  <li><a href="#">Cable / Connector</a>
                         <ul class="SuperSubMenu">
                              <li><a href="#">Cable / Connector Data</a>
                                  <ul class="SuperSubMenu">
                                    <li><a href="#"> Usb</a></li>
                                    <li><a href="#"> Sata</a></li>
                                    <li><a href="#"> Thunderbolt</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">Cable / Connector Video</a>
                                  <ul class="SuperSubMenu">
                                    <li><a href="#"> Hdmi</a></li>
                                    <li><a href="#"> Vga</a></li>
                                    <li><a href="#"> Display Port</a></li>
                                    <li><a href="#"> Dvi</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">Cable / Connector Power</a>
                                  <ul class="SuperSubMenu">
                                      <li><a href="#"> Internal Pc Power</a></li>
                                      <li><a href="#"> External Pc Power</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">Cable / Connector Audio</a>
                                  <ul class="SuperSubMenu">
                                      <li><a href="#">  Analog</a></li>
                                      <li><a href="#"> Optical Audio</a></li>
                                      <li><a href="#"> Rca</a></li>
                                  </ul>
                              </li>
                         </ul>
                  </li>       
                  <li><a href="#">Storage External</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#">USB Flash Disk / Drive</a>
                                <ul class="SuperSubMenu">
                                    <li><a href="#"> Dual Drive / Otg</a></li>
                                    <li><a href="#"> Basic 2.0</a></li>
                                    <li><a href="#"> Basic 3.0</a></li>
                                    <li><a href="#"> Drive Stylish</a></li>
                                    <li><a href="#"> Password Protection</a></li>
                                    <li><a href="#"> Basic 3.0</a></li>
                                    <li><a href="#"> Basic 2.0</a></li>
                                    <li><a href="#"> Rugged Protection</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Hard Disk External / Portable</a>
                                <ul class="SuperSubMenu">
                                    <li><a href="#"> Hard Disk External 2.5 Inch</a></li>
                                    <li><a href="#"> Hard Disk External 3.5 Inch</a></li>
                                    <li><a href="#"> Smb Nas 2-Bay</a></li>
                                    <li><a href="#"> Smb Nas 1-Bay</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Memory Card</a>
                                <ul class="SuperSubMenu">
                                    <li><a href="#"> Micro Secure Digital / Micro Sd Card</a></li>
                                    <li><a href="#"> Secure Digital / Sd Card</a></li>
                                    <li><a href="#"> Compactflash / Cf Card</a></li>
                                    <li><a href="#"> Mini Secure Digital / Mini Sd Card</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Memory Card Reader</a>
                                <ul class="SuperSubMenu">
                                    <li><a href="#"> Memory Card Reader External</a></li>
                                    <li><a href="#"> Memory Card Reader Internal</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Optical Drive / Odd External</a>
                                <ul class="SuperSubMenu">
                                    <li><a href="#"> Dvd External</a></li>
                                    <li><a href="#"> Blu-Ray External</a></li>
                                </ul>
                            </li>
                        </ul>
                  </li>
                  <li><a href="#">Pc Case and Power Supply</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#"> Computer Case</a>
                                <ul class="SuperSubMenu">
                                    <li><a href="#"> Middle Tower</a></li>
                                    <li><a href="#"> Mini Tower</a></li>
                                    <li><a href="#"> Full Tower</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Computer Power Supply</a>
                                <ul class="SuperSubMenu">
                                    <li><a href="#"> 600w - 1000w</a></li>
                                    <li><a href="#"> Below 600w</a></li>
                                    <li><a href="#"> Above 1000w</a></li>
                                </ul>
                            </li>
                        </ul>
                  </li>
                  <li><a href="#">Component Accessory</a>
                        <ul class="SuperSubMenu">
                            <li><a href="#"> Modif Accessory</a></li>
                            <li><a href="#"> Bracket and Enclosure</a></li>
                        </ul>
                  </li>
                 
                  <li><a href="#">Storage Internal</a></li>
                  <li><a href="#">Peripheral Accessory</a></li>
                  <li><a href="#">Pc Headphone and Speaker</a></li>
                         
                     
                 </ul>
             </li>
             <li><a href="#">Sparepart</a>
                <ul class="SuperSubMenu">
                     <li><a href="#">HTML</a></li>
                     <li><a href="#">CSS</a>
                         <ul class="SuperSubMenu">
                             <li><a href="#">HTML</a></li>
                             <li><a href="#">CSS</a>
         
                         </ul>
                     </li>
                 </ul>
             </li>
          </ul>
        </li> 
          <li><a href="cart.php"><span class="badge"><?php if(isset($_SESSION["shop"])) { echo count($_SESSION["shop"]); } else { echo '0';}?></span> <i class="fa fa-shopping-cart"></i> CART</a></li>
	      <li><a href="login.php">LOG IN</a></li>
	      <li><a href="registration.php">SIGN UP</a></li>
	     <li> <a href="#"><i class="fa fa-search"></i> SEARCH</a></li>
	      <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
	   	  <i class="fa fa-bars"></i></a>
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
                    <input type="hidden" id="hidden_minimum_price" value="100" />
                    <input type="hidden" id="hidden_maximum_price" value="500" />
                    <p id="price_show">100 - 500</p>
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
    			<!--<a href=""><i class="fa fa-th" aria-hidden="true"></i></a>
    			<a href=""><i class="fa fa-list" aria-hidden="true"></i></a>-->
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
        values:[100, 500],
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
      $(document).on('click','.add_to_cart',function(){  
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
                     url :"process/action.php",  
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