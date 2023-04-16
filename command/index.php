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

    public function makeCross($breakline = PHP_EOL){
        return $this->cross->generate($breakline);
    }

    public function makeX($breakline = PHP_EOL){
        return $this->x->generate($breakline);
    }
}