
const btnDarkMode= document.getElementById('btn_dark_mode');
const body= document.getElementById('body');
btnDarkMode.addEventListener('change', ()=>{
    body.classList.toggle('dark');
});