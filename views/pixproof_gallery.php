<ul id="pixproof_gallery" class="mosaic  mosaic--masonry">
	<?php foreach ( $attachs as $attachment ) { ?>
		<li class="proof_photo mosaic__item">
			<img src="<?php echo $attachment->guid ?>" alt=""/>
		</li>
	<?php } ?>
</ul>