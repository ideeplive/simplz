<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage simplz
 * @since simplz 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>style.css">
	
	<!-- Custom Fonts -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css">
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery1111.min.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body <?php body_class(); ?> class="archive-page">
	<div class="wrap-body">
		<header class="">
			<div class="logo">
				<a href="#">zVintauge</a>
				<span>Collectible Vintage & Antique Photos</span>
			</div>
			<div id="cssmenu" class="align-center">
				<ul>
					<li><a href="index.html"><span>Home</span></a></li>
					<li><a href="gallery.html"><span>Gallery</span></a></li>
					<li class="active has-sub"><a href="archive.html"><span>Blog</span></a>
						<ul>
							<li class="has-sub"><a href="#"><span>Item 1</span></a>
								<ul>
									<li><a href="#"><span>Sub Item</span></a></li>
									<li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							</li>
							<li class="has-sub"><a href="#"><span>Item 2</span></a>
								<ul>
									<li><a href="#"><span>Sub Item</span></a></li>
									<li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="single.html"><span>About</span></a></li>
					<li class="last"><a href="contact.html"><span>Contact</span></a></li>
				</ul>
			</div>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="images/slide1.jpg" />
				</div>
				<div class="item">
					<img src="images/slide2.jpg" />
				</div>
				<div class="item">
					<img src="images/slide3.jpg" />
					
				</div>
			</div>
		</header>