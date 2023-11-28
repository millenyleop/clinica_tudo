<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização da Clínica</title>
    <style>
        body {
            background-image: url(fundo1.jpg);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: cover;

        }

        header {
            background-color: #27274b; /* Azul - RoyalBlue */
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        .map-container {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        .address {
            background-color: #87ceeb; /* Azul Claro - SkyBlue */
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Localização da Clínica</h1>
    </header>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14812.47939367802!2d-47.49764555!3d-21.8529124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8024bafe53acf%3A0xe9bf7c4926a6ef6e!2zRXNwYcOnbyBEb8OndXJh!5e0!3m2!1spt-BR!2sbr!4v1697559094748!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </iframe>
    </div>

    <div class="address">
        <h2>Endereço da Clínica</h2>
        <p>Rua da Clínica, Número 123</p>
        <p>Cidade, Estado</p>
        <p>CEP: 12345-678</p>
    </div>
</body>
</html>


