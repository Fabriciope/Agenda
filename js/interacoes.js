
const btnDarkMode= document.getElementById('btn_dark_mode');
const body= document.getElementById('body');
btnDarkMode.addEventListener('change', ()=>{
    body.classList.toggle('dark');
});

const addContato= document.getElementById('btn_add_contato');
const sectionAddContato= document.getElementById('add_contato');
addContato.addEventListener('click', ()=>{
    sectionAddContato.classList.add('active');
});

const btnVoltar= document.getElementById('voltar');
btnVoltar.addEventListener('click', ()=>{
    sectionAddContato.classList.remove('active');
});


function filtrar(telefone){
    if(telefone.value.length == 0){
        telefone.value= '(';
    }
    if(telefone.value.length == 3){
        telefone.value= telefone.value + ')';
    }
    if(telefone.value.length == 9){
        telefone.value= telefone.value + '-';
    }
}