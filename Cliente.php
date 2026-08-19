<?php

   require_once 'Pessoa.php';
   require_once 'Data.php';
   
   class Cliente extends Pessoa{

    private float $dataCadastro;
    private string $preferencias;

    public function __construct(string $nome, string $cpf, string $sexo, string $preferencias)
    {
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->sexo=$sexo;
        $this->dataCadastro = new Data(date("d"), date("m"), date("Y"));
        $this->preferencias=$preferencias;
  
    }

    public function imprimir()
    {
        echo 'Nome: ' . $this->getNome() . "<br>";
        echo 'CPF: ' . $this->getCpf() . "<br>";
        echo 'Sexo: ' . $this->getSexo() . "<br>";
        echo 'Data de cadastro: ' . $this->getDataCadastro() . "<br>";
        echo 'Preferencias: ' . $this->getPreferencias() . "<br>";
        
    }





    
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    
    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;

        return $this;
    }
   }

?>