<?php
include '../config/db.php';
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Kanban</title>
</head>
<body>

    <div class="header"><h1>Gerenciador de Tarefas</h1></div>

<div class="container">
    <div class="caixa"><h3>A fazer</h3>
    <div class="tarefa">
         <?php
        $sql = "SELECT * FROM tarefa";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            
            echo "<table>
                        <thead>
                                <tr>
                                    <strong><p>descricao</p></strong>
                                <tr>
                        <thead>
                <tbody>";
        while ($row = $result->fetch_assoc()){
            echo "<tr>
                    <p>{$row['descricao']}</p>
                    <tr>";
        }
        echo"<t/body></table>";
        }else{
            echo "<p>Nenhuma tarefa atribuida.</p>";
        }

        
        ?>
    </div>
    </div>

    <div class="caixa"><h3>Fazendo</h3></div>

    <div class="caixa"><h3>Fazido</h3></div>
    
</div>
    
</body>
</html>