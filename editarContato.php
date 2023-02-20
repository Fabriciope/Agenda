<?php
include_once "header.php";
include_once "helpers/recuperarContatos.php";
extract($contatoAtualizar);
session_start();
$_SESSION['id']= $id;

?>

<section id="add_contato">
        <div class="box_center">
            <a class="voltar" href="index.php">Voltar</a>
            <form action="helpers/atualizarContato.php" method="post">
                <h3>Editar Contato</h3>
                <div>
                    <label for="">Nome do contato:</label>
                    <input name="nome" type="text" placeholder="Ex: João" value="<?=$nome?>">
                </div>
                <div>
                    <label for="">Telefone do contato:</label>
                    <input name="telefone" type="tel" minlength="9" maxlength="11" placeholder="Ex: 119XXXXXXXX" value="<?=$telefone?>">
                </div>
                <div>
                    <label for="">Observações:</label>
                    <textarea name="observacao"  rows="8" placeholder="Descreva alguma observação sobre este contato: (opcional)"><?=$observacao?></textarea>
                </div>
                <button type="submit" class="cadastrar" value="fffff">Atualizar</button>
            </form>
        </div>
    </section>
</html>
</body>