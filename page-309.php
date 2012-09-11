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
<div class="pan"><a href="<?php echo home_url(); ?>/?page_id=7"><span class="blue">home</span></a> &gt; <span class="pink">お申し込み</span></div>
		
		<div class="pro_waku_top">	
			<h2><img src="<?php bloginfo('template_url'); ?>/image/application_h2.png" width="282" height="58" alt="見出し：お申し込み" /></h2>
			<!-- pro_waku_top --></div>
			<div class="pro_waku_middle">
		<div id="appli_back">
		<!--	<img src="image/appli_denngonn.png" width="438" height="59" alt="ハーベストについて！とお伝え下さい。 " class="appli4" /> -->
			
		<div class="appli_top">	
			<div id="appli_mail">
			<p class="pink mail1">□メールでの受付はこちら！</p>
			<img src="<?php bloginfo('template_url'); ?>/image/appli_mail.png" width="42" height="26" alt="メールのマーク" class="appli_free1"/>
			<p class="pink mail2">info@herbest-college.com</p>
		</div>
			<div id="appli_call">
			<p class="pink appli1">□お電話でのお申し込みはこちら！</p>
			<img src="<?php bloginfo('template_url'); ?>/image/appli_freecall.png" width="47" height="41" alt="フリーコールのマーク" class="appli_free"/>
			<p class="pink appli2">０１２０－６２－８２１０</p>
		</div>
		<p class="pink appli3">【受付時間　平日10:00～18:00】携帯・PHSからもご利用いただけます。</p>
		</div>
		
			<p class="appli_setumei">各講座の詳細ページからもお申し込み頂けます。<br />現在受付中の講座は以下です！</p>
			<div id="appli-cal_orientation">
				<div class="ori-first"><p><a href="<?php echo home_url(); ?>/?page_?p=302"><span class="pink">herbest『女性の資格とお仕事をまるっと学ぼう★お仕事体験講座オリエンテーション』</span></a></p>
				<dl>
					<dt><img src="<?php bloginfo('template_url'); ?>/image/top_nitiji.png" width="61" height="22" alt="日時"　/>9.17(月)<img src="<?php bloginfo('template_url'); ?>/image/cal_watch.png" width="16" height="17" alt="アイコン：時計" />
						13:15～14:15(13:00より受付)
					</dt>
					
					<dd class="appli-last_dd"><img src="<?php bloginfo('template_url'); ?>/image/top_basyo.png" width="60" height="21" alt="場所"　/>アクロス福岡　５０１会議室</dd>
				</dl>
				</div>
				<hr>
				<div class="ori-first"><p><a href="<?php echo home_url(); ?>/?page_?p=168"><span class="pink">herbest『女性の資格とお仕事をまるっと学ぼう★お仕事体験講座オリエンテーション』</span></a></p>
				<dl>
					<dt><img src="<?php bloginfo('template_url'); ?>/image/top_nitiji.png" width="61" height="22" alt="日時"　/>9.17(月)<img src="<?php bloginfo('template_url'); ?>/image/cal_watch.png" width="16" height="17" alt="アイコン：時計" />
						18:15～19:15(18:00より受付)
					</dt>
					
					<dd class="appli-last_dd"><img src="<?php bloginfo('template_url'); ?>/image/top_basyo.png" width="60" height="21" alt="場所"　/>アクロス福岡　５０１会議室</dd>
				</dl>
				</div>
				<hr><div class="ori-first">
				<p><a href="<?php echo home_url(); ?>/?page_?p=185"><span class="blue">herbest『女性の資格とお仕事をまるっと学ぼう★お仕事体験講座オリエンテーション』</span></a></p>
				<dl>
					<dt><img src="<?php bloginfo('template_url'); ?>/image/top_nitiji.png" width="61" height="22" alt="日時"　/>9.29(土)<img src="<?php bloginfo('template_url'); ?>/image/cal_watch.png" width="16" height="17" alt="アイコン：時計" />
						13:15～14:15(13:00より受付)
					</dt>
					<dd class="ori_last_dd"><img src="<?php bloginfo('template_url'); ?>/image/top_basyo.png" width="60" height="21" alt="場所"　/>アクロス福岡　５０１会議室</dd>
					<div class="clear1"></div>
				</dl>
				<div class="clear1"></div>
				</div>
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
				<tr data-href="<?php echo home_url(); ?>/?page_?p=60">
					<td class="center">保育士</td>
					<td><span class="big">9/18</span>(火)<br />
						13:15～14:15(13:00より受付)</td>
					<td>『保育士★お仕事体験講座』</td>
					<td>アクロス福岡　５０１会議室</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=58">
					<td class="center">調剤事務</td>
					<td><span class="big">9/20</span>(木)<br />
						16:15～17:15(16:00より受付)</td>
					<td>『調剤事務★お仕事体験講座』</td>
					<td>エルガーラ　7F会議室Ⅱ</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=62">
					<td class="center">医療事務</td>
					<td><span class="big">9/20</span>(木)<br />
						18:15～19:15(18:00より受付)</td>
					<td>『医療事務★お仕事体験講座』</td>
					<td>エルガーラ　7F会議室Ⅱ</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=52">
					<td class="center">介護・福祉</td>
					<td><span class="big">9/21</span>(金)<br />
						13:15～14:15(13:00より受付)</td>
					<td>『介護・福祉★お仕事体験講座』</td>
					<td>アクロス福岡　５０１会議室</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=47">
					<td class="center">ブライダル</td>
					<td><span class="big">9/22</span>(土)<br />
						11:15～12:15(11:00より受付)</td>
					<td>『ブライダル★お仕事体験講座』</td>
					<td>アクロス福岡　６０４会議室</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=54">
					<td class="center">心理･<br />
						カウンセリング</td>
					<td><span class="big">9/24</span>(金)<br />
						13:15～14:15(13:00より受付)</td>
					<td>『心理・カウンセリング★<br />お仕事体験講座』</td>
					<td>アクロス福岡　６０２会議室</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=253">
					<td class="center">医療事務</td>
					<td><span class="big">9/26</span>(水)<br />
						13:15～14:15(13:00より受付)</td>
					<td>『医療事務★お仕事体験講座』</td>
					<td>アクロス福岡　６０５会議室</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=45">
					<td class="center">事務職</td>
					<td><span class="big">9/28</span>(金)<br />
						18:15～19:15(18:00より受付)</td>
					<td>『モテる事務職★お仕事体験講座』</td>
					<td>アクロス福岡　５０１会議室</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=216">
					<td class="center">WEB<br />デザイナー</td>
					<td><span class="big">9/30</span>(日)<br />
						13:15～14:15(13:00より受付)</td>
					<td>『WEBデザイナー★お仕事体験講座』</td>
					<td>エルガーラ　7F会議室Ⅱ</td>
				</tr>
				<tr data-href="<?php echo home_url(); ?>/?page_?p=218">
					<td class="center">WEB<br />プログラマー</td>
					<td><span class="big">9/30</span>(日)<br />
						15:15～16:15(15:00より受付)</td>
					<td>『WEBプログラマー★お仕事体験講座』</td>
					<td>エルガーラ　7F会議室Ⅱ</td>
				</tr>
			</table>
		</div>
		
		<!-- appli back --></div>
<!--pro_waku_middle--></div>
<div class="pro_waku_bottom"></div>
                    
	

<?php get_footer(); ?>