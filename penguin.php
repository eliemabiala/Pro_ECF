<?php
require_once __DIR__ . '/animal.php';

class Penguin extends Animal {
    public float $swimSpeed;

    public function __construct(string $name, int $age, float $swimSpeed) {
        parent::__construct($name, $age);
        $this->swimSpeed = $swimSpeed;
    }

    private function __clone() {
          }
}
?>
