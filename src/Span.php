<?php


namespace SergeLiatko\HTML;

/**
 * Class Span
 *
 * @package SergeLiatko\HTML
 */
class Span extends Tag {

	/**
	 * @param array  $attributes
	 * @param array  $content
	 * @param string $tag
	 * @param bool   $self_closing
	 *
	 * @return string
	 */
	public static function HTML( $attributes = array(), $content = array(), $tag = '', $self_closing = false ) {
		$instance = new self( $attributes, $content );

		return $instance->toHTML();
	}

	/**
	 * Span constructor.
	 *
	 * @param array                            $attributes
	 * @param \SergeLiatko\HTML\Tag[]|string[] $content
	 */
	public function __construct( $attributes = array(), $content = array() ) {
		parent::__construct( $attributes, $content, 'span', false );
	}

}
