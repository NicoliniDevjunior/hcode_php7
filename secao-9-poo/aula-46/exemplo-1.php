<?php
    // Aula encapsulamento

    class Pessoa {

        // Vemos 3 atributos com seus Modificadores de acesso ou encapsulamento
        public $nome = "Rasmus";  // Todo mundo pode ver
        protected $idade = 48;    // Somente quem estiver na classe ou herdar a classe pode ver
        private $senha = "12345"; // Somente quem estiver dentro da mesma classe pode ver 

        public function verDados(){ // metodo publico

            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";

        }

    }

    $objeto = new Pessoa();

    //echo $objeto->nome . "<br/>";

    $objeto->verDados();


    /**
     * Se eu tentar acessar para obter o valor usando: echo $objeto->nome . "<br/>"; 
     * eu consigo por que o atributo é publico.
     * 
     * 
     * Se eu tentar o mesmo com o atributo com o modificador protected, não consigo,
     * Só pode acessar um atributo ou um metodo protected quem estiver dentro da
     * própria classe ou quem erda dessa classe, o objeto propriadamente não consegue acessar
     * 
     * Assim acontece com o atributo private, ele está um nivel acima de proteção 
     * que o protected ele é mais protegido que o protected
     * 
     * A diferença do private é que nem mesmo os herdeiros dessa classe consegue ter acesso
     * só quem está dentro da propria classe consegue acessar
     * 
    */

?>