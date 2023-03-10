<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao{

    private $espectador, $filme;

    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->set_views($this->filme->get_views() + 1);
        $this->espectador->set_totAssistido($this->espectador->get_totAssistido() + 1);
    }

    public function avaliar(){
        $this->filme->set_Avaliacao(5);
    }

    public function avaliarNota($nota){
        $this->filme->set_Avaliacao($nota);
    }

    public function avaliarPorc($porc){
        $nova = 0;
        if($porc <= 20){
            $nova = 3;
        } elseif ($porc <= 50){
            $nova = 5;
        } elseif($porc <=90){
            $nova = 8;
        } else {
            $nova = 10;
        }
    }





    public function get_espectador(){
            return $this->espectador;
        }

    public function set_espectador($espectador){
        $this->espectador = $espectador;
    }
    
    public function get_filme(){
        return $this->filme;
    }
    
    public function set_filme($filme){
        $this->filme = $filme; 
    }

}
?>