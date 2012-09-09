<?php
/**
 * Template Name: taiken
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
			<div class="pan">home &gt; <a href="about_program.html">サイトの利用について</a> </div>
                                <div id="frame_head-page-11"><h2><img src="<?php bloginfo('template_url'); ?>/image/site_info_h2.png"  height="59" alt="見出し：サイトのご利用について" /></h2></div>
	<div id="content3">
	<div id="content-page">
            <?php the_content();?>
        </div>
	</div>
                        	<?php endwhile; // end of the loop. ?>
                                     <div id="frame_bottom-bit1"></div>

<?php get_footer(); ?>