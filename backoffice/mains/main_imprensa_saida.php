<?php

require_once("php/funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

$form = isset($_GET["id"]);

if ($form){
    $id = $_GET["id"];
    $imprensa = selectSQLUnico("SELECT * FROM imprensa WHERE id = '$id'");
}

?>


<main>
    <div class="row caixas">
        <div class="col-12 titulo_2 p-4">
            <b>EDITAR IMPRENSA</b>

            <br><br>

            <form action="imprensa.php" >
                <label>Título imprensa:</label>
                
                <br>

                <input type="text" name="titulo" value="<?= $imprensa["titulo"]; ?>" required="required" autofocus placeholder="Título">
                
                <br><br>

                <label>Link da imagem da imprensa:</label>
                
                <br>

                <input type="text" name="imagem" value="<?= $imprensa["imagem"]; ?>" required="required" placeholder="Link imagem desktop">
                <button> 
                    <a href="../gestor/tinyfilemanager.php" target="_blank">
                        CARREGAR IMAGEM
                    </a>
                </button>
                
                <br><br>

                <label>Texto da imprensa:</label>
                <textarea name="texto" id="texto" cols="30" rows="10" placeholder="Escreva aqui a sua descrição..."><?= $imprensa["texto"]; ?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#texto' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                
                <br><br>

                <label>Data da Publicação:</label>
                
                <br>

                <input type="text" name="data_pub" value="<?= $imprensa["data_pub"]; ?>" required="required" autofocus placeholder="Título">
                
                <br><br>

                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="hidden" name="accao" value="editar">
                <input type="submit" value="EDITAR">
                
            </form>
        </div>
    </div>
</main>