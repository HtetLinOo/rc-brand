jQuery(function($){
		////文字サイズ
		//変数にクッキー名を入れる
		var historyFontSize = $.cookie('fontSize');
		//適用する箇所を指定。
		var elm = $('html');
		//変数が空ならfontsizeRegularを、空でなければクッキーに保存しておいたものを適用
		(!historyFontSize)? elm.addClass('fontsizeRegular'):elm.addClass(historyFontSize);
		//クリックしたら実行
		$('#textsize button').click(function(){
				//クリックした要素のID名を変数にセット
				var setFontSize = this.id;
				//クッキーに変数を保存
				$.cookie('fontSize', setFontSize,{ path: '/'});
				//一度classを除去して、変数をclassとして追加
				elm.removeClass('fontsizeRegular fontsizeLarge').addClass(setFontSize);
		});
});
jQuery(function($){
		////文字色
		var historyFontColor = $.cookie('fontColor');
		var elm = $('html');
		(!historyFontColor)? elm.addClass('fontcolorDefault'):elm.addClass(historyFontColor);
		$('#textcolor button').click(function(){
				var setFontColor = this.id;
				$.cookie('fontColor', setFontColor,{ path: '/'});
				elm.removeClass('fontcolorDark fontcolorDefault').addClass(setFontColor);
		});
});

// ページ内リンク
jQuery(function($){
		$('a[href^=#],area[href^=#]').not(".more,.tab, .switcher a").click(function() {
				var speed = 500; // スクロール速度(ミリ秒)
				var href = $(this).attr("href");
				var target = $(href == "#" || href == "" ? 'html' : href);
				var position = target.offset().top;
				$('html').animate({scrollTop:position}, speed, 'swing');
				return false;
		});
});
// ページトップボタン
jQuery(function($){
		$(window).on("scroll", function() {
				if ($(this).scrollTop() > 600) {
					$(".totop").fadeIn(500);
				} else {
					$(".totop").fadeOut(500);
				}
 
        const scrollHeight = $(document).height();
        const scrollPosition = $(window).height() + $(window).scrollTop();
        const footHeight = $("footer").height();
 
				if ( scrollHeight - scrollPosition  <= footHeight ) {
					if (window.matchMedia('(max-width: 768px)').matches) {
						$(".totop").css({
								"position":"absolute",
								 "bottom": footHeight - 60,
								//"bottom": "500px",
						});
					} else {
						$(".totop").css({
								"bottom": "50px",
						});
					}
				} else {
            $(".totop").css({
                "position":"fixed",
                "bottom": "20px",
                //"transition":".2s",
            });
        }
    });
});