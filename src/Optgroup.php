<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Optgroup
 *
 * @package SergeLiatko\HTML
 */
class Optgroup extends Tag {

	use HTMLTrait;

	/**
	 * Optgroup constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $options
	 */
	public function __construct( $attributes = array(), $options = array() ) {
		parent::__construct( $attributes, $options, 'optgroup', false );
	}

}
