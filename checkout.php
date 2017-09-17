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
	  <marquee behaviour="alternate" style="color:white;"> The Ultimate Attire Shop For GIRLS</marquee>
	   </div>	
		
		<!--navigation bar starts-->
		<div id="navbar">
		<ul id="menu">
		<li><a href="index.php"> HOME</a></li>
		<li><a href="all_products.php">ALL PRODUCTS</a></li>
		
		
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
		
			
			  <div id="products_box">
			  
			  <form method="POST"  action="checkout.php" enctype="multipart/form-data">
<table width="700px" height="650px" align="center" border=1px >

<tr align= "center">
<td colspan="2" height=80px><h1>Fill Your Details</h1></td>
</tr>
<tr>
<td align="right" ><b>Name</b></td>
<td ><input type="text" name="name" size="50" required/></td>
</tr>

<tr>
<td align="right"><b>Phone No.</b></td>
<td><input type="text" name="phone" size="50" required/></td>
</tr>

<tr>
<td align="right"><b>Address</b></td>
<td><input type="text" name="address" size="50" required/></td>
</tr>





<tr align="center">
<td colspan="2"><button name="place_order"><a href="thanks.php">Place Order</a></button></td>
</tr>

</table>
</form>
			  
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









<?php
if($name=='' OR $phone=='' OR $add=='')
	{
		echo "<script>alert('please fill all the fields')</script>";
	    exit();
	}

else{
$ip = getIp();
if(isset($_POST['place_order']))
			   {
				   
				   $name = $_POST['name'];
				   $phone = $_POST['phone'];
				   $add = $_POST['address'];
				   
				   $insert_product = "insert into user (name,phone,address,ip_add) values ('$name','$phone','$add','$ip')";
	
	    $run_product= mysqli_query($con, $insert_product);
		
		if($run_product)
		{
			echo "<script> alert('Product inserted successfully') </script>";
		}
	
			   }

			   
}

?>






