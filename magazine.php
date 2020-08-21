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
		<title>Magazine</title>
		
		<link rel="stylesheet" href="style.css" type="text/css">

	</head>
	
	<body>
		 <?php require_once('header.php'); ?>
		
		<form action="cart.php" method="post">
		<div class="container1">
			<div class="display">
				<img src="Img/camera/magazine/Discover.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="Discover-Magazine" name="name">Discover</h2>
				<p><input type="hidden" value="mag-Discover" name="prodname">Product Code:magDiscover</p>
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
				<img src="Img/camera/magazine/stand.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="Stand-magazine" name="name">STAND</h2>
				<p><input type="hidden" value="STANDmag" name="prodname">Product Code:STANDmag</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="25.00" name="price">IND $25.00</p>
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
				<img src="Img/camera/magazine/Tech%20briefs.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="Tech Briefs" name="name">Tech Briefs</h2>
				<p><input type="hidden" value="techbriefsmag" name="prodname">Product Code:techbriefmag</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="100.00" name="price">IND $100.00</p>
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
