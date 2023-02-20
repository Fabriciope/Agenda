<?php
 include_once "header.php";
 session_start();
//  echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
?>
<section id="add_contato">
        <div class="box_center">
            <?php if(isset($_SESSION['msg']) && $_SESSION['msg'] == 'erro'){ ?>
                        <p class="erro">*Preencha todos os campos corretamente</p>
            <?php session_destroy(); }else if(isset($_SESSION['msg']) && $_SESSION['msg'] == 'sucesso'){ ?>
                <p class="sucesso">Cadastro realizado com sucesso</p>
                <?php  session_destroy();} ?> 
            <a class="voltar" href="index.php">Voltar</a>
            <form action="helpers/registrarContato.php" method="post">
                <h3>Adicionar Contato</h3>
                <div>
                    <label for="">Nome do contato:</label>
                    <input name="nome" type="text" placeholder="Ex: João">
                </div>
                <div>
                    <label for="">Telefone do contato:</label>
                    <input name="telefone" type="tel" maxlength="14" placeholder="Ex: (11)9XXXX-XXXX">
                </div>
                <div>
                    <label for="">Observações:</label>
                    <textarea name="observacao"  rows="8" placeholder="Descreva alguma observação sobre este contato: (opcional)"></textarea>
                </div>
                <button class="cadastrar">Cadastrar</button>
            </form>
        </div>
    </section>
</body>
</html>