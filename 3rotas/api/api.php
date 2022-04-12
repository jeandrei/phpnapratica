<?php

/**
 * 
 * Para ver todas as informações do servidor como REQUEST_URI, DOCUMENT_ROOT etc
 * de um var_dump($_SERVER);exit;
 * 
 */

include('configuracao.php');
include('usuarios.php');
include('produtos.php');



function getPagina(){ 

    //Retorna a url da rota /3rotas/home
    $text = $_SERVER['REQUEST_URI'];    
    //Replace fica com o texto /3rotas/ que é a raiz do app
    $replace = "/".APPROOT; 
    //passo para a url substituindo o /3rotas/ por apenas / assim sobrando tudo o que vem depois 
    //da raiz do app   
    $url = str_replace($replace,"/",$text);


    var_dump($url);exit;

    $metodo = $_SERVER['REQUEST_METHOD'];
   

    if($metodo == "GET"){        
        
        switch($url){
            case "/":
                $produtos = getProtudos();
                include("paginas/home.php");
                break;
            case "/home":
                $produtos = getProtudos();
                include("paginas/home.php");
                break;
            case "/sobre":
                include("paginas/sobre.php");
                break;
            case "/contato":
                include("paginas/contato.php");
                break;
            default:
                $produtos = getProtudos();
                include("paginas/home.php");
                break;
        }
    }
    
}

?>