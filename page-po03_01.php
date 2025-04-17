<?php
/*
Template Name: Page PO03Pages
*
*/
?>
<?php get_header(); ?>
<div id="content" class="top">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all cf" role="main">
		<article <?php post_class( 'cf' ); ?>>
						<!--box01-->
<?php	//$modal =  get_field('modal', get_the_ID(), false);
//echo $modal;
//echo do_shortcode('[MODAL mwid="modal01" title="排便がつらそうで硬い便をしている"]');

?>
<!--//box01-->

			<section id="po03pages" class="entry-content cf" >
			 <div class="section_po03pages">
				<?php
 the_content();
?>
			 </div>
			</section>

			<section id="content_menu" class="entry-content cf" >

			 <div class="section_content_menu_po03">
        <div class="menus">
<?php /*
					<div class="menu">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/figure01.png" class="figure01"></div>
						<p>ロイヤルカナンは、お悩み解決に<br>自動ガイドでご協力します！</p>
						<a href="" class="menu_link_onayami">お悩みガイド</a>
          </div>
*/?>
					<div class="menu">
						<div class="iconbig"><img src="<?php echo get_template_directory_uri()?>/images/royalcanin/figure02.png" class="figure02"></div>
						<p>知識を深め、<br>ペットの健康を守りましょう！</p>
						<a href="<?php echo home_url('/health-and-foods/') ?>" class="menu_link_inuneko">犬と猫の病気と食事</a>
					</div>
				</div>
			 </div>
			</section>

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
