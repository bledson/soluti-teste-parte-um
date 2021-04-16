<?php


class Carreira
{
    private $nome;
    private $salario;

    /**
     * Carreira constructor.
     * @param $nome string|null
     * @param $salario double|null
     */
    public function __construct(?string $nome, ?float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    /**
     * @return string|null
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param string|null $nome
     */
    public function setNome(?string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return float|null
     */
    public function getSalario(): ?float
    {
        return $this->salario;
    }

    /**
     * @param float|null $salario
     */
    public function setSalario(?float $salario): void
    {
        $this->salario = $salario;
    }
}
