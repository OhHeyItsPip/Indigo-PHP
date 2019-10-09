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
  formHeaders('Frequently Asked Questions - Indigo');
  ?>
</head>
<body id="help">
<div id="wrapper" <?php if(!$_SESSION['loggedin']) { echo 'class="guest"'; } ?>>
  <div id="sub-body">
      <?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo form_top_bar($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_face'], 'communities');
  } else { 
  echo ftbnli('communities'); }
        ?>
  </div>
  <div id="main-body">
<div class="main-column">
  <div class="post-list-outline">
  <h2 class="label">Frequently Asked Questions</h2>
  <div id="guide" class="help-content">
    <div class="num1">
      
      <p>Here's some Frequently asked Questions!<br><br>
</p>

      <h2>These are questions I will get asked a lot</h2>

      <h3>Who</h3>
      <p>It's me, Pip, the one and only. You outta know who I am if you see this</p>
      

      <h3>What?</h3>
      <p>This should be pretty obvious. It's an attempt at finishing the most salvageable version of Indigo's PHP code.</h2>

      <h3>When?</h3>

      <p>At this exact moment I am typing this.</p>

      <img src="assets/img/scared.png" alt="Scary" width="600">

      <h3>Where</h3>
      <p>Well, it depends. I am typing this on my Surface Pro 4 right now, but I also will be writing code on my HP Desktop.</p>

      <h3>Why?</h3>
      <p>Because I want to finish this, and I want a personal project to work on to get bettter experience with PHP. Obviously I do NOT want this ever released, instead I want this to be a thing that just exists. </p>

      <h3>How?</h3>
      <p>PHP, duh. I also am using XAMPP to run a localhost server and database. </p>

    </div>
  </div>
</div></div>
</div>
</div>
</body>
</html>