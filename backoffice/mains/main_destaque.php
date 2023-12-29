<?php

require_once("php/funcoes/funcoes.php");
require_once("php/funcoes/helper.php");

$form = isset($_GET["destaque_1"]) && isset($_GET["destaque_2"]) && isset($_GET["destaque_3"]);

if($form){
    $destaque_1 = $_GET["destaque_1"];
    $destaque_2 = $_GET["destaque_2"];
    $destaque_3 = $_GET["destaque_3"];
    
    iduSQL("UPDATE home SET destaque_1 ='$destaque_1', destaque_2='$destaque_2', destaque_3='$destaque_3'"); 
}

$destaques = selectSQLUnico("SELECT destaque_1, destaque_2, destaque_3 FROM home");

$home = selectSQLUnico("SELECT * FROM home");

$livros = [];

if($home["destaque_1"] != 0){
    $livros[] = getLivroID($home["destaque_1"]);
}

if($home["destaque_2"] != 0){
    $livros[] = getLivroID($home["destaque_2"]);
}

if($home["destaque_3"] != 0){
    $livros[] = getLivroID($home["destaque_3"]);
}

?>
        
<main class="foco">
    <?php if ($form):?>
    
        <div class="row caixas">
            <div class="col-12 bv_titulo p-4">
                EDITADO COM SUCESSO!
                <br><br>
                <a href="destaque.php">
                    <button>VOLTAR</button>
                </a>
            </div>
        </div>
            
        <br><br>
    
    <?php else: ?>
        <div class="row caixas">
                <h3 class="h3_dif_cor"><b>DESTAQUES (MAX. 3)</b></h3>
                <br><br>
                <br><br>
                <table class="mx-auto w-100 pb-5 mb-5">
                    <tr>
                        <th>IMAGEM</th>
                        <th>TITULO</th>
                        <th>OBSERVAÇÃO</th>
                        <th>DATA ACTUALIZAÇÃO</th>
                        <th>ACÇÕES</th>
                    </tr>
                    
                    <?php foreach($livros as $l): ?>
                        <tr>
                            <td><img src="<?= $l["imagem"]; ?>" style="width: 100px"></td>
                            <td><?= $l["titulo"]; ?></td>
                            <td><?= $l["observacao"]; ?></td>
                            <td><?= $_SESSION["nome"]; ?> (<?= $_SESSION["data_ultimo_acesso"]; ?>)</td>
                            <td>
                                <form action="destaque_saida.php">
                                    <button name="id" value="<?= $l;?>">EDITAR/ACRESCENTAR/REMOVER</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
        </div>

    <?php endif; ?>

    <br><br>
</main>