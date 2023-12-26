<main class="container-fluid px-0 foco" id="main">
            <div class="row caixaautor2">
                <div class="col-7 textocaixa ms-5">
                    <div class="row">
                        <div class="col novidade">Livros</div>                        
                    </div>
                    <div class="row">
                        <div class="col t1"><?= getLivroID($_GET["livro"])["titulo"]; ?></div>                        
                    </div>
                </div>
            </div>

            <div class="row sobre livro d-flex mx-auto">
                <div class="col-12 pt-5 ms-lg-5 ps-lg-5">
                    <div class="row">
                        <div class="col-4 img-conteudo">
                            <img src="<?= getLivroID($_GET["livro"])["imagem"]; ?>" alt="livro-conteudo">
                        </div>
                        <div class="col-7 p mx-auto mx-lg-0 texto_livro">
                        <?= getLivroID($_GET["livro"])["texto"]; ?>
                        </div>                    
                    </div>
                </div>
                <div class="col-11 text-end d-md-block d-none mt-4">
                <button class="voltar" onclick="history.back()"></button>
                </div>
            </div>
           
        </main>