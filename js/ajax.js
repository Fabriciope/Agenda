
function cadastrarPessoa(){
    let nome= document.getElementById('nome').value == '' ? '' : document.getElementById('nome').value;
    let telefone= document.getElementById('telefone').value == '' ? '' : document.getElementById('telefone').value;
    let observacao= document.getElementById('observacao').value == '' ? '' : document.getElementById('observacao').value;

    let formData=new FormData;

    formData.append("nome", nome);
    formData.append("telefone", telefone);
    formData.append("observacao", observacao);

    let xmlHTTP= new XMLHttpRequest;

    xmlHTTP.open('POST', "http://localhost/Projeto_Agenda/helpers/cadastrarPessoa.php", true);

    let btnCadastrar= document.querySelector('.cadastrar');
    let boxCenter= document.querySelector('.box_center');

    btnCadastrar.innerHTML= 'carregando . . .';
    xmlHTTP.onreadystatechange= function(){
        if(xmlHTTP.readyState === 4 && xmlHTTP.status === 200){
            if(xmlHTTP.responseText == 'erroCadastro'){

                if(boxCenter.querySelector('.sucesso') != null){

                    let filhoRemovido= document.querySelector('.sucesso');
                    boxCenter.removeChild(filhoRemovido);
                }

                let p= document.createElement('p');

                boxCenter.appendChild(p);
                p.classList= 'erro';
                p.innerHTML= '*Preencha os campos corretamente!';
                btnCadastrar.innerHTML= 'cadastrar';

            }else if(xmlHTTP.responseText == 'registradoComSucesso'){

                if(boxCenter.querySelector('.erro') != null){
                    let filhoRemovido= document.querySelector('.erro');
                    boxCenter.removeChild(filhoRemovido);
                }

                let p= document.createElement('p');

                boxCenter.appendChild(p);
                p.classList= 'sucesso';
                p.innerHTML= 'Cadastrado com sucesso!';
                btnCadastrar.innerHTML= 'cadastrar';

                document.getElementById('nome').value= '';
                document.getElementById('telefone').value= '';
                document.getElementById('observacao').value= '';
            }else{
                console.log(xmlHTTP.responseText);
            }
            console.log(xmlHTTP.responseText);
        }
    }
    xmlHTTP.send(formData);
}