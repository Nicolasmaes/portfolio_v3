//menu hamburger
let btn = document.getElementById('hamb_menu_btn');
let menu_mobile = document.getElementById('menu');

let counter = 'closed';

btn.addEventListener('click',unroll);

function unroll(){
    if (counter == 'closed') {
        menu_mobile.style.display = 'flex';
        counter = 'open';
        console.log(counter);
        }else{
        menu.style.display = 'none';
        counter = 'closed';
        console.log(counter);
        }
}