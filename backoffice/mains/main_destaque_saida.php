<?php

require_once("php/funcoes/funcoes.php");
require_once("php/funcoes/helper.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

$form = isset($_GET["destaque_1"]) && isset($_GET["destaque_2"]) && isset($_GET["destaque_3"]);

if($form){
    $destaque_1 = $_GET["destaque_1"];
    $destaque_2 = $_GET["destaque_2"];
    $destaque_3 = $_GET["destaque_3"];
}

$home = selectSQLUnico("SELECT * FROM home");

$select= getTodosLivros();

?>


        <main>
            <div class="row caixas">
                <div class="col-12 titulo_2 p-4">
                    <b>EDITAR DESTAQUES</b>
                    
                    <br><br>

                    <form action="destaque.php">
                        <label>Destaque 1:</label>
                        <select name="destaque_1">
                            <option value="0">---</option>
                            <?php foreach($select as $s): ?>
                                <option value="<?= $s["id"]; ?>" <?= ($home["destaque_1"]==$s["id"]) ? "selected" : ""; ?>><?= $s["titulo"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <br>

                        <label>Destaque 2:</label>
                        <select name="destaque_2">
                            <option value="0">---</option>
                            <?php foreach($select as $s): ?>
                                <option value="<?= $s["id"]; ?>" <?= ($home["destaque_2"]==$s["id"]) ? "selected" : ""; ?>><?= $s["titulo"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <br>

                        <label>Destaque 3:</label>
                        <select name="destaque_3">
                            <option value="0">---</option>
                            <?php foreach($select as $s): ?>
                                <option value="<?= $s["id"]; ?>" <?= ($home["destaque_3"]==$s["id"]) ? "selected" : ""; ?>><?= $s["titulo"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <br><br>

                        <input type="submit" value="EDITAR">
                    </form>
                </div>
            </div>
        </main>