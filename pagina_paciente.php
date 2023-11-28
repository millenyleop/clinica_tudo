<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Paciente - Clínica Médica</title>
    <style>
        body {
            background-color: #f0f5f9;
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;

        }

        header {
            background-color: #dcf4fe;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            color: #0a0909;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .patient-info {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #090a0a;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #853746;
            color: #0a0909;
        }

        th:first-child, td:first-child {
            background-color: #f0f5f9;
            font-weight: bold;
        }

        button {
            background-color: #27274B;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Página do Paciente</h1>
    </header>
    <div class="container">
        <h2>Dados do Paciente</h2>
        <div class="patient-info">
            <table>
                <tr>
                    <th>Nome</th>
                    <td>Nome do Paciente</td>
                </tr>
                <tr>
                    <th>Idade</th>
                    <td>30 anos</td>
                </tr>
                <tr>
                    <th>Gênero</th>
                    <td>Masculino</td>
                </tr>
                <tr>
                    <th>Endereço</th>
                    <td>Rua da Clínica, 123</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>paciente@email.com</td>
                </tr>
                <tr>
                    <th>Consulta Agendada</th>
                    <td id="consultaAgendada">Nenhuma consulta agendada</td>
                </tr>
            </table>
        </div>
        <button id="marcarConsultaButton">Marcar uma Consulta</button>
    </div>

    <script>
        document.getElementById("marcarConsultaButton").addEventListener("click", function() {
            const consultaAgendada = "Consulta de Rotina - 10/11/2023";
            document.getElementById("consultaAgendada").textContent = consultaAgendada;
        });
    </script>
</body>
</html>
