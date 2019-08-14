<?php
// defines variables
session_start();
require('lib/connect.php');
include('lib/htm.php');
$redirect = '/';
$cinfo = $db->query("SELECT * FROM titles");
 ?>
<?php 
formHeaders('Hubs | Indigo');
?>
  <div id="wrapper" <?php if(!$_SESSION['loggedin']) { echo 'class="guest"'; } ?>>
<div id="sub-body">
  <?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo form_top_bar($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_face'], 'communities');
  } else { 
  echo ftbnli('communities'); }
        ?>
      <div id="main-body">
<div class="body-content" id="community-top" data-region="USA">
  <div class="community-main">
</div>
  <div class="community-top-sidebar">
    <form method="GET" action="/titles/search" class="search">
      <input type="text" name="query" placeholder="Search Communities" minlength="2" maxlength="20"><input type="submit" value="q" title="Search">
    </form>
<div class="post-list-outline" style="text-align: center">
<h2 class="label"><?php echo $memo_title; ?></h2>
<p style="width: 90%; display: inine-block; padding: 10px;"><?php echo $memo_content; ?></p>

</div>
    <div id="identified-user-banner">
      <a href="/identified_user_posts?view_region_id=2" data-pjax="#body" class="list-button us">
        <span class="title">Get the latest news here!</span>
        <span class="text">Posts from Verified Users</span>
      </a>
    </div>    <div class="digest-container">
      <div class="digest artwork-digest test-artwork-digest">
      </div>
      <div class="digest test-topic-digest">
      </div>
    </div>  
</div>
</div>
  <div class="community-main">

      <h3 class="community-title symbol">Popular Hubs</h3>
      <div>
        <ul class="list community-list community-card-list test-hot-communities">
			<?php
			 while($infoc = mysqli_fetch_array($cinfo)) {
				 			if($infoc['perm'] ==is_null(0)) {
        echo ' <li id="community-6437256809005279207" class="trigger test-community-list-item " style="padding: 0px 0px 0px 0px;" data-href="/communities/'.$infoc['title_id'].'" tabindex="0">
		<img src="'.$infoc['title_banner'].'" class="community-list-cover">
  <div class="community-list-body">
  <span class="icon-container"><img src="'.$infoc['title_icon'].'" class="icon"></span>
  <div class="body">
      <a class="title" style="padding: 0px 0px 0px 0px;"href="/titles/'.$infoc['title_id'].'" tabindex="-1">'.$infoc['title_name'].' Hub</a>
	<span class="platform-tag"><img src="assets/img/general-tag.png"</span>
	<span class="text">General Hubs</span>
      </li>
'; }
			}
			?>
<a href="/hubs/all" class="big-button">Show More</a>
        </ul>
      </div>
      <div>
  </div>
  </div>
</li>
    </ul>
    <div id="community-guide-footer">
      <div id="guide-menu">
        <a href="/guide/terms" class="arrow-button"><span>Use of Indigo</span></a>
        <a href="/guide/" class="arrow-button"><span>Indigo Code of Conduct</span></a>
        <a href="/guide/faq" class="arrow-button"><span>Frequently Asked Questions (FAQ)</span></a>
        <a href="http://www.nintendo.com/wiiu/built-in-software/#/miiverse" class="arrow-button"><span>Details about Indigo</span></a>
      </div>
    </div>
  </div>
  <div class="community-top-sidebar">
  <div class="link-container adx-link-container">
    <p><a href="http://www.nintendo.com/interest-based-ads-policy" class="test-about-ad-link">Interest-Based Ads</a></p>
    
    <p><a href="http://support.nintendo.com/miiversehelp" class="test-contact-link">Contact Us</a></p>
    <p><a href="http://www.nintendo.com/corp/privacy.jsp" class="test-privacy-policy-link">Privacy Notice</a></p>
  </div>
<div id="wiiu-filter-select-page" class="dialog none filter-select-page">
<div class="dialog-inner">
  <div class="window">
    <h1 class="window-title">Filter</h1>
    <div class="window-body"><div class="window-body-inner message">
      <form method="get" action="">
        <div class="select-content">
          <div class="select-button">
            <label><span class="select-button-content"></span><br><select name="category">
            <option value="/communities/categories/wiiu_all">All Software</option>
            <option value="/communities/categories/wiiu_game">Wii U Games</option>
            <option value="/communities/categories/wiiu_virtualconsole">Virtual Console</option>
            <option value="/communities/categories/wiiu_other">Others</option>
          </select>
        </label></div>
        </div>
        <div class="form-buttons">
          <input type="button" class="olv-modal-close-button gray-button" value="Cancel">
          <input type="submit" class="post-button black-button" value="OK">
        </div>      </form>
    </div></div>
  </div>
</div>
</div>

<div id="3ds-filter-select-page" class="dialog none filter-select-page">
<div class="dialog-inner">
  <div class="window">
    <h1 class="window-title">Filter</h1>
    <div class="window-body"><div class="window-body-inner message">
      <form method="get" action="">
        <div class="select-content">
          <div class="select-button">
            <label><span class="select-button-content"></span><br><select name="category">
            <option value="/communities/categories/3ds_all">All Software</option>
            <option value="/communities/categories/3ds_game">3DS Games</option>
            <option value="/communities/categories/3ds_virtualconsole">Virtual Console</option>
            <option value="/communities/categories/3ds_other">Others</option>
          </select>
        </label></div>
        </div>
        <div class="form-buttons">
          <input type="button" class="olv-modal-close-button gray-button" value="Cancel">
          <input type="submit" class="post-button black-button" value="OK">
        </div>      </form>
    </div></div>
  </div>
</div>
</div>


      </div>
      <div id="footer">
        <div id="footer-inner"><ul id="footer-selector">
<li><button type="button" data-modal-open="#language-select-page">Language: <strong>English (US)</strong></button></li>
<li><button type="button" data-modal-open="#region-select-page">Region: <strong>Americas</strong></button></li>
</ul>
<div id="language-select-page" class="dialog none">
<div class="dialog-inner">
  <div class="window">
    <h1 class="window-title">Switch languages</h1>
    <div class="window-body"><div class="window-body-inner message">
      <form method="post" action="/locale">
        <div class="select-content">
          <div class="select-button">
            <label><span class="select-button-content">Select a language.</span><br><select name="locale.lang">
            <option value="de-DE">Deutsch</option>
            <option value="en-GB">English (UK/Australia)</option>
            <option value="en-US" selected="">English (US)</option>
            <option value="es-ES">Español (España)</option>
            <option value="es-MX">Español (Latinoamérica)</option>
            <option value="fr-CA">Français (Canada)</option>
            <option value="fr-FR">Français (France)</option>
            <option value="it-IT">Italiano</option>
            <option value="nl-NL">Nederlands</option>
            <option value="pt-BR">Português (Brasil)</option>
            <option value="pt-PT">Português (Portugal)</option>
            <option value="ru-RU">Русский</option>
            <option value="ja-JP">日本語</option>
          </select>
        </label></div>
        </div>
        <div class="form-buttons">
          <input type="button" class="olv-modal-close-button gray-button" value="Cancel">
          <input type="submit" class="post-button black-button" value="OK">
        </div>          <input type="hidden" name="location" value="/">      </form>
    </div></div>
  </div>
</div>
</div>

<div id="region-select-page" class="dialog none">
<div class="dialog-inner">
  <div class="window">
    <h1 class="window-title">Switch regions</h1>
    <div class="window-body"><div class="window-body-inner message">
      <form method="post" action="/locale">
        <div class="select-content">
          <div class="select-button">
            <label><span class="select-button-content">Select a community region.</span><br><select name="view_region_id">
            <option value="1">Japan</option>
            <option value="2" selected="">Americas</option>
            <option value="4">Europe and Oceania</option>
          </select>
        </label></div>
        </div>
        <div class="form-buttons">
          <input type="button" class="olv-modal-close-button gray-button" value="Cancel">
          <input type="submit" class="post-button black-button" value="OK">
        </div>          <input type="hidden" name="location" value="/">      </form>
    </div></div>
  </div>
</div>
</div>


          <div class="link-container">
            
              <p><a href="http://www.nintendo.com/interest-based-ads-policy" class="test-about-ad-link">Interest-Based Ads</a></p>
              
              <p><a href="http://support.nintendo.com/miiversehelp" class="test-contact-link">Contact Us</a></p>
              <p><a href="http://www.nintendo.com/corp/privacy.jsp" class="test-privacy-policy-link">Privacy Notice</a></p>
            
            <p id="copyright"><a href="http://www.nintendo.com/?country=US&amp;lang=en">© 2016 Nintendo</a></p>
          </div>
        </div>
      </div>
    </div>
