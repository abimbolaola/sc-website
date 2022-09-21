
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Checkout | Social Care</title>
 <meta name="description" content=""/>
    <meta name="keywords" content=""/>
	<meta name="robots" content="index, follow">
<link href="https://www.mediamister.com/checkout" rel="canonical">
	<link rel="icon" href="https://www.mediamister.com/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="https://www.mediamister.com/images/favicon.png" type="image/x-icon"/>
	<!--
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
-->
<link rel="preload" type="text/css" href="https://www.mediamister.com/css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="https://www.mediamister.com/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <link href="https://www.mediamister.com/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://www.mediamister.com/css/styles.css" rel="stylesheet">
<noscript>
<!--link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap"-->
<link rel="stylesheet" type="text/css" href="https://www.mediamister.com/css/slick.css">
<link rel="stylesheet" href="https://www.mediamister.com/css/all.min.css">
</noscript>
    <link rel="manifest" href="https://www.mediamister.com/manifest.json" />
<!-- ios support -->
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-72x72.png" />
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-96x96.png" />
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-128x128.png" />
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-144x144.png" />
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-152x152.png" />
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-192x192.png" />
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-384x384.png" />
<link rel="apple-touch-icon" href="https://www.mediamister.com/images/icons/icon-512x512.png" />
<meta name="apple-mobile-web-app-status-bar" content="#3740ff" />
<meta name="theme-color" content="#3740ff" />

 <script type='application/ld+json'>
        {
            "@context":"https:\/\/schema.org",
            "@type":"Organization",
            "url":"https:\/\/www.mediamister.com\/",
			"contactPoint" : [
			{ "@type" : "ContactPoint",
      "email" : "info@mediamister.com",
      "contactType" : "Technical Support"
			} ],
            "sameAs":[	
                        "https:\/\/www.facebook.com\/mediamister\/",
                        "https://twitter.com/MediaMister_MM",
                        "https:\/\/in.pinterest.com\/mediamister"
                    ],
            "@id":"https:\/\/www.mediamister.com\/#organization",
            "name":"Social Care",
            "logo":"https:\/\/www.mediamister.com\/images\/logo.png"
        }
    </script>
	
	<!-- Google Tag Manager -->
<script>
setTimeout(function(){
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KR8DJ46');
},3000); 
</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35041257-1"></script>
<script>
setTimeout(function(){
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-35041257-1');
  },3000);
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HYMMDZ2Y3D"></script>
<script>
setTimeout(function(){
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HYMMDZ2Y3D');
  },3000);
</script>
  <link rel="stylesheet" href="css/intlTelInput.css">
    <style>
	#email_verify{float:right;}
	.ev_loading{font-size:14px;}
.ev_good{color:#24ae4e;font-size:14px;}
.ev_bad{color:red;font-size:14px;}
label{width:100%;}
@keyframes  lo{to{transform:rotate(360deg)}}@-webkit-keyframes lo{to{-webkit-transform:rotate(360deg)}}

	.btn-coupon{background: #363636;border-radius:0;color:#fff !important;}
	.btn-coupon:focus{outline:0 !important;}
	.form-control[disabled]{background:#eee !important;}
</style>
<script>
/**
 * A function to handle a click on a checkout button. This function uses the eventCallback
 * data layer variable to handle navigation after the ecommerce data has been sent to Google Analytics.
 */
//function onCheckout() {
  dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
  dataLayer.push({
    'event': 'checkout',
    'ecommerce': {
      'checkout': {
        //'actionField': {'step': 1, 'option': 'Visa'},
        'products': [
							{
					'name': '100 Instagram Followers',
					'id': 'qmppeairoit6k8o5bsm79svils073254',
					'price': '5',
					'brand': 'Instagram',
					'category': 'Instagram Followers',
					'list_position': 'Normal',
					'variant': '',
					'quantity': 1
				}					]
     }
   }
  });
//}
</script>
</head>
<body>
<!--<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">-->

<div class="bg-overlay"></div>
<header class="headerbg">
  <div class="container-fluid">
  <div class="row">
  <div class="header-top">
 <div class="logo">
  <div class="mobile-menu"><i class="fas fa-bars"></i></div>
 <a href="https://www.mediamister.com" title="Social Care"><img src="https://www.mediamister.com/images/logo.webp" width="280px" height="49px"  alt="Social Care"/></a>
 </div>
  <div class="head-search desk-search">

 <form action="#" id="searchform">
 
 <div style="position:relative;">
		<input type='search' id='autocomplete' class="form-control search-field" placeholder="Ex: facebook, twitter..." style="position:relative;" value="" /><span id="err"></span>
		<i class="fa fa-spin fa-spinner search_load" style="display:none;right:20px;background:#fff;"></i>
	</div>
<div class="search-default popular-services" style="display:none;">
<div class="search-title">Popular Services</div>
<ul class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front">
<li class="ui-menu-item"><a href="https://www.mediamister.com/buy-youtube-views">Buy YouTube Views</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-instagram-followers">Buy Instagram Followers</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-twitter-followers">Buy Twitter Followers</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-spotify-followers">Buy Spotify Followers</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-linkedin-followers">Buy LinkedIn Followers</a></li>
</ul>
</div>
  
 </form>

 </div>

   <div class="head-cart-section">
   <a href="https://www.mediamister.com/view-cart.php"><img src="https://www.mediamister.com/images/cart-icon.webp" width="50px" height="40px"  alt="view cart"/> <span class="carttext">Cart</span> (<span class="result_cart_cnt">1</span>)</a>

<div class="myaccount"><div class="upicon">AB</div> <div class="upname">Abimbol</div>

   <ul class="myaccountlist" aria-labelledby="myaccountlist">
    <li><a href="https://www.mediamister.com/dashboard.php">Dashboard</a></li>
    <li><a href="https://www.mediamister.com/order-history.php">Order History</a></li>
    <li><a href="https://www.mediamister.com/account-details.php">Account Details</a></li>
	<li><a href="https://www.mediamister.com/billing-details.php">Billing Details</a></li>
	<li><a href="https://www.mediamister.com/change-password.php">Change Password</a></li>
	<li><a href="https://www.mediamister.com/signout.php">Sign Out</a></li>
  </ul>
  </div>


 </div>

 </div>
  <div class="header-bottom">
<nav class = "navbar">
   

          <ul class = "navbar-nav">
          <li class = "all-service-menu" id="slide"><a href="javascript:void(0)"><i class="fas fa-bars"></i> All Services</a></li>
            
				 <li><a href="#" onclick="return false;" class="menu-link">Instagram <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-instagram-followers">Buy Instagram Followers</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-likes">Buy Instagram Likes</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-views">Buy Instagram Views</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-impressions">Buy Instagram Impressions</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-saves">Buy Instagram Saves</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-mentions">Buy Instagram Mentions</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-comment-replies">Buy Instagram Comment Replies</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-comments">Buy Instagram Comments</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-profile-visits">Buy Instagram Profile Visits</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-post-reach">Buy Instagram Post Reach</a></li>
<li><a href="https://www.mediamister.com/buy-instagram-story-poll-votes">Buy Instagram Story Poll Votes</a></li>
                  </ul>
                </div></div></li>
				
				 <li><a href="#" onclick="return false;" class="menu-link">TikTok <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-tiktok-followers">Buy TikTok Followers</a></li>
<li><a href="https://www.mediamister.com/buy-tiktok-comments">Buy TikTok Comments</a></li>
<li><a href="https://www.mediamister.com/buy-tiktok-likes">Buy TikTok Likes</a></li>
<li><a href="https://www.mediamister.com/buy-tiktok-shares">Buy TikTok Shares</a></li>
<li><a href="https://www.mediamister.com/buy-tiktok-views">Buy TikTok Views</a></li>
                  </ul>
                </div></div></li>
				
 <li><a href="#" onclick="return false;" class="menu-link">YouTube <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
						<li><a href="https://www.mediamister.com/buy-youtube-views">Buy YouTube Views</a></li>
<li><a href="https://www.mediamister.com/buy-youtube-likes">Buy YouTube Likes</a></li>
<li><a href="https://www.mediamister.com/buy-youtube-subscribers">Buy YouTube Subscribers</a></li>
<li><a href="https://www.mediamister.com/buy-youtube-favorites">Buy YouTube Favorites</a></li>
<li><a href="https://www.mediamister.com/buy-youtube-shares">Buy YouTube Shares</a></li>
<li><a href="https://www.mediamister.com/buy-youtube-watch-time-hours">Buy YouTube Watch Time Hours</a></li>
<li><a href="https://www.mediamister.com/buy-youtube-dislikes">Buy YouTube Dislikes</a></li>
<li><a href="https://www.mediamister.com/buy-youtube-comments">Buy YouTube Comments</a></li>
                  </ul>
                </div></div></li>
				
 <li><a href="#" onclick="return false;" class="menu-link">Twitter <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-twitter-followers">Buy Twitter Followers</a></li>
<li><a href="https://www.mediamister.com/buy-twitter-retweets">Buy Twitter Retweets</a></li>
<li><a href="https://www.mediamister.com/buy-twitter-comments">Buy Twitter Comments</a></li>
<li><a href="https://www.mediamister.com/buy-twitter-likes">Buy Twitter Likes</a></li>
<li><a href="https://www.mediamister.com/buy-twitter-views">Buy Twitter Views</a></li>
<li><a href="https://www.mediamister.com/buy-twitter-poll-votes">Buy Twitter Poll Votes</a></li>
<li><a href="https://www.mediamister.com/buy-twitter-impressions">Buy Twitter Impressions</a></li>
                  </ul>
                </div></div></li>

			<li><a href="#" onclick="return false;" class="menu-link">Facebook <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-facebook-likes">Buy Facebook Likes</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-followers">Buy Facebook Followers</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-views">Buy Facebook Views</a></li>				
<li><a href="https://www.mediamister.com/buy-facebook-reviews">Buy Facebook Reviews</a></li>														
<li><a href="https://www.mediamister.com/buy-facebook-group-members">Buy Facebook Group Members</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-reactions">Buy Facebook Reactions</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-event-attendees">Buy Facebook Event Attendees</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-comment-replies">Buy Facebook Comment Replies</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-comments">Buy Facebook Comments</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-shares">Buy Facebook Shares</a></li>
<li><a href="https://www.mediamister.com/buy-facebook-poll-votes">Buy Facebook Poll Votes</a></li>
                  </ul>
                </div></div></li>

<li><a href="#" onclick="return false;" class="menu-link">Spotify <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-spotify-followers">Buy Spotify Followers</a></li>
<li><a href="https://www.mediamister.com/buy-spotify-monthly-listeners">Buy Spotify Monthly Listeners</a></li>
<li><a href="https://www.mediamister.com/buy-spotify-plays">Buy Spotify Plays</a></li>
<li><a href="https://www.mediamister.com/buy-spotify-pre-saves">Buy Spotify Pre Saves</a></li>
<li><a href="https://www.mediamister.com/buy-spotify-saves">Buy Spotify Saves</a></li>
					
                  </ul>
                </div></div></li>
				
				<li><a href="#" onclick="return false;" class="menu-link">Clubhouse <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
	<li><a href="https://www.mediamister.com/buy-clubhouse-followers">Buy Clubhouse Followers</a></li>
	<li><a href="https://www.mediamister.com/buy-clubhouse-room-visitors">Buy Clubhouse Room Visitors</a></li>
                  </ul>
                </div></div></li>
				
				 <li><a href="#" onclick="return false;" class="menu-link">Discord <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-discord-members">Buy Discord Members</a></li>
                  </ul>
                </div></div></li>
				
				 <li><a href="#" onclick="return false;" class="menu-link">LinkedIn <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-linkedin-followers">Buy LinkedIn Followers</span></a></li>
<li><a href="https://www.mediamister.com/buy-linkedin-connections">Buy LinkedIn Connections</span></a></li>
<li><a href="https://www.mediamister.com/buy-linkedin-recommendations">Buy LinkedIn Recommendations</span></a></li>
<li><a href="https://www.mediamister.com/buy-linkedin-endorsements">Buy LinkedIn Endorsements</span></a></li>
<li><a href="https://www.mediamister.com/buy-linkedin-employees">Buy LinkedIn Employees</span></a></li>
<li><a href="https://www.mediamister.com/buy-linkedin-likes">Buy LinkedIn Likes</span></a></li>
<li><a href="https://www.mediamister.com/buy-linkedin-comments">Buy LinkedIn Comments</span></a></li>
<li><a href="https://www.mediamister.com/buy-linkedin-shares">Buy LinkedIn Shares</span></a></li>
					
                  </ul>
                </div></div></li>
				
				<li><a href="#" onclick="return false;" class="menu-link">Twitch <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-twitch-followers">Buy Twitch Followers</a></li>
<li><a href="https://www.mediamister.com/buy-twitch-views">Buy Twitch Views</a></li>
                  </ul>
                </div></div></li>
				
				 <li><a href="#" onclick="return false;" class="menu-link">Pinterest <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-pinterest-followers">Buy Pinterest Followers</a></li>
<li><a href="https://www.mediamister.com/buy-pinterest-repins">Buy Pinterest Repins</a></li>
<li><a href="https://www.mediamister.com/buy-pinterest-reactions">Buy Pinterest Reactions</a></li>
					
                  </ul>
                </div></div></li>
				
				 <li><a href="#" onclick="return false;" class="menu-link">Mixcloud <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-mixcloud-plays">Buy Mixcloud Plays</a></li>
<li><a href="https://www.mediamister.com/buy-mixcloud-followers">Buy Mixcloud Followers</a></li>
					
                  </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link">Soundcloud <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-soundcloud-plays">Buy Soundcloud Plays</a></li>
<li><a href="https://www.mediamister.com/buy-soundcloud-followers">Buy Soundcloud Followers</a></li>
<li><a href="https://www.mediamister.com/buy-soundcloud-likes">Buy Soundcloud Likes</a></li>
<li><a href="https://www.mediamister.com/buy-soundcloud-comments">Buy Soundcloud Comments</a></li>
<li><a href="https://www.mediamister.com/buy-soundcloud-reposts">Buy SoundCloud Reposts</a></li>
 </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link">Vimeo <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-vimeo-views">Buy Vimeo Views</a></li>
<li><a href="https://www.mediamister.com/buy-vimeo-followers">Buy Vimeo Followers</a></li>
<li><a href="https://www.mediamister.com/buy-vimeo-likes">Buy Vimeo Likes</a></li>

                  </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link">Dailymotion <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-dailymotion-views">Buy Dailymotion Views</a></li>
					
                  </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link"><span itemprop="name">VK </span><span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-vk-friends">Buy VK Friends</a></li>
							<li><a href="https://www.mediamister.com/buy-vk-followers">Buy VK Followers</a></li>
							<li><a href="https://www.mediamister.com/buy-vk-group-members">Buy VK Group Members</a></li>
							<li><a href="https://www.mediamister.com/buy-vk-likes">Buy VK Likes</a></li>
							<li><a href="https://www.mediamister.com/buy-vk-comments">Buy VK Comments</a></li>
							<li><a href="https://www.mediamister.com/buy-vk-shares">Buy VK Shares</a></li>
					
                  </ul>
                </div></div></li>

				 <li><a href="#" onclick="return false;" class="menu-link">Website <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
		<li><a href="https://www.mediamister.com/buy-website-traffic">Buy Website Traffic</a></li>			
                  </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link">Tumblr <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-tumblr-followers">Buy Tumblr Followers</a></li>
							<li><a href="https://www.mediamister.com/buy-tumblr-reblogs">Buy Tumblr Reblogs</a></li>
							<li><a href="https://www.mediamister.com/buy-tumblr-likes">Buy Tumblr Likes</a></li>
					
                  </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link">Telegram <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-telegram-members">Buy Telegram Members</a></li>
							<li><a href="https://www.mediamister.com/buy-telegram-post-views">Buy Telegram Post Views</a></li>
							<li><a href="https://www.mediamister.com/buy-telegram-poll-votes">Buy Telegram Poll Votes</a></li>
					
                  </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link">Shazam <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
	<li><a href="https://www.mediamister.com/buy-shazam-plays">Buy Shazam Plays</a></li>
							<li><a href="https://www.mediamister.com/buy-shazam-followers">Buy Shazam Followers</a></li>
					
                  </ul>
                </div></div></li>
				
				
				 <li><a href="#" onclick="return false;" class="menu-link">Quora <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu"><div class = "sub-menu-item"><ul>
							<li><a href="https://www.mediamister.com/buy-quora-followers">Buy Quora Followers</a></li>
							<li><a href="https://www.mediamister.com/buy-quora-upvotes">Buy Quora Upvotes</a></li>
							<li><a href="https://www.mediamister.com/buy-quora-shares">Buy Quora Shares</a></li>
							<li><a href="https://www.mediamister.com/buy-quora-comments">Buy Quora Comments</a></li>
							<li><a href="https://www.mediamister.com/buy-quora-views">Buy Quora Views</a></li>
                  </ul>
                </div></div></li>
				
				 <li><a href="#" onclick="return false;" class="menu-link">Google <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-google-my-business-reviews">Buy Google My Business Reviews</a></li>
<li><a href="https://www.mediamister.com/buy-google-play-reviews">Buy Google Play Reviews</a></li>
                  </ul>
                </div></div></li>
				 <li><a href="#" onclick="return false;" class="menu-link">Reddit <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
				  <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
          <li><a href="https://www.mediamister.com/buy-reddit-upvotes">Buy Reddit Upvotes</a></li>
		<li><a href="https://www.mediamister.com/buy-reddit-subscribers">Buy Reddit Subscribers</a></li>
		<li><a href="https://www.mediamister.com/buy-reddit-followers">Buy Reddit Followers</a></li>
					
                  </ul>
                </div></div></li>
				 <li><a href="#" onclick="return false;" class="menu-link">Sitejabber <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
			<li><a href="https://www.mediamister.com/buy-sitejabber-reviews">Buy Sitejabber Reviews</a></li>
			</ul>
                </div></div></li>
				 <li><a href="#" onclick="return false;" class="menu-link">Trustpilot <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-trustpilot-reviews">Buy Trustpilot Reviews</a></li>
                  </ul>
                </div></div></li>

	 <li><a href="#" onclick="return false;" class="menu-link">Tidal <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-tidal-followers">Buy Tidal Followers</a></li>
							<li><a href="https://www.mediamister.com/buy-tidal-plays">Buy Tidal Plays</a></li>
                  </ul>
                </div></div></li>
				
	 <li><a href="#" onclick="return false;" class="menu-link">IMDb <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-imdb-ratings">Buy IMDb Ratings</a></li>
<li><a href="https://www.mediamister.com/buy-imdb-reviews">Buy IMDb Reviews</a></li>
                  </ul>
                </div></div></li>
	 <li><a href="#" onclick="return false;" class="menu-link">ReverbNation <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-reverbnation-plays">Buy ReverbNation Plays</a></li>
							<li><a href="https://www.mediamister.com/buy-reverbnation-fans">Buy ReverbNation Fans</a></li>
                  </ul>
                </div></div></li>
	 <li><a href="#" onclick="return false;" class="menu-link">Datpiff <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-datpiff-plays">Buy Datpiff Plays</a></li>
                  </ul>
                </div></div></li>

          <li><a href="#" onclick="return false;" class="menu-link">Snapchat <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-snapchat-followers">Buy Snapchat Followers</a></li>
<li><a href="https://www.mediamister.com/buy-snapchat-story-views">Buy Snapchat Story Views</a></li>
                  </ul>
                </div></div></li>
  <li><a href="#" onclick="return false;" class="menu-link">Audiomack <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-audiomack-plays">Buy Audiomack Plays</a></li>
<li><a href="https://www.mediamister.com/buy-audiomack-likes">Buy Audiomack Likes</a></li>
                  </ul>
                </div></div></li>
				 <li><a href="#" onclick="return false;" class="menu-link">Likee <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-likee-followers">Buy Likee Followers</a></li>
<li><a href="https://www.mediamister.com/buy-likee-likes">Buy Likee Likes</a></li>		
                  </ul>
                </div></div></li>
				 <li><a href="#" onclick="return false;" class="menu-link">Tripadvisor <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-tripadvisor-reviews">Buy Tripadvisor Reviews</a></li>	
                  </ul>
                </div></div></li>
						 <li><a href="#" onclick="return false;" class="menu-link">Pandora <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-pandora-plays">Buy Pandora Plays</a></li>
                  </ul>
                </div></div></li>
					 
				<li><a href="#" onclick="return false;" class="menu-link">Napster <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span></a>
              <div class = "sub-menu simple-sub-menu"><div class = "sub-menu-item"><ul>
<li><a href="https://www.mediamister.com/buy-napster-plays">Buy Napster Plays</a></li>
                  </ul>
                </div></div></li>
          </ul>
      
      </nav>
	  
	    <div class="head-search mob-search">

 <form action="#" id="searchform">
 
 <div style="position:relative;">
		<input type='search' id='mobautocomplete' class="form-control search-field" placeholder="Search here (Ex: facebook, twitter...)" style="position:relative;" value="" /><span id="err"></span>
		<i class="fa fa-spin fa-spinner search_load" style="display:none;right:20px;background:#fff;"></i>
	</div>
<div class="search-default popular-services" style="display:none;">
<div class="search-title">Popular Services</div>
<ul class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front">
<li class="ui-menu-item"><a href="https://www.mediamister.com/buy-youtube-views">Buy YouTube Views</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-instagram-followers">Buy Instagram Followers</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-twitter-followers">Buy Twitter Followers</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-spotify-followers">Buy Spotify Followers</a></li>
 <li class="ui-menu-item"><a href="https://www.mediamister.com/buy-linkedin-followers">Buy LinkedIn Followers</a></li>
</ul>
</div>
  
 </form>

 </div>
 
</div>
</div>
</div>
  </header>
  <!--div class="bfcm-offer">
  <img src="https://www.mediamister.com/images/xmas.webp" width="728px" height="90px" class="bfcm-desk" alt="Happy Christmas"/>
   <img src="https://www.mediamister.com/images/xmas-mobile.webp" width="300px" height="100px" class="bfcm-mob" alt="Happy Christmas"/>
  </div-->
   <div class="breadcrumb-row">
 <div class="container-fluid">
<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a  itemprop="item" href="https://www.mediamister.com"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
<li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Checkout</span><meta itemprop="position" content="1" /></li>
</ol>
</div>
  </div>
<div class="section_type_4">
<div class="container-fluid">

<div class="col-sm-12 mb-5">
<h2 class="main-title text-center"><i class="fas fa-lock"></i> Safe Checkout</h2>
</div>

<div class="row mb-3"><a href="view-cart.php" class="return-cart"><i class="fas fa-chevron-left"></i> Return Cart</a></div>

<form name="mediapayment" class="row " id="checkout-form" method="post" action="checkout-data" autocomplete="off">

<div class="col-xl-4 col-md-12 col-sm-12">
    <div class="bg-white p-lg-4">
	
	<div class="mob-order-summary"><span class="mob-sum-tit"><i class="fas fa-shopping-cart"></i> Show Order Summary</span> <span class="mob-sum-price coinpayment_tot">$5.00</span></div>
	
	<div class="desk-summary">
	<h2 class="check-sub-title">Cart Summary</h2>

	<div class="mb-10 cart-table">
	
	<ul class="faq-list check-pack">
		  <li><a href="#" class="question on"><img src="images/service-icons/4.webp" alt="Instagram Followers"/><span class="chk_sname">100 Instagram Followers</span> <span class="chk_price">$5.00</span></a>
    <div class="answer" style="display:block;">
   <p class="mb-0" style="word-break:break-all;"> <b>Time Required: </b>1-2 days <br /> 														 <b>Order Type: </b>Normal <br /> 																																										<b>Profile: </b>https://www.instagram.com/wendeats/ <br />
																												 <b>Country: </b>Brazil - Amazonas <br /> 																																																																						</span>
																										</p>
     </div>
  </li>

  </ul>
	
		
									  
								
					
             </div>
    </div>
    </div>
</div>
	<div class="col-xl-4 col-md-6 col-sm-12">
			<div class="bg-white p-4">
				<h2 class="check-sub-title">Billing Details</h2>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label>Email Address <span class="mandatory">*</span> <span id="email_verify"></span></label>
							<input id="form_email" type="email" name="form_email"  value="abimbola12015@gmail.com" class="form-control" required="required" data-error="Valid email is required." aria-required="true">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label>First Name <span class="mandatory">*</span></label>
							<input id="form_name" type="text" name="form_name"  value="Abimbola" class="form-control" required="required" data-error="Firstname is required." aria-required="true">
						</div>
					</div>
			
					<div class="col-sm-12">
						<div class="form-group">
							<label>Last Name <span class="mandatory">*</span></label>
							<input id="form_lastname" type="text" name="form_lastname"  value="Josiah" class="form-control" required="required" data-error="Lastname is required." aria-required="true">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
								<label>Phone Number</label>
							<input type="tel" name="form_phone_no" id="form_phone_no"  value="+234 8135974602" class="form-control">
						</div>
					</div>
				
						<div class="col-sm-12">
							<div class="form-group check-subnews">
							
									<input type="checkbox" class="form-check-input" id="sub-news" name="news_letter_sub" checked>
									<label class="form-check-label" for="sub-news"><small>Subscribe to our newsletter</small></label>
								
							</div>
						</div>
					</div>

                
					
    </div>

</div>	


<div class="col-xl-4 col-md-6 col-sm-12">
			<div class="bg-white p-4">
				<h2 class="check-sub-title">Payment Options</h2>

                    <div class="row payment_type mt-3">
						<div class="col-sm-12">
							<div class="form-group mb-0">
							
								<p class="mb-4">Choose a way to pay for your order <span class="mandatory">*</span></p>
							
																
																	<input type="radio" name="payment_type" id="stripe" value="Stripe"> <label class="paymentgateway text-center" id="stripeid" for="stripe"><span>Stripe</span> <img src="images/stripe-cards.png" class="img-fluid" alt="Stripe Payment Icon"/> <span style="display:none;"></span></label>
									<div class="paymentslide stripe-slide" style="display:none;">
										<p>Pay with Credit/Debit Card</p>
									</div>
																
																
																
																	
															
																
																
																	<input type="radio" name="payment_type" id="bitcoin" value="Bitcoin"> <label class="paymentgateway" for="bitcoin" id="coinpaymentsid"><span class="dline">Cryptocurrency <small>(Get 5% discount)</small></span> <img src="images/crypto-cards.png" alt="Coin Payment Icon"/> <span style="display:none;"></span></label>								
									<div class="paymentslide coinpaymenticons" style="display:none;">
										<p>Pay with Bitcoin/Ethereum</p>
									</div>
																
																	
														</div>
						</div>
					</div>
					
				
						
							<div class="form-group">
							<label>Do you have a coupon?</label>
							<div class="coupon-box">
								<input type="text" name="coupon_code" id="coupon_code" class="form-control coupon-input" placeholder="Coupon code" value="" />
								
							
									<button class="btn btn-coupon-check" type="button"><i class="fas fa-tags"></i><span class="text-uppercase">Apply Coupon</span></button>
							</div>
							<div class="response_txt coupon_error"> </div>
							</div>
							
					
						
						<table class="table grand_total_response" cellspacing="0">
                            <tbody class="">
																	
										
										<tr class="show_subtotal" style="display:none">
										<td class="text-start">Sub Total</td>
										<td class="text-end">$5.00</td>
									</tr>
									<tr class="tr_cripto_dicount"></tr>
									<tr>
										<td class="text-start"><b>Grand Total</b></td>
										<td class="text-end"><h5 class="coinpayment_tot"><b>$5.00</b></h5></td>
									</tr>
										
										
									
																		
						
								
							</tbody>
						</table>
						<button class="form-control pay-btn" type="submit"><i class="far fa-credit-card"></i> PLACE ORDER</button>
					
					<input type="hidden" id="sub_total_order" value="5" />
							<input type="hidden" id="normal_discount" value="" />
							<input type="hidden" id="coinpayment_discount" value="" />

    </div>

</div>	
</form>
<div class="trust-badge mt-5">
<img src="images/trust-badge.png" class="img-fluid" width="602px" height="168px" alt="Trust Services"/>
</div>
</div>
</div>
</div>

 <footer>
 <div class="container">
 <div class="row">
 <div class="col-lg-3 col-md-12">
 <h3>Quick Links</h3>
 <ul class="foot-menu">
 <li><a href="https://www.mediamister.com">Home</a></li>
  <li><a href="https://www.mediamister.com/about">About</a></li>
   <li><a href="https://www.mediamister.com/affiliate-program">Affiliate Program</a></li>
    <li><a href="https://www.mediamister.com/blog/">Blog</a></li>
	 <li><a href="https://www.mediamister.com/contact">Contact</a></li>

 </ul>
 </div>
  <div class="col-lg-3 col-md-12">
 <h3>Popular Services</h3>
 <ul class="foot-menu">
 <li><a href="https://www.mediamister.com/buy-youtube-views">Buy YouTube Views</a></li>
 <li><a href="https://www.mediamister.com/buy-youtube-subscribers">Buy YouTube Subscribers</a></li>
 <li><a href="https://www.mediamister.com/buy-instagram-followers">Buy Instagram Followers</a></li>
 <li><a href="https://www.mediamister.com/buy-twitter-followers">Buy Twitter Followers</a></li>
 <li><a href="https://www.mediamister.com/buy-youtube-likes">Buy YouTube Likes</a></li>
 <li><a href="https://www.mediamister.com/buy-spotify-followers">Buy Spotify Followers</a></li>
 <li><a href="https://www.mediamister.com/buy-spotify-plays">Buy Spotify Plays</a></li>
 </ul>
 </div>
   <div class="col-lg-6 col-md-12">
 <h3>Any Questions?</h3>
 <p>Contact the Social Care Team with any questions you have, or to discuss your requirements in more detail.</p>
<p>Weekdays : 9 AM - 6 PM | Saturday : 9 AM - 1 PM<br/>Support Team Email: <a href="mailto:info@mediamister.com">info@mediamister.com</a></p>
<p class="foot-social"><a href="https://www.facebook.com/mediamister" rel="noreferrer" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a> <a href="https://twitter.com/MediaMister_MM" rel="noreferrer" target="_blank"><i class="fab fa-twitter-square"></i> Twitter</a> <a href="https://www.pinterest.com/mediamister/" rel="noreferrer" target="_blank"><i class="fab fa-pinterest-square"></i> Pinterest</a></p>
 </div>
 </div>
 <div class="row">
 <div class="payment-icons"><img src="https://www.mediamister.com/images/payment-icons.webp" alt="payment methods" width="918px" height="99px" class="img-fluid" alt=""/></div>
 <p class="text-center">Social Care Inc. is in no way associated or affiliated with Facebook, Twitter, YouTube, Instagram, LinkedIn, Spotify, TikTok, Pinterest, SoundCloud, Snapchat, Clubhouse, Mixcloud, Vimeo, Tumblr, VK, Telegram, Trustpilot, Twitch, Google, Reddit, Discord, IMDb, Quora, Dailymotion, etc. All the Logos, TMs and Brand Names belong to their respective owner and we don't establish any claim or ownership of it. We strictly adhere to the community rules and guidelines set by the above said websites and brands.</p>
 <p class="text-center mb-0">&copy; 2012 - 2022 Social Care.<br/> <a href="https://www.mediamister.com">Home </a> | <a href="https://www.mediamister.com/affiliate-program">Affiliate Program</a> | <a href="https://www.mediamister.com/contact">Contact</a> | <a href="https://www.mediamister.com/terms">Terms of Services</a> | <a href="https://www.mediamister.com/policy">Privacy Policy</a> | <a href="https://www.mediamister.com/refund-policy">Refund Policy</a></p>
 </div>
 </div>
 </footer>
 
 
 
 <div class="slide-menu">
 <div class="slide-menu-profile">
 
 
 <div class="profile-icon">AB</div> <div class="profile-msg">Abimbola</div>


 
 
 

 <span class="close-slide-menu"><i class="fas fa-times"></i></span>
 </div>
 
   <ul class="gw-nav gw-nav-list" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="instagram"></i> Instagram</a>
          <ul class="gw-submenu">
          <li><a href="https://www.mediamister.com/buy-instagram-followers" itemprop="url"><span itemprop="name">Buy Instagram Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-likes" itemprop="url"><span itemprop="name">Buy Instagram Likes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-views" itemprop="url"><span itemprop="name">Buy Instagram Views</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-impressions" itemprop="url"><span itemprop="name">Buy Instagram Impressions</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-saves" itemprop="url"><span itemprop="name">Buy Instagram Saves</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-mentions" itemprop="url"><span itemprop="name">Buy Instagram Mentions</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-comment-replies" itemprop="url"><span itemprop="name">Buy Instagram Comment Replies</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-comments" itemprop="url"><span itemprop="name">Buy Instagram Comments</span></a></li>
								<li><a href="https://www.mediamister.com/buy-instagram-profile-visits" itemprop="url"><span itemprop="name">Buy Instagram Profile Visits</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-post-reach" itemprop="url"><span itemprop="name">Buy Instagram Post Reach</span></a></li>
							<li><a href="https://www.mediamister.com/buy-instagram-story-poll-votes" itemprop="url"><span itemprop="name">Buy Instagram Story Poll Votes</span></a></li>
          </ul>
        </li>
		
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="tiktok"></i> TikTok</a>
          <ul class="gw-submenu">
          	<li><a href="https://www.mediamister.com/buy-tiktok-followers" itemprop="url"><span itemprop="name">Buy TikTok Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-tiktok-comments" itemprop="url"><span itemprop="name">Buy TikTok Comments</span></a></li>
							<li><a href="https://www.mediamister.com/buy-tiktok-likes" itemprop="url"><span itemprop="name">Buy TikTok Likes</span></a></li>
								<li><a href="https://www.mediamister.com/buy-tiktok-shares" itemprop="url"><span itemprop="name">Buy TikTok Shares</span></a></li>
								<li><a href="https://www.mediamister.com/buy-tiktok-views" itemprop="url"><span itemprop="name">Buy TikTok Views</span></a></li>
          </ul>
        </li>
		
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="youtube"></i> YouTube</a>
          <ul class="gw-submenu">
            <li><a href="https://www.mediamister.com/buy-youtube-views" itemprop="url"><span itemprop="name">Buy YouTube Views</span></a></li>
							<li><a href="https://www.mediamister.com/buy-youtube-likes" itemprop="url"><span itemprop="name">Buy YouTube Likes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-youtube-subscribers" itemprop="url"><span itemprop="name">Buy YouTube Subscribers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-youtube-favorites" itemprop="url"><span itemprop="name">Buy YouTube Favorites</span></a></li>
							<li><a href="https://www.mediamister.com/buy-youtube-shares" itemprop="url"><span itemprop="name">Buy YouTube Shares</span></a></li>
							<li><a href="https://www.mediamister.com/buy-youtube-watch-time-hours" itemprop="url"><span itemprop="name">Buy YouTube Watch Time Hours</span></a></li>
							<li><a href="https://www.mediamister.com/buy-youtube-dislikes" itemprop="url"><span itemprop="name">Buy YouTube Dislikes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-youtube-comments" itemprop="url"><span itemprop="name">Buy YouTube Comments</span></a></li>
          </ul>
        </li>
		
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="twitter"></i> Twitter</a>
          <ul class="gw-submenu">
          <li><a href="https://www.mediamister.com/buy-twitter-followers" itemprop="url"><span itemprop="name">Buy Twitter Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-twitter-retweets" itemprop="url"><span itemprop="name">Buy Twitter Retweets</span></a></li>
							<li><a href="https://www.mediamister.com/buy-twitter-comments" itemprop="url"><span itemprop="name">Buy Twitter Comments</span></a></li>
							<li><a href="https://www.mediamister.com/buy-twitter-likes" itemprop="url"><span itemprop="name">Buy Twitter Likes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-twitter-views" itemprop="url"><span itemprop="name">Buy Twitter Views</span></a></li>
							<li><a href="https://www.mediamister.com/buy-twitter-poll-votes" itemprop="url"><span itemprop="name">Buy Twitter Poll Votes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-twitter-impressions" itemprop="url"><span itemprop="name">Buy Twitter Impressions</span></a></li>
          </ul>
        </li>
		 
        <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="facebook"></i> Facebook</a>
          <ul class="gw-submenu">
         <li><a href="https://www.mediamister.com/buy-facebook-likes" itemprop="url"><span itemprop="name">Buy Facebook Likes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-followers" itemprop="url"><span itemprop="name">Buy Facebook Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-views" itemprop="url"><span itemprop="name">Buy Facebook Views</span></a></li>				
<li><a href="https://www.mediamister.com/buy-facebook-reviews" itemprop="url"><span itemprop="name">Buy Facebook Reviews</span></a></li>			
<li><a href="https://www.mediamister.com/buy-facebook-group-members" itemprop="url"><span itemprop="name">Buy Facebook Group Members</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-reactions" itemprop="url"><span itemprop="name">Buy Facebook Reactions</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-event-attendees" itemprop="url"><span itemprop="name">Buy Facebook Event Attendees</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-comment-replies" itemprop="url"><span itemprop="name">Buy Facebook Comment Replies</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-comments" itemprop="url"><span itemprop="name">Buy Facebook Comments</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-shares" itemprop="url"><span itemprop="name">Buy Facebook Shares</span></a></li>
							<li><a href="https://www.mediamister.com/buy-facebook-poll-votes" itemprop="url"><span itemprop="name">Buy Facebook Poll Votes</span></a></li>
          </ul>
        </li>
		
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="spotify"></i> Spotify</a>
          <ul class="gw-submenu">
<li><a href="https://www.mediamister.com/buy-spotify-followers" itemprop="url"><span itemprop="name">Buy Spotify Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-spotify-monthly-listeners" itemprop="url"><span itemprop="name">Buy Spotify Monthly Listeners</span></a></li>
							<li><a href="https://www.mediamister.com/buy-spotify-plays" itemprop="url"><span itemprop="name">Buy Spotify Plays</span></a></li>
							<li><a href="https://www.mediamister.com/buy-spotify-pre-saves" itemprop="url"><span itemprop="name">Buy Spotify Pre Saves</span></a></li>
							<li><a href="https://www.mediamister.com/buy-spotify-saves" itemprop="url"><span itemprop="name">Buy Spotify Saves</span></a></li>
          </ul>
        </li>
		
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="clubhouse"></i> Clubhouse</a>
          <ul class="gw-submenu">
 <li><a href="https://www.mediamister.com/buy-clubhouse-followers" itemprop="url"><span itemprop="name">Buy Clubhouse Followers</span></a></li>
<li><a href="https://www.mediamister.com/buy-clubhouse-room-visitors" itemprop="url"><span itemprop="name">Buy Clubhouse Room Visitors</span></a></li>
          </ul>
        </li>
		
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="discord"></i> Discord</a>
          <ul class="gw-submenu">
<li><a href="https://www.mediamister.com/buy-discord-members" itemprop="url"><span itemprop="name">Buy Discord Members</span></a></li>
          </ul>
        </li>
		
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="linkedin"></i> LinkedIn</a>
          <ul class="gw-submenu">
	<li><a href="https://www.mediamister.com/buy-linkedin-followers" itemprop="url"><span itemprop="name">Buy LinkedIn Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-linkedin-connections" itemprop="url"><span itemprop="name">Buy LinkedIn Connections</span></a></li>
							<li><a href="https://www.mediamister.com/buy-linkedin-recommendations" itemprop="url"><span itemprop="name">Buy LinkedIn Recommendations</span></a></li>
							<li><a href="https://www.mediamister.com/buy-linkedin-endorsements" itemprop="url"><span itemprop="name">Buy LinkedIn Endorsements</span></a></li>
							<li><a href="https://www.mediamister.com/buy-linkedin-employees" itemprop="url"><span itemprop="name">Buy LinkedIn Employees</span></a></li>
							<li><a href="https://www.mediamister.com/buy-linkedin-likes" itemprop="url"><span itemprop="name">Buy LinkedIn Likes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-linkedin-comments" itemprop="url"><span itemprop="name">Buy LinkedIn Comments</span></a></li>
							<li><a href="https://www.mediamister.com/buy-linkedin-shares" itemprop="url"><span itemprop="name">Buy LinkedIn Shares</span></a></li>
          </ul>
        </li>
		 
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="twitch"></i> Twitch</a>
          <ul class="gw-submenu">
          <li class="col-xs-12"><a href="https://www.mediamister.com/buy-twitch-followers" itemprop="url"><span itemprop="name">Buy Twitch Followers</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-twitch-views" itemprop="url"><span itemprop="name">Buy Twitch Views</span></a></li>
          </ul>
        </li>
		
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="pinterest"></i> Pinterest</a>
          <ul class="gw-submenu">
         <li><a href="https://www.mediamister.com/buy-pinterest-followers" itemprop="url"><span itemprop="name">Buy Pinterest Followers</span></a></li>
		 <li><a href="https://www.mediamister.com/buy-pinterest-repins" itemprop="url"><span itemprop="name">Buy Pinterest Repins</span></a></li>
		 <li><a href="https://www.mediamister.com/buy-pinterest-reactions" itemprop="url"><span itemprop="name">Buy Pinterest Reactions</span></a></li>
          </ul>
        </li>
		 
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="mixcloud"></i> Mixcloud</a>
          <ul class="gw-submenu">
           	<li><a href="https://www.mediamister.com/buy-mixcloud-plays" itemprop="url"><span itemprop="name">Buy Mixcloud Plays</span></a></li>
			<li><a href="https://www.mediamister.com/buy-mixcloud-followers" itemprop="url"><span itemprop="name">Buy Mixcloud Followers</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="soundcloud"></i> Soundcloud</a>
          <ul class="gw-submenu">
          <li><a href="https://www.mediamister.com/buy-soundcloud-plays" itemprop="url"><span itemprop="name">Buy Soundcloud Plays</span></a></li>
							<li><a href="https://www.mediamister.com/buy-soundcloud-followers" itemprop="url"><span itemprop="name">Buy Soundcloud Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-soundcloud-likes" itemprop="url"><span itemprop="name">Buy Soundcloud Likes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-soundcloud-comments" itemprop="url"><span itemprop="name">Buy Soundcloud Comments</span></a></li>
							<li><a href="https://www.mediamister.com/buy-soundcloud-reposts" itemprop="url"><span itemprop="name">Buy SoundCloud Reposts</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="vimeo"></i> Vimeo</a>
          <ul class="gw-submenu">
          <li><a href="https://www.mediamister.com/buy-vimeo-views" itemprop="url"><span itemprop="name">Buy Vimeo Views</span></a></li>
							<li><a href="https://www.mediamister.com/buy-vimeo-followers" itemprop="url"><span itemprop="name">Buy Vimeo Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-vimeo-likes" itemprop="url"><span itemprop="name">Buy Vimeo Likes</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="dailymotion"></i> Dailymotion</a>
          <ul class="gw-submenu">
           <li><a href="https://www.mediamister.com/buy-dailymotion-views" itemprop="url"><span itemprop="name">Buy Dailymotion Views</span></a></li>
          </ul>
        </li> <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="vk"></i> VK</a>
          <ul class="gw-submenu">
           <li><a href="https://www.mediamister.com/buy-vk-friends" itemprop="url"><span itemprop="name">Buy VK Friends</span></a></li>
							<li><a href="https://www.mediamister.com/buy-vk-followers" itemprop="url"><span itemprop="name">Buy VK Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-vk-group-members" itemprop="url"><span itemprop="name">Buy VK Group Members</span></a></li>
							<li><a href="https://www.mediamister.com/buy-vk-likes" itemprop="url"><span itemprop="name">Buy VK Likes</span></a></li>
							<li><a href="https://www.mediamister.com/buy-vk-comments" itemprop="url"><span itemprop="name">Buy VK Comments</span></a></li>
							<li><a href="https://www.mediamister.com/buy-vk-shares" itemprop="url"><span itemprop="name">Buy VK Shares</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="websitetraffic"></i> Website Traffic</a>
          <ul class="gw-submenu">
          <li><a href="https://www.mediamister.com/buy-website-traffic" itemprop="url"><span itemprop="name">Buy Website Traffic</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="tumblr"></i> Tumblr</a>
          <ul class="gw-submenu">
           <li><a href="https://www.mediamister.com/buy-tumblr-followers" itemprop="url"><span itemprop="name">Buy Tumblr Followers</span></a></li>
							<li><a href="https://www.mediamister.com/buy-tumblr-reblogs" itemprop="url"><span itemprop="name">Buy Tumblr Reblogs</span></a></li>
							<li><a href="https://www.mediamister.com/buy-tumblr-likes" itemprop="url"><span itemprop="name">Buy Tumblr Likes</span></a></li>
          </ul>
        </li> <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="telegram"></i> Telegram</a>
          <ul class="gw-submenu">
          <li><a href="https://www.mediamister.com/buy-telegram-members" itemprop="url"><span itemprop="name">Buy Telegram Members</a></li>
							<li><a href="https://www.mediamister.com/buy-telegram-post-views" itemprop="url"><span itemprop="name">Buy Telegram Post Views</span></a></li>
							<li><a href="https://www.mediamister.com/buy-telegram-poll-votes" itemprop="url"><span itemprop="name">Buy Telegram Poll Votes</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="shazam"></i> Shazam</a>
          <ul class="gw-submenu">
           <li><a href="https://www.mediamister.com/buy-shazam-plays" itemprop="url"><span itemprop="name">Buy Shazam Plays</span></a></li>
							<li><a href="https://www.mediamister.com/buy-shazam-followers" itemprop="url"><span itemprop="name">Buy Shazam Followers</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="quora"></i> Quora</a>
          <ul class="gw-submenu">
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-quora-followers" itemprop="url"><span itemprop="name">Buy Quora Followers</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-quora-upvotes" itemprop="url"><span itemprop="name">Buy Quora Upvotes</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-quora-shares" itemprop="url"><span itemprop="name">Buy Quora Shares</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-quora-comments" itemprop="url"><span itemprop="name">Buy Quora Comments</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-quora-views" itemprop="url"><span itemprop="name">Buy Quora Views</span></a></li>	
          </ul>
        </li>
		 
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="google"></i> Google</a>
          <ul class="gw-submenu">
<li><a href="https://www.mediamister.com/buy-google-my-business-reviews" itemprop="url"><span itemprop="name">Buy Google My Business Reviews</span></a></li>
<li><a href="https://www.mediamister.com/buy-google-play-reviews" itemprop="url"><span itemprop="name">Buy Google Play Reviews</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="reddit"></i> Reddit</a>
          <ul class="gw-submenu">
         <li class="col-xs-12"><a href="https://www.mediamister.com/buy-reddit-upvotes" itemprop="url"><span itemprop="name">Buy Reddit Upvotes</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-reddit-subscribers" itemprop="url"><span itemprop="name">Buy Reddit Subscribers</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-reddit-followers" itemprop="url"><span itemprop="name">Buy Reddit Followers</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="sitejabber"></i> Sitejabber</a>
          <ul class="gw-submenu">
            <li><a href="https://www.mediamister.com/buy-sitejabber-reviews" itemprop="url"><span itemprop="name">Buy Sitejabber Reviews</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="trustpilot"></i> Trustpilot</a>
          <ul class="gw-submenu">
          <li><a href="https://www.mediamister.com/buy-trustpilot-reviews" itemprop="url"><span itemprop="name">Buy Trustpilot Reviews</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="tidal"></i> Tidal</a>
          <ul class="gw-submenu">
          <li class="col-xs-12"><a href="https://www.mediamister.com/buy-tidal-followers" itemprop="url"><span itemprop="name">Buy Tidal Followers</span></a></li>
							<li class="col-xs-12"><a href="https://www.mediamister.com/buy-tidal-plays" itemprop="url"><span itemprop="name">Buy Tidal Plays</span></a></li>
          </ul>
        </li>
		 <li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="imdb"></i> IMDb</a>
          <ul class="gw-submenu">
           <li><a href="https://www.mediamister.com/buy-imdb-ratings" itemprop="url"><span itemprop="name">Buy IMDb Ratings</span></a></li>
		   <li><a href="https://www.mediamister.com/buy-imdb-reviews" itemprop="url"><span itemprop="name">Buy IMDb Reviews</span></a></li>
          </ul>
        </li>
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="reverbnation"></i> ReverbNation</span></a>
          <ul class="gw-submenu">
         <li><a href="https://www.mediamister.com/buy-reverbnation-plays" itemprop="url"><span itemprop="name">Buy ReverbNation Plays</span></a></li>
							<li><a href="https://www.mediamister.com/buy-reverbnation-fans" itemprop="url"><span itemprop="name">Buy ReverbNation Fans</span></a></li>
          </ul>
        </li>
			<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="datpiff"></i> Datpiff</a>
          <ul class="gw-submenu">
        <li><a href="https://www.mediamister.com/buy-datpiff-plays" itemprop="url"><span itemprop="name">Buy Datpiff Plays</span></a></li>
          </ul>
        </li>
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="snapchat"></i> Snapchat</a>
          <ul class="gw-submenu">
       <li><a href="https://www.mediamister.com/buy-snapchat-followers" itemprop="url"><span itemprop="name">Buy Snapchat Followers</a></li>
	   <li><a href="https://www.mediamister.com/buy-snapchat-story-views" itemprop="url"><span itemprop="name">Buy Snapchat Story Views</a></li>
          </ul>
        </li>
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="audiomack"></i> Audiomack</a>
          <ul class="gw-submenu">
      <li><a href="https://www.mediamister.com/buy-audiomack-plays" itemprop="url"><span itemprop="name">Buy Audiomack Plays</span></a></li>
							<li><a href="https://www.mediamister.com/buy-audiomack-likes" itemprop="url"><span itemprop="name">Buy Audiomack Likes</span></a></li>
          </ul>
        </li>
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="likee"></i> Likee</a>
          <ul class="gw-submenu">
     <li><a href="https://www.mediamister.com/buy-likee-followers" itemprop="url"><span itemprop="name">Buy Likee Followers</span></a></li>
<li><a href="https://www.mediamister.com/buy-likee-likes" itemprop="url"><span itemprop="name">Buy Likee Likes</span></a></li>
          </ul>
        </li>
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="tripadvisor"></i> Tripadvisor</a>
          <ul class="gw-submenu">
   <li><a href="https://www.mediamister.com/buy-tripadvisor-reviews" itemprop="url"><span itemprop="name">Buy Tripadvisor Reviews</span></a></li>
          </ul>
        </li>
		<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="pandora"></i> Pandora</a>
          <ul class="gw-submenu">
  <li><a href="https://www.mediamister.com/buy-pandora-plays" itemprop="url"><span itemprop="name">Buy Pandora Plays</span></a></li>
          </ul>
        </li>
			<li class="init-arrow-down"> <a href="#" onclick="return false;"><i class="napster"></i> Napster</a>
          <ul class="gw-submenu">
  <li><a href="https://www.mediamister.com/buy-napster-plays" itemprop="url"><span itemprop="name">Buy Napster Plays</span></a></li>
          </ul>
        </li>
		
      </ul>
 </div>
 
 
 
 <div class="response_msg"></div>
<a id="toTop" href='#top'>Go Top</a>

<div id="toast"></div><script src="https://www.mediamister.com/js/jquery-3.6.0.min.js"></script>
<script src="https://www.mediamister.com/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://www.mediamister.com/js/slick.min.js"></script>
<script type="text/javascript" src="https://www.mediamister.com/js/custom.js"></script>
<script src="https://www.mediamister.com/js/countfect.min.js"></script>
<script src="https://www.mediamister.com/js/jquery.validate.min.js"></script>
<script src="https://www.mediamister.com/js/jquery-ui.min.js"></script>
<script src="https://www.mediamister.com/js/jquery.cookie.min.js"></script>
<script>
  window.addEventListener('load', () => {
      registerSW();
    });
 
    // Register the Service Worker
    async function registerSW() {
      if ('serviceWorker' in navigator) {
        try {
          await navigator
                .serviceWorker
                .register('serviceWorker.js');
        }
        catch (e) {
          console.log('SW registration failed');
        }
      }
    }
	$(document).ready(function(){
		$("#PackageForm").attr("autocomplete", "off");
	});
	
</script>

<script id="pap_x2s6df8d" src="https://mediamister.postaffiliatepro.com/scripts/7hwj5fwx"></script>
<script>
PostAffTracker.setAccountId('default1');
try {
PostAffTracker.track();
} catch (err) { }
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KR8DJ46" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



 <!--Start of Live Chat Script-->
<script>
setTimeout(function(){
	
    window.__lc = window.__lc || {};
    window.__lc.license = 12827958;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))

},5000); 
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12827958/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<!--End of Live Chat Script-->

<script>
jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
</script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		$('.btn-coupon-check').click(function(){
			var coupon_code=$("#coupon_code").val();
			var coinpayment_discount=$('#coinpayment_discount').val();
			//alert(coinpayment_discount);
			
			if(coupon_code!=''){
				$.ajax({
					type: "POST",
					url: "check-coupon-code",
					data: { coupon_code : coupon_code,coinpayment_discount:coinpayment_discount },
					
					beforeSend: function() {
						$('.btn-coupon-check').prop('disabled', true);
					},
					
					success: function (response, textStatus){
						
						if(response.status=='1'){
							$('.response_txt').html(response.msg).fadeIn(1000);
							
							$('.grand_total_response').hide();
							$('.grand_total_response').fadeIn(1000);
							$('.grand_total_response').html(response.grand_total_div);
							$('#normal_discount').val(response.normal_discount);
							
						}
						else{
							$('.response_txt').html(response.msg).fadeIn(1000);
							$('#coupon_code').removeClass('valid');
							$('#coupon_code').addClass('error');
							$('#coupon_code').html('');
							$('#coupon_code').val('');
							$("#coupon_code").focus();
							$('.grand_total_response').html(response.grand_total_div);
							$('#normal_discount').val('');
							$('.tr_cripto_dicount').hide();
						}
						$('.btn-coupon-check').prop('disabled', false);
					}
				});
			}
			else{
				$('.response_txt').addClass('error');
				$('.response_txt').css({'fontSize':'13px','color':'red'});
				$('.response_txt').html('Please enter a valid code');
				$("#coupon_code").focus();
				$('.grand_total_response').show();
			}
		});
		
		$('.RemoveCoupon').click(function(){
			if (confirm("Are you sure want to delete your coupon code?")) {
				var coinpayment_discount=$('#coinpayment_discount').val();
				$.ajax({
					type: "POST",
					url: "check-coupon-code?act=remove&coinpayment_discount="+coinpayment_discount,
					
					beforeSend: function() {
						$('.response_txt').html('<i class="fa fa-spin fa-spinner"></i> Please wait...').fadeIn(1000);
						$('.response_txt').css({'fontSize':'13px','color':'blue'});
					},
					
					success: function (response, textStatus){
						//alert(response.status);
						if(response.status=='1'){
							$('.response_txt').html(response.msg).fadeIn(1000);
							$('.grand_total_response').hide();
							$('.grand_total_response').fadeIn(1000);
							$('.grand_total_response').html(response.grand_total_div);
							$('#normal_discount').val('');
							//$('.tr_cripto_dicount').hide();
						}
						else{
							$('.response_txt').html(response.msg).fadeIn(1000);
							$('#coupon_code').removeClass('valid');
							$('#coupon_code').addClass('error');
							$('#coupon_code').html('');
							$('#coupon_code').val('');
							$("#coupon_code").focus();
							$('.grand_total_response').html(response.grand_total_div);
							$('#normal_discount').val('');
							//$('.tr_cripto_dicount').hide();
						}
					}
				});
			}
		});
		
		$('#form_email').blur(function(){
			var email=$('#form_email').val();
			
			$.ajax({
				type: "POST",
				url: "ajax-check-email",
				data: { email : email, act:'account_check' },
				
				beforeSend: function() {
					//$("input").prop('disabled', true);
				},
				
				success: function (response, textStatus){
					//$("input").prop('disabled', false);
					$("#form_name").val(response.first_name);
					$("#form_lastname").val(response.last_name);
					$("#form_phone_no").val(response.phone_no);
					if(response.first_name){
						$('#form_name').removeClass('error');
						$('#form_name-error').hide();
						$('#form_lastname').removeClass('error');
						$('#form_lastname-error').hide();
						$('#form_email').removeClass('error');
					}
				}
			});
		});
	});
</script>
      <script>
        (function($,W,D)
        {
                   var JQUERY4U = {};
                   JQUERY4U.UTIL =
                   {
                              setupFormValidation: function()
                              {
                                         //form validation rules
                                         $("#checkout-form").validate({
                                                    rules: {
                                                        form_name: {
                                                            required: true,
                                                        },
                                                        form_lastname: {
                                                            required: true,
                                                        },
                                                        payment_type: {
                                                            required: true,
                                                        },
                                                        form_email: {
                                                            required: true,
                                                            email:true,
															emailExt: true
                                                        },	
                                                    },
                                         
                                                    messages: {
                                                               form_name: {
                                                                required: "Enter your first name",
                                                           },
                                                                               form_lastname: {
                                                                required: "Enter your last name",
                                                           },
                                                                              form_email: {
                                                                required: "Enter a valid E-mail address",
                                                           }, 
                                                               payment_type: {
                                                             required: "Select payment type",
                                                             }, 
                                                    },
                                                    
											submitHandler: function(form) {
												
												var form_email = $('#form_email').val();
												var form_name = $('#form_name').val();
												var form_lastname = $('#form_lastname').val();
												var payment_type = $(':input[name="payment_type"]:checked').val();
												
												if(form_email!='' && form_name!='' && form_lastname!='' && payment_type!=''){												
													form.submit();
													return false;
												}
												else{
													alert('Please enter all mandatory (*) fields!');
													$('#form_email').addClass('error');
													$('#form_email').removeClass('valid');
													$('#form_name').addClass('error');
													$('#form_name').removeClass('valid');
													$('#form_lastname').addClass('error');
													$('#form_lastname').removeClass('valid');
													$('#email_verify').hide();
													$('#form_name').val('');
													$('#form_lastname').val('');
												}
											}
										});
                }
            }
            //when the dom has loaded setup form validation rules
            $(D).ready(function($) {
                JQUERY4U.UTIL.setupFormValidation();
            });
			jQuery.validator.addMethod("emailExt", function(value, element, param) {
				return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
			},'You have entered an invalid email address');
        })(jQuery, window, document);
        
           /*radio select*/
            $('.payment_type label.paymentgateway').click(function() {
				$('.coinpaymenticons').fadeOut();
            $('.payment_type label.paymentgateway').removeClass("checked_radio");
            $(this).addClass("checked_radio");
     

		
			
			
           //or may be $('.gfield_radio li').removeClass('highlighted');
           $('.payment_type').closest('li').removeClass("highlighted");
           $(this).closest('li').addClass('highlighted');   
        });
		
		       /*radio select*/
            $('.coinpaymenticons label').click(function() {
            $('.coinpaymenticons label').removeClass("checked_radio");
            $(this).addClass("checked_radio");
     
		
        });
		 $('#stripe').click(function() {
	
				$('.coinpaymenticons').slideUp("fast");
				$('.cashfree-slide').slideUp("fast");
				$('.payubiz-slide').slideUp("fast");
				$('.stripe-slide').slideDown("fast");
			
			 });
		$('#payubiz').click(function() {
			
				$('.stripe-slide').slideUp("fast");
				$('.coinpaymenticons').slideUp("fast");
				$('.cashfree-slide').slideUp("fast");
				$('.payubiz-slide').slideDown("fast");
			
			 });
		 $('#cashfree').click(function() {
			
				$('.stripe-slide').slideUp("fast");
				$('.coinpaymenticons').slideUp("fast");
				$('.payubiz-slide').slideUp("fast");
				$('.cashfree-slide').slideDown("fast");
			 });
		 //coinpayment discount start
			$('.payment_type label').click(function() {
				var thisevent = $(this).attr('id');
				
				if(thisevent=='stripeid' || thisevent=='payubizid' || thisevent=='cashfreeid'){
					$('.show_subtotal').hide();
					
					$('.tr_cripto_dicount').hide();
					$('#coinpayment_discount').val('');
					var sub_total_order = $('#sub_total_order').val();
					var coinpayment_discount = $('#coinpayment_discount').val();
					var normal_discount = $('#normal_discount').val();
					//$(".coinpayment_tot").css({"font-weight":"bold","font-size":"1.25rem","padding-top":"9px"});
					
					if(normal_discount!=''){
						var other_payment_total=parseFloat(sub_total_order)-parseFloat(normal_discount);
						var other_payment_total = '$'+other_payment_total;
						$('.coinpayment_tot').html(other_payment_total);
					}
					else{
						var sub_total_order = '$'+parseFloat(sub_total_order).toFixed(2);
						$('.coinpayment_tot').html(sub_total_order);
					}
					
					if(coinpayment_discount=='' && normal_discount==''){
						$('.coinpayment_tot').html(sub_total_order);
						$(".coinpayment_tot").css("font-weight", "bold");
					}
					
					$('#coinpayment_discount').val('');
				}
			});
			
			 $('#coinpaymentsid').click(function() {
				var sub_total_order = $('#sub_total_order').val();
				$('.show_subtotal').show();
				
				var normal_discount = $('#normal_discount').val();
				//$(".coinpayment_tot").css({"font-weight":"bold","font-size":"1.25rem","padding-top":"9px"});
				
				if(normal_discount!=''){
					var coinpayment_discount = sub_total_order*5/100;
					var total_discount=parseFloat(coinpayment_discount)+parseFloat(normal_discount);
					var grand_tot_now=parseFloat(sub_total_order)-parseFloat(total_discount);
					
					var grand_tot_now = grand_tot_now.toFixed(2);

					var grand_tot_now = '$'+(grand_tot_now);
					$('.coinpayment_tot').html(grand_tot_now);
					$('#coinpayment_discount').val(coinpayment_discount);
				}
				else{			
					var grand_tot_now=sub_total_order;
					//alert();
					var coinpayment_tot = grand_tot_now*95/100;
					
					var coinpayment_tot = coinpayment_tot.toFixed(2);

					var coinpayment_tot = '$'+(coinpayment_tot);
					$('.coinpayment_tot').html(coinpayment_tot);
					
					var coinpayment_discount = grand_tot_now*5/100;
					$('#coinpayment_discount').val(coinpayment_discount);
				}
			
			$('.tr_cripto_dicount').show();
			
			$('.tr_cripto_dicount').html('<td>Cryptocurrency Discount</td><td class="text-end">- $'+coinpayment_discount.toFixed(2)+'</td>');
			
			
				$('.coinpaymenticons').slideDown("fast");
				$('.stripe-slide').slideUp("fast");
				$('.payubiz-slide').slideUp("fast");
			
			 });
			 
		$('.payment_type label').click(function() {
			var thisevent = $(this).attr('id');
			
			if(thisevent=='stripeid' || thisevent=='payubizid' || thisevent=='cashfreeid'){
				$('.tr_cripto_dicount').hide();
				$('#coinpayment_discount').val('');
				var sub_total_order = $('#sub_total_order').val();
				var coinpayment_discount = $('#coinpayment_discount').val();
				var normal_discount = $('#normal_discount').val();
				
				if(normal_discount!=''){
					var other_payment_total=parseFloat(sub_total_order)-parseFloat(normal_discount);
					var other_payment_total = '$'+other_payment_total;
					$('.coinpayment_tot').html(other_payment_total);
					$(".coinpayment_tot").css("font-weight", "bold");
				}
				else{
					var sub_total_order = '$'+parseFloat(sub_total_order).toFixed(2);
					$('.coinpayment_tot').html(sub_total_order);
					$(".coinpayment_tot").css("font-weight", "bold");
				}
				
				if(coinpayment_discount=='' && normal_discount==''){
					//alert(sub_total_order);
					//var sub_total_order = '$'+parseFloat(sub_total_order).toFixed(2);
					$('.coinpayment_tot').html(sub_total_order);
					$(".coinpayment_tot").css("font-weight", "bold");
				}
				
				$('#coinpayment_discount').val('');
			}
		});
			 $(".coinpaymenticons input:radio").click(function () {
				 	var $this = $(this);
													if (this.checked) {
													   var src = $this.attr('name');
													   var val = $this.val();
													 $('#selectedcoin').val(val);
													}
			 });
    </script>
	<script src="js/intlTelInput.js"></script>
  <script>
      $("#form_phone_no").intlTelInput();
	  $(".mob-order-summary").click(function(){
  $(".desk-summary").toggle('slow');
});
</script>
	<script>
       $(document).ready(function(){
            $('#exampleModal').modal('show');
			$(".close").click(function () {
				$('#exampleModal').modal('hide');
			});
        }); 
    </script>
<!-- Email Verify Neverbounce-->

<script type="text/javascript">
    _NBSettings = {
        apiKey: 'public_7d3eb4f7bc9b1fa5b95cc63c77a31757',
		   displayPoweredBy: false,
		   loadingMessage: "Loading...",
		    feedback: false,
			 blockThrottledAttempts: true,
			 throttleRejectMessage: "Too many attempts, try again later",
			   timeout: 25
    };
</script>
<script type="text/javascript" src="https://cdn.neverbounce.com/widget/dist/NeverBounce.js"></script>
<script>
document.querySelector('body').addEventListener('nb:registered', function (event) {

    // Get field using id from registered event
    let field = document.querySelector('[data-nb-id="' + event.detail.id + '"]');

    // Handle clear events (input has changed or an API error was returned)
    field.addEventListener('nb:clear', function(e) {      
        // Check for errors
        if (e.detail.result && e.detail.result.isError()) {
            if (e.detail.result.isThrottled()) {
                // Do stuff when the verification is throttled
				
            }
          
            // Do stuff when other API errors occur
            // - Our recommendation is to hide any loaders and treat these emails the same way you would treat an Unknown email
        }
      
        // Do stuff when input changes, (e.g. hide loader)
    });

    // Handle loading status (API request has been made)
    field.addEventListener('nb:loading', function(e) {
        // Do stuff while waiting on API response
		$('#email_verify').show();
		$("#email_verify").html("<span class='ev_loading fa-3x'> <i class='fas fa-spinner'></i> Loading</span>");
    });

    // Handle results (API call has succeeded)
    field.addEventListener('nb:result', function(e) {
        if (e.detail.result.is(_nb.settings.getAcceptedStatusCodes())) {
            // Do stuff for good email
			$('#email_verify').show();
			$("#email_verify").html("<span class='ev_good'><i class='far fa-check-circle'></i> Valid</span>");
        }
        else {
            // Do stuff for bad email
			$('#email_verify').show();
			$("#email_verify").html("<span class='ev_bad'><i class='fas fa-exclamation-circle'></i> Invalid</span>");
			$('#form_email').val('');
			$('#form_name').removeClass('valid');
			$('#form_lastname').removeClass('valid');
			$('#form_email').removeClass('valid');
        }
    });

    // Handle soft results (fails regex; doesn't bother making API request)
    field.addEventListener('nb:soft-result', function(e) {
        // Do stuff when input doesn't even look like an email (i.e. missing @ or no .com/.net/etc...)
    });
});
</script>
<img src="https://track.mediamister.com/conversion.gif?cid=OPTIONAL&payout=5.00&et=CO" alt="track mediamister" width="1" height="1" style="display:none;"/>
  </body>
</html>