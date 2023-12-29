<?php

require_once("php/funcoes/funcoes.php");

if(verificarLogado()){
    header("Location: index.php");
    exit();
}

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if(fazerLogin($login, $senha)){
        header("Location: inicio.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Backoffice</title>

        <!-- CSS do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">        <!-- CSS LOCAL -->
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body class="container-fluid">
        <br><br>

        <header>
            <div class="caixas entrada">
                Entrada backoffice
            </div>
        </header>