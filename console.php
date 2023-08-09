<?php

require_once 'Dog.php';

$dogs = [
    'shiba-inu' => new ShibaInu(),
    'pug' => new Pug(),
    'dachshund' => new Dachshund(),
    'stuffed-labrador' => new StuffedLabrador(),
    'rubber-dachshund' => new RubberDachshund(),
];

if (isset($argv[1])) {
    $command = strtolower($argv[1]);
    if (isset($argv[2])) {
        $dogType = strtolower($argv[2]);
        if (isset($dogs[$dogType])) {
            $dog = $dogs[$dogType];
            switch ($command) {
                case 'sound':
                    echo $dog->makeSound() . PHP_EOL;
                    break;
                case 'hunt':
                    if ($dog->canHunt()) {
                        echo "{$dog->getName()} is hunting!" . PHP_EOL;
                    } else {
                        echo "{$dog->getName()} can't hunt!" . PHP_EOL;
                    }
                    break;
                default:
                    echo "Invalid command!" . PHP_EOL;
            }
        } else {
            echo "Unknown dog type!" . PHP_EOL;
        }
    } else {
        echo "Missing dog type!" . PHP_EOL;
    }
} else {
    echo "Missing command!" . PHP_EOL;
}