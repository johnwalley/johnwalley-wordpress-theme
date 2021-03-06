<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage John_Walley
 * @since John Walley 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'johnwalley' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/firefox-features.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/nav-main.js" type="text/javascript"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">

<div id="wrapper">
<div id="doc">

<div id="header">
<h1>
  <a href="http://www.walley.org.uk/" title="Back to home page">johnwalley</a>
</h1>

<!-- start menu #nav-main -->
<div id="nav-main" role="navigation">
  <ul role="menubar">
	<li id="nav-main-about" class="first"><a aria-haspopup="true" aria-owns="nav-main-about-submenu" tabindex="0" href="http://www.walley.org.uk/about/">About</a><ul id="nav-main-about-submenu" aria-expanded="false"><li class="first"><a tabindex="-1" href="http://www.walley.org.uk/bio/">Bio</a></li><li><a tabindex="-1" href="http://www.walley.org.uk/skills/">Skills</a></li><li><a tabindex="-1" href="http://www.walley.org.uk/john-walley-cv.pdf">CV</a></li><li><a tabindex="-1" href="http://www.walley.org.uk/contact/">Contact</a></li></ul></li>
	<li id="nav-main-services"><a aria-haspopup="true" aria-owns="nav-main-services-submenu" tabindex="0" href="http://www.walley.org.uk/services/">Services</a><ul id="nav-main-services-submenu" aria-expanded="false"><li class="first"><a tabindex="-1" href="http://www.walley.org.uk/production/">Ideas to Production</a></li><li><a tabindex="-1" href="http://www.walley.org.uk/hpc/">High Performance Computing</a></li><li><a tabindex="-1" href="http://www.walley.org.uk/app_development/">Application Development and Software Integration</a></li></ul></li>
	<li id="nav-main-blog"><a aria-haspopup="false" tabindex="0" href="http://www.walley.org.uk/blog/">Blog</a></li>
	<li id="nav-main-contact" class="last"><a aria-haspopup="true" aria-owns="nav-main-contact-submenu" tabindex="0" href="http://www.walley.org.uk/code/">Code</a><ul id="nav-main-contact-submenu" aria-expanded="false"><li class="first"><a tabindex="-1" href="http://www.walley.org.uk/code/#matlab">MATLAB</a></li><li class="first"><a tabindex="-1" href="http://www.walley.org.uk/code/#mobile">Mobile</a></li><li><a tabindex="-1" href="http://www.walley.org.uk/code/#web">Web</a></li></ul></li>
  </ul>
</div>
<!-- end menu #nav-main -->    

</div> <!--! end of #header -->

	<div id="main">
