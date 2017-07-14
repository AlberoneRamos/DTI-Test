<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['linkedIn'])   ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$linkedIn = strip_tags(htmlspecialchars($_POST['linkedIn']));
$message = strip_tags(htmlspecialchars($_POST['message']));


$to = 'henriquealberone@outlook.com'; 
$email_subject = "Website Contact Form:  $name";
$email_body = "Você recebeu um novo currículo.\n\n"."Detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nLinked-In: $linkedIn\n\nTelefone: $phone\n\nMensagem:\n$message";
$headers = "De: henriquealberone@outlook.com\n";
$headers .= "Responder para: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
