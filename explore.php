<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
	}
		if(!isset($_SESSION['login_user'])){
      header("location:Verify.html");
      die();
		
    } 
	echo "<script type='text/javascript'>alert('This Page is under development. Sorry for inconvenient.  We redirect to home.');
	window.location='home.php';</script>";

?>