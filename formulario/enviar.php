<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


//utf8 para não ter poblema com caracteries especiais
$conteudo = utf8_decode('Nome: ' .$nome ."\r\n" ."\r\n" 
                       .'Email: ' .$email ."\r\n" ."\r\n" ."\r\n"
                       .'Mensagem: ' .$mensagem ."\r\n" ."\r\n");

echo $conteudo;




?>