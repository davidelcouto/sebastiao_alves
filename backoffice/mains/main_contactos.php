<?php

require_once("php/funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

$form = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["mail"]) && isset($_GET["horario"]);

if ($form){
    $telefone = $_GET["telefone"];
    $morada = $_GET["morada"];
    $mail = $_GET["mail"];
    $horario = $_GET["horario"];
    iduSQL("UPDATE contactos SET telefone = '$telefone', morada = '$morada', mail= '$mail', horario = '$horario'");
}

$contactos = selectSQLUnico("SELECT * FROM contactos");

?>


<main>
    <?php if ($form):?>
    
        <div class="row caixas">
            <div class="col-12 titulo_2 p-4">
                <i>EDITADO COM SUCESSO!</i>
                
                <br><br>

                <a href="contactos.php">
                    <button>VOLTAR</button>
                </a>
            </div>
        </div>

        <br><br>
    
    <?php else: ?>
        <div class="row caixas d-flex justify-content-center">
            <h3 class="h3_dif_cor"><b>BACKOFFICE CONTACTOS</b></h3>
            
            <br><br><br><br>

            <h5 class="h5_dif_cor">Telefone</h5>
            <span style="color: black"> <?= $contactos["telefone"]; ?> </span>
            
            <br><br>

            <hr>

            <br><br>

            <h5 class="h5_dif_cor">Morada</h5>
            <span style="color: black"> <?= $contactos["morada"]; ?> </span>
            
            <br><br>

            <hr>

            <br><br>

            <h5 class="h5_dif_cor">E-mail</h5>
            <span style="color: black"> <?= $contactos["mail"]; ?> </span>
            
            <br><br>

            <hr>

            <br><br>

            <h5 class="h5_dif_cor">Horário</h5>
            <span style="color: black"> <?= $contactos["horario"]; ?> </span>
            
            <br><br>

            <form action="contactos_saida.php">
                <button>EDITAR</button>
            </form>
        </div>

    <?php endif; ?>

    <br><br><br><br>
</main>