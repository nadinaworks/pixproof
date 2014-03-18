(function ($) {
	"use strict";
	$(function () {

		$(document).on('click', '.proof_photo', function(ev){

			$(this).toggleClass('selected');

			var selected = $(this).hasClass('selected'),
				attachment_id = $(this).data('attachment_id');

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