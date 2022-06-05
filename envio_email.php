<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$assunto = $_POST['assunto'];

$corpo = "
    Nome: " . $_POST['nome'];
"
    Email: " . $_POST['email'];
"
    Empresa: " . $_POST['empresa'];
"
    Mensagem: " . $_POST['mensagem'];
"

";

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";

$destino = "dallisonlima@gmail.com";

mail($destino, $assunto, $corpo, $headers);

echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
