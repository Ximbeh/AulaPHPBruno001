<?php
include"./back/conexao.php";

if(!isset($_SESSION["logado"])){
    header("Location: ./");
}