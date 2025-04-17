<?php //子テーマ用関数
//サムネイル用画像の切り抜き
add_image_size( 'square-thumb', 217, 217, true );

if (function_exists('register_sidebar')) {
register_sidebar(array(
 'name' => 'footer_left',
 'id' => 'footer_left',
 'description' => 'footer_left',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '',
 'after_title' => ''
 ));
}
//スマホ表示分岐
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'iPad', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//
add_filter('widget_text', 'do_shortcode' );
//
function shortcode_url() {
    return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');
//
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');
function ew_scripts_styles() {
            wp_enqueue_style( 'common-pc', get_template_directory_uri() . '/common/css/common.css', array() );  
            wp_enqueue_style( 'nemu-pc', get_template_directory_uri() . '/common/css/menu.css', array() );  
            wp_enqueue_style( 'index-pc', get_template_directory_uri() . '/common/css/index.css', array() );
						wp_enqueue_style( 'po03-pc', get_template_directory_uri() . '/common/css/po03.css', array() );
						wp_enqueue_style( 'common-style', get_template_directory_uri() . '/style.css', array() ); 
						wp_enqueue_style( 'remodal', get_template_directory_uri() . '/common/css/remodal.css', array() ); 
						wp_enqueue_style( 'brand', get_template_directory_uri() . '/common/css/brand.css', array() ); 
						wp_enqueue_style( 'remodal-theme', get_template_directory_uri() . '/common/css/remodal-default-theme.css', array() ); 
}
add_action( 'wp_enqueue_scripts', 'ew_scripts_styles' );
/*srcsetのショートコード展開*/
function my_wp_kses_allowed_html( $tags, $context ) {
	$tags['source']['srcset'] = true;
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );
/**/

function categry_init() {
register_taxonomy(
'wa_faq_categry',// 新規カスタムタクソノミー名
'faqs',// 新規カスタムタクソノミーを反映させる投稿タイプの定義名
array(
'hierarchical' => true,
'update_count_callback' => '_update_post_term_count',
'label' => 'カテゴリ',
'singular_label' => 'wa_faq_categry',
'public' => true,
'show_ui' => true
)
);
}
//add_action( 'init', 'categry_init' );
/*
 * modal window short code
 * */
function modal_window($atts) {
extract(shortcode_atts(array(
		'title' => '',
		'mwid' => '',
		'number' => '',
		'orderby' => 'post_date',
		'order' => 'DESC',
	), $atts));
$tmp = '<div class="remodal" data-remodal-id="'. $mwid .'">
<button data-remodal-action="close" class="remodal-close"></button>
<div class="inframe01">';
$args = array(
	'post_type' => 'modal',
	'name' => $title,
	'posts_per_page' => 1,
	'post_status' => 'publish',
	'order' => $orderby,
	'orderby' => $order,
);

$wp_query = new WP_Query( $args );
//var_dump($wp_query);
if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
?>
<?php
$tmp .= do_shortcode(get_the_content());
endwhile;endif;
$tmp .= '</div></div>';
$tmp .= '<div class="modaal_btn"><a href="#'.$mwid.'" rel="noopener">'.$title.'</a></div>';
wp_reset_query();
return $tmp;

}
add_shortcode('MODAL', 'modal_window');

/**/
function post_faq_list($atts) {
extract(shortcode_atts(array(
		'title' => '',
		'slug' => '',
		'number' => '',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'hide_empty' => false,
		'include' => false,
		'not_in' => NULL,
		'in' => NULL,
		'taxonomy' => 'wa_faq_categry',
		'field'    => '',
		'terms'    => 'terms',
	), $atts));
//
//$term_data = get_term_by('slug', $slug, 'wa_faq_categry');
//$term_id = $term_data->term_id;
//
$paged = (int) get_query_var('paged');
$tmp = '<article class="faqs_box">';
$args = array(
	'post_type' => 'faqs',
	'posts_per_page' => 99,
	'post_status' => 'publish',
	'order' => $orderby,
	'orderby' => $order,
	'tax_query' => array(
		array(
			'taxonomy' => $taxonomy,
			'field' => 'slug',
			'terms' => $terms,
		),
	),
);
$wp_query = new WP_Query( $args );
//var_dump($wp_query);
$i=0;
if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
$i++;
?>
<?php
//$answer = get_post_meta(get_the_id() ,"答え",true);
$answer = get_the_content();
$tmp .= '<dl><dt><span>Q. '. get_the_title() .'</span></dt>';
$tmp .= '<dd><span>A.</span>'. $answer .'</dd></dl>';
endwhile;endif;
$tmp .= '</article>';
return $tmp;
}
add_shortcode('FAQ_LIST', 'post_faq_list');
/**/
/**/
function post_list($atts) {
extract(shortcode_atts(array(
		'title' => '',
		'slug' => '',
		'number' => '',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'hide_empty' => false,
		'include' => false,
		'not_in' => NULL,
		'in' => NULL,
		'categories' => '',
	), $atts));
//
//$term_data = get_term_by('slug', $slug, 'wa_faq_categry');
//$term_id = $term_data->term_id;
//
$paged = (int) get_query_var('paged');
$tmp = '<article class="post_box">';
$categories = get_categories('hide_empty=1');
//foreach($categories as $category) :
//$cat_id   = $category->cat_ID;
//$cat_name = $category->cat_name;
//$cat_slug = $category->category_nicename;
/* */
	
$paged = get_query_var('paged') ?: 1;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 10,
	'post_status' => 'publish',
	'paged' => $paged,
	'order' => $orderby,
	'orderby' => $order,
	//'cat' => $category->cat_ID,
	'category_name' => $categories,
	//'posts_per_page' => $num,
);
$wp_query = new WP_Query( $args );
//var_dump($wp_query);
$i=0;
if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
$category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
$i++;
?>
<?php
$tmp .= '<dl><dt>'.get_the_date("Y.n.j").'<a href="../category/'.$cat_slug.'">'.$cat_name.'</a></dt>';
$tmp .= '<dd>'. get_the_title() .'</dd></dl>';
endwhile;endif;
//               endforeach;
$tmp .= '</article>';
return $tmp;
}
add_shortcode('POST_LIST', 'post_list');
/**/
function add_thanks_page() {
	$tem ="<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
location = '". get_site_url() . "/thanks/';
}, false );
</script>
";
echo $tem;
}
add_action( 'wp_footer', 'add_thanks_page' );
/*
 * カテゴリタイトル加工
 *
 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    //$title = '検索結果：'.esc_html( get_search_query(false) );
	    $title = esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {

	}
    return $title;
});
/*
 *検索対象限定
 *
 */
/*
function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );
 */
function custom_the_posts_pagination( $template ) {
	$template = '
	<nav class="p-posts-pagination %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="p-posts-navigation__wrap">%3$s</div>
	</nav>';
	return $template;
}
//add_filter( 'navigation_markup_template', 'custom_the_posts_pagination' );
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="prev-link" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="next-link" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );

function adjust_category_paged( $query = []) {
  if (isset($query['name'])
   && $query['name'] === 'page'
   && isset($query['page'])
   && isset($query['category_name'])) {
    $query['paged'] = intval($query['page']); // 念のため整数化しておく
    unset($query['name']);
    unset($query['page']);
  }
  return $query;
}
add_filter('request', 'adjust_category_paged');
//custom_menu
function single_page_custom_menu($atts, $content = null) {
    extract(shortcode_atts(array('menu' => '', 'echo' => true), $atts));
    return wp_nav_menu( array('menu' => $menu, 'echo' => false));
}
add_shortcode("customenu", "single_page_custom_menu");
//bogo 国旗アイコンを削除
add_filter( 'bogo_use_flags','bogo_use_flags_false');
function bogo_use_flags_false(){
 return false;
}
add_filter( 'bogo_language_switcher_links', function ( $links ) {
for ( $i = 0; $i < count( $links ); $i ++ ) {
// 日本語
if ( 'ja' === $links[ $i ]['locale'] ) {
$links[ $i ]['title'] = 'Japanese';
$links[ $i ]['native_name'] = 'JP';
}
// 英語
if ( 'en_US' === $links[ $i ]['locale'] || 'en' === $links[ $i ]['locale'] || 'en_NZ' === $links[ $i ]['locale'] ||'en_CA' === $links[ $i ]['locale'] ||'en_GB' === $links[ $i ]['locale'] ||'en_AU' === $links[ $i ]['locale'] ) {
$links[ $i ]['title'] = ' English ';
$links[ $i ]['native_name'] = ' EN ';
}
}
return $links;
} );
