<!doctype html>

<head>
	<title>Forgot Password</title>
	<?php
	$base_url = base_url();
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo "$base_url/$css"?>">
</head>

	<!-- Main HTML -->
	
<body>
	<!-- Begin Page Content -->
	<div id="container">
		<form action="<?php echo $base_url;?>index.php/login/checkUser" method="post">
		<label for="email">Email:</label>
		<input type="name" name="email">
		<input type="submit" style="width:140px;" value="Send Password">
		<div style="margin-right: 64px; margin-top: 80px;">
		<p><a style="font-size:13px;" href="<?php echo $base_url;?>index.php/login">Login</a>
		</div>
		</form>
	</div>
</body>
</html>
	
	
	
	
	
		
	