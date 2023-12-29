<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_GET["imagem"]) && isset($_GET["texto_grande"]);

if ($form){
    $autor = selectSQLUnico("SELECT * FROM autor");
}

$autor = selectSQLUnico("SELECT * FROM autor");

?>


<main class="foco">
    <div class="row caixas">
        <div class="col-12 titulo_2 p-4">
            <b>EDITAR AUTOR</b>

            <br><br>

            <form action="autor.php" >
                <label>Link da imagem que fica na página <ins>AUTOR</ins></a>:</label>

                <br>

                <input type="text" name="imagem" value="<?= $autor["imagem"]; ?>" required="required" autofocus placeholder="Link imagem">
                <button> 
                    <a href="../gestor/tinyfilemanager.php" target="_blank">
                        CARREGAR IMAGEM 
                    </a>
                </button>

                <br><br>

                <label>Texto sobre o <ins>AUTOR</ins></a>:</label>

                <br>

                <textarea name="texto_grande" id="texto" placeholder="Escreva aqui a sua descrição..." cols="30" rows="10"><?= $autor["texto_grande"]; ?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector('#texto') )
                        .catch( error => {
                            console.error(error);
                        } );
                </script>

                <br>

                <input type="submit" value="EDITAR">
            </form>
        </div>
    </div>
</main>