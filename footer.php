<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<!--<footer id="colophon" role="contentinfo">-->

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<!--<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php //printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>-->
	<!--</footer>--><!-- #colophon -->
        <div class="footer">
	<ul>
		<li><a href="http://herbest-college.com/site/about_herbest.html">herbestとは</a></li>
		<li><a href="http://herbest-college.com/site/contact.html">お問い合わせ</a></li>
		<li><a href="http://herbest-college.com/site/notch.html">運営会社</a></li>
		<li><a href="http://herbest-college.com/yqcunk/?page_id=124">サイトのご利用について</a></li>
		<li class="footer_last"><a href="http://herbest-college.com/site/sitemap.html">サイトマップ</a></li>
	</ul>
	<p class="copyright">Copyright (C) 2012 herbest. All Rights Reserved.</p>
	</div>
        
        
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>