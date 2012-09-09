<?php
/**
 * Template Name: top-page
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 */

get_header(); ?>

	<div id="content">

		<div id="content-top">
			<img src="<?php bloginfo('template_url'); ?>/image/eye_catch.png" alt="画像：福岡の女性のためのお仕事まるわかり体験講座"　width="698" height="256" />
		</div>
		<div id="content-middle">
		<div id="caption">
			<img src="<?php bloginfo('template_url'); ?>/image/caption.png" alt="アイコン：女の子" width="532" height="71" />
		</div>
		<div id="calender">
                    
			<table border="1" bordercolor="#482913">
				<colgroup class="left">
				</colgroup>
				<colgroup class="left_2">
				</colgroup>
				<colgroup class="left_3">
				</colgroup>
				<colgroup class="left_4">
				</colgroup>


<?php// if (is_front_page()):?>
                                
    <?php// query_posts( 'posts_per_page=4&orderby=meta_value&meta_key=カレンダー&order=ASC&paged='.$paged);?>
<?php// elseif(is_page(77)):?>
    <?php// query_posts( 'posts_per_page=4&orderby=meta_value&meta_key=shokushu&order=ASC&paged='.$paged);?>
                            
<?php// endif;?> 
                                
<?php if (is_page(77)):?>                                
                      <?php query_posts( 'posts_per_page=4&orderby=meta_value&meta_key=shokushu&order=ASC&paged='.$paged);?>
<?php else:?>                                
      <?php query_posts( 'posts_per_page=10&orderby=meta_value&meta_key=カレンダー&order=ASC&paged='.$paged);?>
<?php endif;?>
                                
                                
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

                                <td class="center">   <a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID,'shokushu', true); ?></a></td>
				<td><?php echo substr(get_post_meta($post->ID,'カレンダー', true),5); ?>(<?php echo get_post_meta($post->ID,'曜日', true); ?>)<img src="<?php bloginfo('template_url'); ?>/image/cal_watch.png" width="16" height="17" alt="アイコン：時計" /> <?php echo get_post_meta($post->ID,'時間', true); ?>～</td>
					<td><?php echo get_post_meta($post->ID,'講座', true); ?></td>
					<td><?php echo get_post_meta($post->ID,'場所', true); ?></td>
				</tr>
    <?php endwhile; ?>

			

                        </table>
		</div>
	<?php// wp_pagenavi(); ?>

     <?php endif; ?>               
  <?php wp_reset_query(); ?>                  
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
                        	<!--ここから 9/3 hiroki change-->
                                    <a href="contact.html"><img src="<?php bloginfo('template_url'); ?>/image/mousikomi_top.png" width="672" height="46" alt="ここをクリックでお申し込みページへ" class="mousikomi_top" /></a>
	                      <!--ここまで 9/3 hiroki change-->
			
		</div></div>
		</div>
	</div>
	<div id="footer">
		<div id="copyright">
	<p>Copyright (C) 2012 herbest. All Rights Reserved.</p>
	</div>
	</div>
	</div>


<?php get_footer(); ?>