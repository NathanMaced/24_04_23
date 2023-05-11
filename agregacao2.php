<?php

    include_once 'Cesta.php';
    include_once 'Fornecedor.php';
    include_once 'Produto.php';

    $fornecedor = new Fornecedor;
    $fornecedor->RazaoSocial = 'Produto Bom Gosto S.A.'

    $cesta = new Cesta();

    $cesta->AdicionaItem($fornecedor);

    $cesta->CalculaTotal();

?>