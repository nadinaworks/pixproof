<?php
/**
 * Template used to display the pixproof gallery
 *
 * Available vars:
 * string       $client_name
 * string       $event_date
 * int          $number_of_images
 */
?>
<div id="pixproof_data" class="push--bottom">
	<div class="grid"><!--
	<?php if ( !empty($client_name)) { ?>
		--><div class="grid__item  lap-and-up-one-quarter">
            <div class="entry__meta-box">
                <span class="meta-box__title">Client</span>
                <a href="<?php echo $client_link; ?>" target="_blank"><?php echo $client_name; ?></a>
            </div>		
		</div><!--
	<?php }
	if ( !empty($event_date)) { ?>
	--><div class="grid__item  lap-and-up-one-quarter">
            <div class="entry__meta-box">
                <span class="meta-box__title">Event date</span>
                <a href="<?php echo $client_link; ?>" target="_blank"><?php echo $event_date; ?></a>
            </div>					
		</div><!--
	<?php }
	if ( !empty($number_of_images)) { ?>
	--><div class="grid__item  lap-and-up-one-quarter">
            <div class="entry__meta-box">
                <span class="meta-box__title">Number of images</span>
                <a href="<?php echo $client_link; ?>" target="_blank"><?php echo $number_of_images; ?></a>
            </div>					
		</div><!--
	<?php } ?>
	--><div class="grid__item  lap-and-up-one-quarter">
            <div class="entry__meta-box">
                <button class="btn  btn--primary  btn--small">Download</button>
            </div>					
		</div><!--				
	--></div>
</div>

<?php
