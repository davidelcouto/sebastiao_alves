<?php

require_once("php/funcoes/funcoes.php");

if(verificarLogado()){
    header("Location: inicio.php");
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

<main>
    <br><br>    

    <div class="caixas login">
        <h3>LOGIN</h3>
    </div>

    <div class="caixas">
        <?php if($form): ?>
            <h4>Login inválido, tente novamente.</h4>
        <?php endif; ?>

        <form action="" method="POST">
            <input type="text" name="login" placeholder="Nome de utilizador" required="required" autofocus>

            <br><br>

            <input type="password" name="senha" placeholder="Senha" required="required">

            <br><br>

            <input type="submit" value="ENTRAR">

            <br><br>
        </form>
    </div>
</main>