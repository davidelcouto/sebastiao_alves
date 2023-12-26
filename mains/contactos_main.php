<main class="container-fluid px-0 foco" id="main">
            <div class="row caixaautor2">
                <div class="col-10 textocaixa ms-5">
                    <div class="row">
                        <div class="col novidade">contactos</div>                        
                    </div>
                    <div class="row">
                        <div class="col t1 pb-3">pode contactar-me atraves do e-mail ou telefone</div>                       
                    </div>
                </div>
            </div>

            <div class="row mx-0 d-flex justify-content-center text-center mt-5 d-md-block d-none">
                <div class="col-12 contactos">
                    <div class="row mt-5 d-flex justify-content-center text-center">
                        <div class="col-3 contato_titulo2">Telefone</div>
                        <div class="col-2 ms-5 contato_titulo2">morada</div>
                        <div class="col-3 ms-5 contato_titulo2">e-mail</div>
                    </div>
                    <div class="row mt-1 d-flex justify-content-center text-center">
                        <div class="col-3 contato_conteudo"><?= getContactos()["telefone"] ?></div>
                        <div class="col-3 contato_conteudo"><?= getContactos()["morada"] ?></div>
                        <div class="col-3 contato_conteudo"><?= getContactos()["mail"] ?></div>
                    </div>                       
                </div>

                <div class="row d-flex justify-content-center text-center">
                    <div class="col-1 linha4 mt-5 mb-2 ms-3 d-flex"></div>
                </div>

                <div class="row d-flex justify-content-center text-center">
                    <div class="col-12">
                        <div class="row mt-5 d-flex justify-content-center text-center">
                            <div class="col-3 ms-2 contato_titulo2">Horário</div>
                        </div>
                        <div class="row mt-1 d-flex justify-content-center text-center mb-5">
                            <div class="col-3 ms-2 contato_conteudo"><?= getContactos()["horario"] ?></div>
                        </div>                       
                    </div>
                </div>
            </div>

            <!--MOBILE-->

            <div class="row d-block d-md-none mt-5 mx-auto">
                <div class="row d-flex justify-content-center text-center mt-5">
                    <div class="row mt-3 d-flex justify-content-center text-center">
                        <div class="col-8 contato_titulo2">telefone</div>
                        <div class="col-8 mt-1 contato_conteudo"><?= getContactos()["telefone"] ?></div>
                        <div class="col-8 mt-4 contato_titulo2 pt-4">morada</div>
                        <div class="col-8 mt-1 contato_conteudo"><?= getContactos()["morada"] ?></div>
                        <div class="col-8 mt-4 contato_titulo2 pt-4">e-mail</div>
                        <div class="col-8 mt-1 contato_conteudo"><?= getContactos()["mail"] ?></div>
                    </div>

                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-1 traco3 mt-5 mb-2 mx-5 d-flex"></div>
                    </div>
    
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-12">
                            <div class="row mt-5 d-flex justify-content-center text-center">
                                <div class="col-3 ms-2 contato_titulo2">Horário</div>
                            </div>
                            <div class="row mt-1 d-flex justify-content-center text-center mb-5">
                                <div class="col-8 ms-2 contato_conteudo mb-4"><?= getContactos()["horario"] ?></div>
                            </div>                       
                        </div>
                    </div> 
                </div>
            </div>
       </main>  