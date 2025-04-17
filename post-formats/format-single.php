
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
<div class="wrap_single_2nd">
<div class="header_top"><a href="/news">一覧</a><h1>ロイヤルカナンからのお知らせ</h1></div>
<section class="postfont section_single" itemprop="articleBody">
<div class="single_wrap">
<?php
$categories = get_the_category();
if ( $categories ) {
	echo '<span class="cate '.$categories[0]->slug.'">'.$categories[0]->name.'</span>';
	//echo var_dump($categories[0]);
}
?>
<p class="date"><?php
 echo get_the_time('Y/n/d');
?></p><br>
<h2><?php the_title();?></h2>
<div class="icach_img">
<?php the_post_thumbnail("full");?>

</div>
<div class="scw">
<?php
 the_content();
?>
</div>
</div>
</section> <?php // end article section ?>
<div class="single_return">
<?php previous_post_link('%link', '前へ'); ?>
<a href="/news" class="lists">一覧</a>
<?php next_post_link('%link', '次へ'); ?>
</div>
</div>
</article> 

