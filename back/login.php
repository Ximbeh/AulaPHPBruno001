<?php
include"./conexao.php";

$nome = $_GET["nome"];
$pass = md5($_GET["pass"]);

$query = mysqli_query($conexao, "select * from usuario where nome='$nome' and senha='$pass'");

if(mysqli_num_rows($query) > 0){
    $_SESSION["logado"] = true;
    echo json_encode(array("status" => "Sucesso"));
    exit;
}

echo json_encode(array("status" => "Erro"));