<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	
	<title>Comic Goal</title>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"-->
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/profile.css" type="text/css" rel="stylesheet" media="all">
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Custom Theme files -->
	
	<link rel="stylesheet" href="css/fileinput.min.css" type="text/css" />
	<link rel="stylesheet" href="css/clndr.css" type="text/css" />
	<link href="css/jquery.nouislider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/fd-slider.css">	
	<link rel="stylesheet" href="css/graph.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />	
	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/widgets_002.js" id="twitter-wjs"></script>
	<script src="assets/all.js" id="facebook-jssdk"></script>
	<script src="assets/ga.js" async="" type="text/javascript"></script>
	<script type="text/javascript">
	</script>

	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "http:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
			"ext": ".png",
			"source": {
				"concatemoji": "assets\/wp-emoji-release.js?ver=4.2.5"
			}
		};
		! function(a, b, c) {
			function d(a) {
				var c = b.createElement("canvas"),
					d = c.getContext && c.getContext("2d");
				return d && d.fillText ? (d.textBaseline = "top", d.font = "600 32px Arial", "flag" === a ? (d.fillText(String.fromCharCode(55356, 56812, 55356, 56807), 0, 0), c.toDataURL().length > 3e3) : (d.fillText(String.fromCharCode(55357, 56835), 0, 0), 0 !== d.getImageData(16, 16, 1, 1).data[0])) : !1
			}

			function e(a) {
				var c = b.createElement("script");
				c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
			}
			var f, g;
			c.supports = {
				simple: d("simple"),
				flag: d("flag")
			}, c.DOMReady = !1, c.readyCallback = function() {
				c.DOMReady = !0
			}, c.supports.simple && c.supports.flag || (g = function() {
				c.readyCallback()
			}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
				"complete" === b.readyState && c.readyCallback()
			})), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<script type="text/javascript" src="assets/wp-emoji-release.js"></script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="dashicons-css" href="assets/dashicons.css" type="text/css" media="all">
	<link rel="stylesheet" id="sportspress-general-css" href="assets/sportspress.css" type="text/css" media="all">
	<link rel="stylesheet" id="stylesheet-css" href="assets/style.css" type="text/css" media="all">
	<link rel="stylesheet" id="jquery-fancybox-css" href="assets/jquery.css" type="text/css" media="all">
	<link rel="stylesheet" id="responsive-stylesheet-css" href="assets/responsive.css" type="text/css" media="all">
	<style type="text/css"></style>
	<script type="text/javascript" src="assets/jquery-migrate.js"></script>
	<script type="text/javascript" src="assets/html5shiv.js"></script>
	<script type="text/javascript" src="assets/widgets.js"></script>
	<script type="text/javascript" src="assets/jquery_005.js"></script>
	<script type="text/javascript" src="assets/jquery_003.js"></script>
	<script type="text/javascript" src="assets/jquery_002.js"></script>
	<script type="text/javascript" src="assets/jquery_006.js"></script>
	<script type="text/javascript" src="assets/jquery.js"></script>
	<script src="assets/timeline.js" async="" charset="utf-8" type="text/javascript"></script>
	<style type="text/css">
		.fb_hidden {
			position: absolute;
			top: -10000px;
			z-index: 10001
		}
		
		.fb_reposition {
			overflow-x: hidden;
			position: relative
		}
		
		.fb_invisible {
			display: none
		}
		
		.fb_reset {
			background: none;
			border: 0;
			border-spacing: 0;
			color: #000;
			cursor: auto;
			direction: ltr;
			font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
			font-size: 11px;
			font-style: normal;
			font-variant: normal;
			font-weight: normal;
			letter-spacing: normal;
			line-height: 1;
			margin: 0;
			overflow: visible;
			padding: 0;
			text-align: left;
			text-decoration: none;
			text-indent: 0;
			text-shadow: none;
			text-transform: none;
			visibility: visible;
			white-space: normal;
			word-spacing: normal
		}
		
		.fb_reset>div {
			overflow: hidden
		}
		
		.fb_link img {
			border: none
		}
		
		.fb_dialog {
			background: rgba(82, 82, 82, .7);
			position: absolute;
			top: -10000px;
			z-index: 10001
		}
		
		.fb_reset .fb_dialog_legacy {
			overflow: visible
		}
		
		.fb_dialog_advanced {
			padding: 10px;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px
		}
		
		.fb_dialog_content {
			background: #fff;
			color: #333
		}
		
		.fb_dialog_close_icon {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
			_background-image: url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);
			cursor: pointer;
			display: block;
			height: 15px;
			position: absolute;
			right: 18px;
			top: 17px;
			width: 15px
		}
		
		.fb_dialog_mobile .fb_dialog_close_icon {
			top: 5px;
			left: 5px;
			right: auto
		}
		
		.fb_dialog_padding {
			background-color: transparent;
			position: absolute;
			width: 1px;
			z-index: -1
		}
		
		.fb_dialog_close_icon:hover {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
			_background-image: url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)
		}
		
		.fb_dialog_close_icon:active {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
			_background-image: url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)
		}
		
		.fb_dialog_loader {
			background-color: #f6f7f8;
			border: 1px solid #606060;
			font-size: 24px;
			padding: 20px
		}
		
		.fb_dialog_top_left,
		.fb_dialog_top_right,
		.fb_dialog_bottom_left,
		.fb_dialog_bottom_right {
			height: 10px;
			width: 10px;
			overflow: hidden;
			position: absolute
		}
		
		.fb_dialog_top_left {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
			left: -10px;
			top: -10px
		}
		
		.fb_dialog_top_right {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
			right: -10px;
			top: -10px
		}
		
		.fb_dialog_bottom_left {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
			bottom: -10px;
			left: -10px
		}
		
		.fb_dialog_bottom_right {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
			right: -10px;
			bottom: -10px
		}
		
		.fb_dialog_vert_left,
		.fb_dialog_vert_right,
		.fb_dialog_horiz_top,
		.fb_dialog_horiz_bottom {
			position: absolute;
			background: #525252;
			filter: alpha(opacity=70);
			opacity: .7
		}
		
		.fb_dialog_vert_left,
		.fb_dialog_vert_right {
			width: 10px;
			height: 100%
		}
		
		.fb_dialog_vert_left {
			margin-left: -10px
		}
		
		.fb_dialog_vert_right {
			right: 0;
			margin-right: -10px
		}
		
		.fb_dialog_horiz_top,
		.fb_dialog_horiz_bottom {
			width: 100%;
			height: 10px
		}
		
		.fb_dialog_horiz_top {
			margin-top: -10px
		}
		
		.fb_dialog_horiz_bottom {
			bottom: 0;
			margin-bottom: -10px
		}
		
		.fb_dialog_iframe {
			line-height: 0
		}
		
		.fb_dialog_content .dialog_title {
			background: #6d84b4;
			border: 1px solid #3a5795;
			color: #fff;
			font-size: 14px;
			font-weight: bold;
			margin: 0
		}
		
		.fb_dialog_content .dialog_title>span {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
			float: left;
			padding: 5px 0 7px 26px
		}
		
		body.fb_hidden {
			-webkit-transform: none;
			height: 100%;
			margin: 0;
			overflow: visible;
			position: absolute;
			top: -10000px;
			left: 0;
			width: 100%
		}
		
		.fb_dialog.fb_dialog_mobile.loading {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
			min-height: 100%;
			min-width: 100%;
			overflow: hidden;
			position: absolute;
			top: 0;
			z-index: 10001
		}
		
		.fb_dialog.fb_dialog_mobile.loading.centered {
			width: auto;
			height: auto;
			min-height: initial;
			min-width: initial;
			background: none
		}
		
		.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
			width: 100%
		}
		
		.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
			background: none
		}
		
		.loading.centered #fb_dialog_loader_close {
			color: #fff;
			display: block;
			padding-top: 20px;
			clear: both;
			font-size: 18px
		}
		
		#fb-root #fb_dialog_ipad_overlay {
			background: rgba(0, 0, 0, .45);
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			min-height: 100%;
			z-index: 10000
		}
		
		#fb-root #fb_dialog_ipad_overlay.hidden {
			display: none
		}
		
		.fb_dialog.fb_dialog_mobile.loading iframe {
			visibility: hidden
		}
		
		.fb_dialog_content .dialog_header {
			-webkit-box-shadow: white 0 1px 1px -1px inset;
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
			border-bottom: 1px solid;
			border-color: #1d4088;
			color: #fff;
			font: 14px Helvetica, sans-serif;
			font-weight: bold;
			text-overflow: ellipsis;
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
			vertical-align: middle;
			white-space: nowrap
		}
		
		.fb_dialog_content .dialog_header table {
			-webkit-font-smoothing: subpixel-antialiased;
			height: 43px;
			width: 100%
		}
		
		.fb_dialog_content .dialog_header td.header_left {
			font-size: 12px;
			padding-left: 5px;
			vertical-align: middle;
			width: 60px
		}
		
		.fb_dialog_content .dialog_header td.header_right {
			font-size: 12px;
			padding-right: 5px;
			vertical-align: middle;
			width: 60px
		}
		
		.fb_dialog_content .touchable_button {
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
			border: 1px solid #2f477a;
			-webkit-background-clip: padding-box;
			-webkit-border-radius: 3px;
			-webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
			display: inline-block;
			margin-top: 3px;
			max-width: 85px;
			line-height: 18px;
			padding: 4px 12px;
			position: relative
		}
		
		.fb_dialog_content .dialog_header .touchable_button input {
			border: none;
			background: none;
			color: #fff;
			font: 12px Helvetica, sans-serif;
			font-weight: bold;
			margin: 2px -12px;
			padding: 2px 6px 3px 6px;
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
		}
		
		.fb_dialog_content .dialog_header .header_center {
			color: #fff;
			font-size: 16px;
			font-weight: bold;
			line-height: 18px;
			text-align: center;
			vertical-align: middle
		}
		
		.fb_dialog_content .dialog_content {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
			border: 1px solid #555;
			border-bottom: 0;
			border-top: 0;
			height: 150px
		}
		
		.fb_dialog_content .dialog_footer {
			background: #f6f7f8;
			border: 1px solid #555;
			border-top-color: #ccc;
			height: 40px
		}
		
		#fb_dialog_loader_close {
			float: left
		}
		
		.fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
		}
		
		.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
			visibility: hidden
		}
		
		#fb_dialog_loader_spinner {
			animation: rotateSpinner 1.2s linear infinite;
			background-color: transparent;
			background-image: url(https://static.xx.fbcdn.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);
			background-repeat: no-repeat;
			background-position: 50% 50%;
			height: 24px;
			width: 24px
		}
		
		@keyframes rotateSpinner {
			0% {
				transform: rotate(0deg)
			}
			100% {
				transform: rotate(360deg)
			}
		}
		
		.fb_iframe_widget {
			display: inline-block;
			position: relative
		}
		
		.fb_iframe_widget span {
			display: inline-block;
			position: relative;
			text-align: justify
		}
		
		.fb_iframe_widget iframe {
			position: absolute
		}
		
		.fb_iframe_widget_fluid_desktop,
		.fb_iframe_widget_fluid_desktop span,
		.fb_iframe_widget_fluid_desktop iframe {
			max-width: 100%
		}
		
		.fb_iframe_widget_fluid_desktop iframe {
			min-width: 220px;
			position: relative
		}
		
		.fb_iframe_widget_lift {
			z-index: 1
		}
		
		.fb_hide_iframes iframe {
			position: relative;
			left: -10000px
		}
		
		.fb_iframe_widget_loader {
			position: relative;
			display: inline-block
		}
		
		.fb_iframe_widget_fluid {
			display: inline
		}
		
		.fb_iframe_widget_fluid span {
			width: 100%
		}
		
		.fb_iframe_widget_loader iframe {
			min-height: 32px;
			z-index: 2;
			zoom: 1
		}
		
		.fb_iframe_widget_loader .FB_Loader {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;
			height: 32px;
			width: 32px;
			margin-left: -16px;
			position: absolute;
			left: 50%;
			z-index: 4
		}
	</style>
</head>

<body class="home page page-id-2 page-template page-template-template-home page-template-template-home-php custom-background">
	
	
	<div class="sp-header"></div>
	<div class=" fb_reset" id="fb-root">
		<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
			<div>
				<iframe src="assets/jb3BUxkAISL.htm" style="border: medium none;" tabindex="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_http" scrolling="no" allowfullscreen="true"
				allowtransparency="true" name="fb_xdm_frame_http" frameborder="0"></iframe>
				<iframe src="assets/jb3BUxkAISL_002.htm" style="border: medium none;" tabindex="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_https" scrolling="no"
				allowfullscreen="true" allowtransparency="true" name="fb_xdm_frame_https" frameborder="0"></iframe>
			</div>
		</div>
		<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
			<div></div>
		</div>
	</div>
	<div id="wrapper">
		<header id="header">
			<?php
			function is_home(){
				return $_SERVER[REQUEST_URI] == "/BasesDeDatos1/comicgoal/index.php";
			} ?>
			<div class="cesped 
				<?php if ( is_home() ) { echo "wow fadeInRightBig"; }?>"
				data-wow-duration="1s" data-wow-delay="1s"
			></div>

			<a id="logo" href="index.php">
				<img src="img/logo.png" 
					alt="Comic Goal" 
					<?php if ( is_home() ) { ?>
						class="wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="2s"
					<?php } ?>
				></a>
		</header>
		<nav id="menu" class="clearfix">
			<div class="menu-header">
				<ul id="menu-main-menu" class="menu">
					<li id="menu-item-396" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-597"><a href="index.php">Inicio</a></li>
					<li id="menu-item-597" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-597"><a href="team_dash.php">Equipos</a></li>
					<li id="menu-item-597" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-597"><a href="tournaments.php">Torneos</a></li>
					<?php if ($arrayQuery ["ID_ROL"][0] == 1 ){?>
						<li id="menu-item-597" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-597"><a href="admin.php">Administrador</a></li>
					<?php }	?>
				</ul>
			</div>
		</nav>
		
		<?php include_once("conexionMySQL.php"); ?>