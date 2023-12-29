<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_GET["imagem"]) && isset($_GET["texto_grande"]);

if ($form){
    $imagem = $_GET["imagem"];
    $texto_grande = $_GET["texto_grande"];
    iduSQL("UPDATE autor SET imagem = '$imagem', texto_grande = '$texto_grande'");
}

$autor = selectSQLUnico("SELECT * FROM autor");

?>


<main class="foco">
    <?php if ($form):?>
    
        <div class="row caixas">
            <div class="col-12 titulo_2 p-4">
                <i>EDITADO COM SUCESSO!</i>

                <br><br>
                
                <a href="autor.php">
                    <button>VOLTAR</button>
                </a>
            </div>
        </div>

    <br><br>

    <?php else: ?>
        <div class="row caixas d-flex justify-content-center">
            <h3 class="h3_dif_cor"><b>AUTOR</b></h3>

            <br><br><br><br>

            <h5>Imagem do autor da página AUTOR</h5>

            <br>

            <img src="<?= $autor["imagem"]; ?>" id="imagem_home">

            <br><br>

            <hr>

            <br><br>

            <h5>Texto sobre o AUTOR</h5>

            <br>

            <p><?= $autor["texto_grande"]; ?></p>

            <br><br>

            <hr>

            <form action="autor_saida.php">
                <button>EDITAR</button>
            </form>
        </div>
    <?php endif; ?>

    <br><br>   
</main>