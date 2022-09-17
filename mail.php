<?php
  //Variáveis
  $nome = $_POST['name'];
  $email = $_POST['name'];
  $mensagem = $_POST['msg'];

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "geraldo.pmj@gmail.com";
  $assunto = "Contato pelo Site Geraldo PMJ Fotografia";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='https://geraldopmj.github.io/foto-portfolio/contato.html'>";
?>