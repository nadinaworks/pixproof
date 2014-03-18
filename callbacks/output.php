<?php

function display_pixproof_gallery() {
	global $post;

	$ids_string = get_post_meta( get_the_ID(), '_pixproof_main_gallery', true );

	if ( empty($ids_string ) ) {
		return;
	}

	$gallery_ids = explode(',',$ids_string);

	if ( empty($gallery_ids) ) {
		return;
	}

	$attachs = get_posts( array( 'post_status' => 'any', 'post_type' => 'attachment', 'post__in' => $gallery_ids ) );

	if ( is_wp_error($attachs)  || empty($attachs) ) {
		return;
	} ?>

	<ul id="pixproof_gallery" class="mosaic  mosaic--masonry">
		<?php foreach ($attachs as $attachment ) { ?>
			<li class="proof_photo mosaic__item">
				<img src="<?php echo $attachment->guid ?>" alt=""/>
			</li>
		<?php } ?>
	<ul>
<?php }