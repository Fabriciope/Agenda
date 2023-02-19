<?php
include_once "helpers/recuperarRegistros.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d5c56409b7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <script src="js/ajax.js"></script>
    <title>Minha Agenda</title>
</head>
<body id="body">
    <header>
        <div class="center">
            <h1><img src="img/logo-agenda.png" alt="logo-agenda"></h1>
          <button id="btn_add_contato">Adicionar contato</button>
            <div class="container_btn_ME">
                <label>
                    <span class="text">Tema escuro</span>
                    <div class="box_btn_ME">
                        <input type="checkbox" id="btn_dark_mode">
                        <span class="btn_ME"></span>
                    </div>
                </label>
            </div>
        </div>
    </header>

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
                    foreach($registros as $registro){
                        extract($registro);?>

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

    <section id="add_contato">
        <div class="box_center">
            <button id="voltar">Voltar</button>
            <form id="form" onsubmit="return false">
                <h3>Adicionar Contato</h3>
                <div>
                    <label for="">Nome do contato:</label>
                    <input id="nome" type="text" placeholder="Ex: João">
                </div>
                <div>
                    <label for="">Telefone do contato:</label>
                    <input id="telefone" type="tel" maxlength="14" onkeypress="filtrar(this)" pattern="\([0-9]{2}\)[9][0-9]{4}-[0-9]{4}" placeholder="Ex: (11)9XXXX-XXXX">
                </div>
                <div>
                    <label for="">Observações:</label>
                    <textarea id="observacao"  rows="8" placeholder="Descreva alguma observação sobre este contato: (opcional)"></textarea>
                </div>
                <button class="cadastrar" onclick="cadastrarPessoa()">Cadastrar</button>
            </form>
        </div>
    </section>
    <script src="js/interacoes.js"></script>
</body>
</html>

