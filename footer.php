<!--ここから全ページ共通 -->
<footer>
    <div id="inquiry">
      <p><strong>お問い合わせ先</strong></p>
      <p class="tel">0120-426-861</p>
      <p>受付時間：月曜〜金曜　9:30〜16:00</p>
      <p>土曜・日曜・祝日・弊社指定定休日を除く</p>
    <div id="caption">
      <p class="footer_caption">*Please use your browser’s translation feature to check the explanation.</p>
		</div>
</div>
<div id="pageTop" class="gototop"><a href="javascript:void(0)" >トップに戻る</a></div>
<?php /* <div class="cookie_btn"><a href="">Cookie設定</a></div> */?>
<div class="footer_menu">
<?php // PC ?>
<div class="main_footer pc">
	 <div class="footer_wrap">
<div class="center_logo">
		<nav id="nav">
<?php wp_nav_menu(array(
	'container' => '',                              // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	'container_class' => 'header-links cf',         // class of container (should you choose to use it)
	'menu' => __( 'Mega Content Links', 'bonestheme' ),   // nav name
	'menu_class' => 'nav__link-box',               // adding custom nav class
	'theme_location' => 'Pc_Footer_navi',      // メニュー名
	'before' => '',                                 // before the menu
	'after' => '',                                  // after the menu
	'link_before' => '',                            // before each link
	'link_after' => '',                             // after each link
	'depth' => 0,                                   // limit the depth of the nav
)); ?>
		</nav>
				</div>
<div class="copylight_area">
<div class="footer_cap">当社は、マースインコーポレイテッド（Mars, Incorporated）の子会社であり、当社が取得した個人情報は、「マースのプライバシーに関する声明」に従って取り扱われます。</div>
  <div class="copylight">Copyright ©2024 Royal Canin SAS. All rights reserved. An Affiliate of Mars, Incorporated.</div>
</div>

				</div>
			</div>
</div>

<?php // PC END ?>
<?php // SP ?>
<div class="footer_menu">
<div class="main_footer sp">
	 <div class="footer_wrap">
<div class="center_logo">
		<nav id="nav">
<?php wp_nav_menu(array(
	'container' => '',                              // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	'container_class' => 'header-links cf',         // class of container (should you choose to use it)
	'menu' => __( 'Mega Content Links', 'bonestheme' ),   // nav name
	'menu_class' => 'nav__link-box',               // adding custom nav class
	'theme_location' => 'Sp_Footer_navi',      // メニュー名
	'before' => '',                                 // before the menu
	'after' => '',                                  // after the menu
	'link_before' => '',                            // before each link
	'link_after' => '',                             // after each link
	'depth' => 0,                                   // limit the depth of the nav
)); ?>
		</nav>
				</div>
<div class="copylight_area">
<div class="footer_cap">当社は、マースインコーポレイテッド（Mars, Incorporated）の子会社であり、当社が取得した個人情報は、「マースのプライバシーに関する声明」に従って取り扱われます。</div>
  <div class="copylight">Copyright ©2024 Royal Canin SAS. All rights reserved. An Affiliate of Mars, Incorporated.</div>
</div>

				</div>
			</div>
<?php //SP END ?>
<?php global $one_trust_cookie_footer; echo $one_trust_cookie_footer; ?>
</div>
<?php /*
<a class="totop sp" id="pageTop2">totop</a>
 */?>
</footer>
    <!--<div class="pageTop" id="pageTop"><a href="#">ページTOPへ</a></div>-->
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
<?php /*
	<script src="<?php echo get_template_directory_uri(); ?>/common/slick/slick.min.js"></script>
 */ ?>
</div>
		<script src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/common/js/remodal.min.js"></script>
	</body>
</html> <!-- end of site. what a ride! -->
