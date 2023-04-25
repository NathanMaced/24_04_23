<?php

    class Funcionarios{
        private $codigo;
        public $nome;
        private $nascimento;
        private $salario;

        function setSalario($salario){
            if(is_numeric($salario)&&($salario > 0))
            {
                $this->salario = $salario;
            }
        }
    }

?>