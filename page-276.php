<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


			<div class="pan"><a href="index.html"><span class="blue">home</span></a> &gt; <span class="pink">お問い合わせ</span></div>
	<div class="pro_waku_top">
		<h2><img src="<?php bloginfo('template_url'); ?>/image/h2_4.png" width="318" height="58" alt="見出し：お問い合わせ" /></h2>
		<!-- pro_waku_top --></div>
			<div class="pro_waku_middle">
				<div id="content41" style="height: 800px;">
			<div id="content42">
			
			<div id="content43">
			<p>下記のフォームよりお気軽にお問い合わせ下さい。<br />
				フォームがご利用いただけない場合は<span class="pink_contact">info@herbest-college.com</span>まで。</p>
</div>
				<div id="content44">
					<span class="pink_contact">&lowast;</span>は記入事項です。
					</div>
				<div id="content45">
                         <?php echo do_shortcode('[contact-form-7 id="275" title="0.お問い合わせフォーム"]'); ?>
			</div>
			<!--content24--></div>
	</div>
<!--pro_waku_middle--></div>
<div class="pro_waku_bottom"></div>






<?php get_footer(); ?>