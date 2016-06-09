<?php
	session_start();
	session_unset();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	form {
		background: #1b9;
		width: 350px;
		height: 450px;
		margin: auto;
		padding-top: 20px;
		box-shadow: 0 7px 15px gray;
	}
	.button{
		color: #1b9;
		width: 320px;
		height: 50px;
		cursor: pointer;
		font-family: Arial;
		font-size: 20px;
		margin-top: 20px;
		border: none;
		background: white;
		margin-left: 15px;
	}
		p, h2 {
		
		color: white;
		text-align: center;
		font-family: Arial;
		font-weight: bold;

	}
	</style>
</head>
<body>
<div>
<form action="../index.php">
<h2>You are logged in!</h2>
<p>This page is protected. You can't visit this page if you're not logged in.</p>
	<input class="button" type="submit" value="Log Out!">
</form>
</div>

</body>
</html>