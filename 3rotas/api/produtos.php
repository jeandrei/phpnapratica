<?php
function getProtudos(){
    $dados = array(
        ["titulo"=>"PHP Básico", "descricao"=>"Curso de PHP Básico", "valor"=>"120,90"],
        ["titulo"=>"PHP com PDO", "descricao"=>"Curso de PHP com PDO", "valor"=>"140,90"],
        ["titulo"=>"PHP OO", "descricao"=>"Curso de PHP Orientado a Objetos", "valor"=>"150,90"]
    );

    $conexao = getConexao();
    $select = "SELECT * FROM produtos";

    $ret = $conexao->query($select);

    $produtos = $ret->fetchAll();   

    return $produtos;
}

function buscaProdutos($busca){
    $produtos = getProtudos();
    $resultados = [];
    foreach($produtos as $produto){
        //$existe = in_array($busca,$produto);
        $existe = in_array(strtolower($busca),array_map('strtolower',$produto));
        if($existe){
            array_push($resultados,$produto);
        }
    }
return $resultados;
}

function adicionarProdutos($dados){
    $conexao = getConexao();

    $insert = "INSERT INTO 
                        produtos (
                            titulo,
                            descricao,
                            valor
                        ) 
                VALUES (
                        :titulo,
                        :descricao,
                        :valor
                        )
                ";
    $stmt = $conexao->prepare($insert);
    $stmt->bindValue(':titulo',$dados['titulo']);
    $stmt->bindValue(':descricao',$dados['descricao']);
    $stmt->bindValue(':valor',$dados['valor']);

    $stmt->execute();

    return $conexao->lastInsertId();
}

function buscaProdutoId($id){
    $conexao = getConexao();
    $select = "SELECT * FROM produtos WHERE id = :id";
    $stmt = $conexao->prepare($select);
    //int aqui é pare forçar ser valor inteiro, se for string ele converte
    $stmt->bindValue(':id',(int)$id);
    $stmt->execute();
    //PDO::FETCH_ASSOC retorna os dados em um array associativo 'chave'=>'valor'
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function salvarProduto($dados){
      
    $conexao = getConexao();

    $update = "UPDATE produtos SET titulo=:titulo, descricao=:descricao, valor=:valor WHERE id=:id";
    
    $stmt = $conexao->prepare($update);
    $stmt->bindValue(':id',(int)$dados['id']);
    $stmt->bindValue(':titulo',$dados['titulo']);
    $stmt->bindValue(':descricao',$dados['descricao']);
    $stmt->bindValue(':valor',$dados['valor']);   

    $ret = $stmt->execute();
    return $ret;
    
}

function deletarProduto($id){
    $conexao = getConexao();
    $delete = "DELETE FROM produtos WHERE id = :id";
    $stmt = $conexao->prepare($delete);
    $stmt->bindValue(':id',(int)$id);
    $ret = $stmt->execute();
    return $ret;
}

?>