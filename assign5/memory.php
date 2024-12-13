
<?php
class Memory
{
    public $question_one = "";
    public $question_two = "";
    public $outcome = "";

    public function __construct($question_one, $question_two, $outcome) {
        $this->question_one = $question_one;
        $this->question_two = $question_two;
        $this->outcome = $outcome;
    }

    public function getQuestionOne() {
        return $this->question_one;
    }

    public function getQuestionTwo() {
        return $this->question_two;
    }

    public function getOutcome() {
        return $this->outcome;
    }

    public function __toString() {
        return "Question1: " . $this->question_one . "<br>Question2: " . $this->question_two . "<br>Outcome: " . $this->outcome;
    }
}
