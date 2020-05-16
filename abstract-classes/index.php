<?php

/*
What I learned from this lesson:
1. It is recommended to use Abstract keyword in a base/parent class that you don't want to be instantiated.
2. The magic Laravel framework is doing regarding the conversion of CamelCase
 to Camel Case is just a preg_replace function usually seen in an abstract class.
3. You can use abstract to a method in a base/parent class if you want to
 make that method required when designing a child class.
*/

abstract class AchievementType {
    public function name() {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon() {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType{
    public function qualifier($user) {

    }
}

class FirstBestAnswer extends AchievementType {
    public function qualifier($user) {

    }
}

$achievement = new FirstBestAnswer();

echo $achievement->icon();

