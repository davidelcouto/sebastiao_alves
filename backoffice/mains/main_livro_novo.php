<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_GET["id"]);

if ($form){
    $id = $_GET["id"];
}

?>

<main class="foco">
    <div class="row caixas">
        <div class="col-12 titulo_2 p-4">
            NOVO LIVRO
            
            <br><br>

            <form action="livro.php" >
                <label>Título do livro:</label>
                
                <br>

                <input type="text" name="titulo" required="required" autofocus placeholder="Título">
                
                <br><br>

                <label>TAG observação:</label>
                
                <br>

                <input type="text" name="observacao" placeholder="TAG">
                
                <br><br>

                <label>Link da imagem do livro:</label>
                
                <br>

                <input type="text" name="imagem" required="required" placeholder="Link imagem">
                <button> 
                    <a href="../gestor/tinyfilemanager.php" target="_blank">
                        CARREGAR IMAGEM 
                    </a>
                </button>
                
                <br><br>

                <label>Texto descrição do livro:</label>
                <textarea name="texto" id="texto" cols="30" rows="10" placeholder="Escreva aqui a sua descrição..."></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#texto' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                
                <br><br>
                
                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="hidden" name="accao" value="novo">
                <input type="submit" value="INSERIR">
            </form>
        </div>
    </div>
</main>