<?php

namespace Command;

require "./app/classes/shapes.php";

use App\Classes\Cross;
use App\Classes\X;

// require "./autoload.php";

class ShapeHandler{

    protected $cross;
    protected $x;

    public function __construct()
    {
        $this->cross = new Cross();
        $this->x = new X();
    }

    public function makeCross(){
        return $this->cross->generate();
    }

    public function makeX(){
        return $this->x->generate();
    }
}