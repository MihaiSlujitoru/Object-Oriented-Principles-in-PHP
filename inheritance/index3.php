<?php

class AchievementType {
    public function name() {

    }

    public function difficulty() {

    }

    public function icon() {

    }
}

class FirstThousandPoints extends AchievementType {
    public function qualifier($user) {

    }

    public function name() {
        return 'Welcome Aboard'; //overwrite the main Achievement Class name method
    }
}