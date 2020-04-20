<?php

namespace SergeLiatko\HTML\Interfaces;


/**
 * Interface TagInterface
 *
 * @package SergeLiatko\HTML\Interfaces
 */
interface TagInterface {

	/**
	 * @param array                            $attributes
	 * @param string[]|\SergeLiatko\HTML\Tag[] $content
	 * @param string                           $tag
	 * @param bool                             $self_closing
	 *
	 * @return string
	 */
	public static function HTML( $attributes = array(), $content = array(), $tag = '', $self_closing = false );

	/**
	 * @return string The tag HTML.
	 */
	public function toHTML();
}
