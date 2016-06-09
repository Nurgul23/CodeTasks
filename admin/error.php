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
	input{
		padding: 5px 15px;
		margin: 0 10px;
		margin-bottom: 10px;
		width: 290px;
		background: white;
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
	}	
	p{
		margin: 0;
	}
	p, h2 {
		
		color: white;
		margin-left: 10px;
		font-family: Arial;
		font-weight: bold;

	}

	.redDiv {
		width: 200px;
		height: 170px;
		background: #F24D4B;
		position: absolute;
		top: 100px;
		left: 880px;
		box-shadow: 5px 5px 1px gray;
	}
	.redDiv p {
		margin-top: 10px;
	}
	.sign {
		background: url(http://www.mp3-to-youtube.com/SimpleLogin/img/arrow.png);
		background-repeat: no-repeat;
	    width: 10px;
	    height: 20px;
	    position: absolute;
	    top: 135px;
	    left: 870px;
	}

	#error{
		background: #F24D4B;
		width: 330px;
		margin: 5px;
		height: 30px;
		color: white;
		font-family: Arial;
		font-weight: bold;
		display: none;
		text-align: center;
		padding-top: 10px;
	}

	</style>
</head>
<body>
<div>
<form action="check.php" method="post">
<h2>Login</h2>

<div id="error">Please fill in a username and password</div>
<p>Username:</p>
	<input type="text" name="username">
<p>Password:</p>
	<input type="password" name="password">
	<input class="button" type="submit" value="Login!">
</form>
</div>
<div class="sign"></div>
<div class="redDiv">
	<p>This is a demo</p>
	<p>Username:</p>
	<p>Admin</p>
	<p>Password:</p>
	<p>Admin</p>
</div>
<script src="../jquery-1.12.4.js">

</script>
</body>
</html>
<script type="text/javascript">
$(function(){
	$(window).load(function(){
		$("#error").slideToggle(1000)
	})
})
</script>