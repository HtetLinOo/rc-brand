jQuery(function($){

    // exe
    getRcNewsList({})

    function getRcNewsList(params) {
        var url = api_url + 'po/news_rc/list'
        url += "?page=" + (params.page ?? 1)

        $.getJSON(
            url,
            params,
            function (response) {
                var data = response;
                var news = data.data
                var current_page = data.current_page;
                var first_page_url = data.first_page_url
                var next_page_url = data.next_page_url
                var first_page_url = data.first_page_url
                var next_page_url = data.next_page_url

                $('.entry-content ul').html("");

                // 一覧
                for (var i = 0; i < news.length; i++) {
                    if (news[i] == undefined) {
                        continue;
                    }
                    var item = news[i];
                    // console.log('item:', item)

                    var category_class = ""
                    if (item.category == 1) {
                        category_class = "update cate" // 更新情報
                    } else if (item.category == 2) {
                        category_class = "update cate" // お知らせ ※色は更新と同じ
                    } else if (item.category == 3) {
                        category_class = "important cate" // 重要
                    }

                    let newmark = ""
                    // ３日以内の記事はnewとする
                    if (checkRcNewsNew(item.published_at, 3)) {
                        newmark = "new"
                    }

                    url = "/news-detail/?nid=" + item.id
                    var html = '<li>'
                    html += '<a href="' + url + '">'
                    html += '<span class="' + category_class + '">' + item.category_label + '</span>'
                    html += '<span class="date ' + newmark + '">' + item.formatted_date_published_at + '</span>'
                    html += '<br>'
                    html += '<span class="read">' + item.title + '</span>'
                    html += '</a>'
                    html += '</li>'
                    $('.entry-content ul').append(html);
                }

                // ページネーション
                $('.nav-links').html("");
                if (current_page > 1) {
                    let html = '<span class="p10">'
                        + '<img src="/wp-content/themes/RoyalCanin2024/images/royalcanin/icon_arrow.png" width="8" class="prevLink">'
                        + '</span>'
                    $('.nav-links').append(html);
                    $('.prevLink').on('click', function() {
                        getRcNewsList({page: current_page - 1});
                    });

                }
                if (next_page_url) {
                    let html = '<span class="p10">'
                        + '<img src="/wp-content/themes/RoyalCanin2024/images/royalcanin/icon_arrow_r.png" width="8" class="nextLink">'
                        + '</span>'
                    $('.nav-links').append(html);
                    $('.nextLink').on('click', function() {
                        getRcNewsList({page: current_page + 1});
                    });
                }
            }
        );
    }

    function checkRcNewsNew(dateString, checkDays) {

        // 文字列からDateオブジェクトを作成
        let dateParts = dateString.split(' ');
        let date = dateParts[0].split('-');
        let time = dateParts[1].split(':');
    
        let year = parseInt(date[0], 10);
        let month = parseInt(date[1], 10) - 1; // 月は0から始まるので-1する
        let day = parseInt(date[2], 10);
        let hours = parseInt(time[0], 10);
        let minutes = parseInt(time[1], 10);
        let seconds = parseInt(time[2], 10);
    
        let inputDate = new Date(year, month, day, hours, minutes, seconds);

        // 現時刻を取得
        let now = new Date();

        // 3日後の日付を取得
        let daysLater = new Date();
        daysLater.setDate(now.getDate() - checkDays);
    
        return inputDate > daysLater;
    }
});