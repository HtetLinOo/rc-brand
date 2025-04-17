<?php
/* ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
Plugin Name: 31337-pg
Plugin URI: http://e
Author URI: http://enomoto.work/ 
*/  
//if(!defined('Admin_menu')){exit();}
//if(Admin_menu){
// 管理メニューに追加するフック
add_action('admin_menu', 'mt_add_pages');

// 上のフックに対するaction関数
function mt_add_pages() {
    // 新しいトップレベルメニューを追加:
    add_menu_page('管理者設定', '管理者設定', 'administrator', __FILE__, 'mt_toplevel_page');
}
// mt_toplevel_page()は カスタムのトップレベルメニューのコンテンツを表示
function mt_toplevel_page() {
?>
<div class="wrap">
<style type="text/css">
label{display:block;clear:both;}
textarea{width:500px;height:80px;}
textarea.h160{height:160px;}
input{width:500px;}
.red{color:red;}
table tr td{
text-align:center;
border:1px solid #333;
padding:5px 8px;
min-width:500px;
}
table tr:nth-child(2n){
background:#a1a1a1;
}
.submitbtn{
 background:#f00;
 margin: 1rem 0;
 border-radius: 5px;
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffb76b+0,ffa73d+50,ff7c00+51,ff7f04+100;Orange+Gloss */
background: #ffb76b; /* Old browsers */
background: -moz-linear-gradient(top,  #ffb76b 0%, #ffa73d 50%, #ff7c00 51%, #ff7f04 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb76b', endColorstr='#ff7f04',GradientType=0 ); /* IE6-9 */
}
/**/
.admin_btn{
 width:100px;
}
.uploded-thumbnail img{
 width:200px;
}
.two{
 display:flex;
}
.ml15px{
 margin-left:15px;
}
</style>
<br>
<hr />
<h2>【管理者設定】</h2>
<h2>【テーマ開発用サイトモード設定】</h2>
<p>※各モードは同時設定も可能です。(運用中は触らないでください。)</p>
<form id="my-form" method="post" action="" >
<?php wp_nonce_field( 'enomotowork' , 'aqua_init0' ) ?>
<label>【サイト申請モード】<input type="checkbox" name="mode0" value="1" <?php if( get_option('mode0') ){echo 'checked';}?> /></label>
<label>【テストモード】<input type="checkbox" name="mode1" value="1" <?php if( get_option('mode1') ){echo 'checked';}?> /></label>
<label>【メンテナンスモード】<input type="checkbox" name="mode2" value="1" <?php if( get_option('mode2') ){echo 'checked';}?> /></label>
<label>【デバッグモード】<input type="checkbox" name="mode3" value="1" <?php if( get_option('mode3') ){echo 'checked';}?> /></label>
<label>【ソース圧縮モード】<input type="checkbox" name="mode4" value="1" <?php if( get_option('mode4') ){echo 'checked';}?> /></label>
<input type="submit" value="決定" class="submitbtn" class="submitbtn">
</form>
<hr />

<h2>GA4 アナリティクスID</h2>
<form id="my-form" method="post" action="" >
<?php wp_nonce_field( 'enomotowork' , 'aqua_init1' ) ?>
<input type="text" name="anacode_list" value="<?php echo (get_option('anacode_list'));?>" />
<br />
<input type="submit" value="決定" class="submitbtn">
</form>

<hr />

<h2> UA アナリティクスID</h2>
<form id="my-form_ua" method="post" action="" >
<?php wp_nonce_field( 'enomotowork' , 'aqua_init2' ) ?>
<input type="text" name="anacode_list2" value="<?php echo (get_option('anacode_list2'));?>" />
<br />
<input type="submit" value="決定" class="submitbtn">
</form>


<hr />
<h2>【トップキービジュアル】画像設定</h2>
<form id="my-form13" method="post" action="" >
<?php wp_nonce_field( 'enomotowork' , 'aqua_top_banner' ) ?>
<label>【画像PC】</label>
<?php generate_upload_image_tag('aqua_top_banner1', get_option('aqua_top_banner1'), get_option('id_aqua_top_banner1')); ?>

<hr>
<label>【画像SP】</label>
<?php generate_upload_image_tag('aqua_top_banner2', get_option('aqua_top_banner2'), get_option('id_aqua_top_banner2')); ?>
<hr>
<br>
<input type="submit" value="決定" class="submitbtn">
</form>
<?php /*
<hr />
<h2>【トップスライダー】画像設定</h2>
<form id="my-form3" method="post" action="" >
<?php wp_nonce_field( 'enomotowork' , 'aqua_top_slider' ) ?>
<div class="two"><div>
<label>【スライダー画像０１　ＰＣ】</label>
<?php generate_upload_image_tag('aqua_top_sliders1', get_option('aqua_top_sliders1'), get_option('id_aqua_top_sliders1')); ?>
</div><div class="ml15px">
<label>【スライダー画像０１　スマホ】</label>
<?php generate_upload_image_tag('aqua_top_sliders1sp', get_option('aqua_top_sliders1sp'), get_option('id_aqua_top_sliders1sp')); ?>
</div></div>
<span>スライダーリンク URL:</span><input type="text" name="slider_link1" value="<?php echo (get_option('slider_link1'));?>" />
<label>【外部リンク】<input type="checkbox" name="banner1_blank" value="1" <?php if( get_option('banner1_blank') ){echo 'checked';}?> /></label>
<hr><br>
<div class="two"><div>
<label>【スライダー画像０２　ＰＣ】</label>
<?php generate_upload_image_tag('aqua_top_sliders2', get_option('aqua_top_sliders2'), get_option('id_aqua_top_sliders2')); ?>
</div><div class="ml15px">
<label>【スライダー画像０２　スマホ】</label>
<?php generate_upload_image_tag('aqua_top_sliders2sp', get_option('aqua_top_sliders2sp'), get_option('id_aqua_top_sliders2sp')); ?>
</div></div>
<span>スライダーリンク URL:</span><input type="text" name="slider_link2" value="<?php echo (get_option('slider_link2'));?>" />
<label>【外部リンク】<input type="checkbox" name="banner2_blank" value="1" <?php if( get_option('banner2_blank') ){echo 'checked';}?> /></label>
<hr><br>
<div class="two"><div>
<label>【スライダー画像０３　ＰＣ】</label>
<?php generate_upload_image_tag('aqua_top_sliders3', get_option('aqua_top_sliders3'), get_option('id_aqua_top_sliders3')); ?>
</div><div class="ml15px">
<label>【スライダー画像０３　スマホ】</label>
<?php generate_upload_image_tag('aqua_top_sliders3sp', get_option('aqua_top_sliders3sp'), get_option('id_aqua_top_sliders3sp')); ?>
</div></div>
<span>スライダーリンク URL:</span><input type="text" name="slider_link3" value="<?php echo (get_option('slider_link3'));?>" />
<label>【外部リンク】<input type="checkbox" name="banner3_blank" value="1" <?php if( get_option('banner3_blank') ){echo 'checked';}?> /></label>
<hr><br>
<div class="two"><div>
<label>【スライダー画像０４　ＰＣ】</label>
<?php generate_upload_image_tag('aqua_top_sliders4', get_option('aqua_top_sliders4'), get_option('id_aqua_top_sliders4')); ?>
</div><div class="ml15px">
<label>【スライダー画像０４　スマホ】</label>
<?php generate_upload_image_tag('aqua_top_sliders4sp', get_option('aqua_top_sliders4sp'), get_option('id_aqua_top_sliders4sp')); ?>
</div></div>
<span>スライダーリンク URL:</span><input type="text" name="slider_link4" value="<?php echo (get_option('slider_link4'));?>" />
<label>【外部リンク】<input type="checkbox" name="banner4_blank" value="1" <?php if( get_option('banner4_blank') ){echo 'checked';}?> /></label>
<hr><br>
<div class="two"><div>
<label>【スライダー画像０５　ＰＣ】</label>
<?php generate_upload_image_tag('aqua_top_sliders5', get_option('aqua_top_sliders5'), get_option('id_aqua_top_sliders5')); ?>
</div><div class="ml15px">
<label>【スライダー画像０５　スマホ】</label>
<?php generate_upload_image_tag('aqua_top_sliders5sp', get_option('aqua_top_sliders5sp'), get_option('id_aqua_top_sliders5sp')); ?>
</div></div>
<span>スライダーリンク URL:</span><input type="text" name="slider_link5" value="<?php echo (get_option('slider_link5'));?>" />
<label>【外部リンク】<input type="checkbox" name="banner5_blank" value="1" <?php if( get_option('banner5_blank') ){echo 'checked';}?> /></label>
<hr><br>
<div class="two"><div>
<label>【スライダー画像０６　ＰＣ】</label>
<?php generate_upload_image_tag('aqua_top_sliders6', get_option('aqua_top_sliders6'), get_option('id_aqua_top_sliders6')); ?>
</div><div class="ml15px">
<label>【スライダー画像０６　スマホ】</label>
<?php generate_upload_image_tag('aqua_top_sliders6sp', get_option('aqua_top_sliders6sp'), get_option('id_aqua_top_sliders6sp')); ?>
</div></div>
<span>スライダーリンク URL:</span><input type="text" name="slider_link6" value="<?php echo (get_option('slider_link6'));?>" />
<label>【外部リンク】<input type="checkbox" name="banner6_blank" value="1" <?php if( get_option('banner6_blank') ){echo 'checked';}?> /></label>
<hr><br>
<div class="two"><div>
<label>【スライダー画像０７　ＰＣ】</label>
<?php generate_upload_image_tag('aqua_top_sliders7', get_option('aqua_top_sliders7'), get_option('id_aqua_top_sliders7')); ?>
</div><div class="ml15px">
<label>【スライダー画像０７　スマホ】</label>
<?php generate_upload_image_tag('aqua_top_sliders7sp', get_option('aqua_top_sliders7sp'), get_option('id_aqua_top_sliders7sp')); ?>
</div></div>
<span>スライダーリンク URL:</span><input type="text" name="slider_link7" value="<?php echo (get_option('slider_link7'));?>" />
<label>【外部リンク】<input type="checkbox" name="banner6_blank" value="1" <?php if( get_option('banner7_blank') ){echo 'checked';}?> /></label>
<input type="submit" value="決定" class="submitbtn">
</form>
 */?>
<?php
echo '</div>';
}

//【トップキービジュアル】画像設定
function my_admin_init_banners() {
	if ( isset( $_POST['aqua_top_banner'] ) && $_POST['aqua_top_banner'] ) {
		if ( check_admin_referer( 'enomotowork' , 'aqua_top_banner' ) ){

			//$array = array( 'top_expe_count' , 'top_maga_count' , 'top_info_count' );
			for( $i = 1; $i <= 2 ; $i++ ){
				$options = 'aqua_top_banner'.$i;
				if ( isset( $_POST[$options] ) && $_POST[$options] ) {
					$option_frase = $_POST[$options];
					update_option( $options , $option_frase );
				}else{
					$option_frase = "";
					update_option( $options , $option_frase );
				}
			}
			for( $i = 1; $i <= 2 ; $i++ ){
				$options = 'id_aqua_top_banner'.$i;
				if ( isset( $_POST[$options] ) && $_POST[$options] ) {
					$option_frase = $_POST[$options];
					update_option( $options , $option_frase );
				}else{
					$option_frase = "";
					update_option( $options , $option_frase );
				}
			}
		}
		wp_safe_redirect( menu_page_url ('aqua_top_banner', false ) );
	}
}
add_action( 'admin_init', 'my_admin_init_banners');

//【トップスライダー】画像リンク設定
function my_admin_init_sliders() {
	if ( isset( $_POST['aqua_top_slider'] ) && $_POST['aqua_top_slider'] ) {
		if ( check_admin_referer( 'enomotowork' , 'aqua_top_slider' ) ){

	//$array = array( 'top_expe_count' , 'top_maga_count' , 'top_info_count' );
	for( $i = 1; $i <= 7 ; $i++ ){
			$options = 'aqua_top_sliders'.$i;
			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}
	}
	for( $i = 1; $i <= 7 ; $i++ ){
			$options = 'aqua_top_sliders'.$i.'sp';
			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}
	}
	for( $i = 1; $i <= 7 ; $i++ ){
			$options = 'id_aqua_top_sliders'.$i;
			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}
	}
	for( $i = 1; $i <= 7 ; $i++ ){
			$options = 'id_aqua_top_sliders'.$i.'sp';
			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}
	}
	for( $i = 1; $i <= 7 ; $i++ ){
			$options = 'slider_link'.$i;
			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}
	}
	for( $i = 1; $i <= 2 ; $i++ ){
	    $options = 'banner'.$i.'_blank';
			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}
	}
		}
		wp_safe_redirect( menu_page_url ('aqua_top_slider', false ) );
	}
}
//add_action( 'admin_init', 'my_admin_init_sliders');

//
function my_admin_init1_a() {
	if ( isset( $_POST['aqua_init1'] ) && $_POST['aqua_init1'] ) {
		if ( check_admin_referer( 'enomotowork' , 'aqua_init1' ) ){

	$options = 'anacode_list';

			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}

		}
		wp_safe_redirect( menu_page_url ('aqua_init1', false ) );
	}
}
add_action( 'admin_init', 'my_admin_init1_a');
//
function my_admin_init1_a2() {
	if ( isset( $_POST['aqua_init2'] ) && $_POST['aqua_init2'] ) {
		if ( check_admin_referer( 'enomotowork' , 'aqua_init2' ) ){

	$options = 'anacode_list2';

			if ( isset( $_POST[$options] ) && $_POST[$options] ) {
			$option_frase = $_POST[$options];
			update_option( $options , $option_frase );
			}else{
			$option_frase = "";
			update_option( $options , $option_frase );
			}

		}
		wp_safe_redirect( menu_page_url ('aqua_init2', false ) );
	}
}
add_action( 'admin_init', 'my_admin_init1_a2');

//}
if( get_option('mode3') ){
	define('WP_DEBUG', true);
}
//画像アップロード用のタグを出力する
function generate_upload_image_tag($name, $value, $value2){?>
  <input name="<?php echo $name; ?>" type="hidden" value="<?php echo $value; ?>" />
  <input name="id_<?php echo $name; ?>" type="hidden" value="<?php echo $value2; ?>" />
  <input type="button" name="<?php echo $name; ?>_slect" value="選択"  class="admin_btn"/>
  <input type="button" name="<?php echo $name; ?>_clear" value="クリア" class="admin_btn"/>
  <div id="<?php echo $name; ?>_thumbnail" class="uploded-thumbnail">
    <?php if ($value): ?>
      <img src="<?php echo $value; ?>" alt="選択中の画像">
    <?php endif ?>
  </div>
  <script type="text/javascript">
  (function ($) {
      var custom_uploader;
      $("input:button[name=<?php echo $name; ?>_slect]").click(function(e) {
          e.preventDefault();
          if (custom_uploader) {
              custom_uploader.open();
              return;
          }
          custom_uploader = wp.media({
              title: "画像を選択してください",
              /* ライブラリの一覧は画像のみにする */
              library: {
                  type: "image"
              },
              button: {
                  text: "画像の選択"
              },
              /* 選択できる画像は 1 つだけにする */
              multiple: false
          });
          custom_uploader.on("select", function() {
              var images = custom_uploader.state().get("selection");
              /* file の中に選択された画像の各種情報が入っている */
              images.each(function(file){
                  /* テキストフォームと表示されたサムネイル画像があればクリア */
									$("input:hidden[name=<?php echo $name; ?>]").val("");
									$("input:hidden[name=id_<?php echo $name; ?>]").val("");
                  $("#<?php echo $name; ?>_thumbnail").empty();
                  /* テキストフォームに画像の URL を表示 */
									$("input:hidden[name=<?php echo $name; ?>]").val(file.attributes.sizes.full.url);
									$("input:hidden[name=id_<?php echo $name; ?>]").val(file.id);
                  /* プレビュー用に選択されたサムネイル画像を表示 */
                  $("#<?php echo $name; ?>_thumbnail").append('<img src="'+file.attributes.sizes.full.url+'" />');
              });
          });
          custom_uploader.open();
      });
      /* クリアボタンを押した時の処理 */
      $("input:button[name=<?php echo $name; ?>_clear]").click(function() {
					$("input:hidden[name=<?php echo $name; ?>]").val("");
					$("input:hidden[name=id_<?php echo $name; ?>]").val("");
          $("#<?php echo $name; ?>_thumbnail").empty();
      });
  })(jQuery);
  </script>
  <?php
}
function my_admin_scripts() {
  //メディアアップローダの javascript API
  wp_enqueue_media();
}
add_action( 'admin_print_scripts', 'my_admin_scripts' );
