<?php
/**
 * Template used to display the pixproof gallery
 *
 * Available vars:
 * string       $ids_string       A string with attachments ids separated by coma
 * array        $gallery_ids      An array with all attachments ids
 * object       $attachs          An object with all the attachments
 */

?>
<script>
	jQuery(document).ready(function(){
		jQuery('.select-action').on('click', function(event){
			event.preventDefault();


			if(jQuery(this).closest('.js-proof-photo').hasClass('selected')){
				jQuery(this).html('Select');			
				jQuery(this).closest('.js-proof-photo').removeClass('selected');
			} else {
				jQuery(this).html('Deselect');			
				jQuery(this).closest('.js-proof-photo').addClass('selected');
			}
		});
	});
</script>
<div id="pixproof_gallery" class="gallery  gallery-columns-3  cf">
	<?php foreach ( $attachs as $attachment ) { 

        $thumb_img = wp_get_attachment_image_src($attachment->ID);

		?>
		<div class="proof-photo  js-proof-photo  gallery-item">
			<div class="proof-photo__container">
	            <img src="<?php echo $thumb_img[0]; ?>" alt="<?php echo $attachment->post_title; ?>">
				<div class="proof-photo__meta">
					<div class="flexbox">
						<div class="flexbox__item">
				            <ul class="actions-nav">
				            	<li>
				        			<a class="meta__action  zoom-action" href="#">Zoom</a>
				            	</li>
				            	<li><hr class="separator" /></li>
				            	<li>
									<a class="meta__action  select-action" href="#">Select</a>
				            	</li>
				            </ul>
						</div>
					</div>
				</div>
			</div>
			<span class="proof-photo__id">
				#<?php echo $attachment->ID; ?>
			</span>            
		</div>
	<?php } ?>
</div>