<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["mail"]) && isset($_GET["horario"]);

if ($form){
    $contactos = selectSQLUnico("SELECT * FROM contactos");
}

$contactos = selectSQLUnico("SELECT * FROM contactos");

?>


<main class="foco">
    <div class="row caixas">
        <div class="col-12 titulo_2 p-4">
            <b>EDITAR CONTACTOS</b>

            <br><br>

            <form action="contactos.php" >
                <label>Telefone:</label>

                <br>

                <input type="text" name="telefone" value="<?= $contactos["telefone"]; ?>" required="required" autofocus placeholder="Telefone">
                
                <br><br>

                <label>Morada:</label>
                
                <br>

                <input type="text" name="morada" value="<?= $contactos["morada"]; ?>" required="required" placeholder="Morada">
                
                <br><br>

                <label>E-mail:</label>
                
                <br>

                <input type="text" name="mail" value="<?= $contactos["mail"]; ?>" required="required" placeholder="E-mail">
                
                <br><br>

                <label>Horário:</label>
                
                <br>

                <input type="text" name="horario" value="<?= $contactos["horario"]; ?>" required="required" placeholder="Horário">
                
                <br><br>

                <input type="submit" value="EDITAR">
            </form>
        </div>
    </div>
</main>