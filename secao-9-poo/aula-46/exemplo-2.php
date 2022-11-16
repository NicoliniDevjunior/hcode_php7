<?php

    class Pessoa {

        public $nome = "Rasmus";
        protected $idade = 48;
        private $senha = "12345";

        public function verDados(){

            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";

        }

    }

    // A classe programador pega os atributos da classe pessoa, menos o que for privado
    class Programador extends Pessoa {

        public function verDados(){
            
            //https://www.php.net/manual/en/function.get-class.php
            echo get_class($this) . "<br/>"; // Retorna o nome da classe da qual object é uma instância.

            echo $this->nome . "<br/>";  // Só de chamar a classe todo mundo pode ver
            echo $this->idade . "<br/>"; // Exibe somente dentro da própria classe ou da que herda esse atributo
            echo $this->senha . "<br/>"; // Não vai exibir pois esse é um atributo privado, só quem pertence a classe pode ver

        }

    }

    $objeto = new Programador();

    //echo $objeto->nome . "<br/>";

    $objeto->verDados();

?>