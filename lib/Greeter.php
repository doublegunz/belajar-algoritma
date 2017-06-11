<?php
class Greeter
{
	public $who;

	function __construct($who)
	{
		$this->who = $who;
	}

	function greet()
	{
		echo "hello {$this->who}";
	}
}