<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
           
            font-family: Arial, Helvetica, sans-serif;
            background-color: #c5fff5;
        }
        div {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 15%;
            text-align: center;
        }

        input {
            padding: 10px;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: #c5fff5;
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            cursor: pointer;
        }

        .inputSubmit:hover {
            background-color: #34756a;
            color: white;
        }
       
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" nome='email' placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Acessar">
        </form>
    </div>
</body>
</html>