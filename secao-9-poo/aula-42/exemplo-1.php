<?php

    class Pessoa { // Toda classe sempre vai começar com letra maiuscula

        public $nome; // Atributo

        public function falar() { // Método
            /* Só dentro de um metodo que irei usar $this 
            que é uma variavel interna do PHP 
            que serve para referenciar atributos e metodos dentro de outros metodos
            */
            return "O meu nome é " .$this->nome; // Referencio o sem o $ nome o $this faz o papel do $
        
        }

    }

    $marcus = new Pessoa(); // Objeto variavel oi instancia Pessoa() que representa uma classe posso usar o Pessoa sem o () no final tambem
    $marcus->nome = "Marcus Ribeiro"; // Referencio um atributo com o ->, só consigo acessar a classe e referenciar por que ele é publico
    echo $marcus->falar();

?>