var magnific = {
	init: function () {
		jQuery('.magnific-me').magnificPopup({
			delegate: 'a',
			type:     'image',
			gallery:  {
				enabled: true
			},
			image:    {
				titleSrc: function (item) {
					var caption = item.el.find('img').attr('title');
					if (caption) {
						return '<h4> ' + caption + '</h4>';
					} else {
						return '';
					}
				}
			}
		});
	}
};

jQuery(document).ready(function () {
	magnific.init();
});
