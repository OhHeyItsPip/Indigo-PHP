<?php 
include('lib/connect.php');
$sql = "SELECT * FROM titles"; 
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$redirect = '/titles/'.$row['title_id'];
$count = mysqli_num_rows($result);
if($count !== 0) {
$icon = $row['title_icon'];
$name = $row['title_name'];
$description = $row['title_desc'];
$banner = $row['title_banner'];

} else {
  exit("The community could not be found.");
}

if($row['title_by'] == 1) {
  exit("This community is no longer available.");
}

$ansql = "SELECT posts.text, posts.date_time, posts.feeling_id, posts.post_image, posts.id, users.user_name, users.user_level, replies.reply_post FROM posts, users, replies WHERE  = users.user_id = posts.owner ORDER BY id DESC limit 100";
$counting = mysqli_query($db,$ansql);
?>
 <html lang="en" data-google-analytics-tracking-id="UA-68779773-1" prefix="og: http://ogp.me/ns#"><head>
    <meta charset="utf-8">
<title><?php echo $name; ?> Hub - Indigo</title>
    <meta http-equiv="content-style-type" content="text/css">
	<link rel="stylesheet" type="text/css" href="assets/css/offdevice.css">
		<script type="text/javascript" src="assets/js/complete-en.js"></script>
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-title" content="Miiverse">
    <meta name="description" content="Miiverse is a service that lets you communicate with other players from around the world. It is accessible via Wii U and systems in the Nintendo 3DS family.">
    <meta name="keywords" content="Miiverse,ミーバース,任天堂,Nintendo,Wii U,3DS">
    <link rel="alternate" hreflang="x-default" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637">      <link rel="alternate" hreflang="ja-JP" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=ja-JP">
          <link rel="alternate" hreflang="en-US" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=en-US">
          <link rel="alternate" hreflang="es-MX" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=es-MX">
          <link rel="alternate" hreflang="fr-CA" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=fr-CA">
          <link rel="alternate" hreflang="pt-BR" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=pt-BR">
          <link rel="alternate" hreflang="en-GB" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=en-GB">
          <link rel="alternate" hreflang="fr-FR" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=fr-FR">
          <link rel="alternate" hreflang="es-ES" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=es-ES">
          <link rel="alternate" hreflang="de-DE" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=de-DE">
          <link rel="alternate" hreflang="it-IT" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=it-IT">
          <link rel="alternate" hreflang="nl-NL" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=nl-NL">
          <link rel="alternate" hreflang="pt-PT" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=pt-PT">
          <link rel="alternate" hreflang="ru-RU" href="https://miiverse.nintendo.net/titles/14866558072985245728/14866558073038702637?locale.lang=ru-RU">
    
    <link rel="shortcut icon" href="https://d13ph7xrk1ee39.cloudfront.net/img/favicon.ico?mM9KNw_M04SIP2y9VGgdNA">
    <link rel="apple-touch-icon" sizes="57x57" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-57x57.png?Ag2tdrIcl30F8RewVb7MpA">
    <link rel="apple-touch-icon" sizes="114x114" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-114x114.png?np5stZwxPtIFygwO41QXAA">
    <link rel="apple-touch-icon" sizes="72x72" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-72x72.png?s4ECPF96pvErA7s03oG3gQ">
    <link rel="apple-touch-icon" sizes="144x144" href="https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-144x144.png?Cp5sZwpS_1aly-SFq8AeIA">
    <link rel="stylesheet" type="text/css" href="https://d13ph7xrk1ee39.cloudfront.net/css/offdevice.css?uv6UeRmkC2ICaNONOZ_PvQ">
  <body class="community-top guest" data-token="" data-static-root="Static/img">
<body class="guest-top guest" data-token="" data-static-root="https://d13ph7xrk1ee39.cloudfront.net/">
    <div id="wrapper">
      <div id="sub-body">
        <menu id="global-menu">
         <li id="global-menu-logo"><h1><a href="/"><img src="assets/img/main-logo.png" alt="Miiverse" style="width:120px;height:40px;"></a></h1></li>
          <li id="global-menu-login">
            <form id="login_form" action="/auth/forward" method="post">
              <input type="hidden" name="location" value="/">
              <input type="image" alt="Sign in" src="assets/img/signin_base.png">
            </form>
          </li>
        </menu>
      </div>
      <div id="main-body">
<div id="sidebar">
      <section class="sidebar-container" id="sidebar-community">
      <span id="sidebar-cover">
        <a href="/communities/<?php echo $cid; ?>">
          <img src="<?php echo $banner; ?>">
        </a>
      </span>
    <header id="sidebar-community-body">
      <span id="sidebar-community-img">
        <span class="icon-container">
          <a href="/communities/<?php echo $cid; ?>">
            <img src="<?php echo $icon; ?>" class="icon">
          </a>
        </span>
        <span class="platform-tag">
            <img src="">
        </span>
      </span>
      <h1 class="community-name">
        <a href="/titles/<?php echo $cid; ?>"><?php echo $name; ?> Hub</a>      </h1>
    </header>
      <div class="community-description js-community-description">
        <p class="text js-truncated-text"><?php echo $description; ?></p>
      
    <div class="sidebar-setting">
	
      <div class="sidebar-post-menu">
	   </div>
    </div>
  </section>
    <div class="sidebar-setting sidebar-container">
      <ul class="sidebar-other-menu test-related-communities">
        <li><a href="/titles/14866558072985245728" class="sidebar-menu-relation symbol test-related-communities-link"><span>Related Hubs</span></a></li>
        <li class="community-list"><ul>
		     </ul>
    </div>
<div class="sidebar-social-container social-buttons-container
    is-disable-twitter">

<div class="social-buttons-content social-buttons-content-primary">
    
  <div class="social-buttons-content-cell facebook">
      <button type="button" class="button social-button facebook" data-service-name="facebook" data-is-popup="1" data-share-url="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fmiiverse.nintendo.net%2Ftitles%2F14866558072985245728%2F14866558073038702637%3Ffb_ref%3Dscfbp&amp;display=popup" data-width="626" data-height="436">
        <span class="social-button-inner symbol" style="background-image:url('https://d13ph7xrk1ee39.cloudfront.net/img/button-facebook.png?X-blfws5L_C2q4El1QGkTQ');" alt="Share">Share</span>
      </button>
  </div>
</div>
<div class="social-buttons-content social-buttons-content-secondary">
  <div class="social-button-content-cell twitter">
  <button type="button" class="button social-button twitter" data-service-name="twitter" data-is-popup="1" data-share-url="http://www.twitter.com/share" data-width="450" data-height="430">
          <span class="social-button-inner symbol" style="background-image:url();" alt="Tumblr">Twitter</span> 
</button>
</div>
  </div>
  </div>
  <div class="link-container adx-link-container">
    <p><a href="http://www.nintendo.com/interest-based-ads-policy" class="test-about-ad-link">Interest-Based Ads</a></p>
    
    <p><a href="http://support.nintendo.com/miiversehelp" class="test-contact-link">Contact Us</a></p>
    <p><a href="http://www.nintendo.com/corp/privacy.jsp" class="test-privacy-policy-link">Privacy Notice</a></p>
  </div>
  <div id="div-gpt-ad-1440383593758-0" class="adx test-adx">
    <span class="adx-label">Advertisement</span>
  <script type="text/javascript">
  googletag.cmd.push(function() { googletag.display('div-gpt-ad-1440383593758-0'); });
  </script>
  </div>
</div>

<div class="main-column">
  <div class="post-list-outline">
    
    <div id="posts-filter-tab-container" class="tab-container ">
      <div class="tab2">
        <a id="posts-filter-anchor" class=" selected" href="#"><span class="new-posts">All posts</span></a>

        <a class="" href="/titles/<?php echo $cid; ?>/hot">Popular posts</a>
      </div>
    </div>
    



    <div class="body-content" id="community-post-list" data-region="USA">
      
    <div class="list post-list js-post-list" data-next-page-url="/titles/<?php echo $cid; ?>popular">
        <?php 
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          if($owner_only == 'false') {
                if($user['user_level'] < 3 && $cid == 56) {
                echo 'This is a read only hub.';
                } else {
                form_post_thingy();
              }
  } else {
    if($user['user_level'] > 2) { form_post_thingy(); } else {
    echo 'This is an announcement hub.';
    }
  }
}
?>
<div class="body-content" id="community-post-list">
          <div class="list post-list js-post-list">
				<?php 
        if($counting == 0) { echo "There are no posts on this hub yet."; } else {
        while($row = mysqli_fetch_array($aresult)) { 
echo '<div id="post" data-href="/post/'.$row['post_id'].'" class="post post-subtype-default trigger" tabindex="0">
  <a href="/users/' . $row['user_id'] .  '" class="icon-container '; if($row['user_type'] > 2) { echo 'official-user'; }  echo '"><img src="'.htmlspecialchars(user_pfp($row['owner'],$row['feeling'])).'" class="icon"></a>
  <p class="user-name"><a href="/users/' . htmlspecialchars($row['user_id']) . '">' . htmlspecialchars($row['nickname']) . '</a></p>
  <div class="timestamp-container"><span class="timestamp">'.humanTiming(strtotime($row['date_time'])).'</span></div>
    </p>

  <div class="body">
    <div class="post-content">
        <div class="tag-container">
        </div>
            '.(empty($row['post_image']) ? '' : '<a class="screenshot-container still-image" href="/post/'.$row['post_id'].'"><img src="'.$row['screenshot'].'"></a>').'
            <p class="post-content-text">' . htmlspecialchars($row['content']) . '</p>
    		</div>
      <div class="post-meta">
      <div class="empathy symbol"><span class="symbol-label">Yeahs</span><span class="empathy-count">'.$row['yeahs'].'</span></div>
      <div class="reply symbol"><span class="symbol-label">Comments</span><span class="reply-count">'.$row['comments'].'</span></div>
  </div>
  		</div>

 	</div>
  ';
}
 }
  ?>
  <div id="post-filter-select-page" class="dialog none filter-select-page">
  <div class="dialog-inner">
    <div class="window">
      <h1 class="window-title">Filter</h1>
      <div class="window-body">
        <div class="window-body-inner message">
          <form method="get" action="">
            <div class="select-content">
              <div class="select-button">
                <label>
                  <select name="post">
                    <option class="new-posts" value="/titles/6437256808920249212/6437256808920249225/topic/new" selected="">
                      All
                    </option>
                    <option class="open-topic-posts" value="/titles/6437256808920249212/6437256808920249225/topic/open">
                      Open Discussion
                    </option>
                    <option class="topic-category-posts-6437256808920249231" value="/titles/6437256808920249212/6437256808920249225/topic?topic_category_id=6437256808920249231">
                      Hint
                    </option>
                    <option class="topic-category-posts-6437256808920249230" value="/titles/6437256808920249212/6437256808920249225/topic?topic_category_id=6437256808920249230">
                      Question
                    </option>
                    <option class="topic-category-posts-6437256808920249229" value="/titles/6437256808920249212/6437256808920249225/topic?topic_category_id=6437256808920249229">
                      Looking for Teammate
                    </option>
                    <option class="topic-category-posts-6437256808920249228" value="/titles/6437256808920249212/6437256808920249225/topic?topic_category_id=6437256808920249228">
                      Looking for Opponent
                    </option>
                    <option class="topic-category-posts-6437256808920249227" value="/titles/6437256808920249212/6437256808920249225/topic?topic_category_id=6437256808920249227">
                      Tournament
                    </option>
                    <option class="topic-category-posts-6437256808920249226" value="/titles/6437256808920249212/6437256808920249225/topic?topic_category_id=6437256808920249226">
                      Event
                    </option>
                  </select>
                </label>
              </div>
            </div>
            <div class="form-buttons">
              <input type="button" class="olv-modal-close-button gray-button" value="Cancel">
              <input type="submit" class="post-button black-button" value="OK">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div>
      <div id="footer">
        <div id="footer-inner">
          <div class="link-container">
            
              <p><a href="http://www.nintendo.com/interest-based-ads-policy" class="test-about-ad-link">Interest-Based Ads</a></p>
              
              <p><a href="http://support.nintendo.com/miiversehelp" class="test-contact-link">Contact Us</a></p>
              <p><a href="http://www.nintendo.com/corp/privacy.jsp" class="test-privacy-policy-link">Privacy Notice</a></p>
            
            <p id="copyright"><a href="http://www.nintendo.com/?country=US&amp;lang=en">© 2016 Nintendo</a></p>
          </div>
        </div>
      </div>
    </div>
  

</body></html>
