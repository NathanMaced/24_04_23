<?php

    class Cesta{
       
        
        private $itens;

        function AdicionarItem(Produto $iten){
            $this->itens[] = $iten;

        }

        function ExibeLista(){
            foreach ($this->itens as $item) {
                $item->ImprimeEtiqueta();
            }
        }
        function Calculadora(){
            $total = 0;
            foreach ($this->itens as $item) {

                $total += $item->Preco;
            }
        }
        {   
            print 'Codigo: ' .$this->Codigo. "<br>";
            print 'Descrição: ' .$this->Descricao . "<br><br>"
        }
    }
  
?>


