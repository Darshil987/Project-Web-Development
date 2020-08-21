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
      <title>Home</title>
	   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale="1">
	<link rel="stylesheet" href="style.css" type="text/css">
   </head>
   
   <body>
    <?php require_once('header.php'); ?>
	
	   <br><br>
		<div class="container">
			<div class="head">
				<h2>Category</h2>
			</div>
			
			<div class="product">
			<span>
				<div>
					<a href="book.php"><img src="Img/camera/bookcover.jpg"></a>
				</div>
					<p> Book </p>
				<div class="port">
					<a href="book.php" target="_parent"><button>View</button></a>
			
				</div>
				
			</span>
				
			
			<span>
				<div>
					<a href="comicbook.php"><img src="Img/camera/comicbookcover.jpg"></a>
				</div>
					<p> Comic Book </p>
				<div class="port">
					<a href="comicbook.php" target="_parent"><button>View</button></a>
					
				</div>
					
			</span>
			
			
			<span>
				<div>
					<a href="magazine.php"><img src="Img/camera/magazinecover.jpg"></a>
				</div>
					<p>Magazine</p>
				<div class="port">
					<a href="magazine.php" target="_parent">
					<button>View</button></a>
				
				</div>
			</span>		
			</div>
	</div>
		
	<?php require_once('footer.php'); ?>
</body>   
</html>