<?php
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuario (nome, email) VALUE ('$nome', '$email')";

    if ($conn->query($sql) === true) {
        echo "Regitrado.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Registro</title>
</head>
<body>
    
    <form method="POST" action="registro.php">

        <h2>Cadastro</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>