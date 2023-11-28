<!DOCTYPE html>
<html>
<head>
    <title>Consultas Marcadas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f2f6f9; /* Fundo ligeiramente mais claro */
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #007BFF;
            color: white;
            font-size: 36px;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 20px;
        }

        input[type="month"] {
            padding: 10px;
            border: 1px solid #007BFF;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }

        #consultas-lista {
            background-color: #d2e9ff; /* Azul mais claro para a tabela */
            color: #333;
            padding: 20px;
            border-radius: 0 0 10px 10px;
            width: 70%;
            margin-top: 20px;
            overflow: auto; /* Adicionado para rolagem na tabela, se necessário */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #b3d9f0;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #c7e1f9; /* Azul ligeiramente mais escuro para linhas pares */
        }
    </style>
</head>
<body>
    <header>
        <h1>Consultas Marcadas</h1>
        <label for="data-consulta">Selecione o mês da consulta:</label>
        <input type="month" id="data-consulta">
        <button id="buscar-consultas">Buscar Consultas</button>
    </header>

    <div id="consultas-lista" class="container">
        <!-- Tabela para exibir as consultas -->
        <table>
            <thead>
                <tr>
                    <th>Data da Consulta</th>
                    <th>Paciente</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody id="consulta-table-body">
                <!-- Aqui serão adicionadas as linhas da tabela -->
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById("buscar-consultas").addEventListener("click", function() {
            const dataConsulta = document.getElementById("data-consulta").value;

            // Aqui você precisaria enviar uma solicitação para o servidor
            // para buscar as consultas no mês especificado.
            // Simulei uma resposta fictícia abaixo.

            // Simulação de uma resposta do servidor
            const consultas = [
                { data: "2023-10-05", nome: "Paciente 1", horario: "10:00" },
                { data: "2023-10-12", nome: "Paciente 2", horario: "11:30" },
                { data: "2023-10-19", nome: "Paciente 3", horario: "14:00" }
            ];

            // Limpa a lista de consultas anteriores
            const consultasTableBody = document.getElementById("consulta-table-body");
            consultasTableBody.innerHTML = "";

            // Exibe as consultas na tabela
            for (const consulta of consultas) {
                const row = document.createElement("tr");
                const dataCell = document.createElement("td");
                dataCell.textContent = consulta.data;
                const nomeCell = document.createElement("td");
                nomeCell.textContent = consulta.nome;
                const horarioCell = document.createElement("td");
                horarioCell.textContent = consulta.horario;
                row.appendChild(dataCell);
                row.appendChild(nomeCell);
                row.appendChild(horarioCell);
                consultasTableBody.appendChild(row);
            }
        });
    </script>
</body>
</html>
