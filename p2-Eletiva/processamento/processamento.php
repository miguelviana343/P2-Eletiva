<?php

require 'funcoesBD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome= trim($_POST['nome']);

    $preco_original = floatval($_POST['preco_original']);

    $preco_promocional =floatval($_POST['preco_promocional']);



    if (empty($nome) || $preco_original <= 0 || $preco_promocional <= 0 || $preco_promocional >= $preco_original) {

        header("Location: index.php");

        exit;

    }

    $sucesso = inserirJogo($nome, $preco_original, $preco_promocional);



    header("Location: index.php");

    exit;

}

?>
 