<?php

require_once 'Carreira.php';


abstract class Cargo
{
    protected $carreira;

    /**
     * Cargo constructor.
     * @param $carreira Carreira|null
     */
    public function __construct(?Carreira $carreira)
    {
        $this->carreira = $carreira;
    }

    abstract public function salarioCarreira(): ?float;
}
