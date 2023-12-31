<?php

require_once("php/funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">        

        <!-- CSS LOCAL -->
        <link rel="stylesheet" href="css/estilo.css">
        <script src="javascript/funcoes.js"></script>

        <!-- Editor de texto -->
        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    </head>

    <body class="container-fluid">
        <header>
            <div class="row caixas mt-3">
                <div class="col-12 text-center titulo p-3 mt-4 mb-3">BACKOFFICE</div>
                <nav class="col-12 navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "inicio") ? "active" : ""; ?>" aria-current="page" href="inicio.php">INÍCIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "carousel") ? "active" : ""; ?>" aria-current="page" href="carousel.php">CAROUSEL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "home") ? "active" : ""; ?>" aria-current="page" href="home.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "autor") ? "active" : ""; ?>" aria-current="page" href="autor.php">AUTOR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "livro") ? "active" : ""; ?>" aria-current="page" href="livro.php">LIVROS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "destaques") ? "active" : ""; ?>" aria-current="page" href="destaque.php">DESTAQUES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "imprensa") ? "active" : ""; ?>" aria-current="page" href="imprensa.php">IMPRENSA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "contactos") ? "active" : ""; ?>" aria-current="page" href="contactos.php">CONTACTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "redes") ? "active" : ""; ?>" aria-current="page" href="redes.php">REDES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "logoff") ? "active" : ""; ?>" aria-current="page" href="logoff.php">SAIR</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <br><br><br>