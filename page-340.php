<?php
/**
 * Template Name: unnei
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 */

get_header(); ?>
	<div class="pan"><a href="<?php echo home_url(); ?>/?page_id=7"><span class="blue">home</span></a> &gt; <span class="pink">今月のプログラム</span></div>
		
		<div class="pro_waku_top">	
			<h2><img src="<?php bloginfo('template_url'); ?>/image/h2_this_month.png" width="402" height="58" alt="見出し：今月のプログラム詳細" /></h2>
			<!-- pro_waku_top --></div>
			<div class="pro_waku_middle">
		<div id="appli_back">
		<!--	<img src="image/appli_denngonn.png" width="438" height="59" alt="ハーベストについて！とお伝え下さい。 " class="appli4" /> -->
			
		<img src="<?php bloginfo('template_url'); ?>/image/caption.png" width="570" height="77" alt="文字：2012年9月プログラム" class="month9" />
		
			
			<div id="appli-cal_orientation">
				
                                  <?php
                                                        $aaaa=1;//カウント変数
                                                        $my_query = new WP_Query( array(
                                                        'cat' => 5,
                                                         'posts_per_page' => '3',
                                                          'orderby' => 'meta_value',
                                                         'meta_key'=> 'カレンダー',    
                                                         'order' => 'ASC'
                                                         ));
                                  if( $my_query->have_posts() ) : ?>
                                <?php while( $my_query->have_posts() ) : $my_query->the_post(); ?>

                                    <?php     if($aaaa==1){
                                            $pink_date=get_post_meta($post->ID,'カレンダー', true);
                                    }else{
                                        echo '<hr>';   
                                    } ;?>
                   
                                <?php     if($pink_date==get_post_meta($post->ID,'カレンダー', true)){
                                                        $color_class="pink";
                                                }else{
                                                    $color_class="blue";

                                                } ;?>

			<div class="ori-first"><p><a href="<?php the_permalink(); ?>"><span  class="<?php echo $color_class;?>"><?php echo get_post_meta($post->ID,'講座', true); ?></span></a></p>
 
                                <dl>
					<dt><img src="<?php bloginfo('template_url'); ?>/image/top_nitiji.png" width="61" height="22" alt="日時"　/> <?php echo str_replace('/','.',substr(get_post_meta($post->ID,'カレンダー', true),5));?>(月)
						<img src="<?php bloginfo('template_url'); ?>/image/cal_watch.png" width="16" height="17" alt="アイコン：時計" /><?php echo get_post_meta($post->ID,'時間', true); ?>(<?php echo get_post_meta($post->ID,'受付時間', true); ?>より受付)
					</dt>
					
					<dd class="last_dd"><img src="<?php bloginfo('template_url'); ?>/image/top_basyo.png" width="60" height="21" alt="場所"　/><?php echo get_post_meta($post->ID,'場所', true); ?></dd>
				</dl>
				</div>
                    
                              

                    
                                                <?php  $aaaa++   ;?>
                <?php endwhile; ?>  <?php endif; ?>    <?php wp_reset_query(); ?>    			
                           
                            
                            
                            
                            
                            
				<div class="clear1"></div>
			
			<!--cal_orientation--></div>
		<div id="appli-calender">
			<table border="1" bordercolor="#65212E">
				<colgroup class="appli-left">
				</colgroup>
				<colgroup class="appli-left_2">
				</colgroup>
				<colgroup class="appli-left_3">
				</colgroup>
				<colgroup class="appli-left_4">
				</colgroup>

              <?php
                    $my_query = new WP_Query( array(
                    'cat' => -5,
                     'posts_per_page' => '-1',
                      'orderby' => 'meta_value',
                     'meta_key'=> 'カレンダー',    
                     'order' => 'ASC'
                     ));
                      if( $my_query->have_posts() ) : ?>
            <?php while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                   
                                <tr data-href="<?php the_permalink(); ?>">
                                    
					<td class="center"><?php echo get_post_meta($post->ID,'shokushu', true); ?></td>
					<td><span class="big"><?php echo substr(get_post_meta($post->ID,'カレンダー', true),5); ?></span>(<?php echo get_post_meta($post->ID,'曜日', true); ?>)<br />
						<?php echo get_post_meta($post->ID,'時間', true); ?>(<?php echo get_post_meta($post->ID,'受付時間', true); ?>より受付)</td>
					<td>『<?php echo get_post_meta($post->ID,'講座', true); ?>』</td>
					<td><?php echo get_post_meta($post->ID,'場所', true); ?></td>
				</tr>
 <?php endwhile; ?>     <?php endif; ?>    <?php wp_reset_query(); ?>    
				
			</table>
		</div>
		
		<!-- appli back --></div>
<!--pro_waku_middle--></div>
<div class="pro_waku_bottom"></div>       
	

<?php get_footer(); ?>