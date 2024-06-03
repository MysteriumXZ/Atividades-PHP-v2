<?php 

class Carro{
    
    private $cor;
    private $marca;
    private $modelo;
    
    function ligar(){
        echo "Carro Ligado!";
    }

    function desligar(){
        echo "Carro Desligado";
    }
    
    function get_color(){
        return $this->cor;
    }

    function set_cor($nova_cor){
        $this->cor = $nova_cor;
    }

    function get_marca(){
        return $this->marca;
    }
    
    function set_marca($novamarca){
        $this->marca = $novamarca;
    }

    function get_modelo(){
        return $this->modelo;
    }
    
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }



}

    $novo_carro = new Carro();
    
    $novo_carro->set_cor("Preto");
    $novo_carro->set_marca("Ford");
    $novo_carro->set_modelo("Mustang");

  






?>