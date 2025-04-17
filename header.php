<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <?php // force Internet Explorer to use the latest rendering engine available ?>
				<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?php wp_title('|', true , 'right'); ?><?php wp_title(''); ?>ン</title>
<meta name="description" content="ロイヤルカナン食事療法食VETSヘルスステーションは、ロイヤルカナンの食事療法食をご購入いただいたお客様が愛犬・愛猫の健康管理ができるポータルサイトです。">

<?php global $one_trust_cookie_header; echo $one_trust_cookie_header; ?>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
				<meta name="viewport" content="width=device-width, initial-scale=1"/>
				<meta name="format-detection" content="telephone=no">
        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
				<link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php /*
				<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;400;600&display=swap" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://use.typekit.net/ypk1mtu.css">-->
        <!--[if IE]>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				<![endif]-->
*/?>
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>
        <?php // drop Google Analytics Here ?>
				<?php // end analytics ?>
        <link rel="stylesheet" id="bones-stylesheet-css" href="<?php echo get_template_directory_uri(); ?>/common/css/font-awesome.css" type="text/css" media="all">  
        <link rel="stylesheet" id="bones-stylesheet-css" href="<?php echo get_template_directory_uri(); ?>/common/slick/slick_base.css" type="text/css" media="all">  
        <link rel="stylesheet" id="bones-stylesheet-css" href="<?php echo get_template_directory_uri(); ?>/common/slick/slick_mts.css" type="text/css" media="all">  
				<link rel="stylesheet" id="bones-stylesheet-css" href="<?php echo get_template_directory_uri(); ?>/common/slick/slick-theme_mts.css" type="text/css" media="all">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KB7MH3B3');</script>
<!-- End Google Tag Manager -->
<script src="https://cdn-blocks.karte.io/73dd593446b3c1341b022cd9e39f2229/builder.js"></script>
    </head>
		<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KB7MH3B3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 
    <div id="container">
    <header class="header">
<?php // PC ?>
<?php
$topaddclass = "toppage";	
if (is_front_page()) {
$topaddclass = "";
}?>
<?php // PC END ?>
<?php // menu ?>
<div id="inner-header" class="wrap cf">
        <div class="g_menu">
          <i></i><i></i><i></i>
        </div>
</div>
<?php //SP END ?>
<?php if (is_front_page()) { ?>
<?php
 $logo = get_template_directory_uri() . '/images/royalcanin/logo.png';
 $logosp = get_template_directory_uri() . '/images/royalcanin/logo_sp.png';
 $logo2 = get_template_directory_uri() . '/images/royalcanin/logo_vets_yoko.png';
?>
<div class="header_logo">
					<figure>
							<source media="(max-width:768px)" srcset="<?php echo $logosp ?>" >
							<img src="<?php echo $logo ?>" alt="ROYAL CANIN">
					</figure>
<img class="logo2" src="<?php echo $logo2 ?>" alt="ロイヤルカナン食事療法食 VETSヘルスステーション">
</div>
<?php } else { ?>
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

<?php } ?>

</header>
<?php get_template_part( 'post-formats/format-menu', get_post_format() ); ?>


