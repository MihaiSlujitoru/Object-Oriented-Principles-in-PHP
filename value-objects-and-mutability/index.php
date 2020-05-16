<?php 

class Age {

    private $age;

    public function __construct($age)
    {
        if($age < 0 || $age > 125) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    public function increment() {
        $this->age += 1;
    }

}

function register(string $name, Age $age) {

}

register('John Doe', $age);