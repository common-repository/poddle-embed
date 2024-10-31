<?php
/**
 * @package poddle-embed
 * @version 0.1
 */
/*
Plugin Name: Poddle Embed
Plugin URI: http://wordpress.org/extend/plugins/poddle-embed/
Description: Embed videos from Poddle.tv
Author: Flaming Tarball
Version: 0.1
Author URI: http://flamingtarball.com/
*/

wp_oembed_add_provider(
	'http://poddle.tv/*',
	'http://poddle.tv/oembed/'
);