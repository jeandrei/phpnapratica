<?php
/**
 *
 * Arrays:
 * podemos criar de duas formas
 * $dados = array("titulo","descricao");
 * ou 
 * $dados =["titulo","descricao"];
 * quando criamos assim sem associação o array cria um índice numérico
 * $dados=[0=>"titulo",1=>"descricao"];
 * Podemos substituir os indices numéricos por outros valores o que é um
 * array associativo
 * $dados=["titulo"=>"SistemaModelo","descricao"=>"Programando com PHP."];
 * 
 * 
 */

 function getInfo($atributo){
    $dados = ["titulo"=>"SistemaModelo","descricao"=>"Programando com PHP."];
    return $dados[$atributo];
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo getInfo("titulo");?></title>
</head>
<body>
    <h2><?php echo getInfo("titulo");?></h2>
    <p><?php echo getInfo("descricao");?></p>
    
</body>
</html>