jQuery(document).ready(function() {
    jQuery('main#content').magnificPopup({
        delegate: 'a',
        type:'image',
        gallery: {
            enabled: true
        },
        image: {
            titleSrc: function(item) {
                var caption = item.el.find('img').attr('title');
                if (caption) {
                    return '<h4> ' + caption + '</h4>';
                } else {
                    return '';
                }
            }
        }
    });
});