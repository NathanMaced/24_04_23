<?php

    class Produto{
        var $codigo;
        var $Descricao;
        var $Preco;
        var $Quantidade;

        function imprimeEtiqueta()
        {
            print 'Codigo: ' .$this->Codigo. "<br>";
            print 'Descrição: ' .$this->Descricao . "<br><br>";
        }
    }
  
?>