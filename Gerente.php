<?php

require_once 'Cargo.php';


class Gerente extends Cargo
{
    public function salarioCarreira(): ?float
    {
        return $this->carreira?->getSalario();
    }
}
