<?php
session_start();
require('lib/connect.php');

if($_SERVER['REQUEST_METHOD'] == "POST") {

	$user_id = mysqli_real_escape_string($db,$_POST['user_id']);
	$nickname = mysqli_real_escape_string($db,$_POST['nickname']);
	$nnid = mysqli_real_escape_string($db,$_POST['nnid']);
	$password = $_POST['password'];
	$password_retype = $_POST['password_retype'];

    if(strlen($user_id) > 16) {
        $err = 'Your Indigo ID is too long.';
    }

    if(strlen($nickname) > 32) {
        $err = 'Your Nickname is too long.';
    }        

    if(strlen($password) > 32) {
        $err = 'Your Password is too long.';
    }

    if($password !== $password_retype) {
        $err = 'Password and password retype don\'t match';
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if(!preg_match('/^[a-zA-Z0-9_-]+$/', $user_id)) {
        $err = 'Your Indigo ID can only contain letters, numbers, dashes, and underscores.';
    }

    if(empty($user_id && $nickname && $password && $password_retype)) {
        $err = 'The needed feilds are empty.';
    }

    $check_user = $db->query("SELECT * FROM users WHERE user_name = '$user_id'");

    if(mysqli_num_rows($check_user) > 0) {
    	$err = 'This user already exists.';
    }

    if(isset($nnid)) {
    	$ch = curl_init();
    	$api = "https://accountws.nintendo.net/v1/api/";

    	curl_setopt_array($ch, array(
    	    CURLOPT_RETURNTRANSFER => true,
    	    CURLOPT_HTTPHEADER => array(
    	        "X-Nintendo-Client-ID: a2efa818a34fa16b8afbc8a74eba3eda",
    	        "X-Nintendo-Client-Secret: c91cdb5658bd4954ade78533a339cf9a"
    	    )
    	));

    	curl_setopt($ch, CURLOPT_URL, $api . "admin/mapped_ids?input_type=user_id&output_type=pid&input=" . $nnid);
    	$mapped_ids = new SimpleXMLElement(curl_exec($ch));

    	if(empty($mapped_ids->mapped_id->out_id)) {
    		$mii_hash = '';
    		$dont_do = 1;
    	}

    	if(!isset($dont_do)) {
    		$pid = $mapped_ids->mapped_id->out_id;
    		curl_setopt($ch, CURLOPT_URL, $api . "miis?pids=" . $pid);
    		$miis = new SimpleXMLElement(curl_exec($ch));
    		curl_close($ch);

    		foreach (json_decode(json_encode($miis), true)["mii"]["images"]["image"] as $a) {
        		if ($a["type"] == "normal_face") {
         			$aaa = $a["cached_url"];

            		$mii1 = str_replace('http://mii-images.cdn.nintendo.net/', '', $aaa);
            		$user_face = str_replace('_normal_face.png', '', $mii1);

        		}
    		}
  		} else {
  			$err = 'This NNID is invalid. If you do not have an NNID, please leave the Nintendo Network ID feild blank.';
  		}
	} else {
		$user_face = '';
	}

    if(!isset($err)) {

		$db->query("INSERT INTO users (user_name, nickname, user_pass, user_face, is_public) VALUES ('$user_id', '$nickname', '$password_hash', '$user_face', 1)");

		$get_id = $db->query("SELECT * FROM users WHERE user_name = '$user_id' ORDER BY user_id DESC LIMIT 1");
		$id = mysqli_fetch_array($get_id);

		$db->query("INSERT INTO profiles (user_id, nnid) VALUES (".$id['user_id'].", '$nnid')");

		$_SESSION['user_id'] = $id['user_id'];
		$_SESSION['loggedin'] = true;



    }

}

?>
<html>
	<head>
		<title>Sign Up - Indigo</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/offdevice.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/signin.css">		
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	</head>
	<body>
		<div id="wrapper">
			<div id="main-body">
      		<div class="post-list-signin">
  			<div>
  				<?php 

  				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  					echo '
  					<div align="center">
  					<p><br><br>Welcome to your new account, '.$nickname.'! You can now start having fun in Indigo!</p>
  					<p><a href="/">Click here to go back to the front page.</a><br><br></p>
  					</div>
  					</div>
  					</body>
  					</html>';

  					exit();
  				}

  				?>
  				<div align="center">
  				<img src="/assets/img/main-logo.png">
  				<p>Sign up for an Indigo account here. With an account, you can interact with fellow Indigo users.</p>
  				</div>
  				<form method="post" action="/signup">
  					 <div id="signin_body">
  					<input type="text" name="user_id" class="textarea" maxlength="16" style="width: auto; height: 30px; cursor: auto;" placeholder="Indigo ID">
  					<br>
  					<input type="text" name="nickname" class="textarea" maxlength="32" style="width: auto; height: 30px; cursor: auto;" placeholder="Nickname">
  					<br>
  					<input type="text" name="nnid" class="textarea" maxlength="16" style="width: auto; height: 30px; cursor: auto;" placeholder="Nintendo Network ID">
  					<p id="signin_note">Your NNID is used to get your Mii, etc.</p>
  					<input type="password" name="password" class="textarea" maxlength="16" style="width: auto; height: 30px; cursor: auto;" placeholder="Password">
  					<br>
  					<input type="password" name="password_retype" class="textarea" maxlength="16" style="width: auto; height: 30px; cursor: auto;" placeholder="Password Retype">
  					<br>
  					<p style="color: red;"><?php if(isset($err)) { echo $err.'<br><br>'; } ?></p>
  					<button type="submit" class="button">Sign Up</button>
  				</form>
		</div>
	</body>
</html>