<?php 
//default is nadia
// Author: Gun Gun Priatna <gungunpriatna02@gmail.com>

require "Greeter.php";
$name = 'nadia';

$greeter = new Greeter($name);

$greeter->greet();