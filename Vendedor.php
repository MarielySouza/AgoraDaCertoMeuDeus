<?php

   require_once 'Pessoa.php';
   
   class Vendedor extends Pessoa{

    private float $salario;
    private float $comissao;

    public function __construct(string $nome, string $cpf, string $sexo, Data $dataNascimento, float $salario, float $comissao)
    {
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->sexo=$sexo;
        $this->dataNascimento=$dataNascimento;
        $this->salario=$salario;
        $this->comissao=$comissao;

    }

    public function imprimir()
    {
        echo 'Nome: ' . $this->getNome() . "<br>";
        echo 'CPF: ' . $this->getCpf() . "<br>";
        echo 'Sexo: ' . $this->getSexo() . "<br>";
        echo 'Data de nascimento: ' . $this->getDataNascimento() . "<br>";
        echo 'Salario: ' . $this->getSalario() . "<br>";
        echo 'Comissão: ' . $this->getComissão() . "<br>";
    }



    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    
    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }
   }

?>