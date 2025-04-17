<?php get_header(); ?>
<div id="content" class="news">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php
							//the_archive_title( '<h2 class="page-title">', '</h2>' );
							//the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
      <article class="cf bottom_sidebar">
        <div class="single_content">
												<?php //if (have_posts()) : ?>
<?php //while (have_posts()) : the_post(); ?>
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

								get_template_part( 'post-formats/format-faqlist', get_post_format());
?>

						<?php //endwhile; ?>
						<?php //endif; ?>
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

