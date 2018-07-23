<?php 
session_start();
require('lib/connect.php');

if($_SESSION['loggedin'] == true) {
	exit("Sorry, you need to be logged out to log in.");
}

if($_SERVER['REQUEST_METHOD'] == "POST") {

	$user_id = mysqli_real_escape_string($db,$_POST['user_id']);

	$check_user_exists = $db->query("SELECT * FROM users WHERE user_name = '$user_id'");
	$users = mysqli_fetch_array($check_user_exists);

	if(mysqli_num_rows($check_user_exists) == 0) {
		$err = 'User does not exist.';
	} else {
		if(!password_verify($_POST['password'], $users['user_pass'])) {
			$err = 'Password does not match.';
		}
	}

	if(!isset($err)) {

		$_SESSION['user_id'] = $users['user_id'];
		$_SESSION['loggedin'] = true;

		header('location: /');

	}

}

?>
<html>
	<head>
		<title>Sign In - Indigo</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/offdevice.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/signin.css">		
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	</head>
	<body>
		<div id="wrapper">
			<div id="main-body">
      		<div class="post-list-signin">
  			<div>
  				<div align="center">
  				<img src="/assets/img/main-logo.png">
  				<p>Sign In to your Indigo account. If you don't have one, you can create one <a href="/signup">here</a></p>
  				</div>
  				<form method="post" action="/signin">
  					 <div id="signin_body">
  					<input type="text" name="user_id" class="textarea" maxlength="16" style="width: auto; height: 30px; cursor: auto;" placeholder="Indigo ID">
  					<br>
  					<input type="password" name="password" class="textarea" maxlength="16" style="width: auto; height: 30px; cursor: auto;" placeholder="Password">
  					<br>  					
  					<p style="color: red;"><?php if(isset($err)) { echo $err.'<br><br>'; } ?></p>
  					<button type="submit" class="button">Sign In</button>
  				</form>
		</div>
	</body>
</html>