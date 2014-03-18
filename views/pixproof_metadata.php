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
<div id="pixproof_data">
	<?php if ( !empty($client_name)) { ?>
		<h3 class="client_name">Client Name: <?php echo $client_name; ?></h3>
	<?php } ?>
</div>

<?php
