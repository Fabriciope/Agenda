<?php
 include_once "header.php";
 session_start();
//  echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
$nomeErro= isset($_SESSION['nomeErro']) ? $_SESSION['nomeErro'] : '';
$telefoneErro= isset($_SESSION['telefoneErro']) ? $_SESSION['telefoneErro'] : '';
$observacaoErro= isset($_SESSION['observacaoErro']) ? $_SESSION['observacaoErro'] : '';

?>
<section id="add_contato">
        <div class="box_center">
            <?php if(isset($_SESSION['msg']) && $_SESSION['msg'] == 'erro'){ ?>

                        <p class="erro">*Preencha todos os campos corretamente</p>

            <?php unset($_SESSION['msg']); }else if(isset($_SESSION['msg']) && $_SESSION['msg'] == 'sucesso'){ ?>

                <p class="sucesso">Cadastro realizado com sucesso</p>

                <?php  unset($_SESSION['msg']);} ?> 
            <a class="voltar" href="index.php">Voltar</a>
            <form action="helpers/registrarContato.php" method="post">
                <h3>Adicionar Contato</h3>
                <div>
                    <label for="">Nome do contato:</label>
                    <input name="nome" type="text" placeholder="Ex: João" value="<?=$nomeErro?>">
                </div>
                <div>
                    <label for="">Telefone do contato:</label>
                    <input name="telefone" type="tel" minlength="9" maxlength="11" placeholder="Ex: 119XXXXXXXX" value="<?=$telefoneErro?>">
                </div>
                <div>
                    <label for="">Observações:</label>
                    <textarea name="observacao"  rows="8" placeholder="Descreva alguma observação sobre este contato: (opcional)"><?=$observacaoErro?></textarea>
                </div>
                <button type="submit" class="cadastrar">Cadastrar</button>
            </form>
        </div>
    </section>
</body>
</html>