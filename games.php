<?php 
$redirect = '/games';
session_start();
require('lib/connect.php');
include('lib/users.php');
include('lib/htm.php');
?>

<html>
<head>
  <?php 
  formHeaders('Indigo Games - Indigo');
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
<div id="wrapper">
    <div id="main-body">
    <img src="/assets/img/header.png" alt="Olive" style="position:absolute;left:280px; top:140px;">
    <a href="/">
    <img src="/assets/img/logo-games.png" alt="title" style="position:absolute;left:315px; top:210px;">
  </a><br>
   <br><br><br></div>
  <div id="main-body">
<div class="main-column">
  <div class="post-list-outline">
  <h2 class="label">Indigo Games</h2>
  <div id="guide" class="help-content">
    <div class="num1"> 
      
      <p>Welcome to Indigo Games! Here, you can play games on Indigo while waiting for notifications, maybe even post your high score! This isn't what we had intended for the original Indigo Games, but hey, it ain't much, but it's honest work.<br>
</p>

  <h2>Space Invaders</h2>
  <iframe src="https://funhtml5games.com?embed=spaceinvaders" style="width:600px;height:400px;border:none;" frameborder="0" scrolling="no"></iframe>

  <h2>Sonic 1 (Game Gear)</h2>
  <iframe src="https://funhtml5games.com?embed=sonic" style="width:496px;height:554px;border:none;" frameborder="0" scrolling="no"></iframe>
   
  <h2>Dr. Mario</h2>
  <iframe src="https://funhtml5games.com?embed=drmario" style="width:540px;height:450px;border:none;" frameborder="0" scrolling="no"></iframe>


    </div>
  </div>
</div></div>
</div>
</div>
</body>
</html>