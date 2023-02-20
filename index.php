<?php
include_once "helpers/recuperarContatos.php";
include_once "header.php";
session_start();
?>
    <?php if(isset($_SESSION['msg']) && $_SESSION['msg'] == 'sucesso'){ ?>

    <p class="sucesso_index">Cadastro Atualizado</p>

    <?php  unset($_SESSION['msg']); } ?>
    <section class="tabela">
            <table>
                <thead>
                    <tr>
                        <th class="">Nome</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($contatos as $contato){
                        extract($contato);?>
                        <tr>
                            <td>
                                <?=$nome?>
                            </td>
                            <td>
                                <?=$telefone?>
                            </td>
                            <td>
                            <a class="ver" href="verContato.php?id=<?=$id?>"><i class="fas fa-eye"></i></a>
                            </td>
                            <td>
                            <a class="editar" href="editarContato.php?id=<?=$id?>"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                            <a class="excluir" href="helpers/deletarContato.php?id=<?=$id?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                  <?php } ?>
                </tbody>
            </table>
    </section>
</body>
</html>


