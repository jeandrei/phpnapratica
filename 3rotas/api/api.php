<?php
function getPagina(){ 

    $i=1;

    if($i == 1){    
        header("Location: http://192.168.3.125/3rotas/");         
        exit;    
    } else {        
        include("paginas/home.php");
    }    
}
?>