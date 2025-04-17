<?php
/*
Template Name: Page PO03
*
*/
?>
<?php get_header(); ?>
<div id="content" class="top">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all cf" role="main">
		<article <?php post_class( 'cf' ); ?>>

<?php /*

<?php
$photo1 = get_template_directory_uri() . '/images/po03/kv_pc.png';
$photo2 = get_template_directory_uri() . '/images/po03/kv_sp.jpg';
?>
      <section id="top_visual" class="entry-content cf pd0" >
        <div class="section_visual">
				 <div class="wrap">
					<figure>
						<picture>
							<source media="(max-width:768px)" srcset="<?php echo $photo2 ?>" >
							<img src="<?php echo $photo1 ?>" alt="ROYAL CANIN PO POTAL">
						</picture>
					</figure>
					<div class="topcap">
犬と猫の病気と食事<br>
<span>
PO Portalはロイヤルカナン食事療法食のポータルサイトです。<br>
ペットの健康のために、安心・安全な食事を使用しましょう。
</span>
					</div>
         </div>
        </div>
			</section>
/* ?>
<?php /*

			<section id="po03" class="entry-content cf" >
			 <div class="section_po03">
				<h2 class="cap">よく見られる病気や<br>健康状態のチェック方法・食事管理<br>について知っておきましょう。</h2>
				<div class="wrap_po03_menu">
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/urinary/') ?>">下部尿路疾患</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/constipation/') ?>">消化器疾患<span>（下痢・便秘）</span></a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/hepatic/') ?>">肝臓疾患</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/convalescence/') ?>">高栄養要求時</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/obesity/') ?>">肥満</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/diabetic/') ?>">糖尿病</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/skin/') ?>">皮膚疾患</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/food_allergy/') ?>">食物アレルギー</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/renal/') ?>">腎臓疾患</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/cardiac/') ?>">心臓疾患</a></div>
					<div class="disease_name"><a href="<?php echo home_url('/health-and-foods/arthritis/') ?>">関節疾患</a></div>
				</div>
				<h2 class="cap">このような症状<br>お悩みはありませんか？</h2>
				<div class="wrap_po03_symptoms">
					<a href="#modal01" rel="noopener"><div class="symptoms_case"><img class="fig01" src="<?php echo get_template_directory_uri()?>/images/po03/fig01.png">排便がつらそうで<br>硬い便をしている</div></a>
					<a href="#modal02" rel="noopener"><div class="symptoms_case"><img class="fig02" src="<?php echo get_template_directory_uri()?>/images/po03/fig02.png">高いところに<br>ジャンプできなくなった</div></a>
					<a href="#modal03" rel="noopener"><div class="symptoms_case"><img class="fig03" src="<?php echo get_template_directory_uri()?>/images/po03/fig03.png">最近体重を<br>測っていない</div></a>
					<a href="#modal04" rel="noopener"><div class="symptoms_case"><img class="fig04" src="<?php echo get_template_directory_uri()?>/images/po03/fig04.png">しっかり食べているのに<br>やせてきた気がする</div></a>
					<a href="#modal05" rel="noopener"><div class="symptoms_case"><img class="fig05" src="<?php echo get_template_directory_uri()?>/images/po03/fig05.png">お散歩や運動を嫌がったり<br>することがある</div></a>
					<a href="#modal06" rel="noopener"><div class="symptoms_case"><img class="fig06" src="<?php echo get_template_directory_uri()?>/images/po03/fig06.png">年を取って<br>元気がなくなった</div></a>
					<a href="#modal07" rel="noopener"><div class="symptoms_case"><img class="fig07" src="<?php echo get_template_directory_uri()?>/images/po03/fig07.png">尿の色が薄くなったり量が増えた<br>/水をいっぱい飲んでいる</div></a>
					<a href="#modal08" rel="noopener"><div class="symptoms_case"><img class="fig08" src="<?php echo get_template_directory_uri()?>/images/po03/fig08.png">尿の色が濃くなる/量が減る/トイレの<br>回数が増える/トイレの後に痛がる</div></a>
					<a href="#modal09" rel="noopener"><div class="symptoms_case"><img class="fig09" src="<?php echo get_template_directory_uri()?>/images/po03/fig09.png">軟便が続いたり/<br>下痢をすることがある</div></a>
					<a href="#modal10" rel="noopener"><div class="symptoms_case"><img class="fig10" src="<?php echo get_template_directory_uri()?>/images/po03/fig10.png">毛づやが悪い/<br>皮膚が荒れている</div></a>
					<a href="#modal11" rel="noopener"><div class="symptoms_case"><img class="fig11" src="<?php echo get_template_directory_uri()?>/images/po03/fig11.png">最近、からだを<br>かゆがるようになった</div></a>
					<a href="#modal12" rel="noopener"><div class="symptoms_case"><img class="fig12" src="<?php echo get_template_directory_uri()?>/images/po03/fig12.png">避妊・去勢手術をしてから<br>食欲が増した</div></a>
				</div>
			 </div>
			</section>

<div class="remodal" data-remodal-id="modal01">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">排便がつらそうで<br>硬い便をしている</h3>
			<img class="fig01" src="<?php echo get_template_directory_uri()?>/images/po03/fig01.png">
		</div>
		<div>
			<p class="modal-box-p">便の状態は、身体の調子を表すバロメーター。<br>
			便が出ない状態は、犬と猫もとても辛く感じています。また単なる便秘だと思っていたら、腎臓病の初期症状であることも。便の量が少ない、出しづらそうと思ったら、動物病院で相談を。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./constipation/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">下痢(便秘)</h4>
							<p class="modal-symptoms-flex-txt">便の異常はさまざまな<br>原因が考えられます。
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./renal/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">腎臓病</h4>
							<p class="modal-symptoms-flex-txt">悪いところがあるようには<br>みえないんですが・・。
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal02">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">高いところにジャンプ<br>できなくなった</h3>
			<img class="fig02" src="<?php echo get_template_directory_uri()?>/images/po03/fig02.png">
		</div>
		<div>
			<p class="modal-box-p">
			関節の健康維持に必要な栄養は十分ですか。また体重は適正でしょうか。健康で
			長生きするために、気になることがあったら動物病院に相談を。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./arthritis/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">関節疾患</h4>
							<p class="modal-symptoms-flex-txt">変形性関節症と<br>診断されてしまいました</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./obesity/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">肥満</h4>
							<p class="modal-symptoms-flex-txt">1日のおやつの量は<br>どのくらいですか？
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="remodal" data-remodal-id="modal03">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">最近体重を<br>測っていない</h3>
			<img class="fig03" src="<?php echo get_template_directory_uri()?>/images/po03/fig03.png">
		</div>
		<div>
			<p class="modal-box-p">
			犬と猫の適正体重はおとなになったとき（中、小型犬、猫では
			1歳前後、大型犬は2歳前後）の体重が目安です。今の体重はそのときと比べて
			どうでしょうか。肥満は万病のもと。元気で長生きするためにも定期的な体重測
			定と食事管理で肥満にさせない心がけを。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./obesity/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">肥満</h4>
							<p class="modal-symptoms-flex-txt">1日のおやつの量は<br>どのくらいですか？
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./diabetic/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">糖尿病</h4>
							<p class="modal-symptoms-flex-txt">
							水を飲む量や尿の回数や量は<br>変わりありませんか？</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal04">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">しっかり食べているのに<br>やせてきた気がする</h3>
			<img class="fig04" src="<?php echo get_template_directory_uri()?>/images/po03/fig04.png">
		</div>
		<div>
			<p class="modal-box-p">
			食べているのに痩せてきたという症状は、さまざまな病気の初期症状としてよく
			見られます。一見元気なので見落としがちですが、気付いたら動物病院へ。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./diabetic/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">糖尿病</h4>
							<p class="modal-symptoms-flex-txt">
							水を飲む量や<br>尿の回数や量は<br>変わりませんか？</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./hepatic/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">肝臓病</h4>
							<p class="modal-symptoms-flex-txt">肝臓病は症状が<br>現れにくい病気です。</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal05">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">お散歩や運動を嫌がったり<br>することがある</h3>
			<img class="fig05" src="<?php echo get_template_directory_uri()?>/images/po03/fig05.png">
		</div>
		<div>
			<p class="modal-box-p">
			「うちの子も年をとったから」「天気が悪いせいかしら？」とお散歩に行けない
			理由を考えがちですが、もしかしたら運動を嫌がるのは病気のサインかも。「い
			つもと違う」と思ったら、すぐ動物病院へ。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./cardiac/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">心臓病</h4>
							<p class="modal-symptoms-flex-txt">うちの子も<br>もう10歳ですか・・。
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
					<a href="./arthritis/" class="modal-symptoms-flex-btn-box">
				<div class="modal-symptoms-flex-items-bdr">
					<div class="modal-symptoms-flex-txt-box">
						<h4 class="modal-symptoms-flex-h4">関節疾患</h4>
						<p class="modal-symptoms-flex-txt">変形性関節症と<br>診断されてしまいました</p>
					</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
				</div>
					</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./obesity/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">肥満</h4>
							<p class="modal-symptoms-flex-txt">1日のおやつの量は<br>どのくらいですか？
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal06">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">年を取って<br>元気がなくなった</h3>
			<img class="fig06" src="<?php echo get_template_directory_uri()?>/images/po03/fig06.png">
		</div>
		<div>
			<p class="modal-box-p">
			7歳頃から目には見えない身体の変化が起こっています。目に見えない老化の代
			表は、腎臓病、心臓病です。15歳以上の猫の30％が腎臓病を、10歳以上の
			犬の30％以上が心臓病を患っていると言われています。シニア期には定期的な
			健康診断と適切な食事を与えることで、元気で長生きを目指しましょう。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./cardiac/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">心臓病</h4>
							<p class="modal-symptoms-flex-txt">うちの子も<br>もう10歳ですか・・。
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./renal/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">腎臓病</h4>
							<p class="modal-symptoms-flex-txt">
							悪いところがあるようには<br>みえないんですか・・。</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./arthritis/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">関節疾患</h4>
							<p class="modal-symptoms-flex-txt">変形性関節症と<br>診断されました</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal07">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">尿の色が薄くなったり<br>量が増えた<br>水をいっぱい飲んでいる</h3>
			<img class="fig07" src="<?php echo get_template_directory_uri()?>/images/po03/fig07.png">
		</div>
		<div>
			<p class="modal-box-p">
			おしっこの色や量は、身体の調子を表すバロメーター。いち早く変化に気付いて
			あげることが、病気の早期発見の第一歩。<br>
			おしっこの色、量、回数などが、「いつもと違う」と感じたら、すぐ動物病院へ。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./diabetic/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">糖尿病</h4>
							<p class="modal-symptoms-flex-txt">
							水を飲む量や<br>尿の回数や量は<br>変わりませんか？</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./renal/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">腎臓病</h4>
							<p class="modal-symptoms-flex-txt">
							悪いところがあるようには<br>みえないんですが・・。</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./hepatic/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">肝臓病</h4>
							<p class="modal-symptoms-flex-txt">肝臓病は症状が<br>現れにくい病気です。</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal08">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">尿の色が濃くなる<br>量が減るトイレの回数が増える<br>トイレの後に痛がる</h3>
			<img class="fig08" src="<?php echo get_template_directory_uri()?>/images/po03/fig08.png">
		</div>
		<div>
			<p class="modal-box-p">
			おしっこの色や量は、身体の調子を表すバロメーター。<br>
			毎日一緒に暮らしているからこそ気付いてあげたいポイントです。おしっこの色
			、量、回数、おしっこをするときの仕草などが、「いつもと違う」と思ったら、
			すぐ動物病院へ。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./urinary/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">下部尿路疾患</h4>
							<p class="modal-symptoms-flex-txt">トイレの回数が多いと<br>気になっていたら・・・
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal09">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">軟便が続いたり<br>下痢をすることがある</h3>
			<img class="fig09" src="<?php echo get_template_directory_uri()?>/images/po03/fig09.png">
		</div>
		<div>
			<p class="modal-box-p">
			便の状態は、身体の調子を表すバロメーター。<br>
			急な下痢はすぐ動物病院へ。日頃から下痢が続く場合は、単なる体質ではなく、
			食べ物に原因があるのかも。気になったら動物病院で相談を。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./constipation/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">下痢(便秘)</h4>
							<p class="modal-symptoms-flex-txt">便の異常はさまざまな<br>原因が考えられます。
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./food_allergy/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">食物アレルギー</h4>
							<p class="modal-symptoms-flex-txt">最近、ものすごく<br>かゆがるんです。</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./convalescence/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">高栄養要求時</h4>
							<p class="modal-symptoms-flex-txt">食事をたくさんあげれば<br>いいんでしょうか？
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal10">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">毛づやが悪い<br>皮膚が荒れている</h3>
			<img class="fig10" src="<?php echo get_template_directory_uri()?>/images/po03/fig10.png">
		</div>
		<div>
			<p class="modal-box-p">
			人も食生活が乱れると肌が荒れるのと同じように、犬と猫の栄
			養状態も毛づやに表れるもの。その他にもアレルギー性皮膚炎などの皮膚に関わ
			る病気もたくさんあります。毛や皮膚の状態が変化したと思ったら、動物病院に
			相談を。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./skin/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">皮膚疾患</h4>
							<p class="modal-symptoms-flex-txt">最近の食事に<br>変化はありますか？</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal11">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">最近、からだを<br>かゆがるようになった</h3>
			<img class="fig11" src="<?php echo get_template_directory_uri()?>/images/po03/fig11.png">
		</div>
		<div>
			<p class="modal-box-p">
			かゆみの原因は、ノミ・ダニなどの寄生虫、細菌、アレルギーなど様々です。も
			ちろん原因により治療も異なります。かゆみに気付いたら、動物病院へ。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./food_allergy/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">食物アレルギー</h4>
							<p class="modal-symptoms-flex-txt">最近、ものすごく<br>かゆがるんです。</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
			<div class="modal-symptoms-flex-items">
				<a href="./skin/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">皮膚疾患</h4>
							<p class="modal-symptoms-flex-txt">最近の食事に<br>変化はありますか？</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal12">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-txt-box">
		<div>
			<h3 class="modal-box-h3">避妊・去勢手術をしてから<br>食欲が増した</h3>
			<img class="fig12" src="<?php echo get_template_directory_uri()?>/images/po03/fig12.png">
		</div>
		<div>
			<p class="modal-box-p">
			避妊・去勢手術を受けることによって、性ホルモンに関連する様々な病気を予防
			したり、問題行動を軽減することができます。しかしホルモンバランスの変化に
			よって、犬と猫は太りやすくなりますので、避妊・去勢手術後
			はカロリー制限をはじめとした食事管理に気をつけましょう。
			</p>
		</div>
		<div class="modal-syptoms-flex-box">
			<div class="modal-symptoms-flex-items">
				<a href="./obesity/" class="modal-symptoms-flex-btn-box">
					<div class="modal-symptoms-flex-items-bdr">
						<div class="modal-symptoms-flex-txt-box">
							<h4 class="modal-symptoms-flex-h4">肥満</h4>
							<p class="modal-symptoms-flex-txt">1日のおやつの量は<br>どのくらいですか？
							</p>
						</div>
						<div><button class="rc-btn rc-btn--one">もっと詳しく知る</button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
 */?>

<?php /*
 */?>

<?php
 the_content();
?>
		</article>
    </main>
  </div>
</div>
<div class="floating-banner">
    <a target="_blank" rel="noopener" href="<?php echo home_url('/search_hospitals.php'); ?>">
        <picture>
            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/images/po03/bnr_search_hosp_sp.png">
            <img src="<?php echo get_template_directory_uri()?>/images/po03/bnr_search_hosp.png" alt="動物病院を検索するバナー">
        </picture>
    </a>
</div>
<?php get_footer(); ?>
