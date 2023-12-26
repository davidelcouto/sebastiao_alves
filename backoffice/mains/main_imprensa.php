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
            $imagem = $_GET["imagem"];
            $texto = $_GET["texto"];
            $data_pub = $_GET["data_pub"];
            iduSQL("INSERT INTO imprensa (titulo,imagem, texto, data_pub) VALUES ('$titulo','$imagem', '$texto', '$data_pub')");
            break;
        case "apagar":
            $id = $_GET["id"];
            iduSQL("DELETE FROM imprensa WHERE id=$id");
            break;
        case "editar":
            $id = $_GET["id"];
            $titulo = $_GET["titulo"];
            $imagem = $_GET["imagem"];
            $texto = $_GET["texto"];
            $data_pub = $_GET["data_pub"];
            iduSQL("UPDATE imprensa SET titulo = '$titulo', imagem= '$imagem', texto = '$texto', data_pub = '$data_pub' WHERE id = $id");
            break;
    }
}

$imprensa = selectSQL("SELECT * FROM imprensa");

?>

<main>
    <?php if ($form):?>
    
            <div class="row caixas">
                <div class="col-12 titulo_2 p-4">
                    <i>EDITADO/APAGADO/INSERIDO COM SUCESSO!</i>
                    
                    <br><br>

                    <a href="imprensa.php">
                        <button>VOLTAR</button>
                    </a>
                </div>
            </div>
            
        <br><br>
    
    <?php else: ?>
        <div class="row caixas">
            <h3 class="h3_dif_cor"><b>BACKOFFICE IMPRENSA</b></h3>
            
            <br><br><br><br>

            <table class="mx-auto w-100 pb-5 mb-5">
                <tr>
                    <th>IMAGEM</th>
                    <th>TITULO</th>
                    <th>TEXTO</th>
                    <th>DATA PUBLICAÇÃO</th>
                    <th>DATA ACTUALIZAÇÃO</th>
                    <th>ACÇÕES</th>
                </tr>

                <?php foreach($imprensa as $i): ?>

                    <tr>
                        <td><img src="<?= $i["imagem"]; ?>" style="width: 100px"></td>
                        <td><?= $i["titulo"]; ?></td>
                        <td><?= $i["texto"]; ?></td>
                        <td><?= $i["data_pub"]; ?></td>
                        <td><?= $_SESSION["nome"]; ?> (<?= $_SESSION["data_ultimo_acesso"]; ?>)</td>
                        
                        <td>
                            <form action="imprensa_saida.php">
                                <input type="hidden" name="accao" value="editar">
                                <button name="id" value="<?= $i["id"];?>">Editar</button>
                            </form>
                            
                            <br>

                            <form action="">
                                <input type="hidden" name="accao" value="apagar">
                                <button name="id" value="<?= $i["id"];?>">Apagar</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </table>

            <form action="imprensa_novo.php">
                <input type="hidden" name="accao" value="novo">
                <button name="id" value="<?= $i["id"];?>" style="width: 100px">Novo</button>
            </form>
        </div>

    <?php endif; ?>

    <br><br> 
</main>