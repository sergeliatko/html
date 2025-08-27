<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Legend
 *
 * @package SergeLiatko\HTML
 */
class Legend extends Tag {

	use HTMLTrait;

	/**
	 * Legend constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 */
	public function __construct( array $attributes = array(), string|array $content = array() ) {
		parent::__construct( $attributes, $content, 'legend' );
	}

}
