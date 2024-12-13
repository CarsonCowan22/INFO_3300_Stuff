<?php
class Fortune {
    public $relationships = "";
    public $money = "";
    public $fame = "";
    public $lucky_number = 0;

    public function __construct($relationships, $money, $fame, $lucky_number) {
        $this->relationships = $relationships;
        $this->money = $money;
        $this->fame = $fame;
        $this->lucky_number = $lucky_number;
    }

    public function getRelationships() {
        return $this->relationships;
    }

    public function getMoney() {
        return $this->money;
    }

    public function getFame() {
        return $this->fame;
    }

    public function getLuckyNumber() {
        return $this->lucky_number;
    }

    public function __toString() {
        return "Relationships: " . $this->getRelationships() . "<br>Money: " . $this->getMoney() . "<br>Fame: " . $this->getFame() . "<br>Lucky Number: " . $this->getLuckyNumber();
    }
}
