<?php
/**
 *
 * 
 * 
 * 
 * 
 */

 function getInfo($atributo){
    $dados = ["titulo"=>"SistemaModelo","descricao"=>"Programando com PHP."];
    return $dados[$atributo];
 }

 function getUsuarios(){
     $dados = [
         ["nome"=>"João","email"=>"joão@gmail.com"],
         ["nome"=>"Maria","email"=>"maria@yahoo.com.br"],
         ["nome"=>"Pedro","email"=>"pedro@gmail.com"],
         ["nome"=>"Bruno","email"=>"bruno@hotmail.com"]
    ];
    
    return $dados;
 }

 function exibeUsuario(){
    $usuarios = getUsuarios();
    $html = "";
    
    foreach($usuarios as $chave => $usuario){
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $html .= "<li>Nome: $nome- E-mail: $email</li>";
    }
    
    return $html;
 }

 function exibeUsuario2(){
    $usuarios = getUsuarios();
    $html = "";
    
    for($i = 0; $i<count($usuarios); $i++){
        $nome  = $usuarios[$i]['nome'];
        $email = $usuarios[$i]['email'];
        $html .= "<li>Nome: $nome- E-mail: $email</li>";
    }
    
    return $html;
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
    <ul>
        <?php echo exibeUsuario2();?>
    </ul>
    
</body>
</html>