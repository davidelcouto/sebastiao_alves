<?php

$publi = SelectSQL("SELECT * FROM imprensa ORDER BY id DESC");

$imprensa = getImprensa();

$elementos_por_pagina = 2;
$numero_pagina = 1;

if(isset($_GET["numero_pagina"])){
    $numero_pagina = intval($_GET["numero_pagina"]);
}

if(isset($_GET["elementos_por_pagina"])){
    $elementos_por_pagina = intval($_GET["elementos_por_pagina"]);
}

$numero_total_paginas = ceil(count($publi) / $elementos_por_pagina);
$pagina_atual = array_slice($publi, ($numero_pagina-1)*$elementos_por_pagina, $elementos_por_pagina);

?>

<main class="px-0 mx-0 container-fluid foco">
            <div class="row caixaautor2">
                <div class="col-10 textocaixa ms-5">
                    <div class="row">
                        <div class="col novidade">imprensa</div>
                    </div>
                    <div class="row">
                        <div class="col t1">últimas notícias</div>
                    </div>
                </div>
            </div>

            <?php foreach($pagina_atual as $p): ?>
            <div class="row m-0 imprensa-caixa d-flex mt-3 justify-content-center">
                <div class="col-10 m-0 p-0">
                    <div class="row m-0 p-0 pb-2 t1">
                        <?= $p["titulo"]; ?>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-12 linha3 d-flex"></div>
                    </div>
                    <div class="row m-4 p-0 d-flex mt-3 justify-content-end imprensa">
                        <?= $p["data_pub"]; ?>
                    </div>
                    <div class="row m-0 p-0 pt-1">
                        <img class=" imprensa-img" src="<?= $p["imagem"]; ?>" alt="">
                    </div>
                    <div class="row m-0 p-0 d-flex flex-row justify-content-end">
                        <div class="col-12 p m-0  pt-4">
                            <?= $p["texto"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <br><br>

            <div class="col-12 d-flex justify-content-center">
                <form action="">   
                    <button class="voltar-pagina" type="submit" name="numero_pagina" value="<?= $numero_pagina-1 ?>" <?= ($numero_pagina == 1) ? "disabled" : ""; ?>></button>

                    <?php 

                    $start = $numero_pagina - 2;
                    $end = $start + 5;

                    ?>

                    <?php if($start > 1): ?>
                        <span>...</span>
                    <?php endif; ?>

                    <?php for($i=$start; $i<$end; $i++): ?>

                        <?php if($i >= 1 && $i <= $numero_total_paginas): ?>
                            <input type="submit" class="<?= ($numero_pagina == $i) ? "active" : ""; ?>" name="numero_pagina" value="<?= $i ?>">
                        <?php endif; ?>

                    <?php endfor; ?>

                    <?php if($end <= $numero_total_paginas): ?>
                        <span>...</span>
                    <?php endif; ?>
                    
                    <button class="avancar-pagina" type="submit" name="numero_pagina" value="<?= $numero_pagina+1 ?>" <?= ($numero_pagina == $numero_total_paginas) ? "disabled" : ""; ?>></button>
                </form>
            </div>

        </main>