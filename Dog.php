<?php

class Dog {
    protected $name;
    protected $sound;
    protected $canHunt;

    public function __construct($name, $sound, $canHunt) {
        $this->name = $name;
        $this->sound = $sound;
        $this->canHunt = $canHunt;
    }

    public function getName() {
        return $this->name;
    }

    public function makeSound() {
        return $this->sound;
    }

    public function canHunt() {
        return $this->canHunt;
    }
}

class ShibaInu extends Dog {
    public function __construct() {
        parent::__construct('Shiba Inu', 'woof! woof!', true);
    }
}

class Pug extends Dog {
    public function __construct() {
        parent::__construct('Pug', 'woof!', true);
    }
}

class Dachshund extends Dog {
    public function __construct() {
        parent::__construct('Dachshund', 'woof! woof!', true);
    }
}

class StuffedLabrador extends Dog {
    public function __construct() {
        parent::__construct('Stuffed Labrador', '', false);
    }
}

class RubberDachshund extends Dog {
    public function __construct() {
        parent::__construct('Rubber Dachshund', 'squeak! squeak!', false);
    }
}