<?php
// defines variables
session_start();
require('lib/connect.php');
$redirect = '/';
$cinfo = $db->query("SELECT * FROM titles");
 ?>
<html lang="en" data-google-analytics-tracking-id="UA-68779773-1" prefix="og: http://ogp.me/ns#"><head>
    <meta charset="utf-8">
    <title>Communities | Indigo</title>
	<link rel="stylesheet" type="text/css" href="assets/css/offdevice.css">
		<script type="text/javascript" src="assets/js/complete-en.js"></script>
		<link rel="icon" href="Static/img/favicon.png">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-title" content="Miiverse">
    <meta name="description" content="Miiverse is a service that lets you communicate with other players from around the world. It is accessible via Wii U and systems in the Nintendo 3DS family.">
    <meta name="keywords" content="Miiverse,ミーバース,任天堂,Nintendo,Wii U,3DS">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="ja_JP">
    <meta property="og:locale:alternate" content="es_LA">
    <meta property="og:locale:alternate" content="fr_CA">
    <meta property="og:locale:alternate" content="pt_BR">
    <meta property="og:locale:alternate" content="en_GB">
    <meta property="og:locale:alternate" content="fr_FR">
    <meta property="og:locale:alternate" content="es_ES">
    <meta property="og:locale:alternate" content="de_DE">
    <meta property="og:locale:alternate" content="it_IT">
    <meta property="og:locale:alternate" content="nl_NL">
    <meta property="og:locale:alternate" content="pt_PT">
    <meta property="og:locale:alternate" content="ru_RU">
    <meta property="og:title" content="Miiverse | Nintendo">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://miiverse.nintendo.net/">
    <meta property="og:description" content="Miiverse is a service that lets you communicate with other players from around the world. It is accessible via Wii U and systems in the Nintendo 3DS family.">
    <meta property="og:site_name" content="Miiverse | Nintendo">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="miiverse.nintendo.net">
    <link rel="alternate" hreflang="x-default" href="https://miiverse.nintendo.net/">      <link rel="alternate" hreflang="ja-JP" href="https://miiverse.nintendo.net/?locale.lang=ja-JP">
          <link rel="alternate" hreflang="en-US" href="https://miiverse.nintendo.net/?locale.lang=en-US">
          <link rel="alternate" hreflang="es-MX" href="https://miiverse.nintendo.net/?locale.lang=es-MX">
          <link rel="alternate" hreflang="fr-CA" href="https://miiverse.nintendo.net/?locale.lang=fr-CA">
          <link rel="alternate" hreflang="pt-BR" href="https://miiverse.nintendo.net/?locale.lang=pt-BR">
          <link rel="alternate" hreflang="en-GB" href="https://miiverse.nintendo.net/?locale.lang=en-GB">
          <link rel="alternate" hreflang="fr-FR" href="https://miiverse.nintendo.net/?locale.lang=fr-FR">
          <link rel="alternate" hreflang="es-ES" href="https://miiverse.nintendo.net/?locale.lang=es-ES">
          <link rel="alternate" hreflang="de-DE" href="https://miiverse.nintendo.net/?locale.lang=de-DE">
          <link rel="alternate" hreflang="it-IT" href="https://miiverse.nintendo.net/?locale.lang=it-IT">
          <link rel="alternate" hreflang="nl-NL" href="https://miiverse.nintendo.net/?locale.lang=nl-NL">
          <link rel="alternate" hreflang="pt-PT" href="https://miiverse.nintendo.net/?locale.lang=pt-PT">
          <link rel="alternate" hreflang="ru-RU" href="https://miiverse.nintendo.net/?locale.lang=ru-RU">
    
    <link rel="shortcut icon" href="https://d13ph7xrk1ee39.cloudfront.net/img/favicon.ico?mM9KNw_M04SIP2y9VGgdNA">
    <link rel="apple-touch-icon" sizes="57x57" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-57x57.png?Ag2tdrIcl30F8RewVb7MpA">
    <link rel="apple-touch-icon" sizes="114x114" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-114x114.png?np5stZwxPtIFygwO41QXAA">
    <link rel="apple-touch-icon" sizes="72x72" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-72x72.png?s4ECPF96pvErA7s03oG3gQ">
    <link rel="apple-touch-icon" sizes="144x144" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-144x144.png?Cp5sZwpS_1aly-SFq8AeIA">
    <link rel="stylesheet" type="text/css" href="https://d13ph7xrk1ee39.cloudfront.net/css/offdevice.css?uv6UeRmkC2ICaNONOZ_PvQ">
    <script async="" type="text/javascript" src="http://www.googletagservices.com/tag/js/gpt.js"></script><script src="https://d13ph7xrk1ee39.cloudfront.net/js/complete-en.js?aiDA7nbtdb0KKTTDYi619A"></script>
      
      <script type="text/javascript">
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function() {
          var gads = document.createElement('script');
          gads.async = true;
          gads.type = 'text/javascript';
          var useSSL = 'https:' == document.location.protocol;
          gads.src = (useSSL ? 'https:' : 'http:') +
            '//www.googletagservices.com/tag/js/gpt.js';
          var node = document.getElementsByTagName('script')[0];
          node.parentNode.insertBefore(gads, node);
        })();
      </script>        <script type="application/json" class="js-ad-slot-spec" data-spec="{&quot;laptop_size&quot;:[300,250],&quot;tablet_size&quot;:[468,60],&quot;smartphone_size&quot;:[320,100],&quot;ad_key&quot;:&quot;div-gpt-ad-1438756213573-1&quot;,&quot;ad_unit_path&quot;:&quot;/94393651/miiverse-communities-top&quot;}"></script>        <script type="application/json" class="js-ad-slot-spec" data-spec="{&quot;laptop_size&quot;:[300,250],&quot;tablet_size&quot;:[468,60],&quot;smartphone_size&quot;:[320,100],&quot;ad_key&quot;:&quot;div-gpt-ad-1438756213573-0&quot;,&quot;ad_unit_path&quot;:&quot;/94393651/miiverse-communities-bottom&quot;}"></script>      <script type="text/javascript">
        googletag.cmd.push(function() {
          googletag.pubads().setTagForChildDirectedTreatment(1);

          var slotSpecs = document.querySelectorAll('.js-ad-slot-spec');
          for (var i = 0; i < slotSpecs.length; i++) {
            var adSpec = JSON.parse(slotSpecs[i].getAttribute('data-spec'));

            var mapping = googletag.sizeMapping().
               addSize([960, 0], adSpec.laptop_size).
               addSize([640, 0], adSpec.tablet_size).
               addSize([  0, 0], adSpec.smartphone_size).
               build();

            googletag.defineSlot(adSpec.ad_unit_path, [[320, 100], [300, 250]], adSpec.ad_key)
              .addService(googletag.pubads())
              .defineSizeMapping(mapping);
          }

          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script> </head>
	  <body class="guest-top guest" data-token="" data-static-root="https://d13ph7xrk1ee39.cloudfront.net/">
    <div id="wrapper">
      <div id="sub-body">
        <menu id="global-menu">
         <li id="global-menu-logo"><h1><a href="/"><img src="assets/img/main-logo.png" alt="Miiverse" style="width:105px;height:40px;"></a></h1></li>
          <li id="global-menu-login">
            <form id="login_form" action="/signin" method="post">
              <input type="hidden" name="location" value="/">
              <input type="image" alt="Sign in" src="assets/img/signin_base.png">
            </form>
          </li>
        </menu>
      </div>
      
      <div id="main-body">

<div id="about">
  <div id="about-inner">
    <div id="about-text">
      <h2 class="welcome-message">Welcome to Indigo!</h2>
      <p>Indigo is a Miiverse clone written by Chance, Ben, Pip, and Gnarly. We have a responsible administration, group messaging, Hubs to talk about games, media, or history, and more. </p>
      <div class="guest-terms-content">
        <a class="symbol guest-terms-link test-guest-terms " href="/guide/terms">Use of Indigo</a>
		<div class="guest-close-announce-content">
<div class="guest-announce-content">
        <a class="symbol guest-close-announce-link test-guest-announce" href="/titles/8">Indigo Announcements</a>
      </div>
      </div>
      </div>
    </div>
    <img src="assets/img/tutorial-activity-feed.png">
  </div>
</div>
<div class="body-content" id="community-top" data-region="USA">
  <div class="community-main">
</div>
  <div class="community-top-sidebar">
    <form method="GET" action="/titles/search" class="search">
      <input type="text" name="query" placeholder="Search Communities" minlength="2" maxlength="20"><input type="submit" value="q" title="Search">
    </form>
<div class="post-list-outline" style="text-align: center">
<h2 class="label"><?php echo $memo_title; ?></h2>
<p style="width: 90%; display: inine-block; padding: 10px;"><?php echo $memo_content;
if($_SESSION['loggedin'] == true) {
 echo '<p>What\'s up Nigga you are now signed in as '.$user['user_name'].'!!! Congrats!!!</p>';
 }
 ?></p>

</div>
  <div id="div-gpt-ad-1438756213573-1" class="adx test-adx">
    <span class="adx-label">Advertisement</span>
  <script type="text/javascript">
  googletag.cmd.push(function() { googletag.display('div-gpt-ad-1438756213573-1'); });
  </script>
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
    </div>  </div>

  <div class="community-main">

      <h3 class="community-title symbol">Popular Hubs</h3>
      <div>
        <ul class="list community-list community-card-list test-hot-communities">
			<?php
			 while($infoc = mysqli_fetch_array($cinfo)) {
				 			if($infoc['perm'] ==is_null(0)) {
        echo ' <li id="community-6437256809005279207" class="trigger test-community-list-item " data-href="/communities/'.$infoc['title_id'].'" tabindex="0">
		<img src="'.$infoc['title_banner'].'" class="community-list-cover">
  <div class="community-list-body">
  <span class="icon-container"><img src="'.$infoc['title_icon'].'" class="icon"></span>
  <div class="body">
      <a class="title" href="/titles/'.$infoc['title_id'].'" tabindex="-1">'.$infoc['title_name'].'</a>
	<span class="platform-tag"><img src="Static/img/platform-tag-wiiu-3ds.png"</span>
	<span class="text">Wii U/3DS Games</span>
      </li>
'; }
			}
			?>
<a href="/communities/all" class="big-button">Show More</a>
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