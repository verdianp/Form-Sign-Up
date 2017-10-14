<!DOCTYPE html>
<html lang="review">
<head>
	<meta charset="UTF-8">
	<title>Hasil</title>
	<link rel="stylesheet" href="css/inicss.css">
</head>
<body background="b.png">
<center><img src="logo.png" class="logo"></center>

<?php 
	$email=$_POST["email"];
	$fullname=$_POST["fullname"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$password=str_repeat("*",strlen("password"));
?>

<div id="container">
	<div class="Header">
		Verify
	</div>

	<div class="hasil">
		<div class="email">
			E-mail : <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Fullname : <?php echo "$fullname"; ?><br>
		</div>

		<div class="user">
			Username  : <?php echo "$username"; ?><br>
		</div>

		<div class="pw">
			Passowrd : <?php echo "$password"; ?><br>
		</div>
		
		
	</div>
</div>




</body>
</html>



