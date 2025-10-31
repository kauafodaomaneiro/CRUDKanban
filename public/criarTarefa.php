<?php
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $setor = $_POST['setor'];
    $prioridade = $_POST['prioridade'];
    $stats = $_POST['stats'];
    $id_usuario = $_POST['id_usuario'];

    $sql = "INSERT INTO tarefa (descricao, setor, prioridade, stats, id_usuario) VALUE ('$descricao', '$setor', '$prioridade', '$stats', '$id_usuario')";

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>criar tarefa</title>
</head>
<body>
    
    <form method="POST" action="criarTarefa.php">

        <h2>Criar tarefa</h2>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required><br><br>

        <label for="setor">Setor:</label>
        <input type="text" name="setor" required><br><br>

        <label for="prioridade">Prioridade:</label>
        <select name="prioridade" id="prioridade">
            <option value="baixa">baixa</option>
            <option value="media">media</option>
            <option value="alta">alta</option>
        </select> <br><br>

        <label for="stats">Status:</label>
        <select name="stats" id="stats">
            <option value="afazer">a fazer</option>
            <option value="fazendo">fazendo</option>
            <option value="pronto">fazido</option>
        </select><br><br>

         <?php
        $sql = "SELECT id, nome FROM usuario";
        $result = $conn->query($sql);

            echo "<label for='id_usuario'>Usuario:</label>
        <select name='id_usuario' id='id_usuario'>";
        if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
             echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";

        }
        }else{
            echo "<option value=''>Nenhum usuario encontrado</option>";
        }

         if ($conn->query($sql) === true) {
        echo "Regitrado.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
        ?>
        

        <input type="submit" value="Cadastrar">
    </form>


   

</body>
</html>