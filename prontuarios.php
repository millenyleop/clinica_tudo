<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário Médico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dcf4fe;
            

        }
        .prontuario {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f3f8fc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

        }
        h1 {
            background-color: #dcf4fe;
    width: 620px;
    height: 40px;
    
    
        }
        .dados-paciente {
            margin-top: 20px;
        }
        .dados-paciente label {
            font-weight: bold;
            color: #3498db;
        }
        .dados-paciente p {
            margin: 5px 0;
        }
        .historico {
            margin-top: 20px;
        }
        .historico label {
            font-weight: bold;
            color: #3498db;
        }
        .historico p {
            margin: 5px 0;
        }
        #info-adicional {
            display: none;
        }
        #mostrar-mais {
            background-color: #27274b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }
        

    </style>
</head>
<body>
   
    <div class="prontuario"> 
        <h1>Prontuário Médico </h1>
        <div class="dados-paciente">
            <h2>Dados do Paciente</h2>
            <label>Nome:</label>
            <p>Netflixo da Silva</p>
            <label>Idade:</label>
            <p>30 anos</p>
            <label>Sexo:</label>
            <p>Masculino</p>
        </div>
        <div class="historico">
            <h2>Histórico Médico</h2>
            <label>Data de Consulta:</label>
            <p>17 de outubro de 2023</p>
            <label>Sintomas:</label>
            <p>Febre, dor de cabeça, tosse</p>
            <label>Diagnóstico:</label>
            <p>Gripe comum</p>
            <label>Tratamento:</label>
            <p>Repouso, hidratação e medicamentos para febre</p>
        </div>
        <button id="mostrar-mais" onclick="mostrarMais()">Mostrar Mais</button>
        <div id="info-adicional">
            <h2>Informações Adicionais</h2>
            <label>Pressão Arterial:</label>
            <p>120/80 mmHg</p>
            <label>Peso:</label>
            <p>70 kg</p>
            <label>Altura:</label>
            <p>1,75 m</p>
        </div>
    </div>

    <script>
        function mostrarMais() {
            var infoAdicional = document.getElementById("info-adicional");
            var botaoMostrarMais = document.getElementById("mostrar-mais");

            if (infoAdicional.style.display === "none") {
                infoAdicional.style.display = "block";
                botaoMostrarMais.textContent = "Mostrar Menos";
            } else {
                infoAdicional.style.display = "none";
                botaoMostrarMais.textContent = "Mostrar Mais";
            }
        }
    </script>
</body>
</html>
