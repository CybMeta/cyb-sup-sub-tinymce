<?php
/*
Plugin Name:  Cyb Sub-Sup TinyMCE
Plugin URI:   http://cybmeta.com
Description:  Enable sub and sup buttons in TinyMCE
Version:      0.1
Author:       Juan Padial (@CybMeta)
Author URI:   http://cybmeta.com
*/

add_filter("mce_buttons_2", function( $buttons ) {
	$buttons[] = 'subscript';
	$buttons[] = 'superscript';
	return $buttons;
});
?>