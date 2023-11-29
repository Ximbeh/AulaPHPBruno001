
<?php
include"./back/conexao.php";

if(isset($_SESSION["logado"])){
    header("Location: ./dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="javascript:void(0)">
        <input id="nome" type="text">
        <input id="password" type="text">
        <button onclick="func()">Enviar</button>
    <form>

    <script>
        const func = () => {
            let nome = document.getElementById("nome").value;
            let p = document.getElementById("password").value;

            fetch(`./back/cadastro.php?nome=${nome}&pass=${p}`)
            .then(response=>response.json())
            .then(response=>console.log(response))
        }
    </script>
</body>
</html>