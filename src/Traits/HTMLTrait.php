<?php


namespace SergeLiatko\HTML\Traits;

use SergeLiatko\HTML\Tag;

/**
 * Trait HTMLTrait
 *
 * @package SergeLiatko\HTML\Traits
 */
trait HTMLTrait {

	/**
	 * @param array $attributes
	 * @param Tag[]|string[] $content
	 * @param string $tag
	 * @param bool $self_closing
	 *
	 * @return string
	 */
	public static function HTML( array $attributes = array(), string|array $content = array(), string $tag = '', bool $self_closing = false ): string {
		$instance = new self( $attributes, $content, $tag, $self_closing );

		return $instance->toHTML();
	}
}
