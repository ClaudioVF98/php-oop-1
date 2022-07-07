<?php

class Moovie {
    public $name;
    public $production;
    public $cost;
    public $typeOfTicket;

    public function __construct(string $name_passed, string $production_passed, int $cost_passed) {
        $this->name = $name_passed;
        $this->production = $production_passed;
        $this->cost = $cost_passed;
    }

    public function ticket() {
        if ($this->cost < 11) {
            $this->typeOfTicket = "Normal Ticket";
        } else if ($this->cost > 11) {
            $this->typeOfTicket = "Golden Ticket";
        }
        
    }
}

