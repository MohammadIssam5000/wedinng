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
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="wp-content/themes/ceremony/assets/images/favicon.png" />
		<meta name="msapplication-TileColor" content="#d7c2ae">
		<meta name="theme-color" content="#d7c2ae">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
		<title>Wedding Planner</title>
		<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
		<link rel='dns-prefetch' href='http://s.w.org/' />
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
		<link rel='stylesheet' id='elementor-icons-css'  href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min87e8.css?ver=5.7.0' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-animations-css'  href='wp-content/plugins/elementor/assets/lib/animations/animations.min7c53.css?ver=2.9.14' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-frontend-css'  href='wp-content/plugins/elementor/assets/css/frontend.min7c53.css?ver=2.9.14' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-post-8-css'  href='wp-content/uploads/elementor/css/post-8b6e6.css?ver=1595999001' type='text/css' media='all' />
		<link rel='stylesheet' id='malinky-ajax-pagination-css'  href='wp-content/plugins/ceremony-core/assets/css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Alex+Brush%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.4.4' type='text/css' media='all' />
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
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
		<meta name="generator" content="WordPress 5.4.4" />
		<meta name="generator" content="WooCommerce 4.3.1" />
		<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embede85d.json?url=https%3A%2F%2Fvictorthemes.com%2Fthemes%2Fceremony%2F" />
		<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed51b4?url=https%3A%2F%2Fvictorthemes.com%2Fthemes%2Fceremony%2F&amp;format=xml" />
		<meta name="et-api-version" content="v1"><meta name="et-api-origin" content="https://victorthemes.com/themes/ceremony">
		<style type="text/css" id="wp-custom-css">
		.tribe-events-pg-template {padding: 115px 0 92px;}
		</style>
	</head>
	<body class="home page-template-default page page-id-8 theme-ceremony woocommerce-no-js tribe-no-js elementor-default elementor-kit-1716 elementor-page elementor-page-8">
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
											<li id="menu-item-715" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-715 active">
												<a href="index.php" class="dropdown-toggle" aria-haspopup="true">
													<span class="menu-text"><span class="menu-text-wrap" data-hover="Home">Home </span></span>
												</a>
											</li>
											<li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-327">
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
				<div data-elementor-type="section" data-elementor-id="1464" class="elementor elementor-1464" data-elementor-settings="[]">
					<div class="elementor-inner">
						<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-6372fa0 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="6372fa0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-row">
										<div class="elementor-element elementor-element-2b9858b elementor-column elementor-col-100 elementor-top-column" data-id="2b9858b" data-element_type="column">
											<div class="elementor-column-wrap  elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-305c5e8 elementor-widget elementor-widget-vt-ceremony_slider" data-id="305c5e8" data-element_type="widget" data-widget_type="vt-ceremony_slider.default">
														<div class="elementor-widget-container">
															<div class="swiper-container swiper-slides swiper-keyboard "  data-loop="true" data-interval="8000" data-autoplay="true" data-effect="fade" data-speed="1000" data-mousedrag="true" data-swiper="container">
																<div class="swiper-wrapper">
																	<div class="swiper-slide" style="background-image: url(wp-content/uploads/2019/03/slide1.png);">
																		<div class="caption-wrap">
																			<div class="crmny-table-wrap">
																				<div class="crmny-align-wrap">
																					<div class="container">
																						<div class="caption-wrap-inner">
																							<h1 class="caption-title animated" data-animation="fadeInUp">Save The Date</h1>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="swiper-slide" style="background-image: url(wp-content/uploads/2019/03/slide2.png);">
																		<div class="caption-wrap">
																			<div class="crmny-table-wrap">
																				<div class="crmny-align-wrap">
																					<div class="container">
																						<div class="caption-wrap-inner">
																							<h1 class="caption-title animated" data-animation="fadeInUp">Great, Fest Wedding</h1>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="swiper-slide" style="background-image: url(wp-content/uploads/2019/03/slide3.png);">
																		<div class="caption-wrap">
																			<div class="crmny-table-wrap">
																				<div class="crmny-align-wrap">
																					<div class="container">
																						<div class="caption-wrap-inner">
																							<h1 class="caption-title animated" data-animation="fadeInUp">Luxurious Wedding</h1>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-button-prev"></div>
																<div class="swiper-button-next"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="crmny-mid-wrap padding-cnt-no full-width" style="">
					<div class="container">
						<div class="row">
							<div class="crmny-content-side col-md-12">
								<div data-elementor-type="wp-post" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
									<div class="elementor-inner">
										<div class="elementor-section-wrap">
											<section class="mt-5 elementor-element elementor-element-2b24426 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="2b24426" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-element elementor-element-fd33204 elementor-column elementor-col-100 elementor-top-column" data-id="fd33204" data-element_type="column">
															<div class="elementor-column-wrap  elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-7269234 elementor-widget elementor-widget-vt-ceremony_section_title" data-id="7269234" data-element_type="widget" data-widget_type="vt-ceremony_section_title.default">
																		<div class="elementor-widget-container">
																			<div class="section-title-wrap  crmny-sectTitleElementor ">
																				<h2 class="section-title">Our Planning Includes</h2>
																				<p>We are glad to provide these services for your wedding with perfect planning.</p>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-c73f475 elementor-widget elementor-widget-vt-ceremony_feature" data-id="c73f475" data-element_type="widget" data-widget_type="vt-ceremony_feature.default">
																		<div class="elementor-widget-container">
																			<div class="crmny-feature">
																				<div class="container">
																					<div class="row">
																						<div class="col-lg-4 col-md-6">
																							<div class="feature-item crmny-item" style="height: 256px;">
																								<div class="crmny-image">
																									<img src="wp-content/uploads/2019/02/feature1-385x268.png" alt="FLOWER DECORATIONS">
																									<div class="feature-info">
																										<div class="crmny-table-wrap">
																											<div class="crmny-align-wrap">
																												<div class="crmny-icon"><img src="wp-content/uploads/2019/02/icon26%402x.png" width="73" alt="FLOWER DECORATIONS"></div>
																												<h4 class="feature-title">
																													<a href="flower-decorations.php" rel="nofollow">FLOWER DECORATIONS</a>
																												</h4>
																												<div class="feature-info-wrap" style="display: none;">
																													<p>Choosing what each bloom really means can make your decision a little easier.</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-6">
																							<div class="feature-item crmny-item" style="height: 256px;">
																								<div class="crmny-image">
																									<img src="wp-content/uploads/2019/02/feature2-385x268.png" alt="BEST RESTAURANT">
																									<div class="feature-info">
																										<div class="crmny-table-wrap">
																											<div class="crmny-align-wrap">
																												<div class="crmny-icon"><img src="wp-content/uploads/2019/02/icon27%402x.png" width="73" alt="BEST RESTAURANT"></div>
																												<h4 class="feature-title">
																													<a href="restaurants.php" rel="nofollow">BEST RESTAURANTS</a>
																												</h4>
																												<div class="feature-info-wrap" style="display: none;">
																													<p>Eat, drink, and be married at your favorite neighborhood joint.</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-6">
																							<div class="feature-item crmny-item" style="height: 256px;">
																								<div class="crmny-image">
																									<img src="wp-content/uploads/2019/02/feature3-385x268.png" alt="WEDDING CAKE">
																									<div class="feature-info">
																										<div class="crmny-table-wrap">
																											<div class="crmny-align-wrap">
																												<div class="crmny-icon"><img src="wp-content/uploads/2019/02/icon28%402x.png" width="73" alt="WEDDING CAKE"></div>
																												<h4 class="feature-title">
																													<a href="cake.php" rel="nofollow" data-elementor-open-lightbox="no">WEDDING CAKE</a>
																												</h4>
																												<div class="feature-info-wrap" style="display: none;">
																													<p>A wedding cake is the traditional cake served at wedding receptions.</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-6">
																							<div class="feature-item crmny-item" style="height: 256px;">
																								<div class="crmny-image">
																									<img src="wp-content/uploads/2019/02/feature4-385x268.png" alt="PHOTOSHOOT">
																									<div class="feature-info">
																										<div class="crmny-table-wrap">
																											<div class="crmny-align-wrap">
																												<div class="crmny-icon"><img src="wp-content/uploads/2019/02/icon29%402x.png" width="73" alt="PHOTOSHOOT"></div>
																												<h4 class="feature-title">
																													<a href="photoshoot.php" rel="nofollow" data-elementor-open-lightbox="no">PHOTOSHOOT</a>
																												</h4>
																												<div class="feature-info-wrap" style="display: none;">
																													<p>An occasion when a photographer takes a series of photographs.</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-6">
																							<div class="feature-item crmny-item" style="height: 256px;">
																								<div class="crmny-image">
																									<img src="wp-content/uploads/2019/02/feature5-385x268.png" alt="COSTUMES">
																									<div class="feature-info">
																										<div class="crmny-table-wrap">
																											<div class="crmny-align-wrap">
																												<div class="crmny-icon"><img src="wp-content/uploads/2019/02/icon30%402x.png" width="73" alt="COSTUMES"></div>
																												<h4 class="feature-title">
																													<a href="costumes.php" rel="nofollow" data-elementor-open-lightbox="no">COSTUMES</a>
																												</h4>
																												<div class="feature-info-wrap" style="display: none;">
																													<p>Like a wedding dress is the clothing worn by a bride during a wedding ceremony.</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-6">
																							<div class="feature-item crmny-item" style="height: 256px;">
																								<div class="crmny-image">
																									<img src="wp-content/uploads/2019/02/feature6-385x268.png" alt="HONEYMOON">
																									<div class="feature-info">
																										<div class="crmny-table-wrap">
																											<div class="crmny-align-wrap">
																												<div class="crmny-icon"><img src="wp-content/uploads/2019/02/icon31%402x.png" width="73" alt="WEDDING CARS"></div>
																												<h4 class="feature-title">
																													<a href="wedding-cars.php" rel="nofollow" data-elementor-open-lightbox="no">WEDDING CARS</a>
																												</h4>
																												<div class="feature-info-wrap" style="display: none;">
																													<p>Choose your wedding car with the latest and best cars.</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-6">
																							<div class="feature-item crmny-item" style="height: 256px;">
																								<div class="crmny-image">
																									<img src="wp-content/uploads/2019/02/event-image-one-370x302.jpg" alt="HONEYMOON">
																									<div class="feature-info">
																										<div class="crmny-table-wrap">
																											<div class="crmny-align-wrap">
																												<div class="crmny-icon"><img src="wp-content/uploads/2019/02/icon63@2x.png" width="73" alt="HOTELS AND WEDDING HALLS"></div>
																												<h4 class="feature-title">
																													<a href="hotels-wedding-halls.php" rel="nofollow" data-elementor-open-lightbox="no">HOTELS AND WEDDING HALLS</a>
																												</h4>
																												<div class="feature-info-wrap" style="display: none;">
																													<p>Choose your hotel or wedding hall with the newest and best places.</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-element elementor-element-e3f9790 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e3f9790" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-element elementor-element-2bcc6d9 elementor-column elementor-col-100 elementor-top-column" data-id="2bcc6d9" data-element_type="column">
															<div class="elementor-column-wrap  elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-8842728 elementor-widget elementor-widget-vt-ceremony_section_title" data-id="8842728" data-element_type="widget" data-widget_type="vt-ceremony_section_title.default">
																		<div class="elementor-widget-container">
																			<div class="section-title-wrap  crmny-sectTitleElementor ">
																				<h2 class="section-title">Our Team</h2>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-element elementor-element-ec0c9c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="ec0c9c0" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-element elementor-element-a8efc44 elementor-column elementor-col-100 elementor-top-column" data-id="a8efc44" data-element_type="column">
															<div class="elementor-column-wrap  elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-34e9c0e elementor-widget elementor-widget-vt-ceremony_friends" data-id="34e9c0e" data-element_type="widget" data-settings="{&quot;friends_column&quot;:&quot;4&quot;}" data-widget_type="vt-ceremony_friends.default">
																		<div class="elementor-widget-container">
																			<div class="crmny-friends">
																				<div class="container">
																					<div class="friends-wrap crmny-post-load-more" data-select=".friends-wrap" data-item=".friend-single-item" data-paging="" data-loading="">
																						<div class="row crmny-friends-masonry  direction-hover justify-content-center">
																							<div class="friends-masonry-item friend-single-item bridesmaid-item  col-xl-3 col-lg-3 col-md-6" data-category="bridesmaid-item ">
																								<div class="friend-item crmny-item">
																									<div class="crmny-image">
																										<img src="https://scontent.famm11-1.fna.fbcdn.net/v/t39.30808-6/241688255_2556938147783047_6995733698639349771_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeHK5r97ZM1vHDxnBds25g_mofyIIsaNJqKh_Igixo0molqKdZxVkEW7RKxM9vlIWaqZwHdCrU0MPzqbvTWf06D5&_nc_ohc=fOuP_x_gstAAX-KJVnI&_nc_ht=scontent.famm11-1.fna&oh=00_AT-UM7u9NEf608yDuwSTK9X_SppzrYfUNiWaIT7yvgSAug&oe=62BF3BFB" alt="Sandra Crawford">
																										<div class="crmny-social rounded">
																											<div class="crmny-table-wrap">
																												<div class="crmny-align-wrap">
																													<a href="https://www.facebook.com/rand.dbash" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																													<a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																													<a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="friend-info">
																										<h4 class="friend-name"><a href="#"> Rand Dabash </a></h4>
																									</div>
																								</div>
																							</div>
																							<div class="friends-masonry-item friend-single-item bridesmaid-item  col-xl-3 col-lg-3 col-md-6" data-category="bridesmaid-item ">
																								<div class="friend-item crmny-item">
																									<div class="crmny-image">
																										<img src="https://scontent.famm11-1.fna.fbcdn.net/v/t39.30808-6/252187968_339496774644871_4432398332746459371_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEbTcaYBeJwJVu8Se6027aHpOIVI5RzJI2k4hUjlHMkjRjYL2ScFp4nMzqRXIcQq7arXL6rd4qwpjk2uo03XYV8&_nc_ohc=0auqY6oepfIAX_bXUWx&_nc_oc=AQlCX2sMgSP_B-Zq1-q-xX2BvxuKYh9Cv7x-2ZFPhXWGdCgLDFeO4Qhh_iO6a3v55K4&tn=9k7gImDPjC9TBU7l&_nc_ht=scontent.famm11-1.fna&oh=00_AT899Kj4VloKyNbAlY3oP5cvP3Sljp4rZdk53ShaV87PDw&oe=62BE6C42" alt="Sandra Crawford">
																										<div class="crmny-social rounded">
																											<div class="crmny-table-wrap">
																												<div class="crmny-align-wrap">
																													<a href="https://www.facebook.com/mohammad.issam.5688" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																													<a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																													<a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="friend-info">
																										<h4 class="friend-name"><a href="#"> Mohammad Issam </a></h4>
																									</div>
																								</div>
																							</div>
																							<div class="friends-masonry-item friend-single-item bridesmaid-item  col-xl-3 col-lg-3 col-md-6" data-category="bridesmaid-item ">
																								<div class="friend-item crmny-item">
																									<div class="crmny-image">
																										<img src="https://scontent.famm11-1.fna.fbcdn.net/v/t1.6435-9/134777238_411103623564192_5334222104479934687_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGh7zSe7k7pTxew7XcJCedNMyGl67JCosMzIaXrskKiw3z1mO71CJMVpg0k0AAqQiEeh9zGRunDA99WeMf7eJfn&_nc_ohc=QAqxe4nG5P8AX-v-AB5&_nc_ht=scontent.famm11-1.fna&oh=00_AT_iaVM9d0-82zZRoNBvXEUoTkOYFz0epZDiuXWctHtMNw&oe=62E0715B" alt="Albert Gibson">
																										<div class="crmny-social rounded">
																											<div class="crmny-table-wrap">
																												<div class="crmny-align-wrap">
																													<a href="https://www.facebook.com/danah.dabbas" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																													<a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																													<a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="friend-info">
																										<h4 class="friend-name"><a href="#"> Dana Al-Dabbas </a></h4>
																									</div>
																								</div>
																							</div>
																							
																											</div>
																										</div>
																									</div>
																								
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div><!-- Friend End -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</div><!-- Content Area -->
						</div>
					</div>
				</div>
			</div><!-- Main Wrap Inner -->
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
		</div>
		<!-- Main Wrap -->
		<!-- Crmny Back Top -->
		<div class="crmny-back-top">
			<a href="javascript:void(0);"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</div>
		<style id="ceremony-inline-style" type="text/css">
			.crmny-textarea-5faf0be358f18 {font-size:14px;}
		</style>
		<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		
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
		
		/* <![CDATA[ */
		var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesMin":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"},"registration_prompt":"There is unsaved attendee information. Are you sure you want to continue?"};/* ]]> */ </script>	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
		</script>
		<link rel='stylesheet' id='elementor-post-1464-css'  href='wp-content/uploads/elementor/css/post-1464b6e6.css?ver=1595999001' type='text/css' media='all' />
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
		<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms.minef15.js?ver=4.8'></script>
		<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.min7c53.js?ver=2.9.14'></script>
		<script type='text/javascript' src='wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
		<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.minae9e.js?ver=4.7.6'></script>
		<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
		<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6'></script>
		<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/share-link/share-link.min7c53.js?ver=2.9.14'></script>
		<script type='text/javascript'>
		var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.9.14","urls":{"assets":"https:\/\/victorthemes.com\/themes\/ceremony\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":8,"title":"Ceremony%20%E2%80%93%20Wedding%20%26%20Wedding%20Planner%20WordPress%20Theme","excerpt":"","featuredImage":false}};
		</script>
		<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min7c53.js?ver=2.9.14'></script>
		<script type='text/javascript' src='wp-content/plugins/ceremony-core/elementor/assets/js/ceremony-elementor7263.js?ver=5.4.4'></script>
	</body>
	<!-- Mirrored from victorthemes.com/themes/ceremony/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Nov 2020 23:06:48 GMT -->
</html>
