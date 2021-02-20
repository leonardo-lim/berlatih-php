<?php

require 'animal.php';

$sheep = new Animal("shaun");
echo $sheep->name; // "shaun"
echo $sheep->getLegs(); // 2
echo $sheep->getColdBlooded(); // false

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"

?>