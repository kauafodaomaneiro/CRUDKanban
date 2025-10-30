<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Registro</title>
</head>
<body>
    
    <form id="cadastro" method="post">

        <h2>Cadastro</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="confirmarSenha">Confirmar Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>