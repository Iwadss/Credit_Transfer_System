<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css1.css">
    <link rel="icon" href="Images/unikl_logo.png">
</head>
<body>
<div class="form-holder">
	<form method="POST" action="login.php">
	
        	<img src="Images/unikl_logo.png" height="110"  >
			<label>User ID:</label> <input type="text" placeholder="User ID" value="<?php if (isset($_COOKIE["user_id"])){echo $_COOKIE["user_id"];}?>" name="user_id">
			<label>Password:</label> <input type="password" placeholder="Password" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>" name="password"><br><br>
	
			<input type="submit" value="Login" name="login">
		
	</form>
</div>
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		
	?>
</span>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
