(function ($) {
    // Load contributors
    var $contributors = $('#contribute-contributors');
    if ( $contributors.length ) {
        var fail = function () {
            $contributors.html('<p><a href="https://github.com/wwphp-fb/php-faq/graphs/contributors">Awesome contributors on GitHub</a></p>');
        };
        $.ajax({
            cache: false,
            dataType: 'jsonp',
            timeout: 3000,
            type: 'GET',
            url: 'https://api.github.com/repos/wwphp-fb/wwphp-fb.github.io/contributors?per_page=100'
        }).done(function (data) {
            // php-faq repository
            $.ajax({
                cache: false,
                dataType: 'jsonp',
                timeout: 3000,
                type: 'GET',
                url: 'https://api.github.com/repos/wwphp-fb/php-faq/contributors?per_page=100'
            }).done(function (data_2) {
                if ( data.data && data.data.length && data_2.data && data_2.data.length ) {
                    var $ul = $('<ul></ul>'), dataLength = data.data.length, contributors = new Array(), dataLength_2 = data_2.data.length;
                    for ( var i = 0; i < dataLength; i++ ) {
                        contributors[i] = new Array(data.data[i].login, data.data[i].avatar_url, data.data[i].contributions);
                    }
                    var contributorsLength = contributors.length;
                    for ( var i = 0; i < dataLength_2; i++ ) {
                        cntn = false;
                        for ( var j = 0; j < contributorsLength; j++ ) {
                            if(contributors[j][0] == data_2.data[i].login) {
                                contributors[j][2] += data_2.data[i].contributions;
                                cntn = true;
                            }
                        }
                        if (cntn) continue;
                        contributors.push(new Array(data_2.data[i].login, data_2.data[i].avatar_url, data_2.data[i].contributions));
                    }
                    for ( var i = 0; i < contributors.length; i++ ) {
                        $ul.append(['<div style="float: left; margin-right: 20px; margin-bottom: 20px;"><a href="https://github.com/', contributors[i][0], '" target="_blank"><img src="', contributors[i][1], '" width="75" /> ', contributors[i][0], '</a> (commits: ', contributors[i][2], ')</div>'].join(''));
                    }
                    console.log(contributors);
                    $ul.append('<div style="clear:both;"></div>');
                    $contributors.html($ul);
                } else {
                    fail();
                }
            }).fail(fail);
        }).fail(fail);
    }
})(jQuery);
