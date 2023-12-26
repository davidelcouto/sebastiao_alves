<?php

$livros = [];

if(getHome()["destaque_1"] != 0){
    $livros[] = getLivroID(getHome()["destaque_1"]);
}

if(getHome()["destaque_2"] != 0){
    $livros[] = getLivroID(getHome()["destaque_2"]);
}

if(getHome()["destaque_3"] != 0){
    $livros[] = getLivroID(getHome()["destaque_3"]);
}

$select = getTodosLivros();

?>

<main class="container-fluid px-0">
            <div class="row caixaautor">
                <div class="col-12">
                    <div class="col-11 pt-md-0 img-autor">
                        <img src="<?= getHome()["imagem_autor"]; ?>" alt="foto_editada">
                    </div>
                    <div class="col-11 bemvindo">
                        <div class="row">
                            <div class="col-12 t1"><?= getHome()["titulo"]; ?></div>
                            <div class="row">
                                <div class="col-12 p bemvindo-desc text-justify">
                                    <?= getAutor()["texto_grande"]; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="autor.php">
                                        <button class="saber_mais bemvindo-sm"></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row titulo-destaques">
                <div class="col-12 p-0 t1">últimos livros</div>
                <div class="col-12 mt-3 p-0 p">
                    <?= getHome()["ultimos_livros"]; ?>
                </div>
            </div>

            <div class="row destaques-cards mt-5 d-flex justify-content-center gap-4">
                <?php foreach($livros as $l): ?>
                    <div class="col-md-12 col-lg-12 col-xs-12 destaque-card p-0">
                        <div class="row p-0">
                            <div class="col-12">
                                <img class="img-dest" src="<?= $l["imagem"]; ?>" alt="livro1">
                            </div>
                        </div>
                        <div class="col p-0 dest-titulo mt-3 mx-4"><?= $l["titulo"]; ?></div>
                        <div class="col novidade mx-4 mt-2"><?= $l["observacao"]; ?></div>
                        <div class="col p mx-4 p-1">
                            <?= substr($l["texto"], 0, 170); ?>...
                        </div>
                        <div class="col">
                            <form action="livro.php">
                                <button name="livro" value="<?= $l["id"]; ?>" class="saber_mais destaque-sm me-4 mt-2"></button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <br><br>