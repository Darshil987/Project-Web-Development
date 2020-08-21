<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
	}
		if(!isset($_SESSION['login_user'])){
      header("location:Verify.html");
      die();
		
    } 
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width" initial-scale="1">
	
	<meta charset="utf-8">
		<title>Comic Book</title>
		
		<link rel="stylesheet" href="style.css" type="text/css">
			</head>
	
	<body>
		
		 <?php require_once('header.php'); ?>
		
		<form action="cart.php" method="post">
		<div class="container1">
			<div class="display">
				<img src="Img/camera/comic/Acts.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="ACTS" name="name">ACTS</h2>
				<p class="prodname"><input type="hidden" value="ACTS" name="prodname">Product Code:ACTS-com</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="unmark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="40.00" name="price">IND $40.00</p>
				<p><b>Availability:</b> In Stock</p>
				<p><b>Condition:</b> New</p>
				<label>Quantity:</label>
				<select class="quantity" id="item_count" name="quantity">
					<option >1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					
				</select>
				<button type="submit" name="incart" value="incart" class="btn">Add To Cart</button>
			</div>
			
		</div>
		</form>
		<form action="cart.php" method="post">
		<div class="container1">
			<div class="display">
				<img src="Img/camera/comic/avenger.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="Avenger" name="name">Avenger </h2>
				<p class="prodname"><input type="hidden" value="Avenger" name="prodname">Product Code:Avenger-com</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="50.00" name="price">IND $50.00</p>
				<p><b>Availability:</b> In Stock</p>
				<p><b>Condition:</b> New</p>
				<label>Quantity:</label>
				<select class="quantity" id="item_count" name="quantity">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					
				</select>
				<button type="submit" name="incart" value="incart" class="btn">Add To Cart</button>
			</div>
			
		</div>
		</form>
		<form action="cart.php" method="post">
		<div class="container1">
			<div class="display">
				<img src="Img/camera/comic/x-men.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="x-men" name="name">X-Men</h2>
				<p class="prodname"><input type="hidden" value="X-Men" name="prodname">Product Code:X-men</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="unmark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="50.00" name="price">IND $50.00</p>
				<p><b>Availability:</b> In Stock</p>
				<p><b>Condition:</b> New</p>
				<label>Quantity:</label>
				<select class="quantity" id="item_count" name="quantity">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					
				</select>
				<button type="submit" name="incart" value="incart" class="btn">Add To Cart</button>
			</div>
			
		</div>
		</form>
		
		<?php require_once('footer.php'); ?>
		
</body>
</html>
<?php 

?>