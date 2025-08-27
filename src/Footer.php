<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Footer
 *
 * @package SergeLiatko\HTML
 */
class Footer extends Tag {

	use HTMLTrait;

	/**
	 * Footer constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'footer' );
	}

}
