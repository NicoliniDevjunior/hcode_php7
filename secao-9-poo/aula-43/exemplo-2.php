<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;
    
    // Inicio com o get para pegar e Modelo com M maiusculo que é composto
    public function getModelo() {

        return $this->modelo; // $this = esse -> modolo ou objeto
        // retorno o valor do atributo    
    }

    public function setModelo($modelo) {
        
        $this->modelo = $modelo;
        // não preciso retornar atributo, se eu quiser chamar o atributo uso o metodo get
        // o metoro set eu só passo o valor
    }

    //get pego os valores
    public function getMotor():float {

        return $this->motor;

    }

    // set mudo os valores
    public function setMotor($motor) {

        $this->motor = $motor;

    }

    public function getAno(){

        return $this->ano;

    }

    public function setAno($ano) {

        $this->ano = $ano;

    }

    public function exibir(){

        return array(

            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()

        );

    }

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());

?>