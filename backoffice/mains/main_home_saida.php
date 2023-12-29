<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_GET["imagem_autor"]) && isset($_GET["ultimos_livros"]);

if ($form){
    $home = selectSQLUnico("SELECT * FROM home");
}

$home = selectSQLUnico("SELECT * FROM home");

?>


<main class="foco">
    <div class="row caixas">
        <div class="col-12 titulo_2 p-4">
            <b>EDITAR HOME</b>
            
            <br><br>

            <form action="home.php" >
                <label>Link da imagem do autor da página <ins>HOME</ins></a>:</label>
                
                <br>

                <input type="text" name="imagem_autor" value="<?= $home["imagem_autor"]; ?>" required="required" autofocus placeholder="Imagem">
                <button> 
                    <a href="../gestor/tinyfilemanager.php" target="_blank">
                        CARREGAR IMAGEM 
                    </a>
                </button>

                <br><br>

                <label>Texto do "Últimos Livros" da página <ins>HOME</ins></a>:</label>
                
                <br><br>

                <textarea name="ultimos_livros" id="texto" cols="30" rows="10" placeholder="Escreva aqui a sua descrição..."> <?= $home["ultimos_livros"]; ?> </textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#texto' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

                <br>
                
                <input type="submit" value="EDITAR">
            </form>
        </div>
    </div>
</main>