<?php
class Awards{
	public $name;
	public $desc;
	
	public function display() {
		echo ' <br />'.$this->name.'; '.$this->desc.' <br />';
	}
}