<?php
class Career {
    public $dentist_score = 0;
    public $doctor_score = 0;
    public $pharmacist_score = 0;
    public $career = "";

    public function __construct($dentist_score, $doctor_score, $pharmacist_score, $career) {
        $this->dentist_score = $dentist_score;
        $this->doctor_score = $doctor_score;
        $this->pharmacist_score = $pharmacist_score;
        $this->career = $career;
    }

    public function getDentistScore() {
        return $this->dentist_score;
    }

    
    public function geDoctorScore() {
        return $this->doctor_score;
    }

    public function getPharmacistScore() {
        return $this->pharmacist_score;
    }

    public function getCareer() {
        return $this->career;
    }
    
    public function __toString(){
        return $this->getDentistScore() . $this->geDoctorScore() . $this->getPharmacistScore() . " = " . $this->getCareer();
    }
}