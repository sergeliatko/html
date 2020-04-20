<?php


namespace SergeLiatko\HTML\Traits;

/**
 * Trait HTMLTrait
 *
 * @package SergeLiatko\HTML\Traits
 */
trait HTMLTrait {

	/**
	 * @param array                            $attributes
	 * @param string[]|\SergeLiatko\HTML\Tag[] $content
	 * @param string                           $tag
	 * @param bool                             $self_closing
	 *
	 * @return string
	 */
	public static function HTML( $attributes = array(), $content = array(), $tag = '', $self_closing = false ) {
		$instance = new self( $attributes, $content, $tag, $self_closing );

		/** @noinspection PhpUndefinedMethodInspection */
		return $instance->toHTML();
	}
}
