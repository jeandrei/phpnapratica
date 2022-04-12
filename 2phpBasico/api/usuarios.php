<?php 

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

?>