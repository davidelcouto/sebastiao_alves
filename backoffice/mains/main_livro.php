<?php

require_once("php/funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

$form = isset($_GET["accao"]);

if ($form){
    $accao=$_GET["accao"];
    switch($accao){
        case "novo":
            $titulo = $_GET["titulo"];
            $observacao = $_GET["observacao"];
            $imagem = $_GET["imagem"];
            $texto = $_GET["texto"];
            iduSQL("INSERT INTO livros (titulo, observacao,imagem, texto) VALUES ('$titulo', '$observacao','$imagem', '$texto')");
            break;
        case "apagar":
            $id = $_GET["id"];
            iduSQL("DELETE FROM livros WHERE id=$id");
            break;
        case "editar":
            $id = $_GET["id"];
            $titulo = $_GET["titulo"];
            $observacao = $_GET["observacao"];
            $imagem = $_GET["imagem"];
            $texto = $_GET["texto"];
            iduSQL("UPDATE livros SET titulo = '$titulo', observacao = '$observacao', imagem= '$imagem', texto = '$texto' WHERE id = $id");
            break;
    }
}

$livros = selectSQL("SELECT * FROM livros");

?>


<main>
    <?php if ($form):?>
    
            <div class="row caixas">
                <div class="col-12 titulo_2 p-4">
                    <i>EDITADO/APAGADO/INSERIDO COM SUCESSO!</i>
                    
                    <br><br>

                    <a href="livro.php">
                        <button>VOLTAR</button>
                    </a>
                </div>
            </div>

            <br><br>
    
    <?php else: ?>
        <div class="row caixas">
                <h3 class="h3_dif_cor"><b>BACKOFFICE LIVROS</b></h3>

                <br><br><br><br>

                <table class="mx-auto w-100 pb-5 mb-5">
                    <tr>
                        <th>IMAGEM</th>
                        <th>TITULO</th>
                        <th>OBSERVAÇÃO</th>
                        <th>TEXTO</th>
                        <th>DATA ACTUALIZAÇÃO</th>
                        <th>ACÇÕES</th>
                    </tr>

                    <?php foreach($livros as $l): ?>

                        <tr>
                            <td><img src="<?= $l["imagem"]; ?>" style="width: 100px"></td>
                            <td><?= $l["titulo"]; ?></td>
                            <td><?= $l["observacao"]; ?></td>
                            <td><?= $l["texto"]; ?></td>
                            <td><?= $_SESSION["nome"]; ?> (<?= $_SESSION["data_ultimo_acesso"]; ?>)</td>
                            
                            <td>
                                <form action="livro_saida.php">
                                    <input type="hidden" name="accao" value="editar">
                                    <button name="id" value="<?= $l["id"];?>">Editar</button>
                                </form>
                                <br><br>
                                <form action="">
                                    <input type="hidden" name="accao" value="apagar">
                                    <button name="id" value="<?= $l["id"];?>">Apagar</button>
                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </table>

                <form action="livro_novo.php">
                    <input type="hidden" name="accao" value="novo">
                    <button name="id" value="<?= $l["id"];?>" style="width: 100px">Novo</button>
                </form>
        </div>

    <?php endif; ?>

    <br><br>
</main>