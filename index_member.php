<!DOCTYPE html>
<html lang="en">
<head>
<title>TECHNO PARTY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/index2.css">
<link  href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="topnav">
      <div class="nav1" id="nav2">
		<div class="nleft">
	      <a class="ggwp"  href="#">TECHNO PARTY</a>
	      <a href="product.php">SHOP</a>
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
		</div>
		<div class="nright">
	      <a href="#"><i class="fa fa-shopping-cart"></i> CART</a>
	      <a id="nava" href="logout.php"><i class="fa fa-user-circle"></i>  LOGOUT</a>
	      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	     </div> 
    </div>
</div>
 <img class="img1" src="images/mainslideshow/mainp.jpg" alt="tes"  >

 

 <div class="row">
 	<div class="banner1">
 	<p>BANNER</p>
 </div>
  <div class="gallery">
    <figure class="item item1">
      <img src="images/grid/laptop3.jpg" class="image1" alt="">
      <div class="blackbox"></div>
    </figure>
    <figure class="item item2">
      <img src="images/grid/laptop2.jpg"  class="image1" alt="">
    </figure>
    <figure class="item item3">
      <img src="images/grid/pc1.jpg" class="image1" alt="">
    </figure>
    <figure class="item item4">
      <img src="images/grid/pc2.jpg" class="image1" alt="">
    </figure>
    <figure class="item item5">
      <img src="images/grid/pca1.jpg" class="image1" alt="">
    </figure>
    <figure class="item item6">
      <img src="images/grid/pca2.png" class="image1" alt="">
    </figure>
    <figure class="item item7">
      <img src="images/grid/laptop1.jpg" class="image1" alt="">
    </figure>
  </div>

<br>
<br>
</div>

<div class="categories">
<p>SHOP BY CATEGORIES</p>
	<div class="cate">
		<div class="cat1">
			<img src="images/categories/cat1.jpg" alt="">
		<a href="#">Desktop Computer</a>
		</div>
		<div class="cat1">
			<img src="images/categories/cat3.jpg" alt="">
		<a href="#">Laptop</a>
		</div>
		<div class="cat1">
			<img src="images/categories/cat4.jpg" alt="">
		<a href="#">Note Book</a>
		</div>
		<div class="cat1">
			<img src="images/categories/cat2.jpg" alt="">
		<a href="#">PC All In One</a>
		</div>
		<div class="cat1">
			<img src="images/categories/cat5.jpg" alt="">
		<a href="#">Accessories</a>
		</div>
		<div class="cat1">
			<img src="images/categories/cat6.jpg" alt="">
		<a href="#">Spare Part</a>
		</div>
	</div>
	
</div>
	<div class="ggwp2">
	<div class="tes1">
		<p><b>SHOP</b></p>
		<a href="#">Personal Computer</a>
		<a href="#">Mother Board</a>
		<a href="#">VGA Card</a>
		<a href="#">RAM</a>
		<a href="#">Processor</a>
		<a href="#">Power Supply</a>
	</div>
	<div class="tes1">
		<p><b>SUPPORT</b></p>
		<a href="#">Contuct Us</a>
		<a href="#">Product Support</a>
		<a href="#">Order Support</a>
		<a href="#">Your Account</a>
		<a href="#">Techno Party Community</a>

	</div>
		<div class="tes1">
		<p><b>ABOUT US</b></p>
		<a href="#">About Techno Party</a>
		<a href="#">Email Us</a>
		<a href="#">Investor Relation</a>
		<a href="#">Explore</a>

	</div>
	<div class="tes1">
		<p><b>FOR BUSINESS</b></p>
		<a href="#">Business Product & Solution</a>
		<a href="#">Costum Home Integration</a>
	
	</div>
	</div>
	
	

<div class="footer">
  <div class="sosmed">
    <a href="facebook.com">
  <img style="width: 42px; " src="facebook.png" alt="">
</a>
</div>
  <p> TECHNO PARTY bill pay services provided by Internship Indo  Inc. under applicable licenses. © 2019 Intuit, Inc. All rights reserved.</p>
  <p>  Terms, conditions, features, availability, pricing, fees, service and support options subject to change without notice.
  </p>
</div>
<script>
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	var x = document.getElementById("nava");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("nav2").style.background = "rgba(0,0,0,1)";
    document.getElementById("nav2").style.transition = "all 0.5s";
    x.className += " nava2";

  } else {
    document.getElementById("nav2").style.background = "rgba(0,0,0,0.3)";
    x.classList.remove("nava2");
  }
}

function myFunction() {
  var x = document.getElementById("nav2");
  if (x.className === "nav1") {
    x.className += " responsive";
  } else {
    x.className == "nav1";
  }
}



</script>
  
</body>
</html>