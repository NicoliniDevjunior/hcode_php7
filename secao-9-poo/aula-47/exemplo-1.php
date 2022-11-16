<?php
    // https://www.php.net/manual/pt_BR/language.oop5.inheritance.php

    class Documento { // Classe PAI

        private $numero;

        public function getNumero() {

            return $this->numero; // retorno Esse VALOR

        }

        public function setNumero($n) {

            $this->numero = $n; // Essa VARIAVEL recebe VALOR

        }

    }

    // A subclasse CPF herda(extends) todos os métodos públicos e protegidos, propriedades e constantes da classe pai.
    class CPF extends Documento { // Essa classe CPF é FILHA da classe Documento PAI
        // A classe filha acessa os metodos e atributos da classe pai mas o pai não acesssa os da classe filha.
        
        public function validar():bool { // Defino que essa função retorna um valor boleano

            $numeroCPF = $this->getNumero();

            return true;

        }

    }

    $doc = new CPF();

    $doc->setNumero("111222333-44");

    var_dump($doc->validar()); // imprimo um valor boleano

    echo "<br/>";

    echo $doc->getNumero();

?>