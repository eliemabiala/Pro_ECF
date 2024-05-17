<?php
require_once __DIR__ . '/animal.php';

class Dog extends Animal {
    public string $breed;

    public function __construct(string $name, int $age, string $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    private function __clone() {
        
    }
}
?>
