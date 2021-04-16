<?php

require_once 'Cargo.php';


class Desenvolvedor extends Cargo
{
    public function salarioCarreira(): ?float
    {
        return $this->carreira?->getSalario();
    }
}
