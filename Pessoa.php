<?php

require_once 'Data.php';

abstract class Pessoa{

    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;

    public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano)
    {
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->sexo=$sexo;
        $this->dataNascimento=new Data($dia, $mes, $ano);

    }

    public function imprimir()
    {
        echo 'Nome: ' . $this->getNome() . "<br>";
        echo 'CPF: ' . $this->getCpf() . "<br>";
        echo 'Sexo: ' . $this->getSexo() . "<br>";
        echo 'Data de nascimento: ' . $this->getDataNascimento() . "<br>";
    }


    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

     
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

     
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

  
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    } 
    public function setDataNascimento(Data $dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }
}



?>