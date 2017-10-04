<?php
/**
 * Created by PhpStorm.
 * User: matheusaugusto
 * Date: 04/10/17
 * Time: 08:15
 */

class Teste
{
    public $nome;
    public $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;

        return $this;
    }

    public function set_Nome(string $nome)
    {
        $this->nome = $nome;
    }

    public function get_Nome():string
    {
         return $this->nome;
    }

    public function set_cpf(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function get_cpf(string $cpf):string
    {
        return $this->cpf;
    }

    public function __toString():string
    {
        return "$this->nome - $this->cpf";
    }
}

$teste = new Teste('João','123123123');

//table

echo $teste->get_Nome();




