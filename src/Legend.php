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
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'legend', false );
	}

}
