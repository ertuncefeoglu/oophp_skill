<?php
class MyClass {
	protected $var = 'I like OOP';

	public function __construct($text) {
		$this->var = $text;
	}	

	public function my_function() {
		echo $this->var;
	}
}

class NewClass extends MyClass{
	public function display() {
		//echo $this->var;
		echo "naber lo";
	}
}

$myclass = new MyClass('Hi');
$myclass->my_function();

NewClass::display();