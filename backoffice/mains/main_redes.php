
<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_GET["insta"]) && isset($_GET["face"]) && isset($_GET["linkd"]);

if ($form){
    $insta = $_GET["insta"];
    $face = $_GET["face"];
    $linkd = $_GET["linkd"];
    
    iduSQL("UPDATE redessociais SET insta = '$insta', face = '$face', linkd= '$linkd'");     
}

$redes = selectSQLUnico("SELECT * FROM redessociais");

?>


<main class="redes">
    <?php if ($form):?>
        <div class="row caixas">
            <div class="col-12 titulo_2 p-4">
                <i>EDITADO COM SUCESSO!</i>
                
                <br><br>

                <a href="redes.php">
                    <button>VOLTAR</button>
                </a>
            </div>
        </div>
        
        <br><br>

    <?php else: ?>
        <div class="row caixas d-flex justify-content-center">
            <h3 class="h3_dif_cor"><b>REDES SOCIAIS</b></h3>
            
            <br><br><br><br>

            <h5 class="h5_dif_cor">Instagram</h5>
            <span style="color: black"><?= $redes["insta"]; ?></span>
            
            <br><br>

            <hr>
            
            <br><br>

            <h5 class="h5_dif_cor">Facebook</h5>
            <span style="color: black"><?= $redes["face"]; ?></span>
            
            <br><br>

            <hr>
            
            <br><br>

            <h5 class="h5_dif_cor">LinkedIn</h5>
            <span style="color: black"><?= $redes["linkd"]; ?></span>
            
            <br><br>

            <hr>
            
            <br><br>
            
            <form action="redes_saida.php">
                <button>EDITAR</button>
            </form>
        </div>

    <?php endif; ?>

    <br><br>
</main>