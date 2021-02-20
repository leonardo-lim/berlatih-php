<?php

require 'Ape.php';
require 'Frog.php';

class Animal {
    public $name;
    private $legs = 2;
    private $coldBlooded = false;

    public function __construct($name) {
        return $this->name = $name . "<br>";
    }

    public function getLegs() {
        return $this->legs . "<br>";
    }

    public function getColdBlooded() {
        return $this->coldBlooded ? "true<br>" : "false<br>";
    }
}

?>