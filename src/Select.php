<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Select
 *
 * @package SergeLiatko\HTML
 */
class Select extends Tag {

	use HTMLTrait;

	/**
	 * Select constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $options
	 */
	public function __construct( array $attributes = array(), $options = array() ) {
		parent::__construct( $attributes, $options, 'select' );
	}

}
