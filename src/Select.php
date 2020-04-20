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
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $options
	 */
	public function __construct( $attributes = array(), $options = array() ) {
		parent::__construct( $attributes, $options, 'select', false );
	}

}
