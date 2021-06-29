let app = document.getElementById('app');

let typewriter = new Typewriter(app, {
    loop: true
});
console.log(app);

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
  .typeString('Oubliez la dernière phrase...')
  .pauseFor(0)
  .deleteAll()
  .typeString('<del>sosie de The Rock</del>')
  .pauseFor(0)
  .deleteAll()
  .start();

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
        }else{
        menu.style.display = 'none';
        counter = 'closed';
        console.log(counter);
        }
}

/* let app = document.getElementById('app');
var i = 0;
var txt = 'développeur web';
var txt2 = 'web designer';
var txt3 = 'futur papa';
var txt4 = 'marathonien';
var txt5 = 'sosie de The Rock';
var txt6 = '<del>sosie de The Rock</del>';
var speed = 50;

typeWriter();

function typeWriter() {
  if (i < 28) {
    app.innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
    app.innerHTML ='';
    app.innerHTML -= txt.charAt(i);
  }
} */

/* const carouselText = [
  {text: "développeur web"},
  {text: "web designer"},
  {text: "futur papa"},
  {text: "marathonien"},
  {text: "sosie de The Rock"},
  {text: "<del>sosie de The Rock</del>"}
]

$( document ).ready(async function() {
  carousel(carouselText, "#feature-text")
});

async function typeSentence(sentence, eleRef, delay = 50) {
  const letters = sentence.split("");
  let i = 0;
  while(i < letters.length) {
    await waitForMs(delay);
    $(eleRef).append(letters[i]);
    i++
  }
  return;
}

async function deleteSentence(eleRef) {
  const sentence = $(eleRef).html();
  const letters = sentence.split("");
  let i = 0;
  while(letters.length > 0) {
    await waitForMs(100);
    letters.pop();
    $(eleRef).html(letters.join(""));
  }
}

async function carousel(carouselList, eleRef) {
    var i = 0;
    while(true) {
      await typeSentence(carouselList[i].text, eleRef);
      await waitForMs(500);
      await deleteSentence(eleRef);
      await waitForMs(200);
      i++
      if(i >= carouselList.length) {i = 0;}
    }
}


function waitForMs(ms) {
  return new Promise(resolve => setTimeout(resolve, ms))
} */

