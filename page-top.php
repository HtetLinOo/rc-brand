<?php
/*
Template Name: Page TopPage
*
*/
?>
<?php get_header(); ?>
<div id="content" class="top">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all cf" role="main">
		<article <?php post_class( 'cf' ); ?>>
<?php
 the_content();
?>
<?php /*
<?php
$photo1 = wp_get_attachment_image_src(get_option('id_aqua_top_banner1'),'full');
$photo2 = wp_get_attachment_image_src(get_option('id_aqua_top_banner2'),'full');
?>
      <section id="top_visual" class="entry-content cf pd0" >
        <div class="section_visual">
				 <div class="wrap">
					<figure>
						<picture>
							<source media="(max-width:768px)" srcset="<?php echo $photo2[0] ?>" >
							<img src="<?php echo $photo1[0] ?>" alt="ROYAL CANIN PO POTAL">
						</picture>
					</figure>
					<div class="topcap">
すべてはペットの<br>
健康のために<br>
<span>
「ロイヤルカナン食事療法食 VETSヘルスステーション」は、食事療法食と愛犬・愛犬の健康管理ができる、ペットとペットオーナーのためのウェブサイトです。
</span>
					</div>
         </div>
        </div>
			</section>
 */?>
<?php /*

			<section id="top_news" class="entry-content cf" >
			 <div class="section_news">
				<div class="wrap_left">
					<h2 class="left_cap">ロイヤルカナンからのお知らせ</h2>
<?php
$tmp = '<ul class="active">';
		$args = array(
			'post_type' => 'post',
			//'category__not_in' => array( 16 ),
			//'category_name' => 'Information',
			'posts_per_page' => 3,
			'post_status' => 'publish',
			'order'=>'DESC',
			'orderby'=>'post_date',
		);
$wp_query2 = new WP_Query( $args );
if ($wp_query2->have_posts()) :
while ($wp_query2->have_posts()) : $wp_query2->the_post();
?>
<?php
$descript = get_post_meta(get_the_id()  , 'buy_discript1' ,true);
$url = get_permalink( get_the_id() );
$mod_date = get_the_time('Y/n/d');
$image_url = wp_get_attachment_url(get_post_meta(get_the_id() ,"file_upload1",true));
$cat = get_the_category();
$cat = $cat[0];
$slug = $cat->category_nicename;
$name = $cat->cat_name;
$tmp .= '<li class="active"><a href="'.$url.'">';
$tmp .= '<span class="'. $slug . ' cate">'. strtoupper($name) .'</span>';
$tmp .= '<span class="date">'. $mod_date .'</span><br>';
$tmp .= '<span class="read">'. get_the_title() .'</span>';
$tmp .= '</a></li>';
endwhile;endif;
$tmp .= '</ul>';
echo $tmp;
wp_reset_query();
?>
					<button class="right"><div class="fl_more"><a href="/news/">一覧</a></div></button>
				</div>
			 </div>
			</section>
 */?>
<?php /*

			<section id="top_serviceinfo" class="entry-content cf" >
			 <div class="section_serviceinfo">
				<div class="overcontent_wrap">

				<h2 class="serviceinfo_cap">ロイヤルカナン食事療法食を<br>より安心してご購入いただくために<br><span>３つの取り組みをスタートしました</span></h2>
 */?>

<?php /*
<!--
					<span class="service_warning"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon14.png" class="icon14">ご購入は、動物病院および公式・認定<br class="sp">オンラインストアのみとなります</span>
					<span class="service_warning2">動物病院以外の店舗、認定を受けていないオンラインストアでのお取り扱いがなくなります。<br>
ご利用の皆様にはご不便をお掛けいたしますが、ご理解いただけますよう何卒よろしくお願い申し上げます。
					</span>
-->
<!--
				<div class="towbox">
					<div class="box_maru">
						<div><span>動物病院</span><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon15.png" class="icon15"></div>
						<div><span>公式・認定<br>オンラインストア</span><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon9.png" class="icon9"></div>
					</div>
					<div class="box_batu">
						<div><span>動物病院以外の店舗</span><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon10.png" class="icon10"></div>
						<div><span>未認定ネットショップ</span><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon11.png" class="icon11"></div>
					</div>
				</div>
-->
<!--
				<h3 class="serviceinfo_cap">使用には獣医師からの<br>推奨や栄養指導が必要です</h3>
				<div class="towbox2">
				 <div class="wrap_left">
					<p>食事療法食は健康状態や症状に合わせて特別につくられたフードで、使用には獣医師からの推奨や栄養指導が必要です。<br>
獣医師の診察・推奨後は、公式・認定オンラインストアで継続的にご購入いただけます。</p>
					<img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon12.png" class="icon12">
				 </div>
				 <div class="wrap_right">
					<p>「認定オンラインストア」でフードを購入すると、かかりつけ動物病院に情報が共有され、獣医師が把握できます。そのため、推奨されていないフードの誤用を防げます。</p>
					<img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon13.png" class="icon13">
				 </div>
				</div>
				<div class="service_warning_glaybox"><span><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon14.png" class="icon14">オンラインでの購入には、<br><a href="">かかりつけ動物病院登録サイト</a>への登録が必要です。</span>
					<a href="" class="application_link">かかりつけ動物病院登録サイトに登録する</a>
				</div>
-->
<!--
				<h3 class="serviceinfo_cap">公式・認定オンラインストアでの<br>購入方法</h3>
				<div class="step4">
					<div class="step">
						<div class="circle"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon15.png" class="icon15"></div>
						<p>動物病院で診察を受け、食事療法食の推奨を受ける<br>
<span class="glay">※推奨時に</span><span class="red">かかりつけ動物病院ID</span><span class="glay">が渡されます</span></p>
					</div>
					<div class="arrow"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon19.png" class="icon19"></div>
					<div class="step">
						<div class="circle"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon16.png" class="icon16"></div>
						<p>公式・認定オンラインストアで、推奨された製品をカートに追加する</p>
					</div>
					<div class="arrow"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon19.png" class="icon19"></div>
					<div class="step">
						<div class="circle"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon17.png" class="icon17"></div>
						<p>購入時にかかりつけ動物病院登録サイトにて、動物病院で受け取ったかかりつけ動物病院IDまたは病院名で検索の上、かかりつけ動物病院を登録し、推奨されたペットと製品を紐づける</p>
					</div>
					<div class="arrow"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon19.png" class="icon19"></div>
					<div class="step">
						<div class="circle"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon18.png" class="icon18"></div>
						<p>自動的に公式・認定オンラインストアに遷移し、購入を完了させる</p>
					</div>
				</div>
-->
<!--
				<h3 class="serviceinfo_cap">食事療法食のお取り扱い先</h3>
				<div class="shops">
					<a href="" class="shop">
						<div class="circle"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon20.png" class="icon20"></div>
						<p>公式<br>オンラインストア<img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon21.png" class="icon21"></p>
					</a>
					<a href="" class="shop">
						<div class="circle"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon20.png" class="icon20"></div>
						<p>認定<br>オンラインストア2<img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon21.png" class="icon21"></p>
					</a>
			 </div>
			 </div>
			 </div>
-->
 */?>
<?php /*

			</section>
*/?>
<?php /*

			<section id="top_pointBlock" class="entry-content cf" >
		<div id="pointBlock">
			<div class="grayBg">
				<div class="container">
					<section class="flexBox123">
						<div id="point1">
							<div class="flexBox">
								<div class="item">
									<span class="point"><u>POINT</u>1</span>
									<h3 class="mb5">認定オンラインストアでの<br>
										販売がはじまります</h3>
									<p class="red">〈 2024年10月より随時 〉</p>
									<p class="mt10"><a href="/point1/" class="arrow">詳しくはこちら</a></p>
									<ul class="pointLink spmt0">
										<li><a href="/point1/#onlineStore2">認定オンラインストアとは</a></li>
										<li><a href="/point1/#section01">公式・認定オンラインストア一覧</a></li>
										<li><a href="/point1/#section02">認定オンラインストアはなぜ必要？どう変わる？</a></li>
										<li><a href="/point1/#section03">今後の購入先について</a>
											<ul>
												<li><a href="/point1/#faq01">これまでオンラインストアでご購入の方</a></li>
												<li><a href="/point1/#faq02">これまでホームセンターやペットショップでご購入の方</a></li>
												<li><a href="/point1/#faq03">これまで動物病院でご購入の方</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/item_nintei.png" alt="ロイヤルカナン 食事療法食 認定 オンラインストア" class="nintei"></div>
							</div>
						</div>

						<div id="point2">
							<span class="point"><u>POINT</u>2</span>
							<h3 class="mb5">オンラインでの食事療法食の購入には<br>
								かかりつけ動物病院の登録を</h3>
							<p class="mt5"><a href="/point2/" class="arrow">詳しくはこちら</a></p><br>
							<p class="black">「かかりつけ動物病院登録サイト」でかかりつけ動物病院を登録することで、<br>
								公式および認定オンラインストアでご購入いただけます。</p>
							<ul class="pointLink">
								<li><a href="/point2/#section01">かかりつけ動物病院の登録はなぜ必要なの？</a></li>
							</ul>

							<div class="flexBox">
								<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/logo_kakaritsuke.png" alt="かかりつけ動物病院登録サイト" width="366" height="39">
									<p class="blue">〈 事前登録受付中 〉</p>
									<div><a href="https://ks-pet-health-link.jp/?utm_source=RC_POportal&utm_medium=referral&utm_campaign=202408RC_POportal_preOpen&utm_id=006" target="_blank">事前登録する</a></div>
								</div>
								<div class="img"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/mobile_kakaritsuke_L.png" alt="かかりつけ動物病院登録サイト" class="mobile_phone"></div>
							</div>

						</div>
					</section>
				</div>
			</div>


			<div class="grayBg2">
				<div class="container">
					<section class="flexBox123">
						<div id="point3"><span class="point"><u>POINT</u>3</span>

							<div class="flexBox">
								<div class="item">
									<h3 class="mb5">食事療法食と愛犬・愛猫の健康管理ができるウェブサイト</h3>
											<h4><span>ロイヤルカナン食事療法食</span><br>
											VETSヘルスステーション</h4>
										<p class="red">〈 2025年以降 会員機能オープン予定 〉</p>
									</div>
									<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/mobile_vets_L.png" alt="VETSヘルスステーション" class="spimg"></div>
							</div>
						</div>
					</section>

					</div>
					*/?>

<?php /*<!--
				<div class="fukidashi">
					<div class="balloon">
						今後の最新情報はこのサイトでお知らせします！<br>
						<span>本サイトのブックマーク・お気に入り登録をお願いします</span>
					</div>
				</div>
--> */?>
<?php /*			</div>
		</div>
			</section>
 */?>
<?php /*
			<section id="top_about_poportal" class="entry-content cf" >
			 <div class="section_about_poportal">
				<h3 class="about_poportal_cap2">本サイトでできること</h3>
				<p>「ロイヤルカナン食事療法食 VETSヘルスステーション」は、ロイヤルカナン食事療法食をご利用いただいているペットとペットオーナーのための情報サイトです。<br>
かかりつけ動物病院からのお知らせの確認、食事療法食の購入管理やペットの健康管理ができます。</p>
				<div class="wrap_about_poportal">
					<div class="abouts">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon22.png" class="icon22"></div>
						<div class="reads"><p>食事療法食の購入履歴を<br>一括して確認できます</p>
						<p>オンラインで購入された場合、どこのオンラインストアから商品を購入しても購入履歴を一括で確認することができます。</p>
						<p class="warning">※かかりつけ動物病院登録サイトでの登録情報であり、実際の購入履歴と異なる場合があります。</p>
						<p class="release">〈 2025年 リリース予定 〉</p>
						</div>
					</div>
					<div class="abouts">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon23.png" class="icon23"></div>
						<div class="reads"><p>かかりつけ動物病院からの<br>お知らせが見れます</p>
						<p>ペットの定期健診、フード購入の時期など、病院からのお知らせが見れます。</p>
						<p class="release">〈 2025年 リリース予定 〉</p>
						</div>
					</div>
					<div class="abouts">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon24.png" class="icon24"></div>
						<div class="reads"><p>ペットの健康状態を<br>チェックできます</p>
						<p>ペットの健康状態のチェックシートを作成し、登録することができます。過去の記録と比べて健康管理に役立てましょう。</p>
						<p class="release">〈 2025年 リリース予定 〉</p>
						</div>
					</div>
					<div class="abouts">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon25.png" class="icon25"></div>
						<div class="reads"><p>ペットの写真を<br>アップロードできます</p>
						<p>ペットの写真にコメントをつけてアップロードすることができます。かわいいペットの写真記録として使用することも可能です。</p>
						<p class="release">〈 2025年 リリース予定 〉</p>
					</div>
					</div>
					<div class="abouts">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon26.png" class="icon26"></div>
						<div class="reads"><p>食事療法食取り扱い病院が<br>検索できます</p>
						<p>ロイヤルカナン食事療法食取り扱い動物病院が素早く探せるので、病院選びにも役立ちます。</p>
						<p class="release">〈 2024年末 リリース予定 〉</p>
					</div>
					</div>
					*/?>
<?php /*<!--
					<div class="abouts">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon27.png" class="icon27"></div>
						<div class="reads"><p>病気と食事の情報を<br>お届けします</p>
						<p>LINEから病気と食事の情報をお届けします。友だち限定キャンペーンも実施中！</p>
						<a href="#" class="linefrend">
							<img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon28.png" class="icon28">
							<span>友だち追加はこちら</span>
						</a></div>
					</div>
					-->*/ ?>
<?php /*
				</div>
<p class="warning">※最新情報はこのサイトでお知らせします。本サイトのブックマーク・お気に入り登録をお願いします<br>
※全ての機能のご利用にはかかりつけ動物病院登録サイトへの登録が必要です<br>
※サービスは随時リリース予定です<br>
※本サイトのサービス・コンテンツは変更になる可能性があります</p>
			 </div>
			</section>
*/ ?>
<?php /*
			<section id="top_content_menu" class="entry-content cf" >
			 <div class="section_content_menu">
				<div class="menus">
					<div class="menu">
						<h2 class="about_poportal_cap">お悩み解決</h2>
						<p>こんなことで困っていませんか？</p>
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/figure01.png" class="figure01"></div>
						<p>ロイヤルカナンは、お悩み解決に<br>自動ガイドでご協力します！</p>
						<a href="" class="menu_link_onayami">お悩みガイド</a>
					</div>
					<div class="menu">
						<h2 class="about_poportal_cap">病気と食事の<br>知識を深める</h2>
						<p>ペットの栄養・健康・病気に関する<br>記事が読めます。</p>
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/figure02.png" class="figure02"></div>
						<p>知識を深め、<br>ペットの健康を守りましょう！</p>
						<a href="<?php echo home_url('/health-and-foods/') ?>" class="menu_link_inuneko">犬と猫の病気と食事</a>
					</div>
					<div class="menu">
						<h2 class="about_poportal_cap">食事療法食<br>について知る</h2>
						<p>食事療法食は健康状態や症状に合わせて<br>特別につくられたフードです。</p>
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/figure03.png" class="figure03"></div>
						<p>ロイヤルカナンの食事療法食を<br>よく知りましょう！</p>
						<a href="<?php echo home_url('/aboutfood/') ?>" class="menu_link_food">ロイヤルカナンのフードについて</a>
					</div>
				</div>
			 </div>
			</section>
 */ ?>
<?php /*
			<section id="top_use_content">
			 <div class="section_use_content">
				<h3>使い始めるには</h3>
				<p class="title">「かかりつけ動物病院登録サイト」へのご登録で<br class="pc">当サイトの会員向けコンテンツをご利用いただけます。</p>
				<p class="letter">「ロイヤルカナン食事療法食 VETSヘルスステーション」の会員向けコンテンツをご利用いただくには、「かかりつけ動物病院登録サイト」へご登録ください。</p>
				<h4><span class="red maru">◯</span>「かかりつけ動物病院登録サイト」とは？</h4>
				<div class="grayBox wrap_use_content">
					<div class="flexBox">
						<div class="left">
							<p class="txt">「<a href="https://ks-pet-health-link.jp/?utm_source=RC_POportal&utm_medium=referral&utm_campaign=202408RC_POportal_preOpen&utm_id=006" target="_blank">かかりつけ動物病院登録サイト</a>」でかかりつけ動物病院を登録することで、公式および認定オンラインストアでご購入いただけます。</p>
							<ul class="pointLink spmt0">
								<li><a href="/point1/#onlineStore2">かかりつけ動物病院の登録はなぜ必要なの？</a></li>
							</ul>
							<div class="flexBox">
								<div class="text">
									<img src="<?php echo get_template_directory_uri()?>/images/lp-img/logo_kakaritsuke.png" alt="かかりつけ動物病院登録サイト" width="339" height="36"><br>
									<p class="blue">〈 事前登録受付中 〉</p>
								</div>
								<div class="button"><a href="https://ks-pet-health-link.jp/?utm_source=RC_POportal&utm_medium=referral&utm_campaign=202408RC_POportal_preOpen&utm_id=006" target="_blank">事前登録する</a></div>
							</div>
						</div>
						<div class="img2"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/mobile_kakaritsuke_L.png" alt="かかりつけ動物病院登録サイト"></div>
					</div>
				</div>
				<p>「かかりつけ動物病院登録サイト」にご登録いただく、ペットオーナー様情報、ペット情報、かかりつけ動物病院と連携した、「ロイヤルカナン食事療法食
					VETSヘルスステーション」の会員向けコンテンツをご利用いただけます。<br>
					かかりつけ動物病院の最新情報やお知らせを受け取ったり、購入した食事療法食の履歴、ペットの記録やヘルスチェックなど便利な機能が充実していますのでぜひご活用ください。</p>
				</div>
			</section>

			<section id="top_cta_content">
			 <div class="section_cta_content">
				<div class="redBox">
					<div class="flexBox">
						<div class="left">
							<p class="txt txtCenter">食事療法食と愛犬・愛猫の健康管理ができる<br>ペットとペットオーナーのためのウェブサイト</p>
							<div class="flexBox">
								<div class="text">
									ロイヤルカナン食事療法食<br>
									<ruby><strong>VETS</strong>
										<rt>ベッツ</rt>
									</ruby><strong>ヘルスステーション</strong><br>
									<span class="red font14">〈 2025年以降 会員機能オープン予定 〉</span>
								</div>
							</div>
						</div>
						<div class="img"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/mobile_vets_L.png" alt="VETS ヘルスステーション"></div>
					</div>
				</div>
				</div>
			</section>
 */ ?>
<?php /*

    <div class="container">
      <div id="bannerBlock" class="flexBox">
        <div class="item"><a href="https://lin.ee/KTCMQfi" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/bnr_line1.png" alt="ロイヤルカナン食事療法食 LINE公式アカウント" width="619" height="140"></a></div>
        <div class="item"><a href="https://portal.v.royalcanin.jp/cp/2024/registrationcp/"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/bnr_w_camp2.png" alt="Wキャンペーン" width="619" height="140"></a></div>
      </div>
      <div id="bannerBlock-sp">
        <div class="item"><a href="https://lin.ee/KTCMQfi" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/bnr_line_sp.png" alt="ロイヤルカナン食事療法食 LINE公式アカウント" width="690" height="476"></a></div>
        <div class="item"><a href="https://portal.v.royalcanin.jp/cp/2024/registrationcp/"><img src="<?php echo get_template_directory_uri()?>/images/lp-img/bnr_w_camp_sp.png" alt="Wキャンペーン" width="560" height="380"></a></div>
      </div>
    </div>
 */ ?>


<?php /*
<!--
			<section id="top_footer_cta" class="entry-content cf" >
			 <div class="section_footer_cta">
					<img src="<?php echo get_template_directory_uri()?>/images/royalcanin/icon12.png" class="icon12">
			 </div>
			</section>
-->
*/?>
		</article>
    </main>
  </div>
</div>

<?php get_footer(); ?>
