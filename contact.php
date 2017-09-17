<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>MY SHOP</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>

<style type="text/css">
body{
	background-image: url('tabz.jpg');
    background-size: cover;
}
table{
	background-image: url('12.jpg');
    background-size: cover;
	color: white;
    font-weight:bold;
	font-size: 18px;
	font-align: justify;
	}
</style>


</head>
<body>



<!--MAIN CONTAINER Starts-->
<div class="main_wrapper">



<!--header starts here-->
        <div class="header_wrapper"> 
	    <a href="index.php"><img id="img1" src="images/tab1.jpg"></a>
		<img id="img2" src="images/tab4.gif">
		</div>
<!--header ends here-->	
       


	   <div id="slim">
	   <marquee behavior="alternate" style="color:white;">The Ultimate Attire Shop For GIRLS</marquee>
	   </div>	
		
		<!--navigation bar starts-->
		<div id="navbar">
		<ul id="menu">
		<li><a href="index.php"> HOME</a></li>
		<li><a href="all_products.php">ALL PRODUCTS</a></li>
		<li><a href="my_account.php">MY ACCOUNT</a></li>
		<li><a href="user_register.php">SIGN UP</a></li>
		<li><a href="cart.php">SHOPPING CART</a></li>
		<li><a href="contact.php">CONTACT US</a></li>
		</ul>
		<div id="form">
		<form action="results.php" method="get" enctype="multipart/form-data">
		<input type="text" name="user_query" placeholder="Search here"/>
		<input type="submit" name="search" value="search"/>
		</form>
		</div>
		
		</div>
		<!--navigation bar ends-->
		
		
		
        <div class="content_wrapper"> 
		    <div id="left_sidebar">
			   <div id="sidebar_title">Categories</div>
			   <ul id="cats">
			   <?php getCats(); ?>
			   </ul>
			   
			   <div id="sidebar_title">Price</div>
			   <ul id="cats">
			  <?php getPrice(); ?>
			   </ul>
			</div>
		    
			
			
			
			<div id="right_content">
			
			<?php cart(); ?>
			
			 <div id="headline">
			 
			     <div id="headline_content">
				 
			        <b>Welcome Guest!</b>
					<b style='color:yellow;'>Shopping Cart:</b>
					<span>  Total Items:- <?php total_items(); ?>  Total Price:- <?php total_price(); ?> <a href="cart.php" style="color:yellow;"> Go To Cart</a></span>
			     </div> 
			 </div>
		
			
			  <div id="products_box"></br>
			   <table align="center" border="1px sloid black" height="600px" width="720px" >
			   <tr>
			   <td align="center"><img  src="images/f1.jpg" height="400px" width="330px" ></td>
			   <td align="center"><img  src="images/m2.jpg" height="400px" width="300px" ></td>
			   </tr>
			   
			   <tr>
			   <td>Mohammad Farooq</br>
			       9927114050</td>
			   <td>Mohammad Mudassir</br>
			       8979924849</td>
			   </tr>
			   <tr>
			   <td colspan="2">Abdul Malik Cloth House is registered cloth house in Raiwala Market Saharanpur, leading in all types of ladies attire from simple suits and kurtis to heavy bridal lehengas and sarees. We sell all the branded materials and to satisfy our customer we have a replacement and return policy within 1 month of the purchase. If you have any suggestion you can directly mail us at :<a href="http://www.gmail.com" style='color:yellow;'> mohdfarooq@gmail.com</a>  or <a  style='color:yellow;' href="http://www.gmail.com"> mohdmudassir@gmail.com</a>. Your feedback is valueable for us.</td>
			   </tr>
			   </table>
			  
			  </div>
			
			
			
			
			
			</div>
		
		
		
		
		</div>
		
		
		
		
		
		
		<div class="footer">
          <h1 style="color:white; padding-top:20px; text-decoration:none; text-align:center; ">&copy; 2016 - all rights reserved</h1> 
 </div>

























</div>
<!--MAIN CONTAINER ends-->

</body>


</html>