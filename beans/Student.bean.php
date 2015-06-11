<?php
include_once 'Person.bean.php';
class Student extends Person {
	protected $grade;
	function Student( $name, $grade ) {
		parent::Person ( $name );
		$this->grade = $grade;
	}
	function __toString() {
		return "{\"name\":\"" . $this->name . "\",\"grade\":\"" . $this->grade . "\"}";
	}
}