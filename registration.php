<?php
require_once('checkdatabasewithtable.php');
if(!isset($_SESSION)){
	session_start();
	 }
if(isset($_POST['signin']) && $_POST['signin'] != ""){

$conn = mysqli_connect('localhost', 'root');

if($conn){
	
mysqli_select_db($conn, 'login');
$code='sdasddas';
$code=md5($code);
$name=$_POST['name'];	
$username=$_POST['username'];
	 $username=sha1($username); $username=md5($username); $username=crypt($username,$code);
$email=$_POST['email'];
	$email=sha1($email); $email=md5($email); $email=crypt($email,$username);
$password=$_POST['pass'];
	$password=md5($password); $password=sha1($password); $password=crypt($password,$username);
$countrycode=$_POST['countrycode'];
$mobile=$_POST['number'];
$type=$_POST['type'];

$q="SELECT * FROM `register` WHERE username='$username' ||  email='$email' ";

$result = mysqli_query($conn, $q) or die(mysqli_close($conn));

$num =mysqli_num_rows($result);

if($num==1){
	echo "<script type='text/javascript'>alert('Already Register');
	window.location='registration.php';
	</script>";
}else{
	$qw="INSERT INTO `register` (`name`, `username`, `email`, `password`, `countrycode`,`mobile`, `type`) VALUES ('$name', '$username', '$email', '$password','$countrycode' ,'$mobile', '$type')";
	mysqli_query($conn,$qw);

	echo "<script type='text/javascript'>alert('Register Successfully');
	window.location='index.html';
	</script>";
}

}else{
	echo "connection falied";
}


}
?>
<!DOCTYPE html>
<html>
<head>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta charset="utf-8">
	
	<title>Registration Form</title>
	
	<link rel="stylesheet" href="style.css" type="text/css">
	
	<script src="Javascript/Registration-login.js" type="text/javascript"></script>

</head>
<body>
	
	<div class="login">
			<h1>Registration</h1>
		
		<form action="registration.php" method="post"  onsubmit="return validation()" autocomplete="off">
			
			<div class="textbox">
			<img src="icons/user.svg">
			<input type="text" placeholder="Full Name" name="name" id="name" title="Please enter full Name" required >
			</div>
			<span id="name1"> </span>
				
			<div class="textbox">
			<img src="icons/user.svg">
			<input type="text" placeholder="Username*" name="username" id="usr" title="It consist of Charater only" required >
			</div>
			<span id="usr1"> </span>
				
		
			<div class="textbox">
			<img src="icons/email.svg">
			<input type="email" placeholder="Email*" name="email" id="email" required pattern="[A-za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email id must be in this format: xyz@xyx.xhx">
			</div>
			<span id="email1"> </span>
		
				
			<div class="textbox">
			<img src="icons/key.svg"  id="pass2">
			<input type="password" placeholder="Password*" name="pass" id="pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
			</div>
			<span id="pass1"> </span>
				
		
			<div class="textbox">
			<img src="icons/key.svg">
			<input type="password" placeholder="Retype Password*" name="pass" id="conpass" required>
			</div>
			<span id='conpass1'></span>
				
		
			<div class="textbox">
			<img src="icons/phone.svg">
				<div class="country-code" >	
		
				<span1><input type="tel" name="countrycode" maxlength="4" placeholder="91" pattern="\d{1,}" title="Format must be 1 or 91"></span1>	
			
				<span2><input type="tel" placeholder="Mobile No" name="number" maxlength="10" id="num" pattern="\d{10}" title="Number must be in DIGIT and Format: 0123456789"></span2>
			
				</div>
			</div>
			<span id='num1'></span>
		
				
			<select class="textbox" name="type">
					<option value="Student">Student</option>
					<option value="Teacher">Teacher</option>
					<option value="Shopkeeper">Shopkeeper</option>
					<option value="Library">Library</option>
					<option value="General">General</option>
			</select>
			<span id='webadd1'></span>
			
			
				
			<input class="btn" type="submit" name="signin" value="Sign-Up" id="submit">
			
			<input class="btn" type="reset" name="Reset" value="Reset" >
			
			<div class="reg">
			<p>Already Register =><a href="index.html">Login Here</a></p>
			</div>
		</form>
	</div>
	
<?php require_once('footer.php'); ?>		
	
</body>
</html>
