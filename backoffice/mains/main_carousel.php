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
            $imagem_desktop = $_GET["imagem_desktop"];
            $imagem_mobile = $_GET["imagem_mobile"];
            $texto = $_GET["texto"];
            $saber_mais = $_GET["saber_mais"];
            iduSQL("INSERT INTO carousel (titulo, observacao, imagem_desktop, imagem_mobile, texto, saber_mais) VALUES ('$titulo', '$observacao', '$imagem_desktop', '$imagem_mobile', '$texto', '$saber_mais')");
            break;
        case "apagar":
            $id = $_GET["id"];
            iduSQL("DELETE FROM carousel WHERE id=$id");
            break;
        case "editar":
            $id = $_GET["id"];
            $titulo = $_GET["titulo"];
            $observacao = $_GET["observacao"];
            $imagem_desktop = $_GET["imagem_desktop"];
            $imagem_mobile = $_GET["imagem_mobile"];
            $texto = $_GET["texto"];
            $saber_mais = $_GET["saber_mais"];
            iduSQL("UPDATE carousel SET titulo = '$titulo', observacao = '$observacao', imagem_desktop = '$imagem_desktop', imagem_mobile = '$imagem_mobile', texto = '$texto', saber_mais = '$saber_mais' WHERE id = $id");
            break;
        }
    }

$carousel = selectSQL("SELECT * FROM carousel");

?>

<main>
    <?php if ($form):?>
    
        <div class="row caixas">
            <div class="col-12 titulo_2 p-4">
                <i>EDITADO/APAGADO/INSERIDO COM SUCESSO!</i>

                <br><br>

                <a href="carousel.php">
                    <button>VOLTAR</button>
                </a>
            </div>
        </div>

    <br><br>
    
    <?php else: ?>
        <div class="row caixas">
            <h3 class="h3_dif_cor"><b>BACKOFFICE CAROUSEL</b></h3>

            <br><br><br><br>

            <table class="mx-auto w-100 pb-5 mb-5">
                <tr>
                    <th>DESKTOP</th>
                    <th>MOBILE</th>
                    <th>TÍTULO</th>
                    <th>OBSERVAÇÃO</th>
                    <th>TEXTO</th>
                    <th>LINK</th>
                    <th>DATA ACTUALIZAÇÃO</th>
                    <th>ACÇÕES</th>
                </tr>

                <?php foreach($carousel as $c): ?>
                    <tr>
                        <td><img src="<?= $c["imagem_desktop"]; ?>" style="width: 200px"></td>
                        <td><img src="<?= $c["imagem_mobile"]; ?>" style="width: 100px"></td>
                        <td><?= $c["titulo"]; ?></td>
                        <td><?= $c["observacao"]; ?></td>
                        <td><?= $c["texto"]; ?></td>
                        <td><?= $c["saber_mais"]; ?></td>
                        <td><?= $_SESSION["nome"]; ?> (<?= $_SESSION["data_ultimo_acesso"]; ?>)</td>
                        
                        <td>
                            <form action="carousel_saida.php">
                                <input type="hidden" name="accao" value="editar">
                                <button name="id" value="<?= $c["id"];?>">Editar</button>
                            </form>
                            
                            <br>

                            <form action="">
                                <input type="hidden" name="accao" value="apagar">
                                <button name="id" value="<?= $c["id"];?>">Apagar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <form action="carousel_novo.php">
                <input type="hidden" name="accao" value="novo">
                <button name="id" value="<?= $c["id"];?>" style="width: 100px">Novo</button>
            </form>
        </div>

    <?php endif; ?>

    <br><br>     
</main>