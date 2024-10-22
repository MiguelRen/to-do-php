<?php
    include "./controllers/add_task_controller.php";
    include "./controllers/get_task_controller.php"
?>



<!--//html base del proyecto-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>to-do en php</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <div class="card-title">
                <h1>Lista de Tareas</h1>
            </div>
        </div>
        
        <div class="card-body m-2">
            <div class="div">
                <form action="" method="POST">
                    <label class="card-text" for="task-input">Ingrese una tarea</label>
                    <input type="text" value="blabla" name="task-input" id="data">  
                    <input type="submit" value="Agregar">
                </form>
            </div>
        </div>

        <div class="card-footer">
            <div class="card-text">
                <h4>Creado por mi </h4>
            </div>
        </div>


    </div>

    <script  src="./views/cap_input.js"></script>
    
</body>
</html>