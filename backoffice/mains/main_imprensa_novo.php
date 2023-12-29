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
            <b>NOVO DESTAQUE IMPRENSA</b>
            
            <br><br>

            <form action="imprensa.php" >
                <label>Título da imprensa:</label>
                
                <br>

                <input type="text" name="titulo" required="required" autofocus placeholder="Título">
                
                <br><br>

                <label>Link da imagem da imprensa:</label>
                
                <br>

                <input type="text" name="imagem" required="required" placeholder="Link imagem">
                <button> 
                    <a href="../gestor/tinyfilemanager.php" target="_blank">
                        CARREGAR IMAGEM 
                    </a>
                </button>
                
                <br><br>

                <label>Texto da imprensa:</label>
                <textarea name="texto" id="texto" cols="30" rows="10" placeholder="Escreva aqui a sua descrição..."></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#texto' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                
                <br><br>

                <label>Data publicação da imprensa:</label>
                
                <br>

                <input type="text" name="data_pub" required="required" placeholder="Data publicação">
                
                <br><br>

                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="hidden" name="accao" value="novo">
                <input type="submit" value="INSERIR">
            </form>
        </div>
    </div>
</main>