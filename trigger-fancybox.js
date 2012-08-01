jQuery(document).ready(function($) {
	/* Apply fancybox to multiple items */
	$('#content .gallery a').attr('rel', 'gallery').fancybox({
		margin: 50,
		mousewheel: true,
		helpers: {
			title: {
				type: 'inside'
			}
		},
		beforeLoad: function() {
			// Don't use the actual title, use the hidden caption instead.
			this.title = '';

			$cap = $(this.element).closest('.gallery-item').children('.gallery-caption');

			if ($cap.length) {
				this.title = $cap.html();
			}
		}
	});
});
