<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 
?>
<script>
alert('no cheating dude');
document.location = "signup.html"
</script>
<?php 
}
	session_start();
	$pattern = $_POST['input1'];
	$user = $_SESSION['login_user'];
	echo $user;
	echo $pattern;
	$conn=new mysqli("localhost","root","","authentication")or die("mysqli_error()");
	$sql= "INSERT into pattern(username, pattern) values('$user','$pattern')";
	if(mysqli_query($conn,$sql)){
	header("location:signupotpgenerate.php");}
	else{
		?>
	<script>
	alert('reenter the pattern plz');
	document.location = "pattern.php"
	</script>
	<?php
	}
?>