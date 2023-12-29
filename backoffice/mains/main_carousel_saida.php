<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_GET["id"]);

if ($form){
    $id = $_GET["id"];
    $carousel = selectSQLUnico("SELECT * FROM carousel WHERE id = '$id'");
}

?>


<main class="foco">
    <div class="row caixas">
        <div class="col-12 titulo_2 p-4">
            <b>EDITAR CAROUSEL</b>

            <br><br>

            <form action="carousel.php" >
                <label>Título do livro:</label>

                <br>

                <input type="text" name="titulo" value="<?= $carousel["titulo"]; ?>" required="required" autofocus placeholder="Título">
                
                <br><br>

                <label>TAG observação:</label>

                <br>

                <input type="text" name="observacao" value="<?= $carousel["observacao"]; ?>" autofocus placeholder="TAG">
                
                <br><br>

                <label>Link da imagem do banner para <b>DESKTOP</b>:</label>
                
                <br>

                <input type="text" name="imagem_desktop" value="<?= $carousel["imagem_desktop"]; ?>" required="required" placeholder="Link imagem desktop">
                <button> 
                    <a href="../gestor/tinyfilemanager.php" target="_blank">
                        CARREGAR IMAGEM 
                    </a>
                </button>

                <br><br>

                <label>Link da imagem do banner para <b>MOBILE</b>:</label>
                
                <br>

                <input type="text" name="imagem_mobile" value="<?= $carousel["imagem_mobile"]; ?>" required="required" placeholder="Link imagem mobile">
                <button> 
                    <a href="../../../gestor/tinyfilemanager.php" target="_blank">
                        CARREGAR IMAGEM 
                    </a>
                </button>

                <br><br>

                <label>Texto descrição do livro:</label>
                <textarea name="texto" id="texto" cols="30" rows="10" placeholder="Escreva aqui a sua descrição..."><?= $carousel["texto"]; ?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#texto' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

                <br><br>

                <label>Link botão "Saber Mais" para a página:</label>
                
                <br>

                <input type="text" name="saber_mais" value="<?= $carousel["saber_mais"]; ?>" required="required" placeholder="Link Saber Mais">
                
                <br><br>

                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="hidden" name="accao" value="editar">
                <input type="submit" value="EDITAR">
            </form>
        </div>
    </div>
</main>