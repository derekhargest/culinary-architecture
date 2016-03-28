<?php
/**
 * The template for displaying the header
 *
 *
 * @package Culinary Architecture
 * @subpackage Culinary Architechture
 * @since 2016
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.slicknav.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<script src="https://maps.googleapis.com/maps/api/js?v=3.20"></script>
		<script>
		  function initialize() {
		    var myLatLng = {lat: 39.282958, lng: -76.627836};

		    var mapCanvas = document.getElementById('map');
		    var mapOptions = {
		      zoom: 17,
		      mapTypeId: google.maps.MapTypeId.ROADMAP,
		      center: new google.maps.LatLng(39.282958, -76.627836),
					scrollwheel: false,
					draggable: false
		    }
		    var map = new google.maps.Map(mapCanvas, mapOptions);
		            var marker = new google.maps.Marker({
		                map: map,
		                position: myLatLng,
		                title: 'Culinary Architecture'
		    });
		  }
		  google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<div class="site-header-main">
				<div class="site-branding logo">
					<?php if ( is_front_page() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/site-logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/site-logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></p>
					<?php endif; ?>
				</div>
				<div class="main-navigation">
					<div class="nav-button"></div>
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</nav>
				</div>
				<div id="mobile-menu-location"></div>
				<div id="mobile-menu" class="mobile-navigation">
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
					</nav>
				</div>

			</div>
		</header>
