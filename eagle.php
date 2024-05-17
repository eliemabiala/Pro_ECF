<?php
require_once __DIR__ . '/animal.php';

class Eagle extends Animal {
    public float $flightSpeed;

    public function __construct(string $name, int $age, float $flightSpeed) {
        parent::__construct($name, $age);
        $this->flightSpeed = $flightSpeed;
    }

    private function __clone() {
           }
}
?>
