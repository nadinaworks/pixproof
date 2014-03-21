<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'pixproof_meta_boxes', 'pixproof_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function pixproof_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pixproof_';

	$meta_boxes['test_metabox'] = array(
		'id'         => 'pixroof_gallery',
		'title'      => __( 'Pixproof Gallery', 'cmb' ),
		'pages'      => array( 'proof_gallery', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'pixproof_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name' => __( 'Gallery', 'cmb' ),
				'id'   => $prefix . 'main_gallery',
				'type' => 'gallery',
				'show_names' => false,
			),
			array(
				'name' => __( 'Client Name', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'client_name',
				'type' => 'text',
			),
			array(
				'name' => __( 'Date', 'cmb' ),
				'id'   => $prefix . 'event_date',
				'type' => 'text_date',
			),
			array(
				'name' => __( 'Client .zip archive', 'cmb' ),
				'desc' => __( 'Upload a .zip archive so the client can download it via the Download link. Leave it empty to hide the link.', 'cmb' ),
				'id'   => $prefix . 'file',
				'type' => 'file',
			),
		),
	);
	// Add other metaboxes as needed
	return $meta_boxes;
}

add_action( 'init', 'pixproof_initialize_pixproof_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function pixproof_initialize_pixproof_meta_boxes() {

	if ( ! class_exists( 'pixproof_Meta_Box' ) )
		require_once 'init.php';

}
