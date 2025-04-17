<?php get_header(); ?>
<div id="content">
  <div id="inner-content" class="wrap cf btop">
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php
							//the_archive_title( '<h2 class="page-title">', '</h2>' );
							//the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
<?php
//$en = get_field('en');
$en = "";
	//$kv_img_pc = get_field('headerimg_pc');
	//$kv_img_sp = get_field('headerimg_sp');
	//$kv_img_pc_pic = $kv_img_pc?wp_get_attachment_url($kv_img_pc):get_template_directory_uri().'/images/common/head_404.jpg';
	//$kv_img_sp_pic = $kv_img_sp?wp_get_attachment_url($kv_img_sp):get_template_directory_uri().'/images/common/head_404.jpg';
?>

<div class="titlecap_bg">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')){ bcn_display(); }?>
</div>
<h2 class="h2title"><span><?= $en ?></span>ページが見つかりませんでした。</h2>
</div>

      <article class="cf bottom_sidebar">
        <div class="single_content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
								//get_template_part( 'post-formats/format', get_post_format() );
							?>
						<?php endwhile; ?>
						<?php endif; ?>
				</div>
<!--
        <div class="sidebar_right_width">
					<?php //get_sidebar(); ?>
				</div>
-->
      </article>
    </main>
  </div>
</div>
<?php get_footer(); ?>
