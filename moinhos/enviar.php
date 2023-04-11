<?php
// Get data from form 
$name = $_POST['nome'];
$email= $_POST['email'];
$message= $_POST['telefone'];
 
$to = "oseiasc2@gmail.com";
$subject = "Contato Site Moinhos Plastic Center";
 

$txt ="Contato Site Moinhos Plastic Center \r\n Nome = ". $name . " \r\n Email = "
    . $email . " \r\n Telefone =" . $message;
 
$headers = "From: nao-responda@moinhospc.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:obrigado.html");
?>