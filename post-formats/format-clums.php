<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
<div class="wrap_single_3rd wrap_single_2nd">
								<section class="entry-content cf postfont" itemprop="articleBody">
<?php
	$category_name = get_the_archive_title();
?>
		<h2>空調関連コラム一覧</h2>
<?php /*
<!--
<ul class="category_search_list">
  <li class="category_search_title">絞り込み</li>
  <?php 
  $cats = get_categories();
  foreach($cats as $cat) {
    echo '<li><a href="' . get_category_link($cat->term_id) . '" class="catlist2 cat_'.$cat->category_nicename.'">' . $cat->name. '</a></li>';
  }
  ?>
</ul>
-->
 */?>
<?php
	$term = get_queried_object();
	$cat_slug = $term->slug;
?>
<article class="post_box mt30">
<?php if (have_posts()) : while (have_posts()) : the_post();
?>
<dl class="post_lists2"><dt><?php the_post_thumbnail('medium');?></dt>
<dd><div class="title_wrap"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><?php echo get_the_time(get_option('date_format'));?></div><?php echo get_the_excerpt();?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">…more ></a></dd></dl>
<?php endwhile; ?>
  <?php //bones_page_navi(); ?>
<?php endif; ?>
</article>
<?php
		//get_template_part( 'post-formats/format-infolist', get_post_format() );
		//get_template_part( 'post-formats/format-infolist_dk', get_post_format() );
		//get_template_part( 'parts/loop', 'archive-news' );
//
//$term_data = get_term_by('slug', $slug, 'wa_faq_categry');
//$term_id = $term_data->term_id;

                    //the_content();
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );

the_posts_pagination(
    array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __( '前のページへ'), // 「前へ」リンクのテキスト
				'next_text'     => __( '次のページへ'), // 「次へ」リンクのテキスト
        'type'          => 'plain', // 戻り値の指定 (plain/list)
    )
	);
	// 現在のページ番号を取得 & 全ページ数を取得
$current_pgae = get_query_var( 'paged' ); 
$current_pgae = $current_pgae == 0 ? '1' : $current_pgae;
$max_pages = $wp_query->max_num_pages ;
?>
<nav class="navigation pagination sp" aria-label="投稿">
		<h2 class="screen-reader-text">投稿ナビゲーション</h2>
		<div class="nav-links">
<div class="nav-previous"><?php echo get_previous_posts_link( '前のページへ' );?></div>
<span aria-current="page" class="page-numbers current"><?php echo $current_pgae ?>/<?php echo $max_pages ?></span>
<div class="nav-next"><?php echo get_next_posts_link( '次のページへ' );?></div></div>
</nav>
<?php
										/*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     *
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
                </section> <?php // end article section ?>
</div>
                <!--<footer class="article-footer">

                  <?php //printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                  <?php //the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer>--> <?php // end article footer ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>
