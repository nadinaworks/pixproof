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
<div id="pixproof_gallery" class="mosaic  mosaic--masonry  cf">
	<?php foreach ( $attachs as $attachment ) { 

        $thumb_img = wp_get_attachment_image_src($attachment->ID, 'full-size');

        $thumb_img_ratio = 70; //some default aspect ratio in case something has gone wrong and the image has no dimensions - it happens
        if (isset($thumb_img[1]) && isset($thumb_img[2]) && $thumb_img[1] > 0) {
            $thumb_img_ratio = $thumb_img[2] * 100/$thumb_img[1];
        }

		?>
		<div class="proof-photo  mosaic__item">
            <div class="mosaic__item-container">
                <div class="mosaic__image" style="padding-top: <?php echo $thumb_img_ratio; ?>%">
                    <img src="<?php echo $attachment->guid ?>" alt="<?php echo $attachment->post_title; ?>">
                </div>
                <div class="mosaic__meta">
                    <div class="mosaic__hoverdir">
                        <div class="flexbox">
                            <div class="flexbox__item">
                            	<a class="meta__action  zoom-action" href="#">Zoom</a>
								<hr class="separator">
								<a class="meta__action  select-action" href="#">Select</a>
                            </div>
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