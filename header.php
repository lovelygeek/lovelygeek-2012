<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>

		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width,initial-scale=1">
        
		<meta http-equiv="imagetoolbar" content="false" />
        
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />

		<link rel="author" href="<?php echo home_url(); ?>/humans.txt">

		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		<script src="<?php echo home_url(); ?>/mint/?js" type="text/javascript"></script>
		
		<?php wp_enqueue_script("jquery"); // Properly includes the jQuery library already built into WordPress ?>
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->

		<!-- All stylesheets go here, with default being called last. Stylesheet is called after wp_head so you can overwrite plugin styles if needed -->
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/flexslider.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style1.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style_common.css" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<!-- end CSS-->

	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
		
			<div id="inner-header" class="wrapper clearfix">
			
				<p id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="Lovely Geek" /></a></p>
				
				<nav role="navigation">
					<?php wp_nav_menu(); ?>
				</nav>
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div class="wrapper">
