<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Registro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="container">
    <h2>Registro</h2>
    <form action="processar_registro.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>

</body>
</html>
