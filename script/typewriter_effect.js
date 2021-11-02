//Typewriting effect
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
  .typeString('nouveau papa')
  .pauseFor(0)
  .deleteAll()
  .typeString('marathonien')
  .pauseFor(0)
  .deleteAll()
  .start();
