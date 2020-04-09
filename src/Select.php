<?php


namespace SergeLiatko\HTML;

/**
 * Class Select
 *
 * @package SergeLiatko\HTML
 */
class Select extends Tag {

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
