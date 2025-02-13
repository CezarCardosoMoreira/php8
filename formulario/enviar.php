<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = 'Email do site';
$remetente = 'cezarcardosomoreira@gmail.com';


//utf8 para não ter poblema com caracteries especiais
$conteudo = utf8_decode('Nome: ' .$nome ."\r\n" ."\r\n" 
                       .'Email: ' .$email ."\r\n" ."\r\n" ."\r\n"
                       .'Mensagem: ' .$mensagem ."\r\n" ."\r\n");


$cabecario = "From: ".$email;  



try {
    mail($remetente, $assunto, $mensagem, $cabecario);
} catch (\Throwable $th) {
    echo "O email não pode ser enviado 
    caso você esteja em um servidor local,
     hospede seu projeto e depois faça o teste de envio";
}

?>
<script>alert('Enviado com Sucesso');</script>
<meta http-equiv="reflesh" content="0; url=index.php">


