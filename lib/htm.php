<?php 

function formHeaders($title) {

	echo '<title>'.$title.'</title>
<link rel="stylesheet" href="assets/css/offdevice.css"></link>
<link rel="shortcut icon" href="asssets/img/favicon.png" />
<script async src="https://www.google-analytics.com/analytics.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script type="text/javascript" src="assets/js/complete-en.js"></script>';
}

function form_top_bar($cvid, $nickname, $pfp, $page) {
	global $user;

	$pfp = user_pfp($cvid,0);

	if($page == 'user') {
		global $userid;
	}

	$html1 = '<menu id="global-menu"><li id="global-menu-logo"><h1><a href="/"><img src="assets/img/main-logo.png" alt="Miiverse" style="width:115px;height:35px;></a></h1></li><li id="global-menu-list">
	<ul>';
	if($page == 'user') {
		if($cvid == $userid) {
	$html2 = '<li id="global-menu-mymenu" class="selected"><a href="/users/'. $cvid .'"><span class="icon-container ';
	} else {
	$html2 = '<li id="global-menu-mymenu"><a href="/users/'. $cvid .'"><span class="icon-container ';
	}
	} else {
	$html2 = '<li id="global-menu-mymenu"><a href="/users/'. $cvid .'"><span class="icon-container ';
	}
  if($page == 'feed') {
    $activity = '<li id="global-menu-feed" class="selected"><a href="/feed" class="symbol"><span>Activity Feed</span></a></li>';
  } else {
    $activity = '<li id="global-menu-feed"><a href="/feed" class="symbol"><span>Activity Feed</span></a></li>';
  }
				 if($user[''] > 2) {$html3 = 'official-user"><img src="'.$pfp.'"></span><span>User Page</span></a></li>';} else {
					$html3 = '"><img src="'.$pfp.'"></span><span>User Page</span></a></li>';
				}
			if($page == 'communities') {
	$html4 = '<li id="global-menu-community" class="selected"><a href="/" class="symbol"><span>Hubs</span></a></li>';
	} else {
	$html4 = '<li id="global-menu-community"><a href="/" class="symbol"><span>Hubs</span></a></li>';
	}
	if($page == 'updates') {
	$html5 = '<li id="global-menu-news" class="selected"><a class="symbol" href="/notifications"><span class="badge" style="display: none;">0</span></a></li>';
	} else {
	$html5 = '<li id="global-menu-news"><a class="symbol" href="/notifications"><span class="badge" '.($notif_count == 0 ? 'style="display: none;"' : 'style="display: block;"').'>'.$notif_count.'</span></a></li>';
	}
	$html6 = '
	<li id="global-menu-my-menu"><button class="symbol js-open-global-my-menu open-global-my-menu"></button>
	<menu id="global-my-menu" class="invisible none">
	<li><a href="/account" class="symbol my-menu-profile-setting"><span>Account Settings</span></a></li>	
	<li><a class="symbol my-menu-info" href="/news"><span>News Hub</span></a></li>
  <li><a href="/rules" class="symbol my-menu-guide"><span>Code of Conduct</span></a></li>
	'.($user['user_level'] > 0 ? '<li><a class="symbol my-menu-miiverse-setting" href="/database.php"><span>Indigo DataBase</span></a></li>' : '').'
	<li><a href="/logout''" class="symbol my-menu-guide"><span>Log Out</span></a></li>
	</menu>';
	$html7 = '</li>';
	$finals = "$html1 $html2 $html3 $activity $html4 $html5 $html6 $html7";
	return $finals;
}

function ftbnli($page) {
		$html1 = '<menu id="global-menu">
	<li id="global-menu-logo"><h1><a href="/"><img src="assets/img/main-logo.png" alt="Miiverse" width="165" height="30"></a></h1></li>
	<li id="global-menu-list">
	<ul>';

	if($page == 'communities') {
	$html2 = '<li id="global-menu-community" class="selected" align="right"><a href="/" class="symbol"><span>Communities</span></a></li>';
	} else {
	$html2 = '<li id="global-menu-community" align="right"><a href="/" class="symbol"><span>Communities</span></a></li>';
	}

	$html3 = '<li id="global-menu-login">
            <form id="login_form" action="/auth/forward" method="post">
              <input type="hidden" name="location" value="/">
              <input type="image" alt="Sign in" src="assets/img/signin_base.png">
            </form>
          </li>
        </menu>
      </div>
	';

	$finals = "$html1 $html2 $html3";

	return $finals;
}

function form_post_thingy() {
  global $id;
  global $row;
  global $user;
        echo '<form method="post" action="/post.php">
        <div style="margin-top:20px" class="feeling-selector js-feeling-selector test-feeling-selector"><label class="symbol feeling-button feeling-button-normal checked"><input type="radio" name="feeling_id" value="0" checked=""><span class="symbol-label">normal</span></label><label class="symbol feeling-button feeling-button-happy"><input type="radio" name="feeling_id" value="1"><span class="symbol-label">happy</span></label><label class="symbol feeling-button feeling-button-like"><input type="radio" name="feeling_id" value="2"><span class="symbol-label">like</span></label><label class="symbol feeling-button feeling-button-surprised"><input type="radio" name="feeling_id" value="3"><span class="symbol-label">surprised</span></label><label class="symbol feeling-button feeling-button-frustrated"><input type="radio" name="feeling_id" value="4"><span class="symbol-label">frustrated</span></label><label class="symbol feeling-button feeling-button-puzzled"><input type="radio" name="feeling_id" value="5"><span class="symbol-label">puzzled</span></label></div>
          <input type="hidden" name="communityid" value="'.$id.'">
        <div class="textarea-container" align="center">
    <textarea name="makepost" id="makepost" class="textarea-text textarea" maxlength="400" placeholder="Share your thoughts in a post to '.$row['title_name'].' Hub" style="margin-top:20px"></textarea>
  </div>
  <div class="form-buttons">
    <input type="submit" class="black-button post-button" value="Send" name="create-post">
  </div>
</form>';
}

function humanTiming($time) {
	    if(time() - $time >= 345600) {
        return date("m/d/Y g:i A", $time);
    }
    $time = time() - $time;
    if (strval($time) < 1) {
        $time = 1;
    }
    if ($time <= 59){
        return 'Less than a minute ago';
    }
    $tokens = array(86400 => 'day', 3600 => 'hour', 60 => 'minute');
    foreach ($tokens as $unit => $text){
        if($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':''). ' ago';
    }
}

	function printOrganization($type,$custom) {
	#Set the custom variable to 0 if you don't want a custom organization.
	if($custom == 0) {
      if($type == 2) {
      echo '<span class="user-organization">Moderator</span>';
      }elseif($type == 3) {
      echo '<span class="user-organization">Admin</span>';
      }elseif($type == 4) {
      echo '<span class="user-organization">Developer</span>';
      }elseif($type > 4) {
      echo '<span class="user-organization">Staff</span>';
      }
  } else {
  	echo '<span class="user-organization">'.$custom.'</span>';
  }
    }

    function print_yeah($feeling) {
    	if($feeling == 0 || $feeling == 1) {
    		return 'Yeah!';
    	}elseif($feeling == 2) {
    		return 'Yeah♥';
    	}elseif($feeling == 3) {
    		return 'Yeah!?';
    	}elseif($feeling == 4 || $feeling == 5) {
    		return 'Yeah...';
    	}else{
    		return 'No.';
    	}
    }
	function getVideoID($url) {
    $url = str_replace('https://www.youtube.com/watch?v=', '', $url);
    $url = str_replace('https://youtu.be/', '', $url);
    $url = str_replace('https://m.youtube.com/watch?v=', '', $url);
    return $url;
  }
?>