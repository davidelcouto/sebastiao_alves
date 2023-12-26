<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Escola CodeMaster">
        <meta name="keywords" content="HTML, CSS, JAVASCRIPT, PHP">

        <title>Sebastião Alves</title>
        
        <!-- CSS do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">        
        
        <!--JQUERY--> 
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

        <!--CSS LOCAL--> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/formatacao.css">
        <script src="javascript/funcoes.js"></script>
    </head>

    <body>
        <header class="container-fluid px-0 foco">
            <div class="row inicio" id="menu-home">
                <div class="col mx-auto d-none d-md-block">
                    <div class="col-12 d-flex justify-content-between titulo justify-content-md-center mt-5">sebastião alves</div>
                    <div class="col linha"></div>
                    
                    <nav class="col-12 navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "home") ? "selected" : ""; ?>" aria-current="page" href="index.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "autor") ? "selected" : ""; ?>" aria-current="page" href="autor.php">autor</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="menu-dropdown" class="nav-link dropdown-toggle menu <?= ($pagina_atual == "livro") ? "selected" : ""; ?>"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    livros
                                </a>
                                <ul class="dropdown-menu">
                                    <form action="livro.php">
                                        <?php foreach(getTodosLivros() as $l): ?>
                                            <li>
                                                <button name="livro" value="<?= $l["id"]; ?>" class="dropdown-item submenu mt-3"><?= $l["titulo"]; ?></button>
                                            </li>
                                        <?php endforeach; ?>
                                    </form>
                                </ul> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "imprensa") ? "selected" : ""; ?>" aria-current="page" href="imprensa.php">imprensa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu <?= ($pagina_atual == "contactos") ? "selected" : ""; ?>" aria-current="page" href="contactos.php">contactos</a>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>    
            </div>
            
            <div id="cabecalho" class="carousel slide d-none d-md-block px-0" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for($i=0; $i<count(getTodosCarousel()); $i++): ?>
                        <li data-bs-target="#cabecalho" data-bs-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? "active" : ""; ?>" aria-current="true"></li>
                    <?php endfor; ?>
                </ol>

                <div class="carousel-inner">
                    <?php for($i=0; $i<count(getTodosCarousel()); $i++): ?>
                        <?php $c = getTodosCarousel()[$i]; ?>
                        <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                            <img src="<?= $c["imagem_desktop"]; ?>" class="cabecalho-img d-block w-100" alt="cabecalho1">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="novidade"><?= $c["observacao"]; ?></div>
                                <div class="col-5 mt-2 titulo_cabecalho"><?= $c["titulo"]; ?></div>
                                <div class="col-7 mt-2 texto_cabecalho"><?= substr($c["texto"], 0, 250); ?>...</div>
                                <div class="btn-text-left mt-4">
                                    <a href="<?= $c["saber_mais"]; ?>">
                                        <button class="saber_mais">saber mais</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <!--MOBILE-->

            <div class="row inicio">
                <div class="col-12 mx-auto d-block d-md-none">
                    <div class="col-9 titulo mx-auto d-flex justify-content-between mt-5">sebastião alves</div>
                    <div class="col-10 mx-auto linha"></div>
                    <nav class="col-12 navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link menu <?= ($pagina_atual == "home") ? "selected" : ""; ?>" aria-current="page" href="index.php">home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu <?= ($pagina_atual == "autor") ? "selected" : ""; ?>" aria-current="page" href="autor.php">autor</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="menu-dropdown" class="nav-link dropdown-toggle menu <?= ($pagina_atual == "livro") ? "selected" : ""; ?>"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        livros
                                    </a>
                                    <ul class="dropdown-menu">
                                        <form action="livro.php">
                                            <?php foreach(getTodosLivros() as $l): ?>
                                                <li>
                                                    <button name="livro" value="<?= $l["id"]; ?>" class="dropdown-item submenu mt-3"><?= $l["titulo"]; ?></button>
                                                </li>
                                            <?php endforeach; ?>
                                        </form>
                                    </ul> 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu <?= ($pagina_atual == "imprensa") ? "selected" : ""; ?>" aria-current="page" href="imprensa.php">imprensa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu <?= ($pagina_atual == "contactos") ? "selected" : ""; ?>" aria-current="page" href="contactos.php">contactos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>    
            </div>
            
            <div id="cabecalho2" class="carousel slide d-block d-md-none px-0" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for($i=0; $i<count(getTodosCarousel()); $i++): ?>
                        <li data-bs-target="#cabecalho2" data-bs-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? "active" : ""; ?>" aria-current="true"></li>
                    <?php endfor; ?>
                  </ol>
                <div class="carousel-inner">
                    <?php for($i=0; $i<count(getTodosCarousel()); $i++): ?>
                        <?php $c = getTodosCarousel()[$i]; ?>        
                            <div class="carousel-item  <?= ($i==0) ? "active" : "" ;?>">
                                <img src="<?= $c["imagem_mobile"]; ?>" class="cabecalho-img d-block w-100" alt="cabecalho1">
                                <div class="carousel-caption d-block d-md-none">
                                    <div class="novidade"><?= $c["observacao"]; ?></div>
                                    <div class="col-12 mt-2 titulo_cabecalho"><?= $c["titulo"]; ?></div>
                                    <div class="col-12 mt-2 texto_cabecalho"><?= substr($c["texto"], 0, 200); ?>...</div>
                                    <div class="btn-text-left mt-5 pt-4">
                                        <a href="<?= $c["saber_mais"]; ?>">
                                            <button class="saber_mais">saber mais</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <?php endfor; ?>
                </div>               
            </div> 
        </header>