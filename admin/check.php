<?php
$username=$_POST["username"];
$password=$_POST["password"];

if(isset($username) && isset($password)){

	if(empty($username) || empty($password)){

		header('Location: error.php');

	}

	else {

		if($username=="Admin" && $password=="Admin"){
			session_start();
			$_SESSION["name"]="$username";
			$_SESSION["password"]="$password";
			header("Location: success.php");
		}
		else {
			header('Location: error.php');
		}

	}

}	

else {
	header("Location: error.php");
}
?>