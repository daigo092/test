
				<?php while ( have_posts() ) : the_post(); ?>
			<div class="pan"><a href="index.html"><span class="blue">home</span></a> &gt; <a href="about_program.html"><span class="pink">体験プログラム:心理・カウンセリング系専門職</span></a></div>
	<div class="pro_waku_top">
		<h2><img src="<?php bloginfo('template_url'); ?>/image/counseling_h2.png" width="720" height="60" alt="見出し：心理・カウンセリング系専門職" /></h2>
				<!-- pro_waku_top --></div>
		<div class="pro_waku_middle">
			<div id="content21">
			<div id="content22">
			<div id="content23">
				<img src="<?php bloginfo('template_url'); ?>/image/counseling1.png" width="135" height="138" alt="心理・カウンセリング系専門職" />
<p>依頼者の抱える問題・悩みなどに対し、専門的な知識や技術を用いて相談援助を行い、 心の健康が回復することを手助けする。<br />
					診察や診断などは医師のみに許される行為である ため行わないが、心理カウンセラーの需要は幅広く病院の精神科や心療内科の他に、 
					教育現場、会社、就労支援の現場や福祉の現場等でカウンセラーを求められるケースが増えてきている。</p>	
			</div>
				<div class="hoikusi-content">
			<div id="content26">
				<p><?php echo substr(get_post_meta($post->ID,'カレンダー', true),5); ?>(<?php echo get_post_meta($post->ID,'曜日', true); ?>)　心理・カウンセリング系専門職体験プログラム　<?php echo get_post_meta($post->ID,'場所', true); ?></p>
			</div>
			<div id="content24">
			
					<div class="content28">
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku2.png" width="41" height="43" alt="アイコン：本と鉛筆" class="hoiku2" />
				<p>当日の流れ</p>
				</div>
				<div id="flow">
				<div class="flow_toujitu">お仕事分析</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">先輩インタビュー</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">ここだけこっそり情報</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">お仕事マーケット</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">お勉強の方法を学ぶ</div>
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku10.png" width="17" height="15" alt="下をむいてる矢印" class="hoiku10" />
				<div class="flow_toujitu">講座・スクール一括資料請求サービス</div>
				</div>
				<div class="content28">
				<img src="<?php bloginfo('template_url'); ?>/image/hoiku2.png" width="41" height="43" alt="アイコン：本と鉛筆" class="hoiku2" />
				<p>講座概要</p>
				</div>
			<div class="part_program">
			<table border="1" bordercolor="#008CC2">
				<tr><th>開催日時</th><td><?php echo substr(get_post_meta($post->ID,'カレンダー', true),5); ?>(<?php echo get_post_meta($post->ID,'曜日', true); ?>) <?php echo get_post_meta($post->ID,'時間', true); ?></br>　　　　　　　(<?php echo get_post_meta($post->ID,'受付時間', true); ?>より受付)</td></tr>
				<tr><th>会場</th><td><?php echo get_post_meta($post->ID,'場所', true); ?></td></tr>
				<tr><th>参加費用</th><td>参加費無料！※</td></tr>
				<tr><th>持ち物</th><td>筆記用具をご持参下さい。</td></tr>
				<tr><th>参加時の服装</th><td>リラックスした服装でお越し下さい。</td></tr>
				<tr><th>ファシリテーター</th><td>元リクルート社の人材採用・キャリア支援領域でキャリアを積んだ、「お仕事コーディネーター」が担当します。</td></tr>
			</table>
			</div>
				<div class="part_caption">※herbestはスクールや通信教育会社さんのご支援でお届けする、「フリー・プログラム」ですので参加費無料です。</div>
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
		<div class="clear1"></div>
			</div>
	</div>
	</div>
<!-- pro_waku_middle--></div>
<div class="pro_waku_bottom"></div>


	<?php endwhile; // end of the loop. ?>