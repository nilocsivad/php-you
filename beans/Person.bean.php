<?php
class Person {
	protected $name;
	function Person( $name ) {
		$this->name = $name;
	}
	function getName() {
		return $this->name;
	}
	function __toString() {
		return "{\"name\":\"" . $this->name . "\"}";
	}
}