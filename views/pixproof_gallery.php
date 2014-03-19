<?php
/**
 * Template used to display the pixproof gallery
 *
 * Available vars:
 * array        $gallery_ids        An array with all attachments ids
 * object       $attachments        An object with all the attachments
 * string       $number_of_images   Count attachments
 * string       $columns            Number of columns
 */

//$specific = array();
//$i = 1;

//foreach ( $attachments as $attachment ) {
//	$specific[$attachment->ID] = $i;
//	++$i;
//}
// <span><?php echo "Image {$specific[$attachment->ID]} of {$number_of_images}"; </span>
?>
<div id="pixproof_gallery" class="gallery  gallery-columns-<?php echo $columns; ?>  cf  js-post-gallery">
	<?php foreach ( $attachments as $attachment ) {
		if ( 'selected' == self::get_attachment_class($attachment) ) {
			$select_label = __('Deselect', 'cmb' );
		} else {
			$select_label = __('Select', 'cmb' );
		}

        $thumb_img = wp_get_attachment_image_src($attachment->ID);
		$image_full = wp_get_attachment_image_src($attachment->ID, 'full-size'); ?>

		<div class="proof-photo  js-proof-photo  gallery-item <?php self::attachment_class($attachment); ?>" <?php self::attachment_data($attachment); ?>>
			<div class="proof-photo__container">
	            <img src="<?php echo $thumb_img[0]; ?>" alt="<?php echo $attachment->post_title; ?>" />
				<div class="proof-photo__meta">
					<div class="flexbox">
						<div class="flexbox__item">
				            <ul class="actions-nav">
				            	<li>
				        			<a class="meta__action  zoom-action" href="<?php echo $image_full[0]; ?>"><?php _e('Zoom', 'cmb' ); ?></a>
				            	</li>
				            	<li><hr class="separator" /></li>
				            	<li>
									<a class="meta__action  select-action" href="#"><?php echo $select_label; ?></a>
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
