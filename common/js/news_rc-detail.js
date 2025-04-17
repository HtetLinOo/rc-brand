jQuery(function($){

    // news_id
    var news_id = getUrlParameter('nid');
    // console.log("news_id:", news_id)

    getRcNewsDetail({news_id: news_id})

    function getRcNewsDetail(params) {
        var url = api_url + 'po/news_rc/detail/' + params.news_id

        $.getJSON(
            url,
            params,
            function (response) {
                var news = response;
                console.log('news:', news)

                $('.news_title').html(news.title);
                $('.news_body').html(news.body);
                $('.news_date').html(news.formatted_date_published_at);

                var category_class = ""
                if (news.category == 1) {
                    category_class = "update cate" // 更新情報
                } else if (news.category == 2) {
                    category_class = "update cate" // お知らせ ※色は更新と同じ
                } else if (news.category == 3) {
                    category_class = "important cate" // 重要
                }

                category_html = '<span class="' + category_class + '">'
                    + news.category_label
                    + '</span>'
                $('.news_category_box').html(category_html);
            }
        );
    }

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
});