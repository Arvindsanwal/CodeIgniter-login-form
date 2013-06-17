<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>
	<?php
	$base_url = base_url();
	?>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo "$base_url/$css"?>">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<style type="text/css">
	.signIn
	{
		 background-image: -moz-linear-gradient(left top 90deg, #ACD6EF 0%, #6EC2E8 100%);
    border: 1px solid #66ADD6;
    border-radius: 30px 30px 30px 30px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    color: #FFFFFF;
    cursor: pointer;
    float: right;
    font-size: 14px;
    font-weight: bold;
    height: 23px;
    margin-right: 20px;
    margin-top: 20px;
    width: 80px;
    text-decoration: none;
    text-align: center;
    padding-top:7px;
	}
	.error
	{
		color:red; font-size:11px;margin-left:20px;
	}
	</style>
	
</head>

	<!-- Main HTML -->
	
<body>
	




	<!-- Begin Page Content -->
	
	<div id="container">
		
		<form action="" method="post">
		
		<label for="email">Email:</label>
		
		<input type="name" name="email" value="<?php echo set_value('email'); ?>">
		<div style="margin-top: -14px;" class='error'><?php echo form_error('email'); ?></div>
		<label for="username">Password:</label>
		
		<p><a href="<?php echo $base_url;?>index.php/login/forgotPassword">Forgot your password?</a>
		<input type="password" name="password" value="<?php echo set_value('password'); ?>">
		<div style="margin-top: -22px;" class='error'><?php echo form_error('password'); ?></div>
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		<a class="signIn" href="<?php echo $base_url;?>index.php/login/registerationForm">Sign in</a>
		<input type="submit" value="Login">
		
		</div>
		</form>

		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	