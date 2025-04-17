
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
<h2>よくある質問</h2>
<?php //get_search_form(); ?>
<?php
//var_dump($args);
if (array_key_exists('prepage',$args) === true) {
	$prepage = $args['prepage']; 
} else {
	$prepage = 1; 
}
	//if (!empty($_POST["prepage"])){ $prepage = $_POST["prepage"];} else{ $prepage = 10; }
	//setcookie("prepage", $prepage);
//if (!isset($prepage)) { $prepage = 10; }
$paged = (int) get_query_var('paged');
$tmp = '<article class="post_box">';
$tmp .= '<div class="faq_cate">会員について</div>';
$categories = get_categories('hide_empty=1');
/* */
$orderby = 'post_date';
$order = 'DESC';
$paged = get_query_var('paged') ?: 1;

$args = array(
	'post_type' => 'faq',
	//'posts_per_page' => $prepage,
	//'posts_per_page' => 2,
	'tax_query' => [
        [
					'taxonomy' => 'custom_cat', 
					'field' => 'slug',
					'terms' => 'members',
         ]
    ],	
	'post_status' => 'publish',
	'paged' => $paged,
	'order' => $orderby,
	'orderby' => $order,
);

$wp_query = new WP_Query( $args );
//var_dump($wp_query);
$i=0;
if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
//$category = get_the_category();
//echo var_dump($category);
  //$cat_id   = $category[0]->cat_ID;
  //$cat_name = $category[0]->cat_name;
	//$cat_slug = $category[0]->category_nicename;
	$i++;
?>
<?php
	$faq_q =  get_field('faq_q', get_the_ID(), false);
	$faq_a =  nl2br(get_field('faq_a', get_the_ID(), false));
	$tmp .= '<dl class="post_lists">';
	$tmp .= '<dt>'. $faq_q .'</dt>';
	$tmp .= '<dd>'. $faq_a .'</dd></dl>';
endwhile;endif;
//               endforeach;
$tmp .= '</article>';
if($i!=0){
  echo $tmp;
}
//
//
$tmp = '<article class="post_box">';
$tmp .= '<div class="faq_cate">サービスについて</div>';
$categories = get_categories('hide_empty=1');
/* */
$orderby = 'post_date';
$order = 'DESC';
$paged = get_query_var('paged') ?: 1;

$args = array(
	'post_type' => 'faq',
	//'posts_per_page' => $prepage,
	//'posts_per_page' => 2,
	'tax_query' => [
        [
					'taxonomy' => 'custom_cat', 
					'field' => 'slug',
					'terms' => 'service',
         ]
    ],	
	'post_status' => 'publish',
	'paged' => $paged,
	'order' => $orderby,
	'orderby' => $order,
);

$wp_query = new WP_Query( $args );
//var_dump($wp_query);
$i=0;
if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
//$category = get_the_category();
//echo var_dump($category);
  //$cat_id   = $category[0]->cat_ID;
  //$cat_name = $category[0]->cat_name;
	//$cat_slug = $category[0]->category_nicename;
	$i++;
?>
<?php
	$faq_q =  get_field('faq_q', get_the_ID(), false);
	$faq_a =  nl2br(get_field('faq_a', get_the_ID(), false));
	$tmp .= '<dl class="post_lists">';
	$tmp .= '<dt>'. $faq_q .'</dt>';
	$tmp .= '<dd>'. $faq_a .'</dd></dl>';
endwhile;endif;
//               endforeach;
$tmp .= '</article>';
if($i!=0){
  echo $tmp;
}
//
//
$tmp = '<article class="post_box">';
$tmp .= '<div class="faq_cate">公式・認定オンラインストアでの購入について</div>';
$categories = get_categories('hide_empty=1');
/* */
$orderby = 'post_date';
$order = 'DESC';
$paged = get_query_var('paged') ?: 1;

$args = array(
	'post_type' => 'faq',
	//'posts_per_page' => $prepage,
	//'posts_per_page' => 2,
	'tax_query' => [
        [
					'taxonomy' => 'custom_cat', 
					'field' => 'slug',
					'terms' => 'onlinestore',
         ]
    ],	
	'post_status' => 'publish',
	'paged' => $paged,
	'order' => $orderby,
	'orderby' => $order,
);

$wp_query = new WP_Query( $args );
//var_dump($wp_query);
$i=0;
if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
//$category = get_the_category();
//echo var_dump($category);
  //$cat_id   = $category[0]->cat_ID;
  //$cat_name = $category[0]->cat_name;
	//$cat_slug = $category[0]->category_nicename;
	$i++;
?>
<?php
	$faq_q =  get_field('faq_q', get_the_ID(), false);
	$faq_a =  nl2br(get_field('faq_a', get_the_ID(), false));
	$tmp .= '<dl class="post_lists">';
	$tmp .= '<dt>'. $faq_q .'</dt>';
	$tmp .= '<dd>'. $faq_a .'</dd></dl>';
endwhile;endif;
//               endforeach;
$tmp .= '</article>';
if($i!=0){
  echo $tmp;
}
//
//
$tmp = '<article class="post_box">';
$tmp .= '<div class="faq_cate">フードについて</div>';
$categories = get_categories('hide_empty=1');
/* */
$orderby = 'post_date';
$order = 'DESC';
$paged = get_query_var('paged') ?: 1;

$args = array(
	'post_type' => 'faq',
	//'posts_per_page' => $prepage,
	//'posts_per_page' => 2,
	'tax_query' => [
        [
					'taxonomy' => 'custom_cat', 
					'field' => 'slug',
					'terms' => 'foods',
         ]
    ],	
	'post_status' => 'publish',
	'paged' => $paged,
	'order' => $orderby,
	'orderby' => $order,
);

$wp_query = new WP_Query( $args );
//var_dump($wp_query);
$i=0;
if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
//$category = get_the_category();
//echo var_dump($category);
  //$cat_id   = $category[0]->cat_ID;
  //$cat_name = $category[0]->cat_name;
	//$cat_slug = $category[0]->category_nicename;
	$i++;
?>
<?php
	$faq_q =  get_field('faq_q', get_the_ID(), false);
	$faq_a =  nl2br(get_field('faq_a', get_the_ID(), false));
	$tmp .= '<dl class="post_lists">';
	$tmp .= '<dt>'. $faq_q .'</dt>';
	$tmp .= '<dd>'. $faq_a .'</dd></dl>';
endwhile;endif;
//               endforeach;
$tmp .= '</article>';
if($i!=0){
  echo $tmp;
}

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
        'prev_text'     => __( '…'), // 「前へ」リンクのテキスト
				'next_text'     => __( '…'), // 「次へ」リンクのテキスト
        'type'          => 'plain', // 戻り値の指定 (plain/list)
    )
	);
?>
</section> <?php // end article section ?>
</div>
                <!--<footer class="article-footer">

                  <?php //printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                  <?php //the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer>--> <?php // end article footer ?>

                <?php //comments_template(); ?>

</article> <?php // end article ?>
