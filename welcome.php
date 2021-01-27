<?php
// the message
$lead = "Novo Lead Chegou!\n";
$nome = "Nome: ". $_POST["nome"] ."\n";
$email = "Email: ".$_POST["email"];

$msg = $lead . $nome . $email;       

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$sended = mail("raulgomesguitar@gmail.com","NOVO LEAD",$msg);

if ($sended == true) {
    header("Location: https://www.metodoguitarra.com?nome=".$_POST["nome"], TRUE, 301);
    exit();
} else {
    echo "Algo deu errado, tente preencher novamente";
}
?>
