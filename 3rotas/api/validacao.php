<?php

function validaProdutos($dados){
    $erro = false;

    if($dados['titulo'] == ''){
        $erro .= '<p>Preencha um Título!</p>';
    } 

    if($dados['descricao'] == ''){
        $erro .= '<p>Preencha uma Descricao!</p>';
    } 

    if($dados['valor'] == ''){
        $erro .= '<p>Preencha um Valor!</p>';
    } 

    return $erro;
}

?>