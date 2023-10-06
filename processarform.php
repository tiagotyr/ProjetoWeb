<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $assunto = $_POST["assunto"];
  $mensagem = $_POST["mensagem"];

  // Valida o endereço de e-mail
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Por favor, insira um endereço de e-mail válido.";
    exit; // Encerra o script se o e-mail não for válido
  }

  // Configura o e-mail de destino
  $destinatario = "tiagoferreira3276@gmail.com"; // Substitua pelo seu endereço de e-mail

  // Monta o corpo do e-mail
  $corpo = "Nome: $nome\n";
  $corpo .= "E-mail: $email\n";
  $corpo .= "Assunto: $assunto\n";
  $corpo .= "Mensagem:\n$mensagem\n";

  // Envia o e-mail
  $enviado = mail($destinatario, "Mensagem de Contato", $corpo);

  // Verifica se o e-mail foi enviado com sucesso
  if ($enviado) {
    echo "Obrigado por entrar em contato! Sua mensagem foi enviada com sucesso.";
  } else {
    echo "Desculpe, ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
  }
}
