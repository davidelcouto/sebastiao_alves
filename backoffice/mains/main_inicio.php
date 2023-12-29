<main>
    <div class="row caixas"> 
        <div class="col-12 titulo_2 p-4">

            Bem-vindo <?= $_SESSION["nome"]; ?>.
            
            <br><br>

            Data do último acesso: (<?= $_SESSION["data_ultimo_acesso"]; ?>)

            <br><br>

            <button>
                <a href="../index.php">Ir para o site</a>
            </button>
        </div>
    </div>
</main>