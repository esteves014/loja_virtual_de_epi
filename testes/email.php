<?php 

$to = 'meuemail@gmail.com';
$subject = 'Teste de envio de e-mail';
$message = 'Olá, você é programador web?';
$headers = 'From: exemplo@exemplo.com'. "\r\n";

mail($to, $subject, $message, $headers);

?>