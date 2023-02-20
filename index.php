<?php
include_once "helpers/recuperarContatos.php";
include_once "header.php";
?>
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
                           <a class="ver" href="#<?=$id?>"><i class="fas fa-eye"></i></a>
                        </td>
                        <td>
                           <a class="editar" href="#<?=$id?>"><i class="fas fa-edit"></i></a>
                        </td>
                        <td>
                           <a class="excluir" href="#<?=$id?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
    </section>  
    <script src="js/interacoes.js"></script>
</body>
</html>

