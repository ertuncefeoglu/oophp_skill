<?php
class MyClass {
	public $var = 'I like OOP';

	public function __construct($text) {
		$this->var = $text;
	}	

	public function my_function() {
		echo $this->var;
	}
}

$myclass = new MyClass('Hi');
$myclass->my_function();

$newclass = new MyClass('Hey');
$newclass->my_function();