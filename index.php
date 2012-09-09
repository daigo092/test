<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>


			<?php if ( have_posts() ) : ?>

	<div id="content">

		<div id="content-top">
			<img src="<?php bloginfo('template_url'); ?>/image/eye_catch.png" alt="画像：福岡の女性のためのお仕事まるわかり体験講座"　width="698" height="256" />
		</div>
		<div id="content-middle">
		<div id="caption">
			<img src="<?php bloginfo('template_url'); ?>/image/caption.png" alt="アイコン：女の子" width="532" height="71" />
		</div>
		<div id="calender">
                    <a href="<?php echo home_url(); ?>/?page_id=77" class="sorter-1"><img src="<?php bloginfo('template_url'); ?>/image/arrow02-128.gif" class="sorterimg-1" /></a>
                      <img src="<?php bloginfo('template_url'); ?>/image/arrow02-128.gif" class="sorterimg-2" />
			<table border="1" bordercolor="#482913">
				<colgroup class="left">
				</colgroup>
				<colgroup class="left_2">
				</colgroup>
				<colgroup class="left_3">
				</colgroup>
				<colgroup class="left_4">
				</colgroup>
<?php if(is_page(77)):?>
    <?php query_posts( array(          
                'numberposts' => -1,
                'orderby' => 'meta_value',
                'meta_key'=>'shokushu',
                'order' => 'ASC'
    ));?>
<? endif;?>                                       
                                <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

                                <td class="center">   <a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID,'shokushu', true); ?></a></td>
				<td><?php echo get_post_meta($post->ID,'日', true); ?><img src="<?php bloginfo('template_url'); ?>/image/cal_watch.png" width="16" height="17" alt="アイコン：時計" /> <?php echo get_post_meta($post->ID,'時間', true); ?>～</td>
					<td><?php echo get_post_meta($post->ID,'講座', true); ?></td>
					<td><?php echo get_post_meta($post->ID,'場所', true); ?></td>
				</tr>
    <?php endwhile; ?>
<?php endif; ?>
			
<?php wp_reset_query(); ?>
                        </table>
		</div>
		<div id="supple">
				
				<img src="<?php bloginfo('template_url'); ?>/image/sankahi.png" width="71" height="35" alt="参加費" /><p>1,800円</p>
				<img src="<?php bloginfo('template_url'); ?>/image/jisannbutu.png" width="71" height="34" alt="持参物" /><p>筆記用具用お持ちください。</p>
				<img src="<?php bloginfo('template_url'); ?>/image/fukusou.png" width="71" height="34" alt="服装" /><p>リラックスした格好でお越し下さい。</p>
		</div>
		<div id="content-bottom">
		<div id="application">
			<img src="<?php bloginfo('template_url'); ?>/image/mousikomi.png" alt="文字：お申し込み方法" width="729" height="101" />
			<img src="<?php bloginfo('template_url'); ?>/image/hiyoko.png" width="27" height="28" alt="画像:ひよこ" class="hiyoko" />
			<p>ご不明な点などございましたら、お気軽にご連絡下さい。</p>
			<dl>
				<dt>電話でのお申し込み</dt>
				<dd class="first"><img src="<?php bloginfo('template_url'); ?>/image/tel.png" alt="アイコン：電話" width="34" height="28" />０９２－７９１－７５９３<span class="jikan">【受付時間　平日10:00～18:00】</span></dd>
			</dl>
			<dl>
				<dt>メールでのお申し込み</dt>
				<dd class="second"><img src="<?php bloginfo('template_url'); ?>/image/mail.png" alt="アイコン:メール" width="30" height="23" /><span class="address">info@herbest-college.com</span></dd>
			</dl>
			<dl>
				<dt>サイトからのお申し込み</dt>
				<dd class="second"><a href="<?php bloginfo('template_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/image/home.png" width="31" height="28" alt="アイコン:家"><span class="address">http://herbest-college.com</span></a></dd>
			</dl>
		</div></div>
		</div>
	</div>
	<div id="footer">
		
	</div>
	</div>


<?php get_footer(); ?>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>