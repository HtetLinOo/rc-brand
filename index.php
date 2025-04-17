<?php get_header(); ?>
<div id="content">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all cf" role="main">
		<article <?php post_class( 'cf' ); ?>>
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'post-formats/format-infolist', get_post_format() );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'post-formats/format', get_post_format() );

		}
		?>
    </article>
    </main>
  </div>
</div>

<?php get_footer('top'); ?>

