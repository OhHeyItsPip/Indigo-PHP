<?php 
$redirect = '/rules';
session_start();
require('lib/connect.php');
include('lib/users.php');
include('lib/htm.php');
?>

<html>
<head>
  <?php 
  formHeaders('Code of Conduct');
  ?>
</head>
<body id="help">
<div id="wrapper" <?php if(!$_SESSION['loggedin']) { echo 'class="guest"'; } ?>>
  <div id="sub-body">
      <?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo form_top_bar($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_face'], 'communities');
  } else { 
  echo ftbnli('titles'); }
        ?>
  </div>
  <div id="main-body">
<div class="main-column">
  <div class="post-list-outline">
  <h2 class="label">Indigo Code of Conduct</h2>
  <div id="guide" class="help-content">
    <div class="num1">
      
      <p>The following are the rules to Indigo.<br>
</p>

      <h2>Follow these rules or suffer.</h2>

      <h3>NSFW and other stuff</h3>
    
      <p>Porn is gross, fuck off</p>
      

      <h3>Spam</h3>
      <p>Spam is annoying, unless you spam Uiiverse. Because that is totally awesome. </h2> <br>
      <img src="assets/img/swear.png" alt="fuck" class="center">
      <h3>Drama</h3>
      <p>Users very often fight and argue. Intentionally starting these incidents will lead to further punishments.</p>

      <h3>Hosting this site</h3>
      <p>If I (Pip) catch some fucking PHP script kiddie rehosting this goddamn website, I will fucking burn you to the ground with my Creative Commons License. Fuck you. </p>

<?php
if($_SESSION['loggedin'] == true && $user['user_level'] > 1) {
  echo '<br>
  <h2>Mod/Admin rules</h2>
  <h3>Don\'t delete/disable users who did nothing wrong.</h3>
  <p>If you disable a user who hasn\'t done anything wrong. You will go off with a warning. However, if you DELETE a user who did nothing wrong, you will get demoted.</p>
  <h3>Don\'t delete posts that didn\'t break the rules.</h3>
  <p>Doing this will most likely give you a warning. However, if you keep doing it, you will get demoted.</p>';
}
?>
    </div>
  </div>
</div></div>
</div>
</div>
</body>
</html>