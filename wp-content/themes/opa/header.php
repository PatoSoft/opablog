<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	

	<div class="header_intro">
            <div class="header_intro_logo"></div>
            <div class="header_intro_tex"></div>
            <div class="header_intro_face"></div>
            <div class="header_intro_twitter"></div>
            <div class="header_intro_you"></div>
            <div class="header_intro_buscador">
                <div class="header_intro_buscador_lupa"></div>
            </div>
    </div>   
	<div class="header_foto">
		
		<div class="header_foto_interior">
                <img src="/yo/wp-content/themes/opa/images/trabajadores.png">
                    
                    <div class="header_foto_titular">
                        <p class="titular">MENSAGE DEL PRESIDENTE RAMÓN MARÍN</p>
                    </div>
                    <div class="header_foto_video"></div>
            
        </div>

	</div>
		
		
	
/yo/wp-content/themes/opa/images/fondo.jpg
	<div id="main">
