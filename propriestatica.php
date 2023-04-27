<?php

    class Aplicacao{
        static $Quantidade;

        function __construct($nome){
            self::$Quantidade++;
            $i = self::$Quantidade;
            echo "Nova Aplicação número . $i: $nome <br>";
        }
    }

    new Aplicacao(' Dia ');
    new Aplicacao(' Gimp ');
    new Aplicacao(' Grumeric ');
    new Aplicacao(' Abiword ');
    new Aplicacao(' Evolution ');

    echo '<br>Quantidade de Aplicações ='.Aplicacao::$Quantidade."<br>";
?>