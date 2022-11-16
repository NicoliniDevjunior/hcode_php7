<?php

    class Documento {

        private $numero;

        public function getNumero(){

            return $this->numero;

        }

        public function setNumero($numero){

            // Para acessar metodos estaticos uso o :: ao invez de -> 
            $resultado = Documento::validarCPF($numero); // Chamo minha classe Documento chamo o metodo validarCPF com :: 

            if ($resultado === false) {

                throw new Exception("CPF informado não é válido.", 1);

            }

            $this->numero = $numero;

        }

        // https://www-php-net.translate.goog/manual/en/language.oop5.static.php?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=pt-BR&_x_tr_pto=wapp
        public static function validarCPF($cpf):bool{

            if(empty($cpf)) {
                return false;
            }
        
            $cpf = preg_match('/[0-9]/', $cpf) ? $cpf : 0;
        
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
            
            
            if (strlen($cpf) != 11) {
                echo "length";
                return false;
            }
            
            else if ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
                return false;
        
            } else {   
                
                for ($t = 9; $t < 11; $t++) {
                    
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }
        
                return true;
            }

        }

    }

    //Duas formas

    /*
    //Primeira
    $cpf = new Documento();
    $cpf->setNumero("87867147241");

    var_dump($cpf->getNumero());

    */

    //Segunda
    var_dump(Documento::validarCPF("87867147241"));

?>