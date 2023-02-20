<?php
include_once "header.php";
include_once "helpers/recuperarContatos.php";
extract($contatoAtualizar);
?>

    <section class="ver_contato">
        <div class="center">
        <a class="voltar" href="index.php">Voltar</a>
            <h2><?=$nome?></h2>
            <div>
                <h3>Telefone: </h3>
                <p><?=$telefone?></p>
            </div>
            <div>
                <h3>Observações: </h3>
                <p><?=$observacao?></p>
            </div>
        </div>
    </section>
</html>
</body>