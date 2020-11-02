<?php
session_start();
$redirect = '/feed';
require('lib/connect.php');
include('lib/users.php');
include('lib/htm.php');
if($_SESSION['loggedin'] == false) {
	exit('You need to be logged in to view this page.');
}
?>

<html>
<head>
	<?php 
	formHeaders('News Feed - Indigo');
	?>
</head>
<body>
	<div id="wrapper">
		<div id="sub-body">
         <?php 
  			echo form_top_bar($_SESSION['user_name'], $_SESSION['user_id'], $_SESSION['user_face'], 'feed');
         ?>
      </div>
      <div id="main-body">
      	<div class="no-content track-error">
  			<div>
    			<p>Alas, Indigo does not have a proper news feed (yet), but you can at least search for users right now.</p>
          <img src="assets/img/tutorial-activity-feed.png" alt="Italian Trulli">
    			<br>
    			<form method="GET" action="/user_search.php" class="search">
				<input type="text" name="query" placeholder="Search Users" maxlength="32">
				<input type="submit" value="q" title="Search">
				</form>
  			</div>
		</div>
      </div>
	</div>
</body>
</html>