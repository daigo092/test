<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/yui.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style2.css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_enqueue_script('jquery'); ?>
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
<script type="text/javascript">
jQuery(document).ready(function(){
var images = jQuery("img");
for(var i=0; i < images.size(); i++) {
    if(images.eq(i).attr("src").match("_off.")) {
        jQuery("img").eq(i).hover(function() {
            jQuery(this).attr('src', jQuery(this).attr("src").replace("_off.", "_on."));
        }, function() {
            jQuery(this).attr('src', jQuery(this).attr("src").replace("_on.", "_off."));
        });
    }
}
})
</script>

</head>

<div id="container">
	<div id="header">
		<h1><a href="http://herbest-college.com"><img src="<?php bloginfo('template_url'); ?>/image/rogo.png" alt="herbestのロゴマーク" width="97" height="112" id="hover_herbest" /></a></h1>
		<img src="<?php bloginfo('template_url'); ?>/image/copii.png" width="412" height="55" alt="文字：資格の勉強をはじめる前に" class="copii" id="hover_proguram" />
		<div id="nav">
                        <a href="http://herbest-college.com/site/about_herbest.html"><img src="<?php bloginfo('template_url'); ?>/image/nav_1_off.png" alt="herbestとはへのリンク" width="166" height="42" id="hover_notch" /></a>
			<a href="http://herbest-college.com/site/about_program.html"><img src="<?php bloginfo('template_url'); ?>/image/nav_2_off.png" alt="体験プログラムへのリンク" width="168" height="40" id="hover_contact" /></a>
			<a href="http://herbest-college.com/site/notch.html"><img src="<?php bloginfo('template_url'); ?>/image/nav_3_off.png" alt="運営会社へのリンク" width="166" height="42" /></a>
			<a href="http://herbest-college.com/site/application.html"><img src="<?php bloginfo('template_url'); ?>/image/nav_4_off.png" alt="お問い合わせへのリンク" width="168" height="40" /></a>
                    
                    
			<!--<a href="<?php echo home_url(); ?>/?page_id=9"><img src="<?php bloginfo('template_url'); ?>/image/nav_1_off.png" alt="herbestとはへのリンク" width="166" height="42" id="hover_notch" /></a>
			<a href="<?php echo home_url(); ?>/?page_id=11"><img src="<?php bloginfo('template_url'); ?>/image/nav_2_off.png" alt="体験プログラムへのリンク" width="168" height="40" id="hover_contact" /></a>
			<a href="<?php echo home_url(); ?>/?page_id=13"><img src="<?php bloginfo('template_url'); ?>/image/nav_3_off.png" alt="運営会社へのリンク" width="166" height="42" /></a>
			<a href="<?php echo home_url(); ?>/?page_id=15"><img src="<?php bloginfo('template_url'); ?>/image/nav_4_off.png" alt="お問い合わせへのリンク" width="168" height="40" /></a>-->
		</div>
	</div>
<img src="<?php bloginfo('template_url'); ?>/image/eye_catch.png" width="100%" />
<p>講座一覧</p>
<body <?php body_class(); ?>>
