<?php

require_once __DIR__ . '/animal.php';

class Bird extends Animal {
    protected float $wingSpan;

    public function __construct(string $name, int $age, float $wingSpan) {
        parent::__construct($name, $age);
        $this->wingSpan = $wingSpan;
    }

    public function getWingSpan(): float {
        return $this->wingSpan;
    }

    public function setWingSpan(float $wingSpan): void {
        $this->wingSpan = $wingSpan;
    }
}
?>
