<?php

    include 'Funcionario.php';
    include 'Estagiario.php';

    $pedrinho = new Estagiario();

    $pedrinho->setSalario(248);

    echo 'O salario do Pedrinho é R$: ' .$pedrinho->getSalario() . "<br>";

?>