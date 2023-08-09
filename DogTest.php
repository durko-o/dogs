<?php

require_once 'Dog.php';

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testMakeSound()
    {
        $shibaInu = new ShibaInu();
        $this->assertEquals('woof! woof!', $shibaInu->makeSound());

        $pug = new Pug();
        $this->assertEquals('woof!', $pug->makeSound());

        $stuffedLabrador = new StuffedLabrador();
        $this->assertEquals('', $stuffedLabrador->makeSound());

        $rubberDachshund = new RubberDachshund();
        $this->assertEquals('squeak! squeak!', $rubberDachshund->makeSound());
    }

    public function testCanHunt()
    {
        $shibaInu = new ShibaInu();
        $this->assertTrue($shibaInu->canHunt());

        $pug = new Pug();
        $this->assertTrue($pug->canHunt());

        $stuffedLabrador = new StuffedLabrador();
        $this->assertFalse($stuffedLabrador->canHunt());

        $rubberDachshund = new RubberDachshund();
        $this->assertFalse($rubberDachshund->canHunt());
    }
}
