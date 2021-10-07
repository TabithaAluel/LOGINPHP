<!DOCTYPE html>
<html>
	
	<head>
		<title>LOGIN</title>
		  <link rel="stylesheet" type="text/css" href="style.css">


	</head>
	<body>
		<form action="login.php" method="post">
			<h1>LOGIN</h1>
			<?php if (isset($_GET['uname'])){?>
			<p class="error"><?php echo $_GET['error']; ?></p>
			<?php }?>

			<label>User Name</label>
			<input type="text" name="uname" placeholder="User name">

			<label>Password</label>
			<input type="text" name="Password" placeholder="password">

			<button type="submit">Login</button>
		
		

		</form>

	</body>
</html>