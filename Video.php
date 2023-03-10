<?php
require_once 'AcoesVideo.php';

class Video implements AcoesVideo{
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;


    
public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }
    public function  play(){
        $this->curtidas ++;
    }

    public function  pause(){
        $this->reproduzindo = false;
    }

    public function  like(){
        $this->reproduzindo = true;
    }



    public function get_titulo(){
        return $this->titulo;
    }

    public function set_titulo($titulo){
        $this->titulo = $titulo;
    }
    
    public function get_avaliacao(){
        return $this->avaliacao;
    }
    
    public function set_avaliacao($avaliacao){
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $avaliacao; 
    }

    public function get_views(){
        return $this->views;
    }
    
    public function set_views($views){
        $this->views = $views; 
    }

    public function get_curtidas(){
        return $this->curtidas;
    }
    
    public function set_curtidas($curtidas){
        $this->curtidas = $curtidas; 
    }

    public function get_reproduzindo(){
        return $this->reproduzindo;
    }
    
    public function set_reproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo; 
    }


}



?>