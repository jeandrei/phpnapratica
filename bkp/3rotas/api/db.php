<?php
/**
 * 
 * 
 * PARA A CONEXÃO COM O BANCO DE DADOS FIZ NO CONTAINER DOCKER E NÃO FUNCIONOU
 * ABRA NA INSTANCIA DO DOCKER
 * docker exec -it www bash
 * entre na pasta onde está o arquivo php.ini
 * cd /usr/local/etc/php/
 * abra o arquivo php.ini se não existir crie um a partiro do php.ini-development
 * cp php.ini-development php.ini
 * Dentro do php.ini descomente as linhas
 * extension=mysqli
 * extension=openssl
 * extension=pdo_mysql
 * extension=pdo_pgsql
 * extension=pdo_sqlite
 * extension=pgsql
 * salve e reinicie o docker www
 * docker stop www
 * docker start www
 * 
 * 
 */
 function getConexao(){
     $conexao = new PDO("mysql:host=mysql;dbname=curso_php_basico","root","rootadm");
     $conexao->exec('SET NAMES "utf8"'); 
     return $conexao;
 }

?>