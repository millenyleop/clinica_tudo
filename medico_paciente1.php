<!DOCTYPE html>



<html>



<head>


<script>

function Médico(){
    window.location.assign("http://localhost/cadastromedico1.php")
}

function Paciente(){
    window.location.assign("http://localhost/cadastro1.php")
}
   
    

</script>
    <title>Página de Login</title>



    <style>



        body {



            font-family: Arial, sans-serif;

            font-size: larger;

            background-color: #DCF4FE;

            

            background-image: url(fundo1.jpg);
            background-repeat: no-repeat;
            background-size: cover;



            display: flex;



            justify-content: center;



            align-items: center;



            height: 100vh;



            margin: 0;



        }







        .login-container {



            background-color: #3498db;



            border-radius: 5px;



            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);



            padding: 30px;



            width: 300px;



            text-align: center;



        }







        h2 {



            color: #fff;

            

        }







        .login-options {



            margin-top: 20px;

            

        }







        .login-option-button {

            font-size: 20px;

            background-color: #0056b3;



            color: #fff;



            padding: 10px 20px;



            border: none;



            border-radius: 5px;



            margin: 10px;



            cursor: pointer;



            



        }







        .login-option-button:hover {



            background-color: #007BFF;



        }



        



        .link{



        color:white;



 text-decoration:none;



        }



    </style>



</head>



<body>



    <div class="login-container">



        <h2>Escolha uma opção:</h2>



        <div class="login-options">



            <button class="login-option-button" onclick="Médico()"> Entrar como Médico</button>



            <button class="login-option-button" onclick="Paciente()"> Entrar como Paciente</button>



        </div>



    </div>



</body>



</html>
