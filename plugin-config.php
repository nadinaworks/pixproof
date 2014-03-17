<?php defined('ABSPATH') or die;

$basepath = dirname(__FILE__).DIRECTORY_SEPARATOR;

$debug = false;
if ( isset( $_GET['debug'] ) && $_GET['debug'] == 'true' ) {
	$debug = true;
}
$debug = true;
$options = get_option('pixproof_settings');

$display_settings = false;

if ( isset( $options['display_settings'] ) ){
	$display_settings = $options['display_settings'];
}

return array
	(
		'plugin-name' => 'pixproof',

		'settings-key' => 'pixproof_settings',

		'textdomain' => 'pixproof_txtd',

		'template-paths' => array
			(
				$basepath.'core/views/form-partials/',
				$basepath.'views/form-partials/',
			),

		'fields' => array
			(
//				'hiddens'
//					=> include 'settings/hiddens'.EXT,
//				'post_types'
//					=> include 'settings/post_types'.EXT,
//				'taxonomies'
//					=> include 'settings/taxonomies'.EXT,
			),

		'processor' => array
			(
				// callback signature: (array $input, PixtypesProcessor $processor)

				'preupdate' => array
				(
					// callbacks to run before update process
					// cleanup and validation has been performed on data
				),
				'postupdate' => array
				(
					'save_settings'
				),
			),

		'cleanup' => array
			(
				'switch' => array('switch_not_available'),
			),

		'checks' => array
			(
				'counter' => array('is_numeric', 'not_empty'),
			),

		'errors' => array
			(
				'not_empty' => __('Invalid Value.', pixproof::textdomain()),
			),

		'callbacks' => array
			(
//				'save_settings' => 'save_proof_settings'
			),

//		'display_settings' => $display_settings,

		'github_updater' => array(
			'slug' => 'pixproof/pixproof.php',
			'api_url' => 'https://api.github.com/repos/pixelgrade/pixproof',
			'raw_url' => 'https://raw.github.com/pixelgrade/pixproof/update',
			'github_url' => 'https://github.com/pixelgrade/pixproof/tree/update',
			'zip_url' => 'https://github.com/pixelgrade/pixproof/archive/update.zip',
			'sslverify' => false,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'README.md',
			'textdomain' => 'pixproof',
			'debug_mode' => $debug
			//'access_token' => '',
		),

		// shows exception traces on error
		'debug' => $debug,

	); # config
