<?php
/**
 * Template used to display the pixproof gallery
 *
 * Available vars:
 * string       $client_name
 * string       $event_date
 * int          $number_of_images
 * string       $file
 */
?>
<div id="pixproof_data" class="pixproof-data">
	<div class="grid"><!--
	<?php if ( !empty($client_name)) { ?>
		--><div class="grid__item  lap-and-up-one-quarter">
            <div class="entry__meta-box">
                <span class="meta-box__title">Client</span>
                <span><?php echo $client_name; ?></span>
            </div>		
		</div><!--
	<?php }
	if ( !empty($event_date)) { ?>
	--><div class="grid__item  lap-and-up-one-quarter">
            <div class="entry__meta-box">
                <span class="meta-box__title">Event date</span>
                <span><?php echo $event_date; ?></span>
            </div>					
		</div><!--
	<?php }
	if ( !empty($number_of_images)) { ?>
	--><div class="grid__item  lap-and-up-one-quarter">
            <div class="entry__meta-box">
                <span class="meta-box__title">Images</span>
                <span><?php echo $number_of_images; ?></span>
            </div>					
		</div><!--
	<?php }

	if ( !empty( $file ) ) { ?>
	--><div class="grid__item  lap-and-up-one-quarter">
			<div class="entry__meta-box">
                <button class="button-download  js-download" onclick="window.open('<?php echo $file; ?>')">Download</button>
            </div>					
		</div><!--				
	--></div>
	<?php } ?>
</div>
<hr class="separator  separator--data" />

<?php
