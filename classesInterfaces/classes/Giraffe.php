<?php

class Giraffe implements Animal {

    public $sound = "chonk";
    public $weight = 500;
    public $movementSpeed = 25;
    public $description;

    public function __construct(string $description) {
        $this->description = $description;
    }

    public function getSound() : string {
        return $this->sound;
    }
    public function getMovementSpeed() : int {
        return $this->movementSpeed;
    }
    public function getWeight() : int {
        return $this->weight;
    }


    public function getDescription() : string {
        return $this->description;
    }

}