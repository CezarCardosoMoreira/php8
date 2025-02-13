<?php


//definir data e hora com base no local selecionado
date_default_timezone_set('America/Sao_Paulo');

//puxa os dados do arquivo config
require_once('./config.php');


//conexao com banco de dados
try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario","$senha");
} catch (Exception $e) {
    echo 'Erro ao tentar conectar com o servidor! <br>' .$e;
}

?>