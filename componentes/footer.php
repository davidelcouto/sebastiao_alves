<footer class="px-3">
            <div class="row caixafim">
                <div class="col linha2 mt-5 mb-2 mx-5 f_menu"></div>
                <nav class="col-12 navbar navbar-expand-lg f_menu">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse  navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link menu-rodape <?= ($pagina_atual == "home") ? "selected" : ""; ?>" aria-current="page" href="index.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-rodape <?= ($pagina_atual == "autor") ? "selected" : ""; ?>" aria-current="page" href="autor.php">autor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-rodape <?= ($pagina_atual == "livro") ? "selected" : ""; ?>" href="#menu-dropdown" onclick="abrir()">livros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-rodape <?= ($pagina_atual == "imprensa") ? "selected" : ""; ?>" aria-current="page" href="imprensa.php">imprensa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-rodape <?= ($pagina_atual == "contactos") ? "selected" : ""; ?>" aria-current="page" href="contactos.php">contactos</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="col linha2 mt-2 mx-5"></div>
                <div class="row d-none d-md-block mb-5">
                    <div class="row caixa-redes">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 t1">contactos</div>
                                <div class="row mt-3">
                                    <div class="col-5 contacto_titulo">morada</div>
                                    <div class="col-4 contacto_titulo">telefone</div>
                                    <div class="col-2 contacto_titulo">e-mail</div>
                                </div>
                                <div class="row mt-1">
                                    <?php $c = getContactos(); ?>
                                    <div class="col-5 contacto_conteudo"><?= $c["morada"]; ?></div>
                                    <div class="col-4 contacto_conteudo"><?= $c["telefone"]; ?></div>
                                    <div class="col-3 contacto_conteudo"><?= $c["mail"]; ?></div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-6">
                            <div class="row">
                            <?php $rd = getRedes(); ?>
                                <div class="col-12 t1 text-center"><?= $rd["titulo"]; ?></div>
                                <div class="col-12 d-flex justify-content-center gap-4 mt-4">
                                    <div class="insta">
                                        <a href="<?= $rd["insta"]; ?>" target="_blank">
                                            <img src="<?= $rd["insta1"]; ?>" class="img-redes img-inst1" alt="instagram1">
                                            <img src="<?= $rd["insta2"]; ?>" class="img-redes img-inst2" alt="instagram2">
                                        </a>
                                    </div>
                                    <div class="face">
                                        <a href="<?= $rd["face"]; ?>" >
                                            <img src="<?= $rd["face1"]; ?>" class="img-redes img-face1" alt="facebook1">
                                            <img src="<?= $rd["face2"]; ?>" class="img-redes img-face2" alt="facebook2">
                                        </a>
                                    </div>
                                    <div class="lin">
                                        <a href="<?= $rd["linkd"]; ?>" >
                                            <img src="<?= $rd["linkd1"]; ?>" class="img-redes img-lin1" alt="instagram1">
                                            <img src="<?= $rd["linkd2"]; ?>" class="img-redes img-lin2" alt="instagram2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 legal">
                            <img src="imagens/desktop/livroreclamacoes.svg" class="livroreclamacoes" alt="livroreclamacoes">
                            <img src="imagens/desktop/ralc.svg" class="ralc" alt="ralc">
                        </div>
                        <div class="col-4 cookies">
                            <div class="row text-center">
                                <div class="col-12 p">Politica de Cookies.</div>
                                <div class="col-12 p">Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Mobile-->
   
            <div class="row d-block d-md-none mt-5 px-0">
                <div class="row d-flex justify-content-center text-center mt-5">
                    <div class="col-8 t1">contactos</div>
                    <div class="row mt-3 d-flex justify-content-center text-center">
                        <?php $c = getContactos(); ?>
                        <div class="col-8 contato_titulo2">morada</div>
                        <div class="col-8 mt-1 contato_conteudo"><?= $c["morada"];?></div>
                        <div class="col-8 mt-4 contato_titulo2">Telefone</div>
                        <div class="col-8 mt-1 contato_conteudo"><?= $c["telefone"];?></div>
                        <div class="col-8 mt-4 contato_titulo2">e-mail</div>
                        <div class="col-8 mt-1 contato_conteudo"><?= $c["mail"];?></div>
                    </div>                     
                </div>
            </div>
            
            <div class="row d-flex justify-content-center text-center d-block d-md-none mt-5">
                <?php $rd = getRedes(); ?>
                <div class="col-12 t1 mt-5"><?= $rd["titulo"];?></div>
                <div class="col-8 d-flex justify-content-center gap-4 mt-4">
                    <div class="insta">
                        <a href="<?= $rd["insta"];?>">
                            <img src="<?= $rd["insta1"];?>" class="img-redes img-inst1" alt="instagram1">
                            <img src="<?= $rd["insta2"];?>" class="img-redes img-inst2" alt="instagram2">
                        </a>
                    </div>
                    <div class="face">
                        <a href="<?= $rd["face"];?>">
                            <img src="<?= $rd["face1"];?>" class="img-redes img-face1"alt="facebook1">
                            <img src="<?= $rd["face2"];?>" class="img-redes img-face2"alt="facebook2">
                        </a>
                    </div>
                    <div class="lin">
                        <a href="<?= $rd["linkd"];?>">
                            <img src="<?= $rd["linkd1"];?>" class="img-redes img-lin1"alt="linkedin1">
                            <img src="<?= $rd["linkd2"];?>" class="img-redes img-lin2"alt="linkedin2">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-12 d-flex justify-content-center d-block d-md-none mt-5">
                <img src="imagens/desktop/livroreclamacoes.svg" class="livroreclamacoes" alt="livroreclamacoes">
                <img src="imagens/desktop/ralc.svg" class="ralc" alt="ralc">
            </div>
            <div class="col-12 d-flex justify-content-center d-block d-md-none mt-5">
                <div class="row text-center">
                    <div class="col-12 p">Politica de Cookies.</div>
                    <div class="col-12 p">Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.</div>
                </div>
            </div>
        </footer>
                
        <br><br><br>

        <!-- JS do Bootstrap -->
        <script src="javascript/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    </body>

</html>