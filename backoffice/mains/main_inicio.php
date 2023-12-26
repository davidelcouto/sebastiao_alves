<?php

require_once("php/funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

?>

<main>
            <div class="row caixas"> 
                <div class="col-12 titulo_2 p-4">
                    <button>
                        <a href="http://localhost/sebastiao_alves/index.php">Ir para o site</a>
                    </button>

                    <br><br>

                    Bem-vindo <?= $_SESSION["nome"]; ?>.
                    
                    <br>

                    Data do último acesso: (<?= $_SESSION["data_ultimo_acesso"]; ?>)
                </div>
            </div>
        </main>