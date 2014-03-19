(function ($) {
	"use strict";
	$(function () {

		$(document).on('click', '.select-action', function(ev){
			ev.preventDefault();
			var photo = $(this).parents('.js-proof-photo');

			$(photo).toggleClass('selected');

			var selected = $(photo).hasClass('selected'),
				attachment_id = $(photo).data('attachment_id');

			if( selected ){
				jQuery(this).html('Deselect');
			} else {
				jQuery(this).html('Select');
			}

			$.ajax({ type: "post",url: ajaxurl,data: {
					action: 'pixproof_image_click',
					attachment_id: attachment_id,
					selected: selected
				},
				success:function(response){

						console.log(response);

//						var result = JSON.parse(response);
//
//						console.log(result);

				}
			});

		});

	});
}(jQuery));