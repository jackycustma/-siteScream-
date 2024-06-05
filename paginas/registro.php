<?php
// Verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Aqui você pode processar os dados, como salvar no banco de dados, enviar por e-mail, etc.

    // Exemplo básico: exibe os dados na tela
    echo "<h2>Informações Recebidas:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    // Não exibe a senha por questões de segurança
}
?>
