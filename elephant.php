<?php
require_once __DIR__ . '/animal.php';

class Elephant extends Animal {
    public float $tuskLength;

    public function __construct(string $name, int $age, float $tuskLength) {
        parent::__construct($name, $age);
        $this->tuskLength = $tuskLength;
    }

    private function __clone() {
          }
}
?>
