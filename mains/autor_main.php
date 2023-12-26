<?php

$texto_g = getAutor()["texto_grande"];
$texto_p = substr($texto_g, 0, 2000);

?>

<main class="container-fluid foco px-0" id="main">
            <div class="row caixaautor2">
                <div class="col-10 textocaixa">
                    <div class="row">
                        <div class="col ms-5 novidade">Autor</div>                        
                    </div>
                    <div class="row">
                        <div class="col ms-5 t1">sobre mim</div>                        
                    </div>
                </div>
            </div>

            <div class="row mx-0">
                <div class="row d-flex flex-column m-0">
                    <div class="row d-flex align-items-center p-0 m-0">
                        <img class="p-0 img-autor2" src="<?= getAutor()["imagem"]; ?>">
                    </div>
                </div>

                <div class="row sobre d-md-none d-block mx-0" id="texto_pequeno">
                    <div class="col-12 text-left p pt-4 pautor">
                        <?= $texto_p . "..."; ?>
                    </div>
                </div>
                
                <div class="row sobre d-md-block d-sm-none  d-none mx-0" id="texto_grande">
                    <div class="col-12 text-left p pt-4 pautor">
                        <?= getAutor()["texto_grande"]; ?>
                    </div>
                </div>
            </div>

            <div class="col-10 mt-5 pt-4 text-lg-start">
          <button class="vermais d-inline d-lg-none d-md-none mb-3" id="vermais" onclick="verMais()"></button>
          <br class="d-block d-lg-none">
          <button class="voltar" onclick="history.back()"></button>  
        </div>
        </main>

        <br><br>
