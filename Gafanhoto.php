<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{

    private $login, $totAssistido;

    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function assistirMaisUm(){
        $this->totAssistido ++;
    }


    public function get_login(){
        return $this->login;
    }

    public function set_login($login){
        $this->login = $login;
    }
    
    public function get_totAssistido(){
        return $this->totAssistido;
    }
    
    public function set_totAssistido($totAssistido){
        $this->totAssistido = $totAssistido; 
    }

}


?>