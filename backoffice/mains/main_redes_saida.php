<?php

require_once("php/funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

$form = isset($_GET["insta"]) && isset($_GET["face"]) && isset($_GET["linkd"]);

if ($form){
    $redes = selectSQLUnico("SELECT * FROM redessociais");
}

$redes = selectSQLUnico("SELECT * FROM redessociais");

?>

<main>
    <div class="row caixas">
        <div class="col-12 titulo_2 p-4">
            <b>EDITAR REDES SOCIAIS</b>
            
            <br><br>

            <form action="redes.php">
                <label>Link do Instagram:</label>
                
                <br>

                <input type="text" name="insta" value="<?= $redes["insta"]; ?>" required="required" autofocus placeholder="Instagram">
                
                <br><br>

                <label>Link do Facebook:</label>
                
                <br>

                <input type="text" name="face" value="<?= $redes["face"]; ?>" required="required" placeholder="Facebook">
                
                <br><br>

                <label>Link do LinkedIn:</label>
                
                <br>

                <input type="text" name="linkd" value="<?= $redes["linkd"]; ?>" required="required" placeholder="LinkedIn">
                
                <br><br>

                <input type="submit" value="EDITAR">
            </form>
        </div>
    </div>
</main>
