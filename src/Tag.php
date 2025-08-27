<?php


namespace SergeLiatko\HTML;

use SergeLiatko\HTML\Interfaces\TagInterface;
use SergeLiatko\HTML\Traits\HTMLTrait;

/**
 * Class Tag
 *
 * @package SergeLiatko\HTML
 */
class Tag implements TagInterface {

	use HTMLTrait;

	/**
	 * @var string $tag HTML tag name
	 */
	protected string $tag;

	/**
	 * @var array $attributes Array of HTML attributes where keys are attributes and values are values.
	 */
	protected array $attributes;

	/**
	 * @var string[]|Tag[] $content Inner content of the tag as an array of strings or tags.
	 */
	protected array $content;

	/**
	 * @var bool $self_closing Flag to indicate the tag is self-closing.
	 */
	protected bool $self_closing;

	/**
	 * Tag constructor.
	 *
	 * @param array $attributes
	 * @param string|Tag[]|string[] $content
	 * @param string $tag
	 * @param bool $self_closing
	 */
	public function __construct( array $attributes = array(), array|string $content = array(), string $tag = '', bool $self_closing = false ) {
		//set tag
		$this->setTag( $tag );
		//force self-closing for void tags
		if ( in_array( $this->getTag(), $this->getVoidTags() ) ) {
			$self_closing = true;
		}
		//set self-closing
		$this->setSelfClosing( $self_closing );
		//set attributes
		$this->setAttributes( $attributes );
		//set content
		$this->setContent( $content );
	}

	/**
	 * @return string Formatted HTML.
	 */
	public function __toString() {
		return $this->toHTML();
	}

	/**
	 * @param mixed|null $data
	 *
	 * @return bool
	 */
	protected function isEmpty( mixed $data = null ): bool {
		return empty( $data );
	}

	/**
	 * @return string The opening tag HTML.
	 */
	protected function open(): string {
		$tag = $this->getTag();

		return sprintf(
			'<%1$s %2$s%3$s>',
			$tag,
			$this->attributes(),
			( $this->isSelfClosing() ? ( in_array( $tag, $this->getVoidTags() ) ? '' : '/' ) : '' )
		);
	}

	/**
	 * @return string The closing tag HTML.
	 */
	protected function close(): string {
		return $this->isSelfClosing() ? '' : sprintf( '</%1$s>', $this->getTag() );
	}

	/**
	 * @return string Tag inner content HTML.
	 */
	protected function content(): string {
		if ( $this->isEmpty( $content = $this->getContent() ) ) {
			return '';
		}
		array_walk( $content, function ( &$item ) {
			/** @var Tag|string $item */
			$item = ( $item instanceof Tag ) ? $item->toHTML() : $item;
		} );

		return join( '', $content );
	}

	/**
	 * @return string Formatted HTML attributes.
	 */
	protected function attributes(): string {
		if ( $this->isEmpty( $attributes = $this->getAttributes() ) ) {
			return '';
		}
		array_walk( $attributes, function ( &$value, $key ) {
			$value = sprintf( '%1$s="%2$s"', $key, esc_attr( $value ) );
		} );

		return join( ' ', $attributes );
	}

	/**
	 * @return string The tag HTML.
	 */
	public function toHTML(): string {
		return join( '', array( $this->open(), $this->content(), $this->close() ) );
	}

	/**
	 * @return string
	 */
	public function getTag(): string {
		return $this->tag;
	}

	/**
	 * @param string $tag
	 *
	 * @return Tag
	 */
	public function setTag( string $tag ): static {
		$this->tag = strtolower( $tag );

		return $this;
	}

	/**
	 * @return array
	 */
	public function getAttributes(): array {
		return $this->attributes;
	}

	/**
	 * @param array $attributes
	 *
	 * @return Tag
	 */
	public function setAttributes( array $attributes ): static {
		$this->attributes = $attributes;

		return $this;
	}

	/**
	 * @return Tag[]|string[]
	 */
	public function getContent(): array {
		return $this->content;
	}

	/**
	 * @param Tag[]|string[] $content
	 *
	 * @return Tag
	 */
	public function setContent( array|string $content ): static {
		if ( ! is_array( $content ) ) {
			$content = array( $content );
		}
		$this->content = array_filter( $content, function ( $item ) {
			return ! ! ( is_string( $item ) || ( $item instanceof Tag ) );
		} );

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isSelfClosing(): bool {
		return $this->self_closing;
	}

	/**
	 * @param bool $self_closing
	 *
	 * @return Tag
	 */
	public function setSelfClosing( bool $self_closing ): static {
		$this->self_closing = ! empty( $self_closing );

		return $this;
	}

	/**
	 * @return array
	 */
	public function getVoidTags(): array {
		return array(
			"area",
			"base",
			"br",
			"col",
			"embed",
			"hr",
			"img",
			"input",
			"link",
			"meta",
			"param",
			"source",
			"track",
			"wbr",
		);
	}
}
