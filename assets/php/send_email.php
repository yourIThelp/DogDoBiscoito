<?php
//Variáveis

$form_name = $_POST['formName']

if ($form_name == 'index_form'){
    $nome = $_POST['Nome'];
    $whatsApp = $_POST['WhatsApp'];
    $email = $_POST['email'];

    $body = "
    <html>
        <h3>Nome: $nome </h3>
        <h3>WhatsApp: $whatsApp </h3>
        <h3>email: $email </h3>

    </html>";
} else {
    $email = $_POST['email'];
    $body = "
    <html>
        <h3>email: $email </h3>
    </html>";
}


//enviar

  // emails para quem será enviado o formulário
  $destino = "arthurcarvalhoroque@gmail.com";
  $assunto = "Contato pelo site candidato";

// É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Site Dog do Biscoito <$email>';

  $enviaremail = mail($destino, $assunto, $body, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>