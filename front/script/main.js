// MENU HAMBURGER

const btn = document.getElementById('hamb_menu_btn');
const menu = document.getElementById('menumobile');
let cross1 = document.getElementById('barre1');
let cross2 = document.getElementById('barre2');
let cross3 = document.getElementById('barre3');
let counter = 'closed';


btn.addEventListener('click',unroll);

function unroll(){
    if (counter == 'closed') {
        menu.style.display = 'flex';
        counter = 'open';
        console.log(counter);
        }else{
        menu.style.display = 'none';
        counter = 'closed';
        console.log(counter);
/*         cross1.style.left = '0';
        cross1.style.top = '0';
        cross1.classList.toggle("nico");
        cross1.style.transform = 'rotate(0deg)'; */

/*         cross3.style.transform = 'rotate(0deg)';
        cross3.style.width = '60px';
        cross3.style.bottom = '0'; */
    }
}

/* window.addEventListener('resize', function(){

}); */

/* if(screen.width <=800){
    menu.style.display = 'block'; 
} */

