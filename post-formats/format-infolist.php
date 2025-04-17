
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
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="wrap_single wrap_single_news">
  <section class="entry-content cf postfont" itemprop="articleBody">
<?php
if (array_key_exists('year_month',$args) === true) {
	$year_month = explode(",",$args['year_month']);
} else {
	$year_month = '0';
}
//var_dump($year_month);
?>
<?php
//var_dump($args);
if (array_key_exists('prepage',$args) === true) {
	$prepage = $args['prepage']; 
} else {
	$prepage = 1; 
}

//$paged = get_query_var('paged') ?: 1;
	//if (!empty($_POST["prepage"])){ $prepage = $_POST["prepage"];} else{ $prepage = 10; }
	//setcookie("prepage", $prepage);
//if (!isset($prepage)) { $prepage = 10; }
$tmp = '<ul class="active">';
		$args = array(
			'post_type' => 'post',
			//'category__not_in' => array( 16 ),
			//'category_name' => 'Information',
			//'posts_per_page' => -1,
			//'paged' => $prepage,
			'post_status' => 'publish',
			'order'=>'DESC',
			'orderby'=>'post_date',
		);
$wp_query2 = new WP_Query( $args );
if ($wp_query2->have_posts()) :
while ($wp_query2->have_posts()) : $wp_query2->the_post();
?>
<?php
$descript = get_post_meta(get_the_id()  , 'buy_discript1' ,true);
$url = get_permalink( get_the_id() );
$mod_date = get_the_time('Y/n/d');
$image_url = wp_get_attachment_url(get_post_meta(get_the_id() ,"file_upload1",true));
$cat = get_the_category();
$cat = $cat[0];
$slug = $cat->category_nicename;
$name = $cat->cat_name;
$tmp .= '<li class="active"><a href="'.$url.'">';
$tmp .= '<span class="'. $slug . ' cate">'. strtoupper($name) .'</span>';
$tmp .= '<span class="date">'. $mod_date .'</span><br>';
$tmp .= '<span class="read">'. get_the_title() .'</span>';
$tmp .= '</a></li>';
endwhile;endif;
$tmp .= '</ul>';
echo $tmp;

?>
<?php
$css1 = "";
$css2 = "";
$css3 = "";
if($prepage == 10 ){$css1 = "fbold";}
if($prepage == 20 ){$css2 = "fbold";}
if($prepage == 50 ){$css3 = "fbold";}
?>
<?php
/*
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
 */
the_posts_pagination(
    array(
        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
				'end_size'      => 1,
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __( '前'), // 「前へ」リンクのテキスト
				'next_text'     => __( '次'), // 「次へ」リンクのテキスト
				'type'          => 'plain', // 戻り値の指定 (plain/list)
				'format'    => '?paged=%#%',
			)
);//pagination();
?>
</section> <?php // end article section ?>
</div>
                <!--<footer class="article-footer">

                  <?php //printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                  <?php //the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer>--> <?php // end article footer ?>

                <?php //comments_template(); ?>

</article> <?php // end article ?>
