// pagetop ----
jQuery(function($){
    var pagetop = $('#pageTop');
    var pagetop2 = $('#pageTop2');
    var c = 0;
    var cl = 0;
  pagetop.find('a').on('click',function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
  pagetop2.on('click',function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
	$('.close_btn').on('click',function () {
      $('#menu-sns_side li a').slideUp('slow');
      $(this).slideUp();
      cl = 1; 
    return false;
  });
});


jQuery(function($){
//$(window).load(function () {
  //side menu
  $(function () {
    var body = $(document.body);
    var topnav = $('header + nav');
    var menu = $('.main_nav ul');
    var menuWidth = menu.outerWidth();
		$('html').removeClass('scroll-prevent');
          //色々設定
    $('.g_menu').on('click', function() {
      //if($(window).width() <= 768) {
        body.toggleClass('openmenu');
				 $('html').toggleClass('scroll-prevent');
        if(body.hasClass('openmenu')){
          //$("#nav_sp").slideToggle();  
        } else {
          //$("#nav_sp").slideUp(); 
        } 
      //}
    });
    $('.nav__link_close').on('click', function() {
      //if($(window).width() <= 768) {
        body.toggleClass('openmenu');
        if(body.hasClass('openmenu')){
          //$("#nav_sp").slideToggle();  
        } else {
          //$("#nav_sp").slideUp(); 
        } 
      //}
    });
    $('.menu-item').on('click', function() {
        //body.toggleClass('openmenu');
				 //$('html').toggleClass('scroll-prevent');
    });
		$('.menu_toggle > a').on('click', function() {
      // if($(window).width() <= 768) {
         //body.toggleClass('openmenu_sub');
				 $(this).toggleClass('openmenu_sub');
         return false;
       //} else {
         //return false
       //}
    });
		//
    $('.post_lists').on('click', function() {
      //if($(window).width() <= 768) {
        $(this).toggleClass('openmenu');
        if($(this).hasClass('openmenu')){
          $(this).find("dd").slideToggle();  
        } else {
          $(this).find("dd").slideUp(); 
        } 
      //}
    });
});
//});
	var loader = $('#js-loader');
	$(window).on('load',function(){
		loader.fadeOut();
	});
	setTimeout(function(){
		loader.fadeOut();
	},1000);
});
/**/

jQuery(function ($) {
    let floatingBanner = $(".floating-banner");
    let footer = $("footer");

    // .floating-banner が存在しないページは処理しない（他ページへの影響なし）
    if (floatingBanner.length === 0 || footer.length === 0) {
        return;
    }

    // モバイル判定（769px以下）
    function isMobile() {
        return window.innerWidth <= 769;
    }

    function initFloatingBanner() {
        function checkScroll() {
            $(document).ready(function () {
                $("body").on("scroll", function () {
                    let scrollTop = document.body.scrollTop;

                    if (footer.length > 0) {
                        let footerRect = footer[0].getBoundingClientRect();
                        let windowHeight = $(window).height();

                        if (scrollTop < 300) {
                            $(".floating-banner").removeClass("show");
                        } else {
                            $(".floating-banner").addClass("show");
                        }

                        if(footerRect.top <= windowHeight){
                            $(".floating-banner").addClass("show");
                            setTimeout(() => {
                                floatingBanner.css({ position: "static" });
                            }, 30);
                        } else {
                            $('.floating-banner').css({
                                position:"fixed"
                            });
                        }
                    }

                });
            });
        }

        if (!isMobile()) {
            // PC表示：全てリセット
            floatingBanner.removeClass('show absolute').css({ bottom: '', position: '' });
            $('.footer-placeholder').remove();
            $(window).off('.floatingBanner');
            return;
          }

            checkScroll();
    }

    // 初期化実行
    $(function () {
        initFloatingBanner();
    });

    // **ウィンドウリサイズ時に再判定**
    $(window).on("resize", function () {
        initFloatingBanner();
    });
});  