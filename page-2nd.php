<?php
/*
 Template Name: Page-2nd
 *
*/
?>

<?php get_header(); ?>
<div id="content">
  <div id="inner-content" class="wrap cf btop">
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php
							//the_archive_title( '<h2 class="page-title">', '</h2>' );
							//the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
<?php
	$en = get_field('en');
	$kv_img_pc = get_field('headerimg_pc');
	$kv_img_sp = get_field('headerimg_sp');
	$kv_img_pc_pic = $kv_img_pc?wp_get_attachment_url($kv_img_pc):get_template_directory_uri().'/images/common/title_img.jpg';
	$kv_img_sp_pic = $kv_img_sp?wp_get_attachment_url($kv_img_sp):get_template_directory_uri().'/images/common/title_img_sp.jpg';
?>
<style>
.titlecap_bg{
background: url("<?=$kv_img_pc_pic?>") center left no-repeat;
background-size: cover;
position:relative;
}
.titlecap_bg:after{
content:"";
display:block;
width:100%;
height:100%;
background:rgba(0,0,0,.2);
background: url("<?=get_template_directory_uri()?>/images/common/wave_new.png") bottom left repeat-x;
background-size:1540px;
position:absolute;
top:0;
left:0;
}
@media screen and (max-width:768px){
.titlecap_bg{
background: url("<?=$kv_img_sp_pic?>") center center no-repeat;
background-size:cover;
}
.titlecap_bg:after{
background-size:100%;
}
}
</style>
<div class="titlecap_bg">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')){ bcn_display(); }?>
</div>
<h2 class="h2title"><span><?= $en ?></span><?php the_title();?></h2>
</div>

      <article class="cf bottom_sidebar">
        <div class="single_content">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format-2nd', get_post_format() );
							?>
						<?php endwhile; ?>
						<?php else : ?>
							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<!--<footer class="article-footer">
											<p><?php //_e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>-->
							</article>
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
<?php get_footer('cta'); ?>
