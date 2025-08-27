<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Fieldset
 *
 * @package SergeLiatko\HTML
 */
class Fieldset extends Tag {

	use HTMLTrait;

	/**
	 * Fieldset constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'fieldset' );
	}

}
