<?php

$db = mysqli_connect("localhost","root","","myshop");

function getIp(){
	$ip =$_SERVER['REMOTE_ADDR'];
	
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}




function cart()
{
	
	if(isset($_GET['add_cart'])){
		
		global $db;
		$ip= getIp();
		$pro_id=$_GET['add_cart'];
		$check_pro= "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
	
	   $run_check=mysqli_query($db,$check_pro);
	    if(mysqli_num_rows($run_check)>0){
			echo "";
			
		}
		else{
			
			$insert_pro="insert into cart (p_id,ip_add) values ('$pro_id','$ip')";
		    $run_pro = mysqli_query($db,$insert_pro);
			echo "<script>window.open('index.php','_self')</script>";
		}
	
	}
}

function total_items(){
	
	if(isset($_GET['add_cart']))
	{
		global $db;
		$ip = getIp();
		$get_items = "select * from cart where ip_add='$ip'";
		$run_items = mysqli_query($db,$get_items);
		$count_items =mysqli_num_rows($run_items);
	}
		else{
			global $db;
		$ip = getIp();
		$get_items = "select * from cart where ip_add='$ip'";
		$run_items = mysqli_query($db,$get_items);
		$count_items =mysqli_num_rows($run_items);	
			
		}
		
		echo $count_items;
}


function total_price(){
	
	$total=0;
	
	global $db;
	$ip = getIp();
	$sel_price = "select * from cart where ip_add='$ip'";
	
	$run_price = mysqli_query($db,$sel_price);
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id=$p_price['p_id'];
		$pro_price= "select * from products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($db,$pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_cost = array($pp_price['product_cost']);
			$values = array_sum($product_cost);
			
			$total+=$values;
		}
	}
	echo "Rs.".$total;
}






function getPro()

{
	global $db;

	    if(!isset($_GET['cat'])){
	
               if(!isset($_GET['price'])){
				   
				   
				$get_products="select * from products order by rand() LIMIT 0,6";
				$run_products= mysqli_query($db, $get_products);
				 
				while($row_products=mysqli_fetch_array($run_products))
				{
					$pro_id = $row_products['product_id'];
					$pro_title = $row_products['product_title'];
					$pro_cat = $row_products['cat_id'];
					$pro_price = $row_products['price_id'];
					$pro_desc = $row_products['product_desc'];
					$pro_cost = $row_products['product_cost'];
					$pro_image = $row_products['product_img1'];
					
					
				    echo "
				    <div id='single_product'>
				       <h3 style='color:white; text-decoration:none;'>$pro_title</h3></br>
				    <img src='admin_area/product_images/$pro_image' width='205px' height='205px'/></br>
				    <p><b style='color:white;'>Price: Rs. $pro_cost </b></p><br>
					
					
					<a href=details.php?pro_id=$pro_id style='float:left; color: red;'>Details</a>
				    
					<a href=index.php?add_cart=$pro_id><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				
					
					</div>
					";
				   
				}
				
				
			
			
			}	
		}	

	}
	
function getCatPro()

{
	global $db;

	    if(isset($_GET['cat'])){
	
              
				$cat_id= $_GET['cat'];  
				   
				$get_cat_pro="select * from products where cat_id='$cat_id' order by rand()";
				$run_cat_pro= mysqli_query($db, $get_cat_pro);
				 
				 $count = mysqli_num_rows($run_cat_pro);
				 if($count==0){
					echo "<h1>No Products found in this category!</h1>" ;
				 }
				 
				 
				while($row_cat_pro=mysqli_fetch_array($run_cat_pro))
				{
					$pro_id = $row_cat_pro['product_id'];
					$pro_title = $row_cat_pro['product_title'];
					$pro_cat = $row_cat_pro['cat_id'];
					$pro_price = $row_cat_pro['price_id'];
					$pro_desc = $row_cat_pro['product_desc'];
					$pro_cost = $row_cat_pro['product_cost'];
					$pro_image = $row_cat_pro['product_img1'];
					
					
				    echo "
				    <div id='single_product'>
				       <h3 style='color:white; text-decoration:none;'>$pro_title</h3></br>
				    <img src='admin_area/product_images/$pro_image' width='205px' height='205px'/></br>
				    <p><b style='color:white;'>Price: Rs. $pro_cost </b></p><br>
					
					
					<a href=details.php?pro_id=$pro_id style='float:left; color: red;'>Details</a>
				    
					<a href=index.php?add_cart=$pro_id><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				
					
					</div>
					";
				   
				}
				
				
			
			
				
		}	
	
	}	
	
	function getPricePro()

{
	global $db;

	    if(isset($_GET['price'])){
	
              
				$price_id= $_GET['price'];  
				   
				$get_price_pro="select * from products where price_id='$price_id' order by rand()";
				$run_price_pro= mysqli_query($db, $get_price_pro);
				 
				 $count = mysqli_num_rows($run_price_pro);
				 if($count==0){
					echo "<h1>No Products found in this Price category!</h1>" ;
				 }
				 
				 
				while($row_price_pro=mysqli_fetch_array($run_price_pro))
				{
					$pro_id = $row_price_pro['product_id'];
					$pro_title = $row_price_pro['product_title'];
					$pro_cat = $row_price_pro['cat_id'];
					$pro_price = $row_price_pro['price_id'];
					$pro_desc = $row_price_pro['product_desc'];
					$pro_cost = $row_price_pro['product_cost'];
					$pro_image = $row_price_pro['product_img1'];
					
					
				    echo "
				    <div id='single_product'>
				       <h3 style='color:white; text-decoration:none;'>$pro_title</h3></br>
				    <img src='admin_area/product_images/$pro_image' width='205px' height='205px'/></br>
				    <p><b style='color:white;'>Price: Rs. $pro_cost </b></p><br>
					
					
					<a href=details.php?pro_id=$pro_id style='float:left; color: red;'>Details</a>
				    
					<a href=index.php?add_cart=$pro_id><button style='float:right; text-decoration:none; color: green;'>Add to Cart</a>
				
					
					</div>
					";
				   
				}
				
				
			
			
				
		}	
	
	}
	
	
function getCats(){
	
			  global $db; 
			   $get_cats = "select * from categories";
			   $run_cats = mysqli_query($db, $get_cats);
			   while($row_cats = mysqli_fetch_array($run_cats))
			   {   
			   $cat_id= $row_cats['cat_id']; 
			   $cat_title=$row_cats['cat_title'];
			   echo " <li></br></br><a href='index.php?cat=$cat_id' style='font-size: 20px';>$cat_title</a></li>";
			   
			   }
			   
}

function getPrice(){
	
			   global $db;
			   $get_price = "select * from price";
			   $run_price = mysqli_query($db, $get_price);
			   while($row_price = mysqli_fetch_array($run_price))
			   {   
			   $price_id= $row_price['price_id']; 
			   $price_title=$row_price['price_title'];
			   echo " <li></br></br><a href='index.php?price=$price_id'>$price_title</a></li>";
			   
			   }
			   
}





?>