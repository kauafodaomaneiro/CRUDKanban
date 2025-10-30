<?php
include '../config/db.php';
?>

<?php?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>login</title>
</head>
<body>

    <form id="login" method="post">

        <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Entrar">
        <a href="registro.php">ainda não tem uma conta? registre-se</a>
    </form>
    
</body>
</html>