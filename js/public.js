(function ($) {
	"use strict";
	$(function () {

		$(document).on('click', '.select-action', function(ev){

			var self = $(this).parents('.proof_photo');
			console.log(self);
			$(self).toggleClass('selected');

			var selected = $(self).hasClass('selected'),
				attachment_id = $(self).data('attachment_id');

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