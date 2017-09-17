<?php
include("includes/db.php");

?>


<!DOCTYPE HTML>
<html>
<head>
<title>MY SHOP</title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>    
<style type="text/css">
body{
	background-image: url('3.jpg');
    background-size: cover;
	
}
table{
	color:white;
	background-image: url('1.jpg');
    background-size: cover;
}
</style>

</head>
<body>

<form method="POST"  action="insert_product.php" enctype="multipart/form-data">
<table width="700px" height="650px" align="center" border=1px >

<tr align= "center">
<td colspan="2" height=80px><h1>Insert New Product</h1></td>
</tr>
<tr>
<td align="right" ><b>Product Title</b></td>
<td ><input type="text" name="product_title" size="50"/></td>
</tr>

<tr>
<td align="right"><b>Product category</b></td>
<td><select name="product_cat"/>
<option>Select a Category</option>
<?php
			   
			   $get_cats = "select * from categories";
			   $run_cats = mysqli_query($con, $get_cats);
			   while($row_cats = mysqli_fetch_array($run_cats))
			   {   
			   $cat_id= $row_cats['cat_id']; 
			   $cat_title=$row_cats['cat_title'];
			   echo "<option value='$cat_id'>$cat_title</option>";
			   
			   }
			   
			   ?>
</select></td>
</tr>

<tr>
<td align="right"><b>Product Price</b></td>
<td><select name="product_price"/>
<option>Select as per price</option>
<?php
			   
			   $get_price = "select * from price";
			   $run_price = mysqli_query($con, $get_price);
			   while($row_price = mysqli_fetch_array($run_price))
			   {   
			   $price_id= $row_price['price_id']; 
			   $price_title=$row_price['price_title'];
			   echo " <option value='$price_id'>$price_title</option>";
			   
			   }
			   
			   ?>


</select></td>
</tr>

<tr>
<td align="right"><b>Product Image 1</b></td>
<td><input type="file" name="product_img1"/></td>
</tr>

<tr>
<td align="right"><b>Product Image 2</b></td>
<td><input type="file" name="product_img2"/></td>
</tr>

<tr>
<td align="right"><b>Product Cost</b></td>
<td><input type="text" name="product_cost" /></td>
</tr>

<tr>
<td align="right"><b>Product Description</b></td>
<td><textarea name="product_desc" cols="35" rows="10"></textarea></td>
</tr>

<tr>
<td align="right"><b>Product Keywords</b></td>
<td><input type="text" name="product_keywords" size="50"/></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" name="insert_product" value="Insert Product"/></td>
</tr>

</table>
</form>
</body>
</html>


<?php






if(isset($_POST['insert_product']))
{
	
	//text data variables
	$product_title=$_POST['product_title'];
    $product_cat=$_POST['product_cat'];
	$product_price=$_POST['product_price'];
	$product_cost=$_POST['product_cost'];
	$product_desc=$_POST['product_desc'];
	$product_keywords=$_POST['product_keywords'];
	$status='on';
	
	//image_names
	$product_img1 = $_FILES['product_img1']['name'] ;
	$product_img2 = $_FILES['product_img2']['name'] ;
	
	//image temp names
	$temp_name1 = $_FILES['product_img1']['tmp_name'] ;
	$temp_name2 = $_FILES['product_img2']['tmp_name'] ;
	
	
	
	
	if($product_title=='' OR $product_cat=='' OR $product_price=='' OR $product_cost=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img1=='')
	{
		echo "<script>alert('please fill all the fields')</script>";
	    exit();
	}
	else
	{   
           //uploading images to its folder
		   move_uploaded_file($temp_name1,"product_images/$product_img1");
		   move_uploaded_file($temp_name2,"product_images/$product_img2");
		
		$insert_product = "insert into products (cat_id,price_id,date,product_title,product_img1,product_img2,product_cost,product_desc,product_keywords,status)
		values ('$product_cat','$product_price',NOW(),'$product_title','$product_img1','$product_img2','$product_cost','$product_desc','$product_keywords','$status')";
	
	    $run_product= mysqli_query($con, $insert_product);
		
		if($run_product)
		{
			echo "<script> alert('Product inserted successfully') </script>";
		}
	
	}
	

	
	

}

?> 


 











