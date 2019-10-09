<?php 
session_start();
$redirect = '/admin_panel.php';
require('lib/connect.php');
if($user['user_level'] < 1) {
	exit("You are not authorized to perform this action. Sorry.");
}
$query = $db->query("SELECT * FROM users");
$users = mysqli_num_rows($query);
$query = $db->query("SELECT * FROM posts");
$posts = mysqli_num_rows($query);
$query = $db->query("SELECT * FROM replies");
$replies = mysqli_num_rows($query);
$query = $db->query("SELECT * FROM titles");
$titles = mysqli_num_rows($query);
$query = $db->query("SELECT * FROM yeahs");
$yeahs = mysqli_num_rows($query);
$query = $db->query("SELECT * FROM favorite_communities");
$query = $db->query("SELECT * FROM notifs");
$notifs = mysqli_num_rows($query);
$query = $db->query("SELECT * FROM follows");
$follows = mysqli_num_rows($query);
?>

<html>
<head>
	<title>Indigo Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/offdevice.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
	<h1>Admin Panel</h1>
	<div id="wrapper">
		<div id="main-body">
		<img src="/assets/img/header.png" alt="Olive">
		<a href="/">
		<img src="/assets/img/main-logo.png" alt="title" style="position:absolute;left:230px; top:140px;">
	</a>
	  <div id="main-body">
<div class="main-column">
  <div class="post-list-outline">
  <h2 class="label">Indigo Admin Panel</h2>
  <div id="guide" class="help-content">
    <div class="num1">
    <h3>Yep, here you can manage accounts. There's not much here yet, but it's better than nothing</h3> <br>
	<form action="users/manage_user.php" type="get">
	<p>Manage Account<br></p>
	<input type="text" maxlength="32" name="cvid" placeholder="Indigo ID">
	<br>
	<br>
	<input type="submit" value="Go!">
	</form>
	<br>
	<br>
	<form action="users/delete_acc.php" method="post">
	<p>Delete User</p>
	<p style="color: red;">WARNING: This can <b>NOT</b> be undone.<br></p>
	<input type="text" maxlength="32" name="cvid" placeholder="Indigo ID">
	<input type="hidden" name="csrf_token" value="<?php echo $_COOKIE['csrf_token']; ?>">
	<br>
	<br>
	<input type="submit" value="Delete">
	</form>
	<br>
	<br>
	<form action="users/purge_yeahs.php" type="get">
	<p>Purge yeahs</p>
	<p style="color: red;">WARNING: This is permanent.<br></p>
	<input type="text" maxlength="32" name="cvid" placeholder="Indigo ID">
	<br>
	<br>
	<input type="submit" value="Purge">
	</form>
	<br>
	<br>
	<form action="undelete_post.php" type="get">
	<p>Undelete a post.</p>
	<p>Yes, surprisingly, you can undelete someones post if you deleted it on accident or something.<br></p>
	<input type="text" maxlength="11" name="post_id" placeholder="Post ID">
	<br>
	<br>
	<input type="submit" value="Undelete">
	</form>
	<img src="/assets/img/ban.png" alt="ban" style="position:absolute;left:100px; top:1000px">
		<img src="/assets/img/ban.png" alt="ban" style="position:absolute;left:100px; top:700px;">
		<img src="/assets/img/ban.png" alt="ban" style="position:absolute;left:100px; top:400px;">
		<img src="/assets/img/ban.png" alt="ban" style="position:absolute;left:1050px; top:1000px;">
		<img src="/assets/img/ban.png" alt="ban" style="position:absolute;left:1050px; top:700px;">
		<img src="/assets/img/ban.png" alt="ban" style="position:absolute;left:1050px; top:400px;">
		<img src="/assets/img/bad.png" alt="ban" style="position:absolute;left:370px; top:1250px;">

		<br>
</div>
</div>
</body>
</html>