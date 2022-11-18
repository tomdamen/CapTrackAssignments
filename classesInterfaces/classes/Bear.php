<?php 


abstract class Bear implements Animal {
    public $weight;
    public $sound;
    public $movementSpeed;



    public function getSound() : string {
        return $this->sound;
    }
    public function getMovementSpeed() : int {
        return $this->movementSpeed;
    }
    public function getWeight() : int {
        return $this->weight;
    }


}