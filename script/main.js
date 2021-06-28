/* const app = document.getElementById('app');

let typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('développeur web')
  .pauseFor(0)
  .deleteAll()
  .typeString('web designer')
  .pauseFor(0)
  .deleteAll()
  .typeString('futur papa')
  .pauseFor(0)
  .deleteAll()
  .typeString('marathonien')
  .pauseFor(0)
  .deleteAll()
  .typeString('sosie de The Rock')
  .pauseFor(0)
  .deleteAll()
  .typeString('<del>sosie de The Rock</del>')
  .pauseFor(0)
  .start(); */

/*   import Typewriter from 'typewriter-effect/dist/core';

new Typewriter('#typewriter', {
  strings: ['Hello', 'World'],
  autoStart: true,
}); */

let btn = document.getElementById('hamb_menu_btn');
let menu_mobile = document.getElementById('menu');

let counter = 'closed';

btn.addEventListener('click',unroll);

function unroll(){
    if (counter == 'closed') {
        menu_mobile.style.display = 'flex';
        counter = 'open';
        console.log(counter);
        }
        else{
        menu.style.display = 'none';
        counter = 'closed';
        console.log(counter);
}
}