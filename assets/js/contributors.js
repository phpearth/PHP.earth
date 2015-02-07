(function ($) {
    // Load contributors
    var $contributors = $('#contribute-contributors');
    if ( $contributors.length ) {
        var fail = function () {
            $contributors.html('<p><a href="https://github.com/wwphp-fb/php-resources/graphs/contributors">Awesome contributors on GitHub</a></p>');
        };
        $.when($.ajax({cache: false, dataType: 'jsonp', type: 'GET', url: "https://api.github.com/repos/wwphp-fb/wwphp-fb.github.io/contributors?per_page=100"}),
               $.ajax({cache: false, dataType: 'jsonp', type: 'GET', url: "https://api.github.com/repos/wwphp-fb/php-resources/contributors?per_page=100"}),
               $.ajax({cache: false, dataType: 'jsonp', type: 'GET', url: "https://api.github.com/repos/wwphp-fb/facebook-bot/contributors?per_page=100"})
        ).then(function(a1, a2, a3) {
            // Each argument is an array with the following structure: [ data, statusText, jqXHR ]
            var $ul = $('<ul class="medium-block-grid-3"></ul>'), contributors = new Array();
            for (var i = 0; i < a1[0].data.length; i++) {
                contributors[i] = new Array(a1[0].data[i].login, a1[0].data[i].avatar_url, a1[0].data[i].contributions);
            }
            var contributorsLength = contributors.length;
            for ( var i = 0; i < a2[0].data.length; i++ ) {
                cntn = false;
                for ( var j = 0; j < contributorsLength; j++ ) {
                    if(contributors[j][0] == a2[0].data[i].login) {
                        contributors[j][2] += a2[0].data[i].contributions;
                        cntn = true;
                    }
                }
                if (cntn) continue;
                contributors.push(new Array(a2[0].data[i].login, a2[0].data[i].avatar_url, a2[0].data[i].contributions));
            }
            var contributorsLength = contributors.length;
            for ( var i = 0; i < a3[0].data.length; i++ ) {
                cntn = false;
                for ( var j = 0; j < contributorsLength; j++ ) {
                    if(contributors[j][0] == a3[0].data[i].login) {
                        contributors[j][2] += a3[0].data[i].contributions;
                        cntn = true;
                    }
                }
                if (cntn) continue;
                contributors.push(new Array(a3[0].data[i].login, a3[0].data[i].avatar_url, a3[0].data[i].contributions));
            }
            contributors.sort(function(a,b){
                if (a[2] > b[2]) {
                    return -1;
                }
                if (a[2] < b[2]) {
                    return 1;
                }
                // a must be equal to b
                return 0;
            });
            for ( var i = 0; i < contributors.length; i++ ) {
                $ul.append(['<li><a class="th" href="https://github.com/', contributors[i][0], '" target="_blank"><img src="', contributors[i][1], '" width="75" /></a> <a href="https://github.com/', contributors[i][0], '" target="_blank">', contributors[i][0], '</a> (commits: ', contributors[i][2], ')</li>'].join(''));
            }
            $contributors.html($ul);
        }, fail);
    }
})(jQuery);
