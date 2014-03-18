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
<ul id="pixproof_gallery" class="mosaic  mosaic--masonry  nav  nav--stacked">
	<?php foreach ( $attachs as $attachment ) { ?>
		<li class="proof_photo mosaic__item">
			<img src="<?php echo $attachment->guid ?>" alt=""/>
		</li>
	<?php } ?>
</ul>