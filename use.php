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
  formHeaders('Use of Indigo');
  ?>
</head>
<body id="help">
<div id="wrapper" <?php if(!$_SESSION['loggedin']) { echo 'class="guest"'; } ?>>
  <div id="sub-body">
      <?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo form_top_bar($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_face'], 'titles');
  } else { 
  echo ftbnli('communities'); }
        ?>
  </div>
  <div id="main-body">
<div class="main-column">
  <div class="post-list-outline">
  <h2 class="label">Use of Indigo</h2>
  <div id="guide" class="help-content">
    <div class="num1">
      
      <p>It's simple. You don't<br><br>
</p>

      <h2>Why?</h2>

      <h3>Clones should be dead. I am finishing this for fun. Do NOT host this, stupid boomer</h3>
      
      
      <p>Haven't we learned by now? These things never work. They always get raided and spammed and stuff. Just give up.</p>
      
      <img src="assets/img/hub.png" alt="hub" width="600">

      <h3>Stop this, why are you doing this?</h3>
      <p>Really, it's just for fun. I don't want this to be anything more than a personal project.</h2>

      <h3>Drama</h3>
      <p>Causing drama here could get you burned and sent straight to hell.</p>

      <h3>Lewding the Dragon Loli</h3>
      <p>Lewding the dragon loli is punishable by DEATH, a slow and painful one. Sorry, I don't make the rules, buddy. Oh wait a goddamn second, I DO.</p>

    </div>
  </div>
</div></div>
</div>
</div>
</body>
</html>