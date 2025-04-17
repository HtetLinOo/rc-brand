<?php
/*
 Template Name: Page-contact
 *
*/
?>
<?php get_header('contact'); ?>
<div id="content" class="contact">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
      <article class="cf bottom_sidebar">
        <div class="single_content">

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
								get_template_part( 'post-formats/format-2nd_contact', get_post_format() );
							?>
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
