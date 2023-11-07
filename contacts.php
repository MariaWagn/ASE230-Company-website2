<?php
class Contacts{
	public $name;
	public $email;
	public $subject;
	public $message;
	
	public function display() {
		echo ' <br />'.$this->name.'; '.$this->email.'; '.$this->subject.'; '.$this->message.' <br />';
	}	
}