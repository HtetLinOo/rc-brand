<nav id="nav_box">
<?php
 $logo = get_template_directory_uri() . '/images/royalcanin/logo_rc.png';
 $logosp = get_template_directory_uri() . '/images/royalcanin/logo_sp.png';
 $logo2 = get_template_directory_uri() . '/images/royalcanin/logo_vets_yoko.png';
?>
<div class="header_logo_s">
<a href="/">
<img class="logo2" src="<?php echo $logo2 ?>" alt="ロイヤルカナン食事療法食 VETSヘルスステーション">
</a>
</div>
<div class="menu_wrap">
<?php /*
<div class="leftmenu">
 <ul id="menu-x" class="nav__link-box noactive_menu">
<li class="ficon01"><a tabindex="-1">マイページ<span class="locked">登録<span class="coming">coming soon</span></span></a></li>
<li class="ficon02"><a tabindex="-1">ヘルス<br class="sp">チェック<span class="locked">登録<span class="coming">coming soon</span></span></a></li>
<li class="ficon03"><a tabindex="-1">フード<br class="sp">購入履歴<span class="locked">登録<span class="coming">coming soon</span></span></a></li>
<li class="ficon04"><a tabindex="-1">あなたの<br class="sp">ペット情報<span class="locked">登録<span class="coming">coming soon</span></span></a></li>
<li class="ficon05"><a tabindex="-1">あなたの<br class="sp">かかりつけ病院<span class="locked">登録<span class="coming">coming soon</span></span></a></li>
<li class="ficon06"><a tabindex="-1">病院からの<br class="sp">お知らせ<span class="locked">登録<span class="coming">coming soon</span></span></a></li>
</ul>
</div>
 */?>
<div class="rightmenu">
<?php
wp_reset_query();
wp_nav_menu(array(
        'container' => '',
        'container_class' => '',
        'menu' => __( 'Content Links', 'bonestheme' ),
        'menu_class' => 'nav__link-box',
        'theme_location' => 'Sp_Global_navi',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'depth' => 0,
        'fallback_cb' => 'bones_footer_links_fallback'
			)); ?>
</div>
</div>
</nav>

