<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Textarea
 *
 * @package SergeLiatko\HTML
 */
class Textarea extends Tag {

	use HTMLTrait;

	/**
	 * Textarea constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		if ( ! is_array( $content ) ) {
			$content = array( $content );
		}
		$content = array_filter(
			$content,
			static function ( $piece ) {
				return is_string( $piece ) || $piece instanceof Tag;
			}
		);
		$content = array_map( 'strval', $content );
		$content = implode( "\n", $content );
		parent::__construct( $attributes, array( esc_textarea( $content ) ), 'textarea' );
	}

}
