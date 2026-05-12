<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S9_R1_AT1</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            margin-top: 15px;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
        }
        input[type="reset"] {
            background-color: #dc3545;
            color: white;
        }
        
    </style>
    <!-- Formulario com o POST -->
    <form method="POST">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome"><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email"><br>

        <label>Mensagem: </label>
        <input type="text" name="msg" id="msg"> <br>

        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
   

    <h2>Informações Recebidas: </h2>
    <hr>

    <?php

        //Declarando as variáveis
        $nome = $_POST["nome"] ?? "";
        $email = $_POST["email"] ?? "";
        $msg = $_POST["msg"] ?? "";

        //Exibindo as informações
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Mensagem: $msg";
    ?>
</body>
</html>