<?php
abstract class Animal {
	public $name;
	public $colour;

	public function describe() {
		return $this->name . ' is ' . $this->colour;
	}

	abstract public function makeSound();
}

class Duck extends Animal {
	public function describe() {
		return parent::describe();
	}

	public function makeSound() {
		return 'Quack!';
	}
}

class Dog extends Animal {
	public function describe() {
		return parent::describe();
	}

	public function makeSound() {
		return 'Woof!';
	}
}

$animal = new Dog();
$animal->name = 'Socks';
$animal->colour = 'Brown';
// echo $animal->describe();
echo $animal->makeSound();