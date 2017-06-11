<?php 
//default is nadia
// Author: Gun Gun Priatna <gungunpriatna02@gmail.com>

require "Greeter.php";
echo "what's your name?<br>";
$name = 'nadia';

$greeter = new Greeter($name);

$greeter->greet();