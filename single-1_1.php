
				<?php while ( have_posts() ) : the_post(); ?>



<div class="pan"><span class="blue">home</span> &gt; <a href="about_program.html"><span class="pink">体験プログラム:オリエンテーション</span></a></div>
 <div id="frame_head-page-13"><h2><img src="<?php bloginfo('template_url'); ?>/image/orientation_h2.png"  alt="見出し：オリエンテーション" /></h2></div>
	<div id="content20">
			<div class="pro_waku_middle">	
		<div id="content21">
			<div id="content22">
			<div id="content23">
                            
				<img src="<?php bloginfo('template_url'); ?>/image/orientation1.png"alt="オリエンテーション" />
				<p>沢山の資格や仕事がある中で、自分にあった、生活スタイルにあった、これから求められる、資格や仕事を見つけ出すのも大変です。当講座では、世の中に沢山ある資格と資格に紐付仕事を整理して、貴方にあった資格ー仕事探しの指標をご提供します。</p>		
			</div>
			<div id="content26">
				<p><?php echo get_post_meta($post->ID,'カレンダー', true); ?>(<?php echo get_post_meta($post->ID,'曜日', true); ?>)オリエンテーションプログラム　<?php echo get_post_meta($post->ID,'場所', true); ?></p>
			</div>
			<div id="content24">
			
					<div class="content28">
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku2.png" width="41" height="43" alt="アイコン：本と鉛筆" class="hoiku2" />
				<p>当日の流れ</p>
				</div>
				<div id="flow">
				<div class="flow_toujitu">世の中の資格の紹介と分類</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">資格と仕事のいい関係</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">タイプ別ー資格と仕事マッチング</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">志向別ーオススメの資格と仕事紹介</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">資格取得と就業までのステップワーク</div>
                                 </div>
				<div id="content29">
				<div class="content28">
                                   
				<p>お申し込み</p><img src="<?php bloginfo('template_url'); ?>/image/hoiku8.png" width="80" height="44" alt="イラスト：なにか書いてるうさぎ" class="hoiku8" />
				</div>
			<!--content29--></div>
                       <p style="font-weight:normal;font-size:10px;">*は必須項目です。</p>
		  <?php echo apply_filters('the_content', get_post_meta($post->ID, '問合せフォーム', true)); ?>

			<!--content24--></div>
			<div id="content27">
				<div id="content30">
					<p id="jissi">実施日程</p>
					<div id="content31">
						 

                                                <?php
                                                $my_query = new WP_Query( array(
                                                //'cat' => 4,
                                                'posts_per_page' => '3',
                                                'orderby' => 'meta_value',
                                                'meta_key'=> 'カレンダー',    
                                                'order' => 'ASC'
                                                ));
                                                if( $my_query->have_posts() ) :
                                                ?>
                                               
                                                <?php while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                                  <dl><dt><a href="<?php the_permalink(); ?>">■<?php echo get_post_meta($post->ID,'shokushu', true); ?></br><?php echo get_post_meta($post->ID,'カレンダー', true); ?>(<?php echo get_post_meta($post->ID,'曜日', true); ?>) <?php echo get_post_meta($post->ID,'時間', true); ?></dt>
                                                                    <dd><?php echo get_post_meta($post->ID,'場所', true); ?></dd>
                                                                    </a></dl>
                                                <?php endwhile; wp_reset_query();?>
                                            
                                                <?php else : ?>
                                                <?php endif; ?>
                                            
                                            


					</div>
			</div>
			<div id="content33">
<p id="jissi" style="color:white">アクセス</p>
<?php echo get_post_meta($post->ID,'googlemap', true); ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://www.egmap.jp/amc.js" charset="utf-8"></script>
<p class="egmap_copyright" style="width: 200px;">powered by <a href="http://www.egmap.jp/" target="_blank">egmap.jp</a></p>
                            
                            

				</div>
	 		
		
		
			</div>
	</div>
                    <div class="clear"></div>
	</div>
          
</div>  <!-- pro_waku_middle--></div> 
                     <div id="frame_bottom"></div>    

	<?php endwhile; // end of the loop. ?>