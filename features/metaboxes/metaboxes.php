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
		'id'         => 'test_metabox',
		'title'      => __( 'Test Metabox', 'cmb' ),
		'pages'      => array( 'proof_gallery', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'pixproof_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name' => __( 'Gallery', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'main_gallery',
				'type' => 'gallery',
				'show_names' => false,
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
			array(
				'name' => __( 'Client Name', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'text',
				'type' => 'text',
			),
			array(
				'name' => __( 'Test Time', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_time',
				'type' => 'text_time',
			),
			array(
				'name' => __( 'Test Date Picker', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'text_date',
			),
			array(
				'name' => __( 'Test Date Picker (UNIX timestamp)', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textdate_timestamp',
				'type' => 'text_date_timestamp',
				// 'timezone_meta_key' => $prefix . 'timezone', // Optionally make this field honor the timezone selected in the select_timezone specified above
			),
			array(
				'name' => __( 'Test Date/Time Picker Combo (UNIX timestamp)', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_datetime_timestamp',
				'type' => 'text_datetime_timestamp',
			),
			array(
				'name' => __( 'Email', 'cmb' ),
				'id'   => $prefix . 'email',
				'type' => 'text_email',
				'repeatable' => true,
			),
			array(
				'name' => __( 'Test Money', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textmoney',
				'type' => 'text_money',
				// 'before'     => '£', // override '$' symbol if needed
				// 'repeatable' => true,
			),
			array(
				'name'    => __( 'Test Color Picker', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_colorpicker',
				'type'    => 'colorpicker',
				'default' => '#ffffff'
			),
//			array(
//				'name' => __( 'Test Text Area', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textarea',
//				'type' => 'textarea',
//			),
//			array(
//				'name' => __( 'Test Text Area Small', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textareasmall',
//				'type' => 'textarea_small',
//			),
//			array(
//				'name' => __( 'Test Text Area for Code', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textarea_code',
//				'type' => 'textarea_code',
//			),
//			array(
//				'name' => __( 'Test Title Weeeee', 'cmb' ),
//				'desc' => __( 'This is a title description', 'cmb' ),
//				'id'   => $prefix . 'test_title',
//				'type' => 'title',
//			),
//			array(
//				'name'    => __( 'Test Select', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_select',
//				'type'    => 'select',
//				'options' => array(
//					'standard' => __( 'Option One', 'cmb' ),
//					'custom'   => __( 'Option Two', 'cmb' ),
//					'none'     => __( 'Option Three', 'cmb' ),
//				),
//			),
//			array(
//				'name'    => __( 'Test Radio inline', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_radio_inline',
//				'type'    => 'radio_inline',
//				'options' => array(
//					'standard' => __( 'Option One', 'cmb' ),
//					'custom'   => __( 'Option Two', 'cmb' ),
//					'none'     => __( 'Option Three', 'cmb' ),
//				),
//			),
//			array(
//				'name'    => __( 'Test Radio', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_radio',
//				'type'    => 'radio',
//				'options' => array(
//					'option1' => __( 'Option One', 'cmb' ),
//					'option2' => __( 'Option Two', 'cmb' ),
//					'option3' => __( 'Option Three', 'cmb' ),
//				),
//			),
//			array(
//				'name'     => __( 'Test Taxonomy Radio', 'cmb' ),
//				'desc'     => __( 'field description (optional)', 'cmb' ),
//				'id'       => $prefix . 'text_taxonomy_radio',
//				'type'     => 'taxonomy_radio',
//				'taxonomy' => 'category', // Taxonomy Slug
//				 'inline'  => true, // Toggles display to inline
//			),
//			array(
//				'name'     => __( 'Test Taxonomy Select', 'cmb' ),
//				'desc'     => __( 'field description (optional)', 'cmb' ),
//				'id'       => $prefix . 'text_taxonomy_select',
//				'type'     => 'taxonomy_select',
//				'taxonomy' => 'category', // Taxonomy Slug
//			),
//			array(
//				'name'     => __( 'Test Taxonomy Multi Checkbox', 'cmb' ),
//				'desc'     => __( 'field description (optional)', 'cmb' ),
//				'id'       => $prefix . 'test_multitaxonomy',
//				'type'     => 'taxonomy_multicheck',
//				'taxonomy' => 'post_tag', // Taxonomy Slug
//				 'inline'  => true, // Toggles display to inline
//			),
//			array(
//				'name' => __( 'Test Checkbox', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_checkbox',
//				'type' => 'checkbox',
//			),
//			array(
//				'name'    => __( 'Test Multi Checkbox', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_multicheckbox',
//				'type'    => 'multicheck',
//				'options' => array(
//					'check1' => __( 'Check One', 'cmb' ),
//					'check2' => __( 'Check Two', 'cmb' ),
//					'check3' => __( 'Check Three', 'cmb' ),
//				),
//				// 'inline'  => true, // Toggles display to inline
//			),
//			array(
//				'name'    => __( 'Test wysiwyg', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_wysiwyg',
//				'type'    => 'wysiwyg',
//				'options' => array( 'textarea_rows' => 5, ),
//			),
//			array(
//				'name' => __( 'Test Image', 'cmb' ),
//				'desc' => __( 'Upload an image or enter a URL.', 'cmb' ),
//				'id'   => $prefix . 'test_image',
//				'type' => 'file',
//			),
//			array(
//				'name'         => __( 'Multiple Files', 'cmb' ),
//				'desc'         => __( 'Upload or add multiple images/attachments.', 'cmb' ),
//				'id'           => $prefix . 'test_file_list',
//				'type'         => 'file_list',
//				'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
//			),
//			array(
//				'name' => __( 'oEmbed', 'cmb' ),
//				'desc' => __( 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.', 'cmb' ),
//				'id'   => $prefix . 'test_embed',
//				'type' => 'oembed',
//			),
		),
	);

	/**
	 * Metabox for the user profile screen
	 */
//	$meta_boxes['user_edit'] = array(
//		'id'            => 'user_edit',
//		'title'         => __( 'User Profile Metabox', 'cmb' ),
//		'pages'         => array( 'user' ), // Tells CMB to use user_meta vs post_meta
//		'show_names'    => true,
//		// 'pixproof_styles' => true, // Show cmb bundled styles.. not needed on user profile page
//		'fields'        => array(
//			array(
//				'name'     => __( 'Extra Info', 'cmb' ),
//				'desc'     => __( 'field description (optional)', 'cmb' ),
//				'id'       => $prefix . 'exta_info',
//				'type'     => 'title',
//				'on_front' => false,
//			),
//			array(
//				'name'    => __( 'Avatar', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'avatar',
//				'type'    => 'file',
//				'save_id' => true,
//			),
//			array(
//				'name' => __( 'Facebook URL', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'facebookurl',
//				'type' => 'text_url',
//			),
//			array(
//				'name' => __( 'Twitter URL', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'twitterurl',
//				'type' => 'text_url',
//			),
//			array(
//				'name' => __( 'Google+ URL', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'googleplusurl',
//				'type' => 'text_url',
//			),
//			array(
//				'name' => __( 'Linkedin URL', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'linkedinurl',
//				'type' => 'text_url',
//			),
//			array(
//				'name' => __( 'User Field', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'user_text_field',
//				'type' => 'text',
//			),
//		)
//	);

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
