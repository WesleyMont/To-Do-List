<?php
require_once('./db/conn.php');

$tasks= [];

$sql = $pdo->query("SELECT * FROM tasks");

if ($sql->rowCount() > 0) {
  $tasks = $sql->fetchALL(PDO::FETCH_ASSOC);
  var_dump($tasks);
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body> 
    <div id="to_do">
        <h1> Lista de Tarefas </h1>
      <form action="" class="to-do-form">
        <input 
        type="text" 
        name="description" 
        placeholder="Começe sua lista aqui" 

        required>     

        <button type="submit" class="form-button"> 
            
          <i class="fa-solid fa-plus"></i>
        </button>        
      </form>

      <div id="tasks">
        <?php foreach($tasks as $task): ?>
        <div class="task">
            <input 
            type="checkbox" 
            name="progress" 
            class="progress"
            <?= $task ['completed'] ? 'checked' : '' ?>
            >

            <p class="task-description">
              <?= $task['description'] ?>
                
            </p>

            <div class="task-actions">
                <a class="action-button edit-button">
                    <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="" class="action-button delet-button">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>              
            </div>
            
            <form action="" class="to-do-form edit-task hidden">
            <input type="text" name="description" placeholder="Edite aqui">
            <button type="submit" class="form-button confirm-button">
                <i class="fa-solid fa-check"></i>
            </button>
            </form>
        </div>
        <?php endforeach ?>
      </div>
    </div>
    <script src="./javascript/script.js"></script>
</body>
</html>