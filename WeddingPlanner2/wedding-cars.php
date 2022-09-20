<?php
	include("db/dbCon.php");
	session_start();
	if(isset($_SESSION['emailC'])) {
		$name = $_SESSION['nameC'];
		$phone = $_SESSION['phoneC'];
		$email = $_SESSION['emailC'];
		$logout = "
		<li id='menu-item-1676' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-1676'>
			<a href='myAccount.php'>
				<span class='menu-text'><span class='menu-text-wrap' data-hover='My Account'>My Account</span></span>
			</a>
		</li>
		<li id='menu-item-575' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-575'>
			<a href='Cart.php'>
				<span class='menu-text'><span class='menu-text-wrap' data-hover='Cart'>Cart</span></span>
			</a>
		</li>
		<li id='menu-item-575' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-575'>
			<a href='requests-customer.php'>
				<span class='menu-text'><span class='menu-text-wrap' data-hover='Requests'>Requests</span></span>
			</a>
		</li>
		<li id='menu-item-575' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-575'>
			<a href='logout.php'>
				<span class='menu-text'><span class='menu-text-wrap' data-hover='Logout'>Logout</span></span>
			</a>
		</li>";
		$hasDrop="has-dropdown";
		$cartN="SELECT id FROM cart WHERE email='$email' ORDER BY id DESC";
		$cartNum=mysql_query($cartN, $db);
		$cartNumber=mysql_num_rows($cartNum);
		
	} else {
		$name = "Login";
		$cartNumber = 0;
	}
?>
<!DOCTYPE html>
<html lang="en-US">
	<!-- Mirrored from victorthemes.com/themes/ceremony/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Nov 2020 23:10:34 GMT -->
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="wp-content/themes/ceremony/assets/images/favicon.png" />
		<meta name="msapplication-TileColor" content="#d7c2ae">
		<meta name="theme-color" content="#d7c2ae">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title>Wedding Planner</title>
		<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
		<link rel='dns-prefetch' href='http://s.w.org/' />
		<link rel="alternate" type="application/rss+xml" title="Ceremony &raquo; Feed" href="feed/index.html" />
		<link rel="alternate" type="application/rss+xml" title="Ceremony &raquo; Comments Feed" href="comments/feed/index.html" />
		<link rel="alternate" type="text/calendar" title="Ceremony &raquo; iCal Feed" href="events/indexedf3.html?ical=1" />
		<link rel="alternate" type="application/rss+xml" title="Ceremony &raquo; Products Feed" href="feed/index.html" />
		<script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/victorthemes.com\/themes\/ceremony\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.4"}};
		/*! This file is auto-generated */
		!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
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
		<link rel='stylesheet' id='tribe-common-skeleton-style-css'  href='wp-content/plugins/event-tickets/common/src/resources/css/common-skeleton.minef5f.css?ver=4.12.6' type='text/css' media='all' />
		<link rel='stylesheet' id='tribe-tooltip-css'  href='wp-content/plugins/event-tickets/common/src/resources/css/tooltip.minef5f.css?ver=4.12.6' type='text/css' media='all' />
		<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min7263.css?ver=5.4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='wc-block-vendors-style-css'  href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-styleeed8.css?ver=2.7.2' type='text/css' media='all' />
		<link rel='stylesheet' id='wc-block-style-css'  href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/styleeed8.css?ver=2.7.2' type='text/css' media='all' />
		<link rel='stylesheet' id='jquery-selectBox-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css?ver=1.2.0' type='text/css' media='all' />
		<link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
		<link rel='stylesheet' id='yith-wcwl-main-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/style9b4a.css?ver=3.0.11' type='text/css' media='all' />
		<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles5fba.css?ver=5.2' type='text/css' media='all' />
		<link rel='stylesheet' id='tp_twitter_plugin_css-css'  href='wp-content/plugins/recent-tweets-widget/tp_twitter_plugin5152.css?ver=1.0' type='text/css' media='screen' />
		<link rel='stylesheet' id='woocommerce-layout-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout5b31.css?ver=4.3.1' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen5b31.css?ver=4.3.1' type='text/css' media='only screen and (max-width: 768px)' />
		<link rel='stylesheet' id='woocommerce-general-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce5b31.css?ver=4.3.1' type='text/css' media='all' />
		<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required { visibility: visible; }
		</style>
		<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='wp-content/plugins/woocommerce/assets/css/prettyPhoto7263.css?ver=5.4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css'  href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
		<style id='font-awesome-inline-css' type='text/css'>
		[data-font="FontAwesome"]:before {font-family: 'FontAwesome' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
		</style>
		<link rel='stylesheet' id='nice-select-css'  href='wp-content/themes/ceremony/assets/css/nice-select.min5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='loaders-css'  href='wp-content/themes/ceremony/assets/css/loaders.min7793.css?ver=2.4' type='text/css' media='all' />
		<link rel='stylesheet' id='magnific-popup-css'  href='wp-content/themes/ceremony/assets/css/magnific-popup.min7793.css?ver=2.4' type='text/css' media='all' />
		<link rel='stylesheet' id='flexslider-css'  href='wp-content/themes/ceremony/assets/css/flexslider.min7793.css?ver=2.4' type='text/css' media='all' />
		<link rel='stylesheet' id='animate-css'  href='wp-content/themes/ceremony/assets/css/animate.min7793.css?ver=2.4' type='text/css' media='all' />
		<link rel='stylesheet' id='owl-carousel-css'  href='wp-content/themes/ceremony/assets/css/owl.carousel.mina1ec.css?ver=2.3.0' type='text/css' media='all' />
		<link rel='stylesheet' id='meanmenu-css'  href='wp-content/themes/ceremony/assets/css/meanmenu5d0a.css?ver=2.0.7' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-css'  href='wp-content/themes/ceremony/assets/css/bootstrap.mina352.css?ver=4.1.3' type='text/css' media='all' />
		<link rel='stylesheet' id='rateyo-css'  href='wp-content/themes/ceremony/assets/css/jquery.rateyo.min5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='ceremony-style-css'  href='wp-content/themes/ceremony/assets/css/styles5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='dynamic-style-css'  href='wp-content/themes/ceremony/inc/dynamic-style5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='ceremony-responsive-css'  href='wp-content/themes/ceremony/assets/css/responsive5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='ceremony-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700%2C800%7CRaleway%3A300%2C400%2C500%2C600%2C700%2C800%7CAlex+Brush%3A300%2C400%2C500%2C600%2C700%2C800%7CMontserrat%3A300%2C400%2C500%2C600%2C700%2C800&amp;subset=latin' type='text/css' media='all' />
		<link rel='stylesheet' id='meks_instagram-widget-styles-css'  href='wp-content/plugins/meks-easy-instagram-widget/css/widget7263.css?ver=5.4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='malinky-ajax-pagination-css'  href='wp-content/plugins/ceremony-core/assets/css/style.css' type='text/css' media='all' />
		<script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
		<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
		<script src='wp-content/plugins/event-tickets/common/src/resources/js/underscore-before.js'></script>
		<script type='text/javascript' src='wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
		<script src='wp-content/plugins/event-tickets/common/src/resources/js/underscore-after.js'></script>
		<script type='text/javascript' src='wp-includes/js/wp-util7263.js?ver=5.4.4'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var ceremony_admin_url = {"ajaxurl":"https:\/\/victorthemes.com\/themes\/ceremony\/wp-admin\/admin-ajax.php","olderpost":"Prev","newerpost":"Next"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/load-more-gallery5152.js?ver=1.0'></script>
		<link rel='https://api.w.org/' href='wp-json/index.html' />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
		<meta name="generator" content="WordPress 5.4.4" />
		<meta name="generator" content="WooCommerce 4.3.1" />
		<meta name="et-api-version" content="v1"><meta name="et-api-origin" content="https://victorthemes.com/themes/ceremony"><link rel="https://theeventscalendar.com/" href="wp-json/tribe/tickets/v1/index.html" /><meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="https://victorthemes.com/themes/ceremony"><link rel="https://theeventscalendar.com/" href="wp-json/tribe/events/v1/index.html" />	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
		<style type="text/css" id="wp-custom-css">
			.tribe-events-pg-template {
				padding: 115px 0 92px;
			}
		</style>
	</head>
	<body class="archive post-type-archive post-type-archive-product theme-ceremony woocommerce woocommerce-page woocommerce-no-js tribe-no-js elementor-default">
		<!-- Crmny Main Wrap -->
		<div class="crmny-main-wrap  crmny-sticky-footer header-style-one">
			<!-- Crmny Main Wrap Inner -->
			<div class="main-wrap-inner">
				<!-- Crmny Topbar -->
				<div class="crmny-topbar  hide-topbar-responsive">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 top-left" style="">
								<div class="crmny-social  crmny-socials-5faf0be2ba2dd">
									<a href="https://www.facebook.com/" target="_blank" class="social-icon-facebook"><i class="fa fa-facebook"></i></a>
									<a href="https://www.twitter.com/" target="_blank" class="social-icon-twitter"><i class="fa fa-twitter"></i></a>
									<a href="https://www.linkedin.com/" target="_blank" class="social-icon-linkedin"><i class="fa fa-linkedin"></i></a>
									<a href="https://www.instagram.com/" target="_blank" class="social-icon-instagram"><i class="fa fa-instagram"></i></a>
									<a href="https://www.plus.google.com/" target="_blank" class="social-icon-google-plus"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<header class="crmny-header  header-sticky">
					<div class="container">
						<div class="mean-bar">
							<a href="#nav" class="meanmenu-reveal" style="right: 0px; left: auto; text-align: center; text-indent: 0px; font-size: 18px;"><span></span></a>
							<nav class="mean-nav"></nav>
						</div>
						<div class="row align-items-center">
							<div class="col-md-3 col-sm-6 col-6">
								<div class="crmny-brand  hav-transparent-logo hav-default-logo" style="">
									<a href="index.php">
									<img src="wp-content/uploads/2019/05/ceremony-logo-retina.png" alt="Ceremony" class="transparent-default-logo transparent-logo" width=145 height=31><img src="wp-content/uploads/2019/05/ceremony-logo-default.png" alt="Ceremony" class="default-logo normal-logo" width=145 height=31></a>
								</div>
							</div>
							<div class="col-md-9 col-sm-6 col-6">
								<div class="crmny-header-right  mean-menu-parent">
									<!-- Navigation & Search -->
									<nav class="crmny-navigation" data-nav="1199">
										<ul id="menu-main-menu" class="">
											<li id="menu-item-715" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-715">
												<a href="index.php" class="dropdown-toggle" aria-haspopup="true">
													<span class="menu-text"><span class="menu-text-wrap" data-hover="Home">Home </span></span>
												</a>
											</li>
											<li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-327 active">
												<a href="shop.php">
													<span class="menu-text"><span class="menu-text-wrap" data-hover="Shop">Shop</span></span>
												</a>
											</li>
											<li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-327">
												<a href="contact-us.php">
													<span class="menu-text"><span class="menu-text-wrap" data-hover="Contact Us">Contact Us</span></span>
												</a>
											</li>
											<li id="menu-item-718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-718 <?php echo $hasDrop;?> ">
												<?php
												if ($name == "Login"){?>
													<a href="login.html" class="dropdown-toggle" aria-haspopup="true">
														<span class="menu-text"><span class="menu-text-wrap" data-hover="<?php echo $name;?>"><?php echo $name;?></span></span>
													</a>
												<?php 
												} else{?>
													<a href="myAccount.php" class="dropdown-toggle" aria-haspopup="true">
														<span class="menu-text"><span class="menu-text-wrap" data-hover="<?php echo $name;?>"><?php echo $name;?></span></span>
													</a>
												<?php
												}?>
												<ul role="menu" class=" dropdown-nav">
													<?php echo $logout;?>
												</ul>
											</li>
										</ul>
									</nav> <!-- Container -->
									<div class="header-links-wrap">
										<div class="cart-link">
											<a href="cart.php"><i class="fa fa-shopping-basket"></i>
												<span class="cart-counter"><?php echo $cartNumber;?></span>
											</a>
										</div><!--/end-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="crmny-navigation-overlay right"></div>
				<!-- Crmny Page Title, Crmny Parallax -->
				<section class="crmny-page-title crmny-parallax padding-default dont-have-subtitle" style="background-image: url(wp-content/uploads/2019/02/background17.png);">
					<div class="parallax-overlay" ></div>
					<div class="page-title-wrap">
						<div class="crmny-table-wrap">
							<div class="crmny-align-wrap">
								<div class="container">
									<h1 class="page-title">Shop</h1>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="crmny-mid-wrap mid-spacer-two padding-custom" style="padding-top:100px;padding-bottom:100px;">
					<div class="container">
						<div class="woocommerce woocommerce-page">
							<div class="row">
								<div class="container crmny-content-area woo-col-3 crmny-right-sidebar">
									<div class="row">
										<div class="crmny-content-side crmny-primary">
											<h4>Wedding Cars</h4>
											<div class="woocommerce-notices-wrapper"></div>
											<ul class="products columns-3">
												<?php
												extract($_GET);
												if($keywords == "") {
													$pro="SELECT * FROM products WHERE workField = 'Wedding Cars' ORDER BY id DESC";
												} else {
													$pro="SELECT * FROM products WHERE workField = 'Wedding Cars' AND description LIKE '%$keywords%' ORDER BY id DESC";
												}
												$prod=mysql_query($pro, $db);
												if (mysql_num_rows($prod) == 0) {?>
													<div>
														<p class="cart-empty woocommerce-info">There are no products yet.</p>
													</div>
												<?php
												} else {
													while ($product=mysql_fetch_array($prod)) {?>
														<li class="product type-product post-534 status-publish first instock product_cat-clothing product_cat-hoodies has-post-thumbnail shipping-taxable purchasable product-type-simple">
															<div class="product-wrap">
																<img width="520'" height="570'" src="upload/<?php echo $product[1];?>" alt="product-image-17" class="attachment-shop_catalog size-shop_catalog wp-post-image default-product" />
															</div>
															<div class="d-block">
																<small class="d-block mt-2"><?php echo $product[7];?> | <?php echo $product[2];?></small>
																<h4><?php echo $product[5];?></h4>
															</div>
															<span class="price">
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol"></span>
																	Price: <?php echo $product[3];?> JD
																</span>
															</span>
															<a href="add-to-cart.php?id=<?php echo $product[0];?>" data-quantity="1" class="button product_type_simple">
																<span class="view-product"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add to Cart</span>
															</a>
														</li>
												<?php
													}
												}
												?>
											</ul>
										</div><!-- Content Area -->
										<div class="col-md-3 crmny-sidebar crmny-secondary">
											<div id="search-4" class=" crmny-widget widget_search">
												<form method="get" id="searchform" action="" class="searchform">
													<input type="text"  name="keywords" id="keywords" value="<?php echo $keywords;?>" placeholder="Search here..." />
													<input type="submit" id="searchsubmit class="submit-one hover-one" value="" />
												</form>
											</div>
											<!-- end widget -->
											<div id="woocommerce_product_categories-2" class=" crmny-widget woocommerce widget_product_categories">
												<h6 class="widget-title">Categories</h6>
												<ul class="product-categories">
													<li class="cat-item cat-item-48"><a href="shop.php">All</a></li>
													<li class="cat-item cat-item-48"><a href="hotels-wedding-halls.php">Hotels or Wedding Halls</a></li>
													<li class="cat-item cat-item-48"><a href="flower-decorations.php">Flower Decorations</a></li>
													<li class="cat-item cat-item-51"><a href="restaurants.php">Restaurants</a></li>
													<li class="cat-item cat-item-46"><a href="cake.php">Cake</a></li>
													<li class="cat-item cat-item-47"><a href="photoshoot.php">Photoshoot</a></li>
													<li class="cat-item cat-item-47"><a href="costumes.php">Costumes</a></li>
													<li class="cat-item cat-item-50"><a href="wedding-cars.php">Wedding Cars</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Main Wrap Inner -->
				<!-- Footer -->
				<footer class="crmny-footer  center-align">
					<div class="container">
						<!-- Copyright Bar -->
						<div class="crmny-copyright">
							<div class="container">
								<div class="row">
									<div class="col-xl-6 col-lg-5 pull-left">
										<div class="copyright-wrap">
											Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<br>
											This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Wedding Planner Team.
										</div>
									</div>
									<div class="col-xl-6 col-lg-7 pull-right">
										<div class="widget-menu">
											<ul class="footer-links crmny-menu-5faf0be405856">
												<li>
													<a href="index.php">Home</a>
												</li>
												<li>
													<a href="shop.php">Shop</a>
												</li>
												<li>
													<a href="contact-us.php">Contact</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Copyright Bar -->
					</div>
				</footer>
				<!-- Footer -->
			</div><!-- Main Wrap -->
			<!-- Crmny Back Top -->
			<div class="crmny-back-top">
			  <a href="javascript:void(0);"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
			</div>
		</div>
		<style id="ceremony-inline-style" type="text/css">.crmny-textarea-5faf11552c78a {font-size:14px;}</style>		<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<script>
		(function() {
			function maybePrefixUrlField() {
				if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
					this.value = "http://" + this.value;
				}
			}

			var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
			if (urlFields) {
				for (var j=0; j < urlFields.length; j++) {
					urlFields[j].addEventListener('blur', maybePrefixUrlField);
				}
			}
		})();
		</script>
		<script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesMin":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"},"registration_prompt":"There is unsaved attendee information. Are you sure you want to continue?"};/* ]]> */ </script>	<script type="text/javascript">
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		</script>
		<link rel='stylesheet' id='ceremony-default-style-css'  href='wp-content/themes/ceremony/style7263.css?ver=5.4.4' type='text/css' media='all' />
		<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var yith_wcwl_l10n = {"ajax_url":"\/themes\/ceremony\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/victorthemes.com\/themes\/ceremony\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"}};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl9b4a.js?ver=3.0.11'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var wpcf7 = {"apiSettings":{"root":"https:\/\/victorthemes.com\/themes\/ceremony\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts5fba.js?ver=5.2'></script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = {"ajax_url":"\/themes\/ceremony\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/themes\/ceremony\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/victorthemes.com\/themes\/ceremony\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min5b31.js?ver=4.3.1'></script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var woocommerce_params = {"ajax_url":"\/themes\/ceremony\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/themes\/ceremony\/?wc-ajax=%%endpoint%%"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min5b31.js?ver=4.3.1'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var wc_cart_fragments_params = {"ajax_url":"\/themes\/ceremony\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/themes\/ceremony\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_bb8f4c5f4619095466c46897b6c4c5a3","fragment_name":"wc_fragments_bb8f4c5f4619095466c46897b6c4c5a3","request_timeout":"5000"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min5b31.js?ver=4.3.1'></script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/bootstrap.mina352.js?ver=4.1.3'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.meanmenu5152.js?ver=1.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/html5shiv.min3088.js?ver=3.7.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/respond.min1159.js?ver=1.4.2'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/placeholders.minf39e.js?ver=4.0.1'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.sticky.min4b68.js?ver=1.0.4'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery-countdown.min1f22.js?ver=1.6.2'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/soundcloud.api.min5152.js?ver=1.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jarallax.min3e0d.js?ver=1.7.3'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/isotope.min41fe.js?ver=3.0.1'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/packery-mode.pkgd.min001e.js?ver=2.0.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.magnific-popup.minf488.js?ver=1.1.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/hoverdir.mincfa9.js?ver=1.1.2'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/owl.carousel.mina1ec.js?ver=2.3.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.nice-select.min5152.js?ver=1.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.matchHeight-min230a.js?ver=0.7.2'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/waypoints.minf39e.js?ver=4.0.1'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.counterup.min5152.js?ver=1.0'></script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min5a35.js?ver=1.7.21'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.responsiveTabs.min2fca.js?ver=1.4.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/rateyo.minb6db.js?ver=2.3.3'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/loaders.min5152.js?ver=1.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/lazyload.mina71a.js?ver=1.7.10'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/image-animate.mined48.js?ver=1.20.3'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/tilt.min5152.js?ver=1.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/scripts5152.js?ver=1.0'></script>
		<script type='text/javascript' src='wp-content/themes/ceremony/assets/js/jquery.validate.min8162.js?ver=1.9.0'></script>
		<script type='text/javascript'>
		jQuery(document).ready(function($) {$("#commentform").validate({rules: {author: {required: true,minlength: 2},email: {required: true,email: true},comment: {required: true,minlength: 10}}});});
		</script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var malinkySettings = {"1":{"ajax_loader":"<div class=\"crmny-mpreloader\"><div class=\"mloader-wrap\"><div class=\"mloader\"><div class=\"mloader-inner\"><div><\/div><div><\/div><\/div><img class=\"loader-icon\" src=\"https:\/\/victorthemes.com\/themes\/ceremony\/wp-content\/plugins\/ceremony-core\/assets\/images\/icon4.png\" alt=\"\" \/><\/div><\/div><\/div>"}};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/plugins/ceremony-core/assets/main.js'></script>
		<script type='text/javascript' src='wp-includes/js/wp-embed.min7263.js?ver=5.4.4'></script>
		<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
		<script type='text/javascript' src='wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
		<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
		<script type='text/javascript' src='wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4'></script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min5b31.js?ver=4.3.1'></script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/accounting/accounting.minaffb.js?ver=0.4.2'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min5b31.js?ver=4.3.1'></script>
		<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms.minef15.js?ver=4.8'></script>
	</body>
	<!-- Mirrored from victorthemes.com/themes/ceremony/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Nov 2020 23:11:07 GMT -->
</html>
