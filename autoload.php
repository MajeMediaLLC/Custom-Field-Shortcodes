<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

// Slash in front
$files_to_load = array(
	'/classes/MMCFS_Shortcode.php',
);

if( ! empty( $files_to_load ) ) {
    foreach ( $files_to_load as $file ) {
	    require_once realpath( dirname( __FILE__ ) ) . $file;
    }
}