<?php


class Funcionario
{
    private $nome;
    private $cargo;

    /**
     * Funcionario constructor.
     * @param $nome string|null
     * @param $cargo
     * @param $carreira
     */
    public function __construct(?string $nome, $cargo)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    /**
     * @return float|int
     */
    public function calculaSalario()
    {
        if (is_null($this->cargo)) {
            var_dump("cargo não atribuído");
            return -1;
        }
        return $this->cargo->salarioPorCarreira();
    }

    /**
     * @return string|null
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }
}
