<?php
include"./conexao.php";

$nome = $_GET["nome"];
$pass = md5($_GET["pass"]);

$query = mysqli_query($conexao, "select * from usuario where nome='$nome'");

if(mysqli_num_rows($query) < 1){
    mysqli_query($conexao, "insert into usuario (nome, senha) values ('$nome', '$pass')");
    echo json_encode(array("status" => "Sucesso"));
    exit;
}



echo json_encode(array("status" => "Erro"));