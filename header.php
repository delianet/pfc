<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,500,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<div id="top-bar">
		<nav id="top-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
		</nav>
		
		<li class="nav-search">
			<form role="search" method="get" class="search-form" action="http://pfc.delianet.com/">
				<label>
					<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
				</label>
				<input type="submit" class="search-submit" value="Search">
			</form>	
		</li>
	
	</div>


	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php bloginfo( 'url' ); ?>">
    			<img id="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo">
		    </a>
		    <nav id="mobile-nav">
				<div class="hamburger">&#9776;</div>
		  		<div class="cross">&#735;</div>
			</nav>
		</div>
		
		<div class="menu">
			
			<div id="bank-login"><a href="javascript:void"><i class="fa fa-lock"></i> Online Banking Login</a></div>
			<div id="login-box">
				<div class="login-container">
					<form action="https://pinnaclefcu.cue-orb.com/Authentication/Username" method="post">
						
							<input type="text2" ID="login-field" name="UserName" placeholder="User ID">
							<input type="submit" ID="login-submit" name="submit" value="Login" alt="Login" border="0">
							<a id="cancel" href="javascript:void">Cancel</a>
          			</form>
          			<div id="login-links">
          				<a href="https://pinnaclefcu.cue-orb.com/Registration">Enroll Now <i class="fa fa-chevron-circle-right"></i></a>
          				<a href="https://pinnaclefcu.cue-orb.com/Authentication#/browser-support">Browser Support <i class="fa fa-chevron-circle-right"></i></a>
          			</div>
				</div>
				<div id="mobile-banking"><a href="https://pinnaclefcu.cue-orb.com/Mobile/Authentication">Mobile Banking</a></div>	
			</div>
			
			<nav id="main-nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
			</nav>
		</div>

	</header>

	<div id="content" class="site-content">
