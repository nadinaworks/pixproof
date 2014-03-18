<?php
/**
 * Template used to display the pixproof gallery
 *
 * Available vars:
 * string       $ids_string         A string with attachments ids separated by coma
 * array        $gallery_ids        An array with all attachments ids
 * object       $attachments        An object with all the attachments
 * int          $number_of_images   Count attachments
 */

$specific = array();
$i = 1;

foreach ( $attachments as $attachment ) {
	$specific[$attachment->ID] = $i;
	++$i;
}
?>
<ul id="pixproof_gallery" class="mosaic  mosaic--masonry  nav  nav--stacked">
	<?php foreach ( $attachments as $attachment ) { ?>
		<li class="proof_photo mosaic__item <?php self::attachment_class($attachment) ?>" <?php self::attachment_data($attachment); ?>>
			<img src="<?php echo $attachment->guid ?>" alt=""/>
			<span><?php echo "Image {$specific[$attachment->ID]} of {$number_of_images}"; ?></span>
		</li>
	<?php } ?>
</ul>