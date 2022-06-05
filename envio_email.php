<?php

//$nome = $_POST['nome'];
//$email = $_POST['email'];
//$mensagem = $_POST['mensagem'];

//$corpo = "
//    Nome: " . $_POST['nome'];
//"
//   Email: " . $_POST['email'];
//"
//    Empresa: " . $_POST['empresa'];
//"
//    Mensagem: " . $_POST['mensagem'];
//"

//";

//$headers  = "MIME-Version: 1.0\n";
//$headers .= "Content-type: text/html; charset=iso-8859-1\n";
//$headers .= "From: $nome <$email>";

//$destino = "dallisonlima@gmail.com";

//mail($destino, $assunto, $corpo, $headers);

//echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";

//Variáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

//Compo E-mail
$arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
    </html>
  ";

//Emails para quem será enviado o formulário
$destino = "dallisonlima@gmail.com";
$assunto = "Contato pelo Site";

//Este sempre deverá existir para garantir a exibição correta dos caracteres
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";

//Enviar
mail($destino, $assunto, $arquivo, $headers);

echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
