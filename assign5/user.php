<?php
class User
{
    public $username = "";
    public $waiver_filled = false;

    public function __construct($username, $waiver_filled) {
        $this->username = $username;
        $this->waiver_filled = $waiver_filled;   
    }

    public function getUsername() {
        return $this->username;
    }

    public function getWaiverFilled() {
        return $this->waiver_filled;
    }

    public function setWaiverFilled($waiver_filled) {
        $this->waiver_filled = $waiver_filled;
    }

    public function __toString() {
        return "Username: " . $this->getUsername() . " | Waiver filled out: " . ($this->getWaiverFilled() ? "yes" : "no");
    }
}
