<?php

abstract class Pessoa{
    protected $nome, $idade, $sexo, $experiencia;


    public function __construct($nome, $idade, $sexo,){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }


    protected function ganharExp($n){
        $this->experiencia += $n;
    }






    public function get_nome(){
        return $this->nome;
    }

    public function set_nome($nome){
        $this->nome = $nome;
    }
    
    public function get_idade(){
        return $this->idade;
    }
    
    public function set_idade($idade){
        $this->idade = $idade; 
    }

    public function get_sexo(){
        return $this->sexo;
    }
    
    public function set_sexo($sexo){
        $this->sexo = $sexo; 
    }

    public function get_experiencia(){
        return $this->experiencia;
    }
    
    public function set_experiencia($experiencia){
        $this->experiencia = $experiencia; 
    }




}

?>