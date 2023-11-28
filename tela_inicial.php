<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Group</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Group</title>

    </head>
    <script>

function cadastro(){
    window.location.assign("http://localhost/index.php")
}
     </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #DCF4FE;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #27274B;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            background-color: #0056b3;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav li {
            display: inline;
            margin: 0 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .intro {
            text-align: center;
        }

        .intro h2 {
            font-size: 24px;
        }

        .intro p {
            font-size: 16px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        
        .botao {
        text-decoration:none;
        background-color: #0056b3;
        border: none;
        color:white;
        font-size: 16px; 
        }

    </style>
</head>
<body>
    <header>
        <h1>Medical Group</h1>
    </header>

    <nav>
        <ul>
                <li><a href="localizacao1.php">Localização</a></li>
                <li><a href="contato1.php">Contato</a></li>
                <li><a href="medico_paciente1.php">Cadastre-se</a></li>
                <button class="botao" onclick="cadastro()" >Login</button>
                
        </ul>
    </nav>

    <div class="container">
        <div class="intro">
            <h2>Bem-vindo à Clínica Medical Group</h2>
            <p>Oferecemos serviços médicos de alta qualidade para atender às suas necessidades de saúde. Nossos especialistas estão aqui para cuidar de você.</p>
            
            <div class="slider">
                <div><img src="189813-estudante-de-medicina-quais-sao-seus-principais-desafios-810x540.jpg" alt="Descrição da imagem 1"></div>
                <div><img src="mesa-de-cirurgia-cirurgiao-instrumentos-cirurgicos-sala-de-cirurgia-operacao-1631899372553_v2_900x506.jpg" alt="Descrição da imagem 2"></div>
                <div><img src="IMG_5330-UTI-min.jpg" alt="Descrição da imagem 3"></div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 1000, 
                arrows: false, 

            });
        });
    </script>

    <footer>
        &copy; 2023 Medical Group. Todos os direitos reservados.
    </footer>
</body>
</html>
