<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/*
 *
 */

class MMCFS_Shortcode {

	public static function shortcode( $atts ) {

		extract( shortcode_atts( array(
									 'field'    => '',
									 'if_empty' => '',
								 ), $atts, 'mmcfs' ) );


		if ( empty( $field ) ) {

			return '';

		}

		if ( in_the_loop() ) {

			$post_id = get_the_ID();

		}
		else {

			$post_id = get_queried_object_id();

		}

		$meta = get_post_meta( $post_id, $field, TRUE );

		if ( empty( $meta ) && empty( $if_empty ) ) {

			return '';

		}
		elseif ( empty( $meta ) && ! empty( $if_empty ) ) {

			return $if_empty;

		}

		return $meta;

	}

}