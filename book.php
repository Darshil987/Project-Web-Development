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
		<title>Book</title>
		
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	
	<body>
		
		 <?php require_once('header.php'); ?>
		
		<form action="cart.php" method="post">			
			
				<div class="container1">
			<div class="display">
				<img src="Img/camera/books/css%20and%20html.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="HTML & CSS" name="name">HTML & CSS</h2>
				<p><input type="hidden" value="HtmlCss" name="prodname">Product Code:HtmlCss</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="unmark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="250.00" name="price">IND $250.00</p>
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
					</div></div>
		</form><form action="cart.php" method="post">
			
		
				<div class="container1">
			<div class="display">
				<img src="Img/camera/books/java.png">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="JAVA" name="name">JAVA</h2>
				<p><input type="hidden" value="java" name="prodname">Product Code:javabasic</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="300.00" name="price">IND $300.00</p>
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
					</div></div>
		</form>
		<form action="cart.php" method="post">
			
			<div class="container1">
			<div class="display">
				<img src="Img/camera/books/python.jpg">
			</div>
			<div class="detail">
				<p class="new">NEW</p>
				<h2><input type="hidden" value="python" name="name">PYTHON</h2>
				<p><input type="hidden" value="python" name="prodname">Product Code:python</p>
				<field class="star">
					
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="mark">&#9733;</span>
					<span class="unmark">&#9733;</span>
					
				</field>
				
				<p class="price"><input type="hidden" value="500.00" name="price">IND $500.00</p>
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
				</div></div>			
		</form>
		
	<?php require_once('footer.php'); ?>
		
	</body>
</html>
