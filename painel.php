<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo à sua página
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url("https://www.unimed.coop.br/site/documents/20124/1857129/bg_planos_sistemaunimed.jpg/4af5a3f8-d3fc-bb80-348c-797facb7dbe0?t=1670452107409&download=true"); 
            margin: auto;
        }
        .container {
        
            background-color: rgba(144, 184, 206, 0.9); /* Tons de azul */
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
         }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #27274B;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin: 10px;
        }
        .button:hover {
            background-color: #27274B;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo à sua página de paciente</h1>
        <p>Aqui você pode agendar consultas e gerenciar suas informações.</p>
        <a href="#" class="button">Agendar Consulta</a>
        <a href="logout.php" class="button">Sair</a>
    </div>
</body>

