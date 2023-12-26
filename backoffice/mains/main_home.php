<?php

require_once("php/funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

$form = isset($_GET["imagem_autor"]) && isset($_GET["ultimos_livros"]);

if ($form){
    $imagem_autor = $_GET["imagem_autor"];
    $ultimos_livros = $_GET["ultimos_livros"];
    
    iduSQL("UPDATE home SET imagem_autor = '$imagem_autor', ultimos_livros = '$ultimos_livros'");        
}

$home = selectSQLUnico("SELECT * FROM home");

?>

        <main>
            <?php if ($form):?>
            
                <div class="row caixas">
                    <div class="col-12 titulo_2 p-4">
                        EDITADO COM SUCESSO!

                        <br><br>
                        
                        <a href="home.php">
                            <button>VOLTAR</button>
                        </a>
                    </div>
                </div>

                <br><br>
            
            <?php else: ?>
                <div class="row caixas d-flex justify-content-center">
                    <h3 class="h3_dif_cor"><b>BACKOFFICE HOME</b></h3>

                    <br><br><br><br>

                    <h5>Imagem do Autor da página HOME</h5>
                    
                    <br>

                    <img src="<?= $home["imagem_autor"]; ?>" id="imagem_home">
                    
                    <br><br>

                    <hr>

                    <br><br>

                    <h5>Texto do "Últimos Livros" da página HOME</h5>
                    
                    <br>

                    <p><?= $home["ultimos_livros"]; ?></p>
                    
                    <br><br>

                    <hr>

                    <br>

                    <form action="home_saida.php">
                        <button>EDITAR</button>
                    </form>
                </div>
            <?php endif; ?>

            <br><br>
        </main>